<?php

namespace application\controllers;

use application\lib\Pagination;
use application\core\Controller;
use application\core\View;

class StudentsController extends Controller {
	public function listAction() {
		$spec = [
			[
				'id' => '1',
				'name' => '(АНТЭ) Авиации, наземные транспорты и энергетика',
			],
			[
				'id' => '2',
				'name' => '(ФМФ) Физика и математика',
			],
			[
				'id' => '3',
				'name' => '(АЭП) Автоматики и электронное приборостроение',
			],
			[
				'id' => '4',
				'name' => '(КТЗИ) Компьютерные технологии и защита информации',
			],
			[
				'id' => '5',
				'name' => '(РЭТ) Радиоэлектроника и телекоммуникации',
			],
			[
				'id' => '6',
				'name' => '(ЭУИСТ) Экономика, управление и социальные технологии',
			],
		];
		$vars = [
			'spec' => $spec,
		];
		if(!empty($_POST['speciality'])){
			$select = $_POST['speciality'] - 1;
			$pagination = new Pagination($this->route, $this->model->postsCount());
		 	$vars = [
				'spec' => $spec,
		 		'pagination' => $pagination->get(),
		 		'list' => $this->model->studentsList($this->route, $spec, $select),	
			];
		}
		$this->view->render('Список студентов', $vars);
	}

	public function worksAction() {
		$vars = [
			'list' => $this->model->worksList($this->route),
		];
		$this->view->render('Список работ студента',$vars);
	}

}