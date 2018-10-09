<?php
if($_POST)
{
	$fullname = $_POST['fullname'];
	$message = $_POST['message'];
	$email = $_POST['email'];

	$to = 'hiren.joshi@hotmail.com';
	$subject = 'Caress Contact Form';
	$from = $email;
	 
	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	 
	// Create email headers
	$headers .= "From: no-reply@brushbuddies.com\r\n".
	    'Reply-To: '.$from."\r\n" .
	    'X-Mailer: PHP/' . phpversion();
	 
	// Compose a simple HTML email message
	$message = '<html><body>';
	$message .= '<h1 style="color:#f40;">Cares Contact Form Data</h1>';
	$message .= '<p style="color:#080;font-size:18px;">Name: '.$fullname.'</p>';
	$message .= '<p style="color:#080;font-size:18px;">Email: '.$email.'</p>';
	$message .= '<p style="color:#080;font-size:18px;">Message: '.$message.'</p>';
	$message .= '</body></html>';
	 
	// Sending email
	// if(mail($to, $subject, $message, $headers))
	//     echo 'Your mail has been sent successfully.';
	// else
	//     echo 'Unable to send email. Please try again.';

	echo 'Yes';

}
