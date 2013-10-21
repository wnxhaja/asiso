<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	/**
	 *	created by kert
	 * get student information by the student's id-number
	 *if no result found, @return false
	 * otherwise, @return a query object
	 */
	public function getStudent($idNumber) {
		$query = $this->db->query("Select * from Student where idnumber = '$idNumber'");
		if($query->num_rows() == 0)
			return FALSE;
		return $query;
	}
	
	/**
	 *	created by kert
	 *	get the course/college of the student given his/her id-number
	 *	if no result found, @return false
	 *  otherwise, @return a query object
	 */
	public function getStudentCourseAndCollege($idNumber) {
		$query = $this->db->query("SELECT col.name as colname, cou.name as couname FROM Belongs b join College col on col.college_initial = b.college join course cou on cou.course_initial = b.course WHERE b.stud_id = '$idNumber'");
		if($query->num_rows() == 0)
			return FALSE;
		return $query;
	}
	
	/**
	 *	created by kert
	 *  gets the set of events that can be participated by this student
	 *	if no result found, @return false
	 *	otherwise, @return a query object
	 */
	public function getEventsOfThisStudent($stud_id) {
		$query = $this->db->query("Select e.name, e.date, e.location, a.signed_in, a.signed_out from event e join attends a on e.eventid = a.event_id where a.stud_id = '$stud_id'");
		if($query->num_rows() == 0)
			return FALSE;
		return $query;
	}
	
	
	/**
	 *	created by sherwin
	 *	updates enrollment status of a student
	 *	@returns void
	 */
	public function enrollStudent($studId) {
		$this->db->query("UPDATE student SET isEnrolled = 'true' WHERE idnumber = '$studId'");
	}
	
	/**
	 *	created by sherwin
	 *	adds a student and initializes the needed records for the new student
	 *	@returns void
	 */
	public function addStudent($idnum, $fname, $minit, $lname, $password, $username, $year) {
		$this->db->query("INSERT INTO student(idnumber, fname, minit, lname, year, password, username) VALUES ('$id_num', '$fname', '$minit', '$lname', '$year', '$password', '$username')");
	}
	
	/**
	 *	created by sherwin
	 *	edits the student specified by the $studId
	 *	@$whatToEdit specifies the column to be edited
	 *	@$newValue is the new value to be saved
	 *	@returns void
	 */
	public function editStudent($studId, $whatToEdit, $newValue) {
		//since the domain of the year column of the student is integer, no quotations are needed for the $newValue
		if($whatToEdit == 'year')
			$this->db->query("UPDATE student SET $whatToEdit = $newValue WHERE idnumber = '$studId'");
		else
			$this->db->query("UPDATE student SET $whatToEdit = '$newValue' WHERE idnumber = '$studId'");
	}
	
}

/* End of file */
