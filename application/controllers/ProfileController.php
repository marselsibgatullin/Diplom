<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Pagination;
use application\core\View;

class ProfileController extends Controller {

	public function showAction() {
		$this->view->render('Профиль');
	}
	public function downloadAction() {
		$file = $_SERVER['DOCUMENT_ROOT'].'/public/materials/'.$this->route['page'].'.pdf';
		if (file_exists($file)) {
			if (ob_get_level()) {
			  ob_end_clean();
			}
			header('Content-Description: File Transfer');
			header('Content-Type: application/octet-stream');
			header('Content-Disposition: attachment; filename=' . basename($file));
			header('Content-Transfer-Encoding: binary');
			header('Expires: 0');
			header('Cache-Control: must-revalidate');
			header('Pragma: public');
			header('Content-Length: ' . filesize($file));
			readfile($file);
			$this->view->redirect('/profile/show');
		  }
		  $file = $_SERVER['DOCUMENT_ROOT'].'/public/materials/'.$this->route['page'].'.docx';
		  if (file_exists($file)) {
			if (ob_get_level()) {
			  ob_end_clean();
			}
			header('Content-Description: File Transfer');
			header('Content-Type: application/octet-stream');
			header('Content-Disposition: attachment; filename=' . basename($file));
			header('Content-Transfer-Encoding: binary');
			header('Expires: 0');
			header('Cache-Control: must-revalidate');
			header('Pragma: public');
			header('Content-Length: ' . filesize($file));
			readfile($file);
			$this->view->redirect('/profile/show');
		  }
		  $file = $_SERVER['DOCUMENT_ROOT'].'/public/materials/'.$this->route['page'].'.doc';
		  if (file_exists($file)) {
			if (ob_get_level()) {
			  ob_end_clean();
			}
			header('Content-Description: File Transfer');
			header('Content-Type: application/octet-stream');
			header('Content-Disposition: attachment; filename=' . basename($file));
			header('Content-Transfer-Encoding: binary');
			header('Expires: 0');
			header('Cache-Control: must-revalidate');
			header('Pragma: public');
			header('Content-Length: ' . filesize($file));
			readfile($file);
			$this->view->redirect('/profile/show');
		  }
		  View::errorCode(404);
	}

	public function editAction() {		
		if(!empty($_POST) && isset($_SESSION['student'])) {
			
			$this->model->editStud($_POST, $_SESSION['student']['id']);
			$old = $_SESSION['student']['id'];
			unset($_SESSION['student']);
			$this->model->updateStud($old);
			$this->view->redirect('/profile/show');
		}
		elseif(!empty($_POST) && isset($_SESSION['employer'])) {
			
			$this->model->editEmp($_POST, $_SESSION['employer']['id']);
			$old = $_SESSION['employer']['id'];
			unset($_SESSION['employer']);
			$this->model->updateEmp($old);
			$this->view->redirect('/profile/show');
		}
		$this->view->render('Редактирование профиля');
	}

	public function studentsAction() {
		$this->model->selectStud($this->route['page'], $this->route['action']);
		if (empty($_SESSION['info']))
			View::errorCode(404);
		$pagination = new Pagination($this->route, $this->model->postsCount());
		$vars = [
			'pagination' => $pagination->get(),
			'list' => $this->model->studList($this->route),
		];
		$this->view->render('Просмотр профиля студента',$vars);
	}

	public function employersAction() {
		$this->model->selectEmp($this->route['page'], $this->route['action']);
		if (empty($_SESSION['info']))
			View::errorCode(404);
		$this->view->render('Просмотр профиля работодателя');
	}

	public function newsAction() {
		$vars = [
			'list' => $this->model->newsList($this->route),
		];
		$this->view->render('Вакансии работодателя',$vars);
	}

}