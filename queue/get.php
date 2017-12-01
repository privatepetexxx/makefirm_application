<?php 
	
		
	// GET RESULTS
	if(isset($_GET['filter'])): 
		$filter = $_GET['filter']; 
		echo $filter;
		$queue_data = db::query('SELECT * FROM queue WHERE type="'.$filter.'" ORDER BY timestamp ASC');
	else:
		$queue_data = db::query('SELECT * FROM queue ORDER BY timestamp ASC');
	endif;
	
	
	foreach($queue_data as $queue){
		
		$entry = queue::getEntry($queue);
		
		print "<PRE>"; print_r($entry); print "</PRE>";
		
		
	}
	
	
	
?>