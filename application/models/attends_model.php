<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class attends_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
		$this->load->database();
	
	}
	
	public function getID(){
		return $this->input->get('eventid');
	}
	
	/*
	public function attendStudent($eventID){
	

		$studID = $this->input->post('studentID');
		
		$flag = $this->input->post('signIn');
		
		if(isset($flag)){
			$this->db->query("	INSERT INTO attends(stud_id,event_id,signed_in)
								VALUES('$studID','$eventID','true') ");
		}
		else{
			$this->db->query("	INSERT INTO attends(stud_id,event_id,signed_out)
								VALUES('$studID','$eventID','true') ");		
		}

	}
	*/
}
/* End of file */
