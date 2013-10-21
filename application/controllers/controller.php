<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
/**
 * Controller for the ASISO project by:
 * @author Louie Kert Basay
 * @author Abdul Jalil Laguindab
 * @author Sherwin Cabili
 * @author Michael Arañas
*/

class Controller extends CI_Controller {
	
	//constructor
	 public function __construct() {
		parent::__construct();
		$this->load->helper(array('url', 'form', 'html'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->model('Login_model', 'login');
	 }
	 
	 //automatically run if no function in the uri is indicated
	 //if the user is not yet logged in, shows the login page
	 //if the user is already logged in, redirect the user to his/her homepage
	 //	through the showHome function
	 public function index() {
		
		if(!$this->session->userdata('userId')) { 	
			$data['title'] = 'Asiso';
			$this->load->view('header_view', $data);
			$this->load->view('login_view');
			$this->load->view('footer_view');
		}
		else {
			redirect(site_url("controller/showHome"));
		}
	}
	 
	 //logs in the user
	 //if the query returns false, load user not found page
	 //otherwise, redirects the user to his/her home page through the showHome function
	 public function login() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		if(!$this->session->userdata('userId')) {
			$query = $this->login->log_user($username, $password);
				$this->load->view('header_view');
				$this->load->view('user_notfound');
				$this->load->view('footer_view');
				redirect(site_url("controller/showHome"));
		}
		else {
			redirect(site_url("controller/showHome"));
		}
	 }
	 
	 //redirects the user to his/her homepage
	 public function showHome() {
		 if($this->session->userdata('userId')) {
			redirect(site_url("student_page"));
		 }
		 else {
			redirect(site_url("controller"));
		 }
	 }
	 
	 //logs out the user and redirects him/her to the login page
	 public function logout() {
		$this->session->sess_destroy();
		redirect(site_url(''));
	 }
 }
		



/* End of file */
