<?php 

	// entry class
	
	class Queue{
	
		public $id;
		public $type;
		public $firstname;
		public $lastname;
		public $organisation;
		public $service;
		public $timestamp;
	
		public function __construct(
			$id,
			$type,
			$firstname,
			$lastname,
			$organisation,
			$service,
			$timestamp
		){
			$this->id = $id;
			$this->type = $type;
			$this->firstname = $firstname;
			$this->lastname = $lastname;
			$this->organisation = $organisation;
			$this->service = $service;
			$this->timestamp = $timestamp;
		}
	
		public static function getEntry($dbrow){
			
			$entry = new self(
				$dbrow['id'],
				$dbrow['type'],
				$dbrow['firstName'],
				$dbrow['lastName'],
				$dbrow['organisation'],
				$dbrow['service'],
				$dbrow['timestamp']
			);
			
			return $entry;

		}
	
	
	}
	
	