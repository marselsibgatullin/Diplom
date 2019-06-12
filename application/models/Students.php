<?php

namespace application\models;

use application\core\Model;

class Students extends Model {
    public function worksList($route) {
		$params = [
			'stud_id' => $route['page'],
        ];
        return $this->db->row('SELECT * FROM works WHERE stud_id = :stud_id ORDER BY id DESC', $params);
    }
    
    public function postsCount() {
      return $this->db->column('SELECT COUNT(id) FROM works');
    }

    public function studentsList($route, $speciality, $select) {
      $max = 10;
      $params = [
        'max' => $max,
        'start' => ((($route['page'] ?? 1) - 1) * $max),
        'speciality' => $speciality[$select]['name'],
      ];
          return $this->db->row('SELECT * FROM students WHERE speciality = :speciality ORDER BY id DESC LIMIT :start, :max', $params);
    }
}