<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->database();
		$this->load->view('templates/header');
		$this->load->view('templates/footer');

		$this->load->model('StudentModel', 'stud');
		$results = $this->stud->retrieveStudentData();
		$this->load->view('welcome_message', ['result' => $results]);

	}

	public function maxine() {
		$this->load->view('templates/header');
		$this->load->view('addUser');
		$this->load->view('templates/footer');

	}

	public function create_user() {
		$this->form_validation->set_rules('firstName', 'First Name', 'required');
		$this->form_validation->set_rules('middleName', 'Middle Name', 'required');
		$this->form_validation->set_rules('lastName', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');

		if ($this->form_validation->run()) {
			$data = [
				'firstName' => $this->input->post('firstName'),
				'middleName' => $this->input->post('middleName'),
				'lastName' => $this->input->post('lastName'),
				'email' => $this->input->post('email')
			];

			$this->load->model('StudentModel');
			$this->StudentModel->student_data($data);
			redirect(base_url('welcome'));
		} else {
			$this->maxine();

		};
    }

	//Edit user by id
	public function editUserPage($id){
		$this->load->view('templates/header');

		$this->load->model("StudentModel", 'stud');
		$data['users'] = $this->stud->editUser($id);

		$this->load->view('templates/footer');
		$this->load->view('editUser', $data);

	}

	public function updateUser($id){
		$data = [
			'firstName' => $this->input->post('firstName'),
			'middleName' => $this->input->post('middleName'),
			'lastName' => $this->input->post('lastName'),
			'email' => $this->input->post('email')
		];
		$this->load->model("StudentModel");
		$this->StudentModel->edit($data, $id);

		redirect(base_url('welcome'));
	}

	public function deleteUser($id){
		$this->load->model("StudentModel");
		$this->StudentModel->delete($id);
		redirect(base_url('welcome'));
	}
	
}
