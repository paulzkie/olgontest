<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deposit extends CI_Controller {

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
		 $this->load->view('deposit_site');
	}

    public function validate(){
		$username = $this->input->post("username");
		$pin = $this->input->post("pin");
		$get_data = $this->Db_model->customer_login($username,$pin);
		if($get_data){
			$msg = array('stat' => 1, 'msg' => 'Correct');
			echo json_encode($msg);
			$this->session->set_userdata(array(
				'sess_uid'  =>  $get_data[0]->id,
		        'sess_user' => $get_data[0]->username,
				'fullname' => $get_data[0]->first_name.' '.$get_data[0]->last_name,
				'balance' => $get_data[0]->balance,
				'referral_code' => $get_data[0]->referral_code,
				'user_type' => 2,
			));
		}
		else{
			$msg = array('stat' => 0, 'msg' => 'Invalid credentials!');
			echo json_encode($msg);
		}
	}

	public function logout(){
		session_destroy();
		redirect('index.php/deposit');
	}

	public function deposit_account(){
		$get_data["data"] = $this->Db_model->get_one('customer_account','id',$this->session->userdata("sess_uid"));
		$this->load->view('header'); 
        $this->load->view('deposit_page',$get_data);
        $this->load->view('footer');	
	}

	public function deposit_cash(){
		$deposit = $this->input->post("deposit");
		$balance = $this->input->post("balance");
		
		if(empty($deposit)){
			echo "0";
		}else{
			$this->db->where('status', 1);
			$this->db->where('referral_code', $this->session->userdata("referral_code"));
			$get_data = $this->Db_model->count_data('customer_referral');
			$referral_total = 0;
			if($get_data){
				$referral_total = $get_data * 250;
			}
			$total_deposit = (int)$deposit + (int)$balance + (int)$referral_total;
			$data = array('balance' => $total_deposit);
			$data_referral = array('status' => 0);
			$this->Db_model->update_data('customer_referral',$data_referral,'referral_code',$this->session->userdata("referral_code"));
			$this->Db_model->update_data('customer_account',$data,'id',$this->session->userdata("sess_uid"));
			echo "1";
		}
	}



}
