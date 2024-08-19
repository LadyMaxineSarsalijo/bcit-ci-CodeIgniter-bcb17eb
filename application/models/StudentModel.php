<?php

class StudentModel extends CI_Model {

    public function student_data($data) {
        return $this->db->insert('users', $data);
    }

    public function retrieveStudentData(){
        $query = $this ->db->get('users');
        return $query->result();
    }

    public function editUser($id) {
       $query = $this->db->get_where('users', ['id' => $id]);
       return $query->row();
    
    }

    public function edit($data, $id) {
        return $this->db->update('users', $data, ['id' => $id]);
    }

    public function delete($id) {
        return $this->db->delete('users', ['id' => $id]);
    }
}
?>