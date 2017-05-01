<?php
class Main extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function index()
	{
		$this->load->model('module');
		$this->load->library('session');
		$this->load->view("login");
	}
	function login()
	{
	$this->load->model('module');
	$this->load->library('session');
	$user_id=$this->session->userdata('st_id');
		if($user_id!='')
		{
			redirect('home');
		}
		if ($_SERVER['REQUEST_METHOD'] === 'POST') 
		{
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			$data =$this->module->check_login($email,$password);
			if(!empty($data))
			 {			
			$user_email=$data[0]['email'];
			$user_id=$data[0]['id'];
			$this->session->set_userdata('st_id', $user_id);
			$this->session->set_userdata('user_email', $user_email);
			$this->session->set_userdata('is_logged_in', TRUE);
			redirect('studentdetail');
			 }
		}
		$this->load->view('login',$data);
	}
	function studentdetail()
	{
		$this->load->model('module');
		$this->load->library('session');
		$user_id=$this->session->userdata('st_id');
		if($user_id=='')
		{
			redirect('login');
		}
		$data['studentdetail']=$this->module->studentdetail($user_id);
		$this->load->view("studentdetail",$data);
	}
	function logout() 
	{
		$this->session->sess_destroy();  
	    redirect('login');
	
	}
}
