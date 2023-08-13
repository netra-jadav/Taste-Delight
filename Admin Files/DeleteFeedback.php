<?php
	
	
	$ref_id = $_REQUEST['ref_id'];
	$con = mysqli_connect("localhost","root","","ofdproject");
	
	$q = "Delete from contactpage where ref_id='$ref_id'";
	
	$c = mysqli_query($con,$q);
	
	if($c)
	{
		?>
				<script>
						window.location="Feedback.php";
				</script>
		<?php
	}
	else
	{
		?>
				<script>
						alert("Error");
						window.location="Feedback.php";
				</script>
		<?php
	}
?>