<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Attends {

	private $studID;
	private $eventID;
	private $si;
	private $so;
	private $siChecker;
	private $soChecker;
	
	
	
	// $data recieved is an eventID
	public function __construct(){
		
		 //variable
		$attend;
		
		$CI = &get_instance();
		$CI->load->model('attends_model');
		$this->attend = $CI->attends_model;
		
		echo $_GET['eventid'];
		echo $CI->session->userdata('userId');
	}
	
	/* getter */
	
	/* setter */

	
}

/* End of file */
