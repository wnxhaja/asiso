<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//include 'Student.php';

class Student_admin extends CI_Driver {
	
	//returns all student records in a specific event
	public function getEventRecords($event_id) {
		//TODO
	}
	
	//returns all records of a particular student
	public function getStudentRecord($stud_id) {
		//TODO
	}
	
	//returns void, updates isEnrolled attribute of student to 'true'
	public function enrollStudent($stud_id) {
		//TODO
	}
	
	public function addStudent($idnum, $fname, $minit, $lname, $password, $username, $year) {
		//TODO
	}
	
	public function editStudent($stud_id, $whatToEdit, $newValue) {
		//TODO
	}
	
}

/* End of file */
