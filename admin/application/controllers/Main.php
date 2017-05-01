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
	$user_id=$this->session->userdata('id');
		if($user_id!='')
		{
			redirect('home');
		}
		if ($_SERVER['REQUEST_METHOD'] === 'POST') 
		{
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			$data =$this->module->check_adminlogin($username,$password);
			if(!empty($data))
			 {			
			$user_email=$data[0]['email'];
			$user_name=$data[0]['name'];
			$user_id=$data[0]['id'];
			$this->session->set_userdata('user_name', $user_name);
			$this->session->set_userdata('id', $user_id);
			$this->session->set_userdata('user_email', $user_email);
			$this->session->set_userdata('is_logged_in', TRUE);
			redirect('home');
			 }
		}
		$this->load->view('login',$data);
	}
	function home()
	{
		$this->load->model('module');
		$this->load->library('session');
		$user_id=$this->session->userdata('id');
		if($user_id=='')
		{
			redirect('login');
		}
		$data['noofstudent']=$this->module->student();
		$this->load->view("home",$data);
	}
	function userlist()
	{
		$this->load->model('module');
		$this->load->library('session');
		$user_id=$this->session->userdata('id');
		if($user_id=='')
		{
			redirect('login');
		}
		$data['userlist']=$this->module->userlist();
		$this->load->view("userlist",$data);
	}
	function adduser($id='')
	{
		$this->load->model('module');
		$this->load->library('session');
		$user_id=$this->session->userdata('id');
		if($user_id=='')
		{
			redirect('login');
		}
		if($this->input->server('REQUEST_METHOD') === 'POST')
			{
			$title=$this->input->post('title');
			$f_name=$this->input->post('f_name');
			$surname=$this->input->post('surname');
			$city=$this->input->post('city');
			$country=$this->input->post('country');
			$date_of_birth=$this->input->post('date_of_birth');
			$email=$this->input->post('email');
			$status=$this->input->post('status');
			$student_id=$this->input->post('student_id');
			$courses=$this->input->post('courses');
			$exam_score_1=$this->input->post('exam_score_1');
			$exam_score_2=$this->input->post('exam_score_2');
			$exam_score_3=$this->input->post('exam_score_3');
			$gpa=$this->input->post('gpa');
			$password=base64_encode($this->input->post('password'));
			$data_to_store = array(
									'title' => $title,
									'f_name' => $f_name,
									'surname' => $surname,
									'city' => $city,
									'country' => $country,
									'date_of_birth' => $date_of_birth,
									'email' => $email,
									'student_id' => $student_id,
									'courses' => $courses,
									'exam_score_1' => $exam_score_1,
									'exam_score_2' => $exam_score_2,
									'exam_score_3' => $exam_score_3,
									'gpa' => $gpa,
									'password' => $password,
									'status' => $status
								);
			if($id!='')
				{
					$this->module->updateuser($id,$data_to_store);
				}
			else
				{
					$this->module->insertuser($data_to_store);
				}
			redirect('userlist?msg=success');
			}
		if($id!='')
		{
		$data['user']=$this->module->user($id);
		}
		$this->load->view("adduser",$data);
	}
	function userdelete($id='')
	{
		$this->load->model('module');
		$this->load->library('session');
		$user_id=$this->session->userdata('id');
		if($user_id=='')
		{
			redirect('login');
		}
		$this->module->deleteuser($id);
		redirect('userlist?msg=successfully deleted');
	}
	function logout() 
	{
	    $this->session->set_userdata('user_name', '');
		$this->session->set_userdata('id', '');
		$this->session->set_userdata('user_email', '');
	    $this->session->set_userdata('is_logged_in', FALSE);
		$this->session->sess_destroy();  
	    redirect('login');
	
	}
}
