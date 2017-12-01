<?php 
	
	$method = $_GET['method'];

	include dirname(__FILE__).'/includes/header.php';

	
	// method
	switch(true):
		
		case ($method == "GET"):
			/*
				get entrys
			*/
			include dirname(__FILE__).'/queue/get.php';
			break;
		
		
		case ($method == "POST"):
			/*
				include new entry form
			*/
			include dirname(__FILE__).'/queue/post.php';
			break;
		
		default:
			/* 
				default to GET if method not specified
			*/
			include dirname(__FILE__).'/queue/get.php';
		break;
		
	endswitch;

	include dirname(__FILE__).'/includes/footer.php';
?>

	

	
