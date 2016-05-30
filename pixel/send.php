<?php
// check for form submission - if it doesn't exist then send back to contact form
if (!isset($_POST['save']) || $_POST['save'] != 'contact') {
    header('Location: contact'); exit;
}
	
// get the posted data
$name = $_POST['contact_name'];
$email_address = $_POST['contact_email'];
$message = $_POST['contact_message'];
	
// check that a name was entered
if (empty($name))
    $error = 'You must enter your name.';
// check that an email address was entered
elseif (empty($email_address)) 
    $error = 'You must enter your email address.';
// check for a valid email address
elseif (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email_address))
    $error = 'You must enter a valid email address.';
// check that a message was entered
elseif (empty($message))
    $error = 'You must enter a message.';
		
// check if an error was found - if there was, send the user back to the form
if (isset($error)) {
    header('Location: contact?e='.urlencode($error)); exit;
}
		
// write the email content
$email_content = "Name: $name\n";
$email_content .= "Email Address: $email_address\n";
$email_content .= "Message:\n\n$message";

$headers = 	'From:' . $email_address . "\r\n" .
    		'Reply-To:' . $email_address . "\r\n" .
    		'X-Mailer: PHP/' . phpversion();
	
// send the email
mail ("rex64.jp@gmail.com", "nuovo messaggio dal sito", $email_content, $headers);
	
// send the user back to the form
header('Location: contact?s='.urlencode('Thank you for your message.')); exit;

?>

