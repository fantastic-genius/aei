<?php
//This is for outbound letter form submission
	include "../includes/constant.php";
	
	$connect = mysqli_connect("$DB_HOST", "$DB_USERNAME", "$DB_PASWWORD", "$DB_NAME");
	if(!$connect){
		die ("Could not connect to Database: " . mysqli_connect_error());
	}
	
	

	if(isset($_POST['submit'])) {
		$query = mysqli_query($connect, "INSERT INTO 
				outbound_letter(serial_number, po_name, unit, zone, purpose, approval)
				VALUES ('$_POST[serial_num]', '$_POST[po_name]', '$_POST[unit]', '$_POST[zone]', 			
				'$_POST[purpose]', '$_POST[approval]')");
				
		if (!$query){
			echo "could not submit the information: " . mysqli_error($connect);
		}else{
			header("Location: ../outbound_letters.php?submit=successful");
			
		}
				
	}
	
	
			


?>