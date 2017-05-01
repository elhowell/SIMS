<?php
class Module extends CI_Model 
{
    function __construct()
    {
		//$this->load->database();
        parent::__construct();
    }
	function check_login($email,$password){
	$this->db->select('*');
	$this->db->where('email',$email);
	$this->db->where('password',base64_encode($password));
	$this->db->from('user');
	$query = $this->db->get();
	return $query->result_array();
    }
	function studentdetail($id){
	$this->db->select('*');
	$this->db->where('id',$id);
	$this->db->from('user');
	$query = $this->db->get();
	return $query->result_array();
    }
}
?>