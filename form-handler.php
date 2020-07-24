<?php 
$errors = '';
$myemail = 'patrick@southerncaliforniasolar.org';
if (empty($_POST['name'])  ||
	empty($_POST['lastname'])  ||  
	empty($_POST['email']) ||
	empty($_POST['subject']) ||
	empty($_POST['interest']) ||
	empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$interest = $_POST['interest'];
$message = $_POST['message']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "MAO | New Message By $name $lastname";
	$email_body = "MAO | Check Page.".
	" Here are the details:\n Name: $name \n Last Name: $lastname \n Email: $email \n Subject: $subject \n Interest: $interest \n Message \n $message"; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email";
	
	mail($to,$email_subject,$email_body,$headers);

	header('Location: thanks.html');
} 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>MAO</title>
</head>

<body>

<?php
echo nl2br($errors);
?>


</body>
</html>