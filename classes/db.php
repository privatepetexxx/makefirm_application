<?php

class db{
	
	public function __construct(){
		
	}

	public function open(){
		
		// CONNECT TO DATABASE
		require dirname(__DIR__).'/config.php';
		
		$conn = mysqli_connect($task_servernm, $task_username, $task_password, $task_database);
		if (!$conn) { 
			die('Could not connect: ' . mysql_error()); 
		}
		return $conn;
		
	}
	
	public function close($conn){
		
		mysqli_close($conn);
		
	}
	
	public function query($input_query){
		
		$db = new self;
		
		$conn = $db->open();

			$query = mysqli_query($conn, $input_query);
			$data = array();
			while ($result = mysqli_fetch_assoc($query)) {
				$data[] = $result;
			}
		
		$db->close($conn);
		
		return $data;
		
	}
	
	public function insert($input_query){
		
		$db = new self;
		
		$conn = $db->open();

			$result = array();

			if ($conn->query($input_query) === TRUE) {
				$result['success'] = true;
				$result['error'] = "";
			} else {
				$result['success'] = false;
				$result['error'] = "Error: " . $sql . "<br>" . $conn->error;
				
			}	
		
		$db->close($conn);
		
		return $result;
		
	}
	
	
}