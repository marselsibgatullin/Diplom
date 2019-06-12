<?php

namespace application\models;

use application\core\Model;

class Works extends Model {
    public function workAdd($post, $stud_id) {
		$params = [
			'id' => '',
			'stud_id' => $stud_id,
			'course' => $post['course'],
			'tittle' => $post['tittle'],
			'key_words' => $post['key_words'],
		];
		$id = $this->db->query('INSERT INTO works (id, stud_id, course, tittle, key_words) VALUES (:id, :stud_id, :course, :tittle, :key_words)', $params);
		return $this->db->lastInsertId();
	}

	public function fileUpload($path, $name, $id) {
		if(strpos($name, '.docx'))
		move_uploaded_file($path, 'public/materials/'.$id.'.docx');
		
		elseif(strpos($name, '.doc'))
		move_uploaded_file($path, 'public/materials/'.$id.'.pdf');

		elseif(strpos($name, '.pdf'))
		move_uploaded_file($path, 'public/materials/'.$id.'.pdf');
	}

	public function postsList($route, $stud_id) {
		$max = 10;
		$params = [
			'stud_id' => $stud_id,
			'max' => $max,
			'start' => ((($route['page'] ?? 1) - 1) * $max),
		];
        return $this->db->row('SELECT * FROM works WHERE stud_id = :stud_id ORDER BY id DESC LIMIT :start, :max', $params);
		}
		
		public function postsCount() {
			return $this->db->column('SELECT COUNT(id) FROM works');
		}

		public function workDelete($id) {
			$params = [
				'id' => $id,
			];
			$this->db->query('DELETE FROM works WHERE id = :id', $params);
		}
		public function checkWorks($id) {
			$params = [
				'id' => $id,
			];
			return $this->db->row('SELECT stud_id FROM works WHERE id = :id', $params);
		}
		
		public function postSearch($words){
			$params = [
				'key_words' => '%'.$words.'%',
			];
			return $this->db->row('SELECT * FROM works WHERE key_words LIKE :key_words', $params);
		}
		public function studidSearch($id){
			$params = [
				'id' => $id,
			];
			return $this->db->row('SELECT stud_id FROM works WHERE id = :id', $params);
		}

		public function studSearch($id){
			$params = [
				'id' => $id,
			];
			return $this->db->row('SELECT * FROM students WHERE id = :id', $params);
		}
}