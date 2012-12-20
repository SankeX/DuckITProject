<?php
$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_service = $_POST['service'];
$field_details = $_POST['details'];

$mail_to = 'mail@sankex.eu'; // Test Email address
$subject = 'Service Request from: '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Service: '.$field_service."\n";
$body_message .= 'Other Details: '."\n".$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you shortly.');
		window.location = '/serviceform.html'; 
		//Domain tentative
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed.');
		window.location = '/serviceform.html'; 
		//Domain tentative
	</script>
<?php
}
?>