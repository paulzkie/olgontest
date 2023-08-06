<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Db_model extends CI_Model {

	public function login($username,$password){
        $this->db->where('password', $password);
        $this->db->where('username', $username);
        $this->db->select("*");
        $this->db->join("employee b","a.id=b.id");
		$q = $this->db->get("user a")->result();
        return $q;
	}

    public function customer_login($username,$pin){
        $this->db->where('pin', $pin);
        $this->db->where('username', $username);
        $this->db->select("*");
		$q = $this->db->get("customer_account")->result();
        return $q;
	}

    public function get_all($table){
        $this->db->select("*");
		$q = $this->db->get($table)->result();
        return $q;
    }

    public function get_one($table,$column,$id){
        $this->db->where($column, $id);
        $this->db->select("*");
		$q = $this->db->get($table)->result();
        return $q;
    }

    public function insert_data($table,$data){
        $q = $this->db->insert($table,$data);
        return $q;
    }

    public function update_data($table,$data,$column,$id){
        $this->db->where($column, $id);
        $q = $this->db->update($table,$data);
        return $q;
    }

    public function count_data($table_name) {
        $query = $this->db->get($table_name);
        $num = $query->num_rows();
        return $num;
    }

    public function delete_data($table,$id){
        $this->db->where('id', $id);
        $this->db->delete($table);
    }
}
