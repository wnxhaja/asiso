<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student extends CI_Driver_Library {
	
	//student data -- initially null
	protected $idNum = null;
	protected $name = null;
	protected $username = null;
	protected $collegein = null;
	protected $coursein = null;
	protected $year = null;
	
	protected $valid_drivers;
	private $student;
	
	//constructor
	public function __construct($params) {
		//get codeigniter's instance
		$CI = & get_instance();
		$CI->load->model('student_model');
		$this->student = $CI->student_model;
		//set id number
		$this->idNum = $params['id'];
		$bio = $this->student->getStudent($this->idNum);
		if($bio != false) {
			//set attributes if $bio query returns something
			$bioRow = $bio->row();
			$this->name = $bioRow->fname . ' ' . $bioRow->minit . '. ' . $bioRow->lname;
			$this->username = $bioRow->username;
			$this->year = $bioRow->year;
		}
		$skul = $this->student->getStudentCourseAndCollege($this->idNum);
		if($skul != false) {
			//set attributes if $skul query returns something
			$skulRow = $skul->row();
			$this->collegein = $skulRow->colname;
			$this->coursein = $skulRow->couname;
		}
		$this->valid_drivers = array('student_admin');
		
	}
	
	/**
	 *	get the event records of the current instance of Student
	 *	returns the query in array form of all the attended events of the student  *  if the student has attended at least one event
	 *	otherwise, returns an empty array
	*/
	public function getThisStudentEventRecord() {
		$query = $this->student->getEventsOfThisStudent($this->idNum);
		if($query != false)
			return $query->result_array();
		else
			return array();
	}

	/*
	 * getter functions
	*/
	
	public function getIdNum() {
		return $this->idNum;
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function getUsername() {
		return $this->username;
	}
	
	public function getCollegein() {
		return $this->collegein;
	}
	
	public function getCoursein() {
		return $this->coursein;
	}
	
	public function getYear() {
		return $year;
	}
	
	/*
	 * setter functions
	 */
	 
	 public function setIdNum($newId) {
		 $this->idNum = $newId;
	 }
	 
	 public function setName($newName) {
		 $this->name = $newName;
	 }
	 
	 public function setUsername($newUsername) {
		 $this->username = $newUsername;
	 }
	 
	 public function setCollegein($newCollegein) {
		 $this->collegein = $newCollegein;
	 }
	 
	 public function setCoursein($newCoursein) {
		 $this->coursein = $newCoursein;
	 }
	 
	 public function setYear($newYear) {
		 $this->year = $newYear;
	 }
	 
}

/* End of file */
