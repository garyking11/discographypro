<?php
//print_r($_POST); 
if (isset($_POST['email'])) {
	
	//multiple recipients
	/*
	$to  = 'gking@sesamecommunications.com' . ', '; // note the comma
	$to .= 'gary@garykingweb.com'
	*/
	
	//single recipient
	$to = 'gary@garykingweb.com'; // doctor's email
	$subject = 'Patient Consultation Request';
	$message = "Name: " . trim(stripslashes(htmlspecialchars($_POST["name"]))) . "\n" 
	. "Phone: " . trim(stripslashes(htmlspecialchars($_POST["phone"]))) . "\n" 
	. "Email: " . trim(stripslashes(htmlspecialchars($_POST["email"]))) . "\n"
	. "Message: " . trim(stripslashes(htmlspecialchars($_POST["message"]))) . "\n";
	//. "Question: " . trim(stripslashes(htmlspecialchars($_POST["lpQuestion"])));
	 
	$headers = "From: " . $_POST["name"] . "<" . $_POST["email"] .">\r\n" . "Reply-To: " . $_POST["email"] . "\r\n" . "Return-path: " . $_POST["email"];
	
	mail($to, $subject, $message, $headers);

	echo "<p class='response'>Thank you for your inquiry. We will get back to you as soon as possible.</p>";
}
else {
	echo 'Please fill out the name, email and phone fields in the form.';
}
?> 