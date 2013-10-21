<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Event {
	
	//event data -- initially null
	private $eventID;
	private $eventName;
	private $eventDate;
	private $eventLoc;
	private $inTime;
	private $outTime;
	private $collegeOwner;
	private $signal;
	
	
	//constructor with no parameters,used in making a new instance of event 
	public function __construct(){
		$event; //variable
		//make a new instance of codeigniter
		$CI = &get_instance();
		$CI->load->model('event_model'); //murag $this->load->model('event_model');
		$this->event = $CI->event_model; // convert "$CI->event_model" to "$this->event".... ang purpose? para same pag call sa MVC 
		$data = $this->event->queryEvent(); //database query in getting the data of an event .... event_model.php function
		
		//sure ko dili null ang $data so akoa na gi deretso	
		$eventData = $data->row();

		$this->eventID = $eventData->eventid;
		$this->eventName = $eventData->name;
		$this->eventDate = $eventData->event_date;
		$this->eventLoc = $eventData->location;
		$this->inTime = $eventData->in_time;
		$this->outTime = $eventData->out_time;
		$this->collegeOwner = $eventData->college_owner;
		$this->signal = $eventData->signal;
		
	}

	
	/** getter **/
	
	public function getEventID(){
		return $this->eventID;
	}
	
	public function getEventName(){
		return $this->eventName;
	}
	
	public function getEventdate(){
		return $this->eventDate;
	}
	
	public function getEventLoc(){
		return $this->eventLoc;
	}
	
	public function getInTime(){
		return $this->inTime;
	}
	
	public function getOutTime(){
		return $this->outTime;
	}
	
	public function getCollegeOwner(){
		return $this->CollegeOwner;
	}
	
	public function getSignal(){
		return $this->signal;
	}
	

	/* setter **/
	
	public function setEventID($data){
		$this->eventID = $data;
		
	}
	
	public function setEventName($data){
		$this->eventName = $data;
	}
	
	public function setEventdate($data){
		$this->eventDate = $data;
	}
	
	public function setEventLoc($data){
		$this->eventLoc = $data;
	}
	
	public function setInTime($data){
		$this->inTime = $data;
	}
	
	public function setOutTime($data){
		$this->outTime = $data;
	}
	
	public function setCollegeOwner($data){
		$this->collegeOwner = $data;
	}

	public function setSignal($data){
		$this->signal = $data;
	}	
	
	/***** OTHERS *****/
	
	
	
	//check's event sign in starts
	//returns boolean
	public function signInStarts(){
	
		//make new instance of DateTime
		$time1 = new DateTime($this->getEventDate() ." ". $this->getInTime());
		$time2 = new DateTime(date('Y-m-d+1 H:i:s'));
		//differentiate time at the same time convert them to unix
		$diff = $time1->format('U')-($time2->format('U') + (23*60*60));
		//if (diff >0) still not time yet, else you can start
		if($diff>0){
			return false;
		}
		else{
			return true;
		}	
	}
	
	
	//check's event sign out starts
	//returns boolean
	public function signOutStarts(){
	
		//make new instance of DateTime
		$time1 = new DateTime($this->getEventDate() ." ". $this->getInTime());
		$time2 = new DateTime(date('Y-m-d+1 H:i:s'));
		//differentiate time at the same time convert them to unix
		$diff = $time1->format('U')-($time2->format('U') + (23*60*60));
		//if (diff >0) still not time yet, else you can start
		if($diff>0){
			return false;
		}
		else{
			return true;
		}	
	}
	
	// check event can start singIn or SingOut
	// $flag is boolean, true = signIn , false if signOut
	// return a boolean boolean if its not yet time to start, returns string "signIn" or "signOut" if it can start
	public function sisoStart($flag){
		if($flag){
			//make new instance of DateTime
			$time1 = new DateTime($this->getEventDate() ." ". $this->getInTime());
			$time2 = new DateTime(date('Y-m-d+1 H:i:s'));
			//differentiate time at the same time convert them to unix
			$diff = $time1->format('U')-($time2->format('U') + (23*60*60));
			//if (diff >0) still not time yet, else you can start
			if($diff>0){
				return false;
			}
			else{
				return $data = "signIn";
			}			
		}
		else{
			//make new instance of DateTime
			$time1 = new DateTime($this->getEventDate() ." ". $this->getInTime());
			$time2 = new DateTime(date('Y-m-d+1 H:i:s'));
			//differentiate time at the same time convert them to unix
			$diff = $time1->format('U')-($time2->format('U') + (23*60*60));
			//if (diff >0) still not time yet, else you can start
			if($diff>0){
				return false;
			}
			else{
				return $data = "signOut";
			}	
		}
	}
	

	
	public function getEventData(){
		
		$data = array(	'eventid'=>$this->eventID,'eventname'=>$this->eventName,'eventdate'=>$this->eventDate,'eventloc'=>$this->eventLoc,
						'intime'=>$this->inTime,'outtime'=>$this->outTime,'collageowner'=>$this->collegeOwner,'signal'=>$this->signal);
		return $data;
	}

}

/* End of file */
