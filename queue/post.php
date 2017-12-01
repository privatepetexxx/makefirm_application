<?php

	// POST
	
	
?>

	<form id="queue_entry_form" name="queue_entry_form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	
		<div>
			TYPE <select name="type" required>
					<option value="" selected disabled>Please Select</option>
					<option value="Citizen">Citizen</option>
					<option value="Anonymous">Anonymous</option>
				</select>
		</div>
		<div>
			FIRSTNAME <input name="firstname" type="text" value="" required>
		</div>
		<div>
			LASTNAME <input name="lastname" type="text" value="" required>
		</div>
		<div>
			ORGANISATION <input name="organisation" type="text" value="">
		</div>
		<div>
			SERVICE <select name="service" required>
					<option value="" selected disabled>Please Select</option>
					<option value="Council Tax">Council Tax</option>
					<option value="Benefits">Benefits</option>
					<option value="Rent">Rent</option>
				</select>
		</div>
		<div><input type="submit" value="Add to Queue"></div>
		
	</form>

	
	<div id="show_result" style="display: none;">
		<div id="result_text"></div>
		<a href="queue.php?method=POST" class="">Add another record</a>
		<a href="queue.php" class="">Back to queue</a>
	</div>
