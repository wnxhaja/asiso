<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class College_page extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url', 'form', 'html'));
		$this->load->model('student_model', 'student');
		$this->load->model('college_model', 'college');
		$id = $this->session->userdata('userId');
		$params = array('id' => $id);
		$this->load->driver('student', $params);
	}
	
	public function index() {
		
		if($this->session->userdata('userId')) {
			$id = $this->session->userdata('userId');
			$result = $this->college->getCollegeInitialOfThisStudent($id);
			$college_initial = $result->row();
			$data['title'] = $college_initial->college_initial;
			$admin_list = $this->college->getAdminsOfThisCollege($college_initial->college_initial);
			$data['admins'] = $admin_list;
			
			$governor = $this->college->getCollegeGovernor($college_initial->college_initial);
			$governorName = $governor->row();
			$govF = $governorName->fname;
			$govL = $governorName->lname;
			$data['governorFName'] = $govF;
			$data['governorLName'] = $govL;
			$this->load->view('header_view', $data);
			$this->load->view('college_home_view', $data);
			$this->load->view('footer_view');
		}
		else {
			redirect(site_url('controller'));
		}
		
	}
}

/*	End of File	*/