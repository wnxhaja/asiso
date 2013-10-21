<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Event_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	//created by kert
	//gets the events of a college
	//if the college does not have any events, return false
	//otherwise, return the query
	public function getEventsOfACollege($college) {
		//to be edited
		$query = $this->db->query("SELECT * FROM event WHERE college_owner = '$college'");
		if($query->num_rows() == 0)
			return false;
		return $query;
	}
}


/*	End of file */
