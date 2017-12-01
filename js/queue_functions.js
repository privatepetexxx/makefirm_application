// JS FUNCTIONS


$(document).ready(function(){
	
	$("#queue_entry_form").on("submit", function(e){
		
		e.preventDefault();
		
		$.ajax({
			url: "queue/insert_record.php",
			type: "post",
			dataType: "json",
			data: $("#queue_entry_form").serialize(),
			success: function(data){
				
				if(data.success){
					console.log("record added");
					$("#show_result").show();
					$("#result_text").html("Record Added Successfully");
				} else {
					$("#result_text").html("There has been an error");
					console.log(data.error);
				};
				
			}
			
		});
		
		
		
	});

});
