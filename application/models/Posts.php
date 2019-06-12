<?php

namespace application\models;

use application\core\Model;

class Posts extends Model {
	public function newsInfo($id) {
		$params = [
			'id' => $id,
		];
        return $this->db->row('SELECT * FROM news WHERE id = :id', $params);
    }

	public function postsList($route, $speciality) {
		$max = 10;
		$params = [
			'max' => $max,
			'start' => ((($route['page'] ?? 1) - 1) * $max),
			'speciality' => $speciality,
		];
        return $this->db->row('SELECT * FROM news WHERE speciality = :speciality ORDER BY id DESC LIMIT :start, :max', $params);
	}

	public function postsempList($route) {
		$max = 10;
		$params = [
			'max' => $max,
			'start' => ((($route['page'] ?? 1) - 1) * $max),
		];
        return $this->db->row('SELECT * FROM news ORDER BY id DESC LIMIT :start, :max', $params);
	}

	public function postsListemp($route, $emp_id) {
		$max = 10;
		$params = [
			'max' => $max,
			'start' => ((($route['page'] ?? 1) - 1) * $max),
			'emp_id' => $emp_id,
		];
        return $this->db->row('SELECT * FROM news WHERE emp_id = :emp_id ORDER BY id DESC LIMIT :start, :max', $params);
    }
	public function isPostExists($id) {
        $params = [
            'id' => $id,
        ];
        return $this->db->column('SELECT id FROM news WHERE id = :id', $params);
	}
	
	public function postsCount() {
		return $this->db->column('SELECT COUNT(id) FROM works');
	}

    public function postData($id) {
		$params = [
			'id' => $id,
		];
		return $this->db->row('SELECT * FROM news WHERE id = :id', $params);
	}
	public function checkNews($id) {
		$params = [
			'id' => $id,
		];
		return $this->db->row('SELECT emp_id FROM news WHERE id = :id', $params);
	}
	

	public function newsAdd($post, $emp_id) {
		$params = [
			'id' => '',
			'emp_id' => $emp_id,
			'tittle' => $post['tittle'],
			'text' => $post['text'],
			'speciality' => $post['speciality'],
		];
		$id = $this->db->query('INSERT INTO news (id, emp_id, tittle, text, speciality) VALUES (:id, :emp_id, :tittle, :text, :speciality)', $params);
	}
	public function postDelete($id) {
		$params = [
			'id' => $id,
		];
		$this->db->query('DELETE FROM news WHERE id = :id', $params);
	}

	public function postInfo($id) {
		
		$params = [
			'id' => $id,
		];
		$data = $this->db->row('SELECT * FROM news WHERE id = :id', $params);
		if(!empty($data))
			$_SESSION['news'] = $data[0];
	}

	public function postEdit($post, $id) {
		
		$params = [
			'id' => $id,
			'speciality' => $post['speciality'],
			'text' => $post['text'],
		];
		
		$a=$this->db->query('UPDATE news SET speciality = :speciality, text = :text WHERE id = :id', $params);
	}


}