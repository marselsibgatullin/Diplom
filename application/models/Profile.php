<?php

namespace application\models;

use application\core\Model;

class Profile extends Model {

    public function selectStud($id, $action) {
		$_SESSION['info'] = array();
		$params = [
			'id' => $id,
		];
			$data = $this->db->row('SELECT * FROM students WHERE id = :id', $params);
			if(!empty($data))
				$_SESSION['info'] = $data[0];
		}

		public function selectEmp($id, $action) {
			$_SESSION['info'] = array();
			$params = [
				'id' => $id,
			];
				$data = $this->db->row('SELECT * FROM employers WHERE id = :id', $params);
				if(!empty($data))
					$_SESSION['info'] = $data[0];
			}

	public function editStud($post, $id) {
		
		$params = [
			'id' => $id,
			'birthday' => $post['birthday'],
			'number' => $post['number'],
			'city' => $post['city'],
			'university' => $post['university'],
			'speciality' => $post['speciality'],
			'stage' => $post['stage'],
			'about' => $post['about'],
		];
		
		$a=$this->db->query('UPDATE students SET birthday = :birthday, number = :number, city = :city, university = :university, speciality = :speciality, stage = :stage, about = :about WHERE id = :id', $params);
	}

	public function updateStud($id) {
		$params = [
			'id' => $id,
		];
		$data = $this->db->row('SELECT * FROM students WHERE id = :id', $params);
		$_SESSION['student'] = $data[0];
	}
	public function editEmp($post, $id) {
		
		$params = [
			'id' => $id,
			'number' => $post['number'],
			'city' => $post['city'],
			'about' => $post['about'],
		];
		
		$a=$this->db->query('UPDATE employers SET number = :number, city = :city, about = :about WHERE id = :id', $params);
	}

	public function updateEmp($id) {
		$params = [
			'id' => $id,
		];
		$data = $this->db->row('SELECT * FROM employers WHERE id = :id', $params);
		$_SESSION['employer'] = $data[0];
	}
	public function postsList($route,$stud_id) {
		$max = 10;
		$params = [
			'stud_id' => $stud_id,
			'max' => $max,
			'start' => ((($route['page'] ?? 1) - 1) * $max),
		];
        return $this->db->row('SELECT * FROM works WHERE stud_id = :stud_id ORDER BY id DESC LIMIT :start, :max', $params);
	}
	public function studList($route) {
		$max = 10;
		$params = [
			'stud_id' => $route['page'],
			'max' => $max,
			'start' => ((($route['page'] ?? 1) - 1) * $max),
		];
        return $this->db->row('SELECT * FROM works WHERE stud_id = :stud_id ORDER BY id DESC LIMIT :start, :max', $params);
	}
		
	public function postsCount() {
		return $this->db->column('SELECT COUNT(id) FROM works');
	}

	public function newsList($route) {
		$params = [
			'emp_id' => $route['page'],
        ];
        return $this->db->row('SELECT * FROM news WHERE emp_id = :emp_id ORDER BY id DESC', $params);
		}
}