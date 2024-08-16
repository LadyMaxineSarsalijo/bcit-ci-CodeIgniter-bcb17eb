<?php

class StudentModel extends CI_Model {

    public function student_data($data){
        return $this->db->insert('users', $data);
    }
}


?>