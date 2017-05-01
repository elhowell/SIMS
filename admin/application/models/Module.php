<?php
class Module extends CI_Model 
{
    function __construct()
    {
		//$this->load->database();
        parent::__construct();
    }
	function check_adminlogin($username,$password){
	$this->db->select('*');
	$this->db->where('name',$username);
	$this->db->where('password',base64_encode($password));
	$this->db->from('admin');
	$query = $this->db->get();
	return $query->result_array();
    }
	function user($id){
	$this->db->select('*');
	$this->db->where('id',$id);
	$this->db->from('user');
	$query = $this->db->get();
	return $query->result_array();
    }
	function country(){
	$this->db->select('*');
	$this->db->from('countries');
	$query = $this->db->get();
	return $query->result_array();
    }
	function student(){
	$this->db->select('count(*) as no');
	$this->db->from('user');
	$query = $this->db->get();
	return $query->result_array();
    }
	function userlist(){
	$this->db->select('*');
	$this->db->from('user');
	$query = $this->db->get();
	return $query->result_array();
    }
	function insertuser($data)
	{
		$insert = $this->db->insert('user', $data);
		return $insert;
	}
	function updateuser($id,$data)
	{
		$this->db->where('id', $id);
		$this->db->update('user', $data);
	}
	function deleteuser($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('user');
	}
}
?>