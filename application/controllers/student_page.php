<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Student_page for the ASISO project by:
 * @author Louie Kert Basay
 * @author Abdul Jalil Laguindab
 * @author Sherwin Cabili
 * @author Michael Arañas
*/

class Student_page extends CI_Controller {
	
	//private $header;
	
	//constructor
	public function __construct() {
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url', 'form', 'html'));
		$this->load->model('student_model', 'student');
		$id = $this->session->userdata('userId');
		//set parameter for student object
		$params = array('id' => $id);
		//Convert loading the student library to driver
		$this->load->driver('student', $params);

	}
	
	/**
	 *	displays the home page of the student
	 * 	and the events and records of the student
	 */
	public function index() {
		if($this->session->userdata('userId')) {
			//set data array
			$data['title'] = 'Home Page';
			$data['name'] = $this->student->getName();
			$data['username'] = $this->student->getUsername();
			$data['idnumber'] = $this->student->getIdNum();
			$data['records'] = $this->student->getThisStudentEventRecord();
			$data['accnt'] = ucfirst($this->session->userdata('accntType'));
			$data['course'] = $this->student->getCoursein();
			$data['college'] = $this->student->getCollegein();
			
			//load views
			$this->load->view('header_view', $data);
			$this->load->view('student_first_part_view', $data);
			//if student is admin, load an additional view
			if($this->session->userdata('accntType') == 'admin') {
				$this->load->view('admin_student_additional_view', $data);
			}
			$this->load->view('student_second_part_view', $data);
			$this->load->view('footer_view');
		}
		else
			redirect(site_url('controller'));
	}
	
}

/* End of file */
