<?php

	// insert_record.php
	spl_autoload_register(function($class){
		require_once dirname(__DIR__)."/classes/{$class}.php";
	});
	
	// get post data
		$type = $_POST['type'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$organisation = $_POST['organisation'];
		$service = $_POST['service'];
		$timestamp = new DateTime();
		$time = $timestamp->format('Y-m-d H:i:s');
	
	// insert query
		$insert_sql = "INSERT INTO queue (type, firstName, lastName, organisation, service, timestamp) VALUES ('$type', '$firstname', '$lastname', '$organisation', '$service', '$time')";
	
	// run query and check successful 	
	$result = db::insert($insert_sql);
	
	// json response
	$response['success'] = $result['success'];
	$response['error'] = $result['error'];

	echo json_encode($response);
	