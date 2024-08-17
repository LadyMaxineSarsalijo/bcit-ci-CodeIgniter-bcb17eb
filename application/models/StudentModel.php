<?php

class StudentModel extends CI_Model {

    public function student_data($data) {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('firstName', 'First Name', 'required'); //ibutang sa model
		$this->form_validation->set_rules('middleName', 'Middle Name', 'required');
		$this->form_validation->set_rules('lastName', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
        if ($this->form_validation->run()) {
			return $this->db->insert('users', $data);
		} 
    }

    public function retrieveStudentData(){
        $query = $this ->db->get('users');
        return $query->result();
    }

    public function editUser($id) {
       $query = $this->db->get_where('users', ['id' => $id]);
       $query->row();
    
    }
}
?>