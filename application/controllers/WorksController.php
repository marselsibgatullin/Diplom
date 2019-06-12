<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Pagination;
use application\core\View;

class WorksController extends Controller {

	public function deleteAction() {
		$a = $this->model->checkWorks($this->route['page']);
		if($a[0]['stud_id'] == $_SESSION['student']['id']){
			$this->model->workDelete($this->route['page']);
			$this->view->redirect('/works/list/1');
		}
		else
			View::errorCode(404);
	}

	public function listAction() {
		$pagination = new Pagination($this->route, $this->model->postsCount());
		$vars = [
			'pagination' => $pagination->get(),
			'list' => $this->model->postsList($this->route, $_SESSION['student']['id']),
		];
		$this->view->render('Список моих работ', $vars);
	}

	public function addAction() {
		if(!empty($_POST) && !empty($_FILES['uploadFile']['tmp_name'])){
			$id = $this->model->workAdd($_POST, $_SESSION['student']['id']);
			$this->model->fileUpload($_FILES['uploadFile']['tmp_name'], $_FILES['uploadFile']['name'], $id);
			$this->view->redirect('/works/list/1');
		}

		elseif(!empty($_POST)){
			$params['error'] = "Файл не выбран или неверный формат";
			$this->view->render('Добавление моей работы', $params);
			die();
		}
		$this->view->render('Добавление моей работы');
	}

	public function searchAction() {
		if(!empty($_POST)){
			$words = $_POST['key_words'];
			$words = [
				'words' => explode(", ", $words),
			];
			$a = 0;
			$lenght=count($words['words']);
			for($i = 0; $i < $lenght; $i++){
				if(!empty($this->model->postSearch($words['words'][$i])) && $i == $a){
					$word = $this->model->postSearch($words['words'][$i]);
					$vars = [
						'list' => $word,
					];
					$a++;
				}
			}
			$check = $i;
			if(!empty($vars))
				$lenght = count($vars['list']);
			for($i = 0; $i < $lenght; $i++){
				if(!empty($vars)){
					$b = $this->model->studSearch($vars['list'][$i]['stud_id']);
					array_push($vars['list'][$i], $b[0]['id']);
					array_push($vars['list'][$i], $b[0]['name']);
					array_push($vars['list'][$i], $b[0]['surname']);
				}
			}
			if ($check == $a && $a != 0)
			$this->view->render('Поиск', $vars);
			else
			$this->view->render('Поиск');
		}
		else
		$this->view->render('Поиск');
	}
}