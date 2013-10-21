<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class College_model extends CI_Model {
	
	//constructor
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	//created by kert
	//edits a college given its initials
	//$inital is the initial of the college
	//$whatToEdit is the column target to be edited
	//$newValue is the new value of the column to be edited
	//returns void
	public function editThisCollege($initial, $whatToEdit, $newValue) {
		$this->db->query("UPDATE college set $whatToEdit = '$newValue' where college_initial = '$initial'");
	}
	
	//retrieves student's information who holds administrative rights to a certain college
	//if nothing is retrieved, returns false
	//otherwise, return the query object
	public function getAdminsOfThisCollege($initial) { 
		$query = $this->db->query("SELECT s.idnumber, s.fname, s.minit, s.lname, s.year FROM student s JOIN belongs b ON b.stud_id = s.idnumber WHERE b.college = '$initial' and s.isadmin = 't'");
		if($query->num_rows() == 0)
			return false;
		return $query;
	}
}

/* End of File */
