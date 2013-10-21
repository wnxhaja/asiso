<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class College_model extends CI_Model {
	
	//constructor
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	/**
	 *	created by kert
	 *	edits a college given its initials
	 *	@$inital is the initial of the college
	 *	@$whatToEdit is the column target to be edited
	 *	@$newValue is the new value of the column to be edited
	 *	@returns void
	 */
	public function editThisCollege($initial, $whatToEdit, $newValue) {
		$this->db->query("UPDATE college set $whatToEdit = '$newValue' where college_initial = '$initial'");
	}
	
	/**
	 *	retrieves student's information who holds administrative rights to a *certain college
	 *	if nothing is retrieved, @returns false
	 *	otherwise, @return the query object
	 */
	public function getAdminsOfThisCollege($initial) { 
		$query = $this->db->query("SELECT s.idnumber, s.fname, s.minit, s.lname, s.year FROM student s JOIN belongs b ON b.stud_id = s.idnumber WHERE b.college = '$initial' and s.isadmin = 't'");
		if($query->num_rows() == 0)
			return FALSE;
		return $query;
	}
	
	/**
	 *	Gets the initial of the college where a specified student belongs
	 *	@return the query object
	 */
	 public function getCollegeInitialOfThisStudent($idnumber) {
		$query = $this->db->query("SELECT c.college_initial FROM college c join belongs b on c.college_initial = b.college WHERE b.stud_id = '$idnumber'");
		return $query;
	 }
	 
	 public function getCollegeGovernor($collegeId){
		$query = $this->db->query("SELECT s.fname, s.lname FROM student s JOIN college c ON s.idnumber = c.governor_id WHERE c.college_initial = '$collegeId'");
		return $query;
	}
	/*
	public function getCollegeGovernorLname($collegeId){
		$query = $this->db->query("SELECT s.lname FROM student s JOIN college c ON s.idnumber = c.governor_id WHERE c.college_initial = '$collegeId'");
		return $query;
	}*/
	
	
	/* JALIL
	** Gets all the events that the college owned
	*/
	public function getEventForThisCollege(){
		$id = $this->session->userdata('userId');
		$query = $this->db->query("SELECT s.idnumber, (s.fname || ' ' || s.minit || ' ' || s.lname) as sname, e.eventid, e.name, e.date as eDate, e.location, e.in_time, e.out_time, e.college_owner, e.signal 
									FROM  student s
									INNER JOIN belongs b
									ON s.idnumber = b.stud_id
									INNER JOIN event e
									ON b.college = e.college_owner
									WHERE s.idnumber = '$id'");
									
		return $query;
	}
}

/* End of File */
