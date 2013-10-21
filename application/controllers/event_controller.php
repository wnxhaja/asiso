<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class event_controller extends CI_Controller {
	
	//constructor
	 public function __construct() {
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url', 'form', 'html'));
		$this->load->library('Event');
		$this->load->model('event_model','em');

	 }
	 
	public function index(){
		$title['title'] = $this->event->getEventName();
		$data['event']= $this->event->getEventData();
		
		$this->load->view('header_view',$title);
		$this->load->view('eventChosen_view',$data);
		$this->load->view('footer_view');
	}
	
	
	
	//start signIn/SignOut
	public function ifStartSiSo(){

		// create a boolean $flag
		$flag = $this->em->siso(); 
		
		
		// check if its time for signIn or signOut
		$siso = $this->event->sisoStart($flag);
		
		if($siso == 'signIn'){
			$title['title'] = $this->event->getEventName(). ' Start Sign-in';
			
			$this->load->view('header_view',$title);
			$this->load->view('signin_view');
			$this->load->view('footer_view');
			}
		elseif($siso == 'signOut'){
			$title['title'] = $this->event->getEventName(). ' Start Sign-out';
			
			$this->load->view('header_view',$title);
			$this->load->view('signin_view');
			$this->load->view('footer_view');
			}
		else{
			// here $siso is boolean, equal to false, stay in current page and output an error , that you cannot start siso
			$title['title'] = $this->event->getEventName();
			$data['event']= $this->event->getEventData();
			
			//redirect to the same page, suppose this should output an error
			$this->load->view('header_view',$title);
			$this->load->view('eventChosen_view',$data);
			$this->load->view('footer_view');
			}

	}
	
	
	// to singIn or signOut a student in an event
	public function siSoStudent(){
	
		// create a boolean $flag
		$flag = $this->em->siso();
		// signIn or signOut student in an event
		$siso = $this->event->signStudent($flag);
	}
	
 }
 ?>