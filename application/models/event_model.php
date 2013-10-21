<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class event_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	
	/***************/
	/*
	//search event by name
	public function searchEvent() {
		$name = this->input->post('search');
		$result = $this->db->query("SELECT * 
									FROM event 
									WHERE name like '%$name%' order by name asc ");
		if($result->num_rows() == 0)
			return false;
		return $result;
	}
	*/

	/***************/
	/*
	//create new event by the governor
	public function createEvent(){
		/* getting initial for college owner */
		/*
		$username = $this->session->userdata('username');
		$governor_id = $this->db->query("SELECT idnumber 
										 FROM student 
										 WHERE username = '$username' ");
		
		$college_owner = $this->db->query(" SELECT initial
											FROM college
											WHERE governor_id = '$governor_id' ");
		
		
		$eventid = $this->input->post('eventid');
		$name = $this->input->post('name');
		$date = $this->input->post('date');
		$location = $this->input->post('location');
		$in_time = $this->input->post('in_time');
		$out_time = $this->input->post('out_time');
		
		$this->db->query("INSERT INTO event 
						  VALUES ('$eventid','$name','$date','$location','$college_owner','$in_time','$out_time')");
	}
	
	//update an event
	public function updateEvent(){
		$eventid = $this->input->post('eventid');
		$name = $this->input->post('name');
		$date = $this->input->post('date');
		$location = $this->input->post('location');
		$college_owner = $this->input->post('college_owner');
		$in_time = $this->input->post('in_time');
		$out_time = $this->input->post('out_time');
		
		$this->db->query("UPDATE event 
						  SET eventid='$eventid',name='$name',date='$date',location='$location',college_owner='$college_owner',in_time='$in_time',out_time='$out_time'");
	}
	
	
	//delete an event
	public function deleteEvent(){
		$eventid = $this->input->post('eventid');
		$this->db->query("DELETE FROM event 
						  WHERE eventid = '$eventid'" );
	}
	
	*/
	
	public function eventDummy(){
		$result = $this->db->query("SELECT * 
									FROM event");
									
		return $result;
	}
	//////////////////////////////////////////////////////////////////////////////////
	//   model functions to be use by event class                                 ///
	/////////////////////////////////////////////////////////////////////////////////
	
	
	public function queryEvent(){
		$id = $this->input->get('eventid');
		$eventid = intval($id); //string to int casting
		$result = $this->db->query(" SELECT *, date as event_date FROM event WHERE eventid = '$eventid' ");
		return $result;
	}
	
	
	/* 
	*	function to determine if use signIn or signOut
	* 	return boolean 
	*   " wala pa nako ni na try , ang use unta ani kay para sa kad2ng para ma isa ang singIn og singOut functions"
	*/
	
	public function siso(){
		
		$si = $this->input->post('signIn');
		if(isset($si))
			$status = true;
		else
			$status = false;
		
		return $status;
	}
	
	
}
	


/* End of file */
