<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	/**
	 *	retrieves information of a user given his/her username and password
	 *	creates an session cookie in the process
	 *	if the user is found, @returns the query object
	 *	if nothing is found, the function @returns false.
	 */
	public function log_user($username, $password) {
		$result = $this->db->query("Select * from student where username = '$username'
			and password = '$password'");
		if($result->num_rows() == 0) {
			return FALSE;
		}
		else {
			$value = $result->row();
			$accntType = $value->isadmin == 'f' ? 'normal' : 'admin';
			$sessData = array (
				'userId' => $value->idnumber,
				'accntType' => $accntType
			);
			$this->session->set_userdata($sessData);
			return $result;
		}
	}
	
}

/* End of file */
