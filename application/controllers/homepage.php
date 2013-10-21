<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homepage extends CI_Controller {
	
	//private $stud;
	
	public function __construct() {
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url', 'form', 'html'));
		$this->load->model('student_model', 'student');
	}
	
	public function index() {
		if($this->session->userdata('userId')) {
			$id = $this->session->userdata('userId');
			//set parameter for student object
			$params = array(
				'id' => $id
			);
			$this->load->library('student', $params);
			
			//set data array
			$data['title'] = 'Home Page';
			$data['name'] = $this->student->getName();
			$data['username'] = $this->student->getUsername();
			
			//load views
			//echo $data['name'];
			$this->load->view('header_view', $data);
			$this->load->view('student_view', $data);
			$this->load->view('footer_view');
		}
		else
			redirect(site_url('controller/logout'));
	}
	
}

/* End of file */
