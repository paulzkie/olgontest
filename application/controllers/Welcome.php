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
		 $this->load->view('login');
	}
	public function validate(){
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$get_data = $this->Db_model->login($username,$password);
		if($get_data){
			$msg = array('stat' => 1, 'msg' => 'Correct');
			echo json_encode($msg);
			$this->session->set_userdata(array(
				'sess_uid'  =>  $get_data[0]->id,
		        'sess_user' => $get_data[0]->username,
		        'name' => $get_data[0]->name,
				'position' => $get_data[0]->position,
			));
		}
		else{
			$msg = array('stat' => 0, 'msg' => 'Invalid credentials!');
			echo json_encode($msg);
		}
	}
	
	public function logout(){
		session_destroy();
		redirect('index.php/welcome');
	}
}
