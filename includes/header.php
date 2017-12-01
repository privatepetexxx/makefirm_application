<?php 

	// HEADER
	
	
	// make sure all classes are called when needed.
	spl_autoload_register(function($class){
		require_once dirname(__DIR__)."/classes/{$class}.php";
	});
	
?>
<!DOCTYPE html>
<html>
	<head>

	<!-- SCRIPTS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/queue_functions.js"></script>

	
	</head>
	<body>
	
	<div style="margin-bottom: 40px;">
		
		<!-- MENU -->
		<a href="queue.php?method=GET" class="">View All</a>
		<a href="queue.php?method=GET&&filter=Citizen" class="">View Citizens</a>
		<a href="queue.php?method=GET&&filter=Anonymous" class="">View Anonymous</a>
		<a href="queue.php?method=POST" class="">New Entry</a>
	
	</div>
	
