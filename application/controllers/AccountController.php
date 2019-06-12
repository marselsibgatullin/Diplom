<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller {
	public function loginAction() {
		if (!empty($_POST) && $_POST['role']==('student')) {
			if ($this->model->checkDataStud($_POST['email'], $_POST['password'])) {
				$this->model->loginStud($_POST['email']);
				$this->view->redirect('/profile/show');
			}
			else {
				$params['error'] = "Неверный e-mail или пароль";
				$this->view->render('Вход',$params);
			}
		}
		elseif(!empty($_POST) && $_POST['role']==('employer')){
			if ($this->model->checkDataEmp($_POST['email'], $_POST['password'])) {
				$this->model->loginEmp($_POST['email']);
				$this->view->redirect('/profile/show');
			}
			else {
				$params['error'] = "Неверный e-mail или пароль";
				$this->view->render('Вход',$params);
			}
		}
		$this->view->render('Вход');
	}

	public function registerAction() {
		if(!empty($_POST)){
			if ($this->model->checkEmailStudents($_POST['email'])){
				$params['error'] = "Такая почта уже существует";
				$this->view->render('Регистрация',$params);
			}
			elseif (!$this->model->validateStud(['name', 'surname', 'city', 'password'], $_POST) && $_POST['role']==('student')) {
				$params['error'] = $this->model->error;
				$this->view->render('Регистрация',$params);
			}
			elseif (!$this->model->validateEmp(['company', 'city', 'password'], $_POST) && $_POST['role']==('employer')) {
				$params['error'] = $this->model->error;
				$this->view->render('Регистрация',$params);
			}
			elseif($_POST['role']==('student')) 
				$this->model->registerStudent($_POST);
			elseif($_POST['role']==('employer'))
				$this->model->registerEmployer($_POST);
			
		}
		$this->view->render('Регистрация');
	}
	public function logoutAction() {
		unset($_SESSION['student']);
		unset($_SESSION['employer']);
		$this->view->redirect('/account/login');
	}

}