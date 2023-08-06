<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_accounts extends CI_Controller {

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
        if($this->session->userdata("position")==2){
            $this->db->where('c.role', $this->session->userdata("position"));
        }
        else if($this->session->userdata("position")==3){
            $this->db->where('c.role', $this->session->userdata("position"));
        }
        $this->db->join('user c','a.id=c.id','right');
        $get_data["data"] = $this->Db_model->get_all('employee a');
        $this->load->view('header'); 
        $this->load->view('manage_accounts/users',$get_data);
        $this->load->view('footer');
	}

    public function get_position(){
        $get_data = $this->Db_model->get_one('employee','id',$this->input->post("id"));
        $position = $get_data[0]->position;
        echo $position;
    }

    public function add_users(){
        if($this->session->userdata("position")==2){
            $this->db->where('position', $this->session->userdata("position"));
        }
        else if($this->session->userdata("position")==3){
            $this->db->where('position', $this->session->userdata("position"));
        }
        $get_data["employee"] = $this->Db_model->get_all('employee');
        $this->load->view('header'); 
        $this->load->view('manage_accounts/add_users',$get_data);
        $this->load->view('footer');
    }

    public function save_user(){   
        $id = $this->input->post("id");
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $name = $this->input->post("name");
        $role = $this->input->post("role");
        if(empty($username) && empty($password) && empty($name)){
            echo "0";
        }
        else{
            $data = array('id' =>$id , 'username' => $username, 'password' => $password, 'name' => $name, 'role' => $role);
            $this->Db_model->insert_data('user',$data);
            echo "1";
        }
    }

    public function delete_user(){
        $q = $this->Db_model->delete_data('user',$this->input->post("id"));
        if($q){
            echo "0";
        }
        else{
            echo "1";
        }
    }

    public function employee(){
        if($this->session->userdata("position")==2){
            $this->db->where('b.position', $this->session->userdata("position"));
        }
        else if($this->session->userdata("position")==3){
            $this->db->where('b.position', $this->session->userdata("position"));
        }
        $this->db->join('employee b','b.position=a.id');
        $get_data["data"] = $this->Db_model->get_all('user_type_tbl a');
        $this->load->view('header'); 
        $this->load->view('manage_accounts/employee',$get_data);
        $this->load->view('footer');
    }

    public function add_employee(){
        $this->load->view('header'); 
        $this->load->view('manage_accounts/add_employee');
        $this->load->view('footer');
    }

    public function save_employee(){
        $first_name = $this->input->post("first_name");
        $last_name = $this->input->post("last_name");
        $position = $this->input->post("position");
        if(empty($first_name) && empty($last_name) && empty($position)){
            echo "0";
        }
        else{
            $data = array('first_name' => $first_name, 'last_name' => $last_name, 'position' => $position);
            $this->Db_model->insert_data('employee',$data);
            echo "1";
        }
    }

    public function edit_user($id){
        $this->db->join('employee b','a.id=b.id');
        $get_data["data"] = $this->Db_model->get_one('user a','a.id',$id);
        $this->load->view('header'); 
        $this->load->view('manage_accounts/edit_user',$get_data);
        $this->load->view('footer');
    }

    public function edit_employee($id){
        $get_data["data"] = $this->Db_model->get_one('employee','id',$id);
        $this->load->view('header'); 
        $this->load->view('manage_accounts/edit_employee',$get_data);
        $this->load->view('footer');
    }

    public function update_user(){
        $id = $this->input->post("id");
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $role = $this->input->post("role");
        if(empty($username) && empty($password) && empty($role)){
            echo "0";
        }
        else{
            $data = array('username' => $username, 'password' => $password, 'role' => $role);
            $data_position = array('position' => $role);
            $this->Db_model->update_data('user',$data,'id',$id);
            $this->Db_model->update_data('employee',$data_position,'id',$id);
            echo "1";
        }
    }

    public function update_employee(){
        $id = $this->input->post("id");
        $first_name = $this->input->post("first_name");
        $last_name = $this->input->post("last_name");
        $position = $this->input->post("position");
        if(empty($first_name) && empty($last_name) && empty($position)){
            echo "0";
        }
        else{
            $data = array('first_name' => $first_name, 'last_name' => $last_name, 'position' => $position);
            $data_position = array('role' => $position);
            $this->Db_model->update_data('employee',$data,'id',$id);
            $this->Db_model->update_data('user',$data_position,'id',$id);
            echo "1";
        }
    }

    public function delete_employee(){
        $q = $this->Db_model->delete_data('employee',$this->input->post("id"));
        if($q){
            echo "0";
        }
        else{
            echo "1";
        }
    }

}
