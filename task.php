<?php 
	
	if ($_SERVER['REQUEST_METHOD'] === "POST") {

		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email   = $_POST['email'];
		$mobileno = $_POST['mobileno'];


		if (empty($fname) or empty($lname) or empty($email) or empty($mobileno)) { 
			echo "please fill up the form properly";
		}
		else {
			echo "Registration Successful";
		}

	}

	else {

		echo "Request Rejected";
	}
?>