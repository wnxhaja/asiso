<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class attends_controller extends CI_Controller {
	
	//constructor
	public function __construct() {
		parent::__construct();
		
		$this->load->library(array('session'));
		$this->load->helper(array('url', 'form', 'html'));
		$this->load->library('Attends');
		$this->load->model('attends_model','am');
	}
	 		
 }
 ?>