<?php

namespace application\models;

use application\core\Model;

class Account extends Model {
  public function registerStudent($post) {
	$params = [
		'email' => $post['email'],
		'password' => password_hash($post['password'], PASSWORD_BCRYPT),
		'name' => $post['name'],
		'surname' => $post['surname'],
		'city' => $post['city'],
		'birthday' => $post['birthday'],
		'university' => $post['university'],
		'speciality' => $post['speciality'],
		'stage' => $post ['stage'],
	];
	$this->db->query('INSERT INTO students (email, password, name, surname, city, birthday, university, speciality, stage) VALUES (:email, :password, :name, :surname, :city, :birthday, :university, :speciality, :stage)', $params);
	}
	public function registerEmployer($post) {
		$params = [
			'id' => '',
			'email' => $post['email'],
			'password' => password_hash($post['password'], PASSWORD_BCRYPT),
			'company' => $post['company'],
			'city' => $post['city'],
		];
		$this->db->query('INSERT INTO employers (id, email, password, company, city) VALUES (:id, :email, :password, :company, :city) ', $params);
	 	}

	public function loginValidate($post) {
		$config = require 'application/config/login.php';
		if ($config['login'] != $post['login'] or $config['password'] != $post['password']) {
			$this->error = 'Логин или пароль указан неверно';
			return false;
		}
		return true;
	}
	public function loginStud($email) {

		$params = [
			'email' => $email,
		];
		$data = $this->db->row('SELECT * FROM students WHERE email = :email', $params);
		$_SESSION['student'] = $data[0];
	}
	public function loginEmp($email) {
		$params = [
			'email' => $email,
		];
		$data = $this->db->row('SELECT * FROM employers WHERE email = :email', $params);
		$_SESSION['employer'] = $data[0];
	}
	public function checkEmailStudents($email) {
		$params = [
			'email' => $email,
		];
		return $this->db->column('SELECT id FROM students WHERE email = :email', $params);
	}
	public function checkEmailEmployers($email) {
		$params = [
			'email' => $email,
		];
		return $this->db->column('SELECT id FROM employers WHERE email = :email', $params);
	}
	public function checkDataStud($email, $password) {
		$params = [
			'email' => $email,
		];
		$hash = $this->db->column('SELECT password FROM students WHERE email = :email', $params);
		if (!$hash or !password_verify($password, $hash)) {
			return false;
		}
		return true;
	}
	public function checkDataEmp($email, $password) {
		$params = [
			'email' => $email,
		];
		$hash = $this->db->column('SELECT password FROM employers WHERE email = :email', $params);
		if (!$hash or !password_verify($password, $hash)) {
			return false;
		}
		return true;
	}
	public function validateStud($input, $post) {
				$rules = [
					'name' => [
						'pattern' => '#^[A-zА-я]{3,20}$#',
						'message' => 'Имя указано неверно (от 3 до 20 символов латинского или русского алфавита)',
					],
					'surname' => [
						'pattern' => '#^[A-zА-я]{3,30}$#',
						'message' => 'Фамилия указана неверно (от 3 до 30 символов латинского или русского алфавита)',
					],
					'city' => [
						'pattern' => '#^[A-zА-я]{3,20}$#',
						'message' => 'Город указан неверно(от 3 до 20 символов латинского или русского алфавита)',
					],
					'password' => [
						'pattern' => '#^[A-z0-9]{6,30}$#',
						'message' => 'Пароль указан неверно (разрешены только латинские буквы и цифры от 6 до 30 символов)',
					],
					'univesity' => [
						'pattern' => '#^[A-zА-я0-9]{3,30}$#',
						'message' => 'Неверное название университета (от 3 до 30 символов)',
					],
				];
		foreach ($input as $val) {
			if (!isset($post[$val]) or !preg_match($rules[$val]['pattern'], $post[$val])) {
				$this->error = $rules[$val]['message'];
				return false;
			}
		}
		return true;
	}
	public function validateEmp($input, $post) {
		$rules = [
			'company' => [
				'pattern' => '#^[A-zА-я0-9]{3,30}$#',
				'message' => 'Название компании указано неверно (от 3 до 30 символов)',
			],
			'city' => [
				'pattern' => '#^[A-zА-я]{3,20}$#',
				'message' => 'Город указан неверно(от 3 до 20 символов латинского или русского алфавита)',
			],
			'password' => [
				'pattern' => '#^[A-z0-9]{6,30}$#',
				'message' => 'Пароль указан неверно (разрешены только латинские буквы и цифры от 6 до 30 символов)',
			],
		];
		foreach ($input as $val) {
			if (!isset($post[$val]) or !preg_match($rules[$val]['pattern'], $post[$val])) {
				$this->error = $rules[$val]['message'];
				return false;
			}
		}
		return true;
	}
}