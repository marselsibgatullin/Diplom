<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Pagination;
use application\core\View;

class PostsController extends Controller {

	public function indexAction() {
		$pagination = new Pagination($this->route, $this->model->postsCount());
		if(!empty($_SESSION['student']['speciality']))
			$vars = [
				'pagination' => $pagination->get(),
				'list' => $this->model->postsList($this->route,$_SESSION['student']['speciality']),
			];
		else
			$vars = [
				'pagination' => $pagination->get(),
				'list' => $this->model->postsempList($this->route),
			];
		$this->view->render('Вакансии', $vars);
	}

	public function editAction() {
		$this->model->postInfo($this->route['page']);
		if(!empty($_POST)) {
			$this->model->postEdit($_POST, $this->route['page']);
			$this->view->redirect('/posts/list/1');
		}
		$this->view->render('Редактирование вакансии');
	}

	public function deleteAction() {
		$b = $this->model->checkNews($this->route['page']);
		if($b[0]['emp_id'] == $_SESSION['employer']['id']){
			$this->model->postDelete($this->route['page']);
			$this->view->redirect('/posts/list/1');
		}
		else
			View::errorCode(404);
	}

	public function listAction() {
		$pagination = new Pagination($this->route, $this->model->postsCount());
		$vars = [
			'pagination' => $pagination->get(),
			'list' => $this->model->postsListemp($this->route, $_SESSION['employer']['id']),
		];
		$this->view->render('Список моих вакансий', $vars);
	}

	public function addAction() {
		if(!empty($_POST)){
			$id = $this->model->newsAdd($_POST, $_SESSION['employer']['id']);
			$this->view->redirect('/posts/list/1');
		}
		elseif(!empty($_POST)){
			$params['error'] = "Ошибка";
			die();
		}
		$this->view->render('Добавление вакансии');
	}

	public function detailAction() {
		$vars = $this->model->newsInfo($this->route['page']);
		$this->view->render('Подробнее',$vars);
	}

	
}