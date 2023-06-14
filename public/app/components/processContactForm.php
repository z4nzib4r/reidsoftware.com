<?php

require '../../vendor/phpmailer/phpmailer/src/Exception.php';
require '../../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../../vendor/phpmailer/phpmailer/src/SMTP.php';
require 'credentials.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../../vendor/autoload.php';

$mail = new PHPMailer(true);

if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
  header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
  die( header( 'location: /' ) );
}

$errors = array();  // array to hold validation errors
$formData = array();    // array to pass back data

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if ( empty($_POST['name']) ) {
		array_push($errors, 'Name is required');
	} else {
		$formData['name'] = sanitize_input($_POST['name']);
	}

	if ( empty($_POST['email']) ) {
		array_push($errors, 'Email is required');
	} else {
		$formData['email'] = sanitize_input($_POST['email']);
	}

	if ( empty($_POST['message']) ) {
		array_push($errors, 'Message is required');
	} else {
		$formData['message'] = sanitize_input($_POST['message']);
	}


	if ( count($errors) == 0 ) {
		
		$email_subject = "Contact form submission from ".clean_string($formData['name'])." "; 

		$email_message = "<html><head></head><body>";
		$email_message .= "<p>Name: ".clean_string($formData['name'])."</p>";
		$email_message .= "<p>Email: ".clean_string($formData['email'])."</p>";
		$email_message .= "<p>Message: ".clean_string($formData['message'])."</p>";
		$email_message .= "</body></html>";

		try {
			//Server settings
//			$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
			$mail->isSMTP();                                            // Send using SMTP
			$mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
			$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
			$mail->Username   = $username;                     // SMTP username
			$mail->Password   = $password;                               // SMTP password
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
			$mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

			//Recipients
			$mail->setFrom('webform@jtrstudio.com');
			$mail->addAddress('jacob@reidsoftware.com');

			// Content
			$mail->isHTML(true);                                  // Set email format to HTML
			$mail->Subject = $email_subject;
			$mail->Body    = $email_message;

			$mail->send();

			$return = [
				'type' => 'success'
			];

			echo json_encode($return);

		} catch (Exception $e) {
			$return = [
				'type' => 'error',
				'message' => $mail->ErrorInfo
			];
			echo json_encode($return);
		}

	} else {
		$return = [
			'type' => 'error',
			'message' => $errors
		];
		echo json_encode($return);
	}

}

function sanitize_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function clean_string($string) {
	$bad = array("content-type","bcc:","to:","cc:","href");
	return str_replace($bad,"",$string);
}

?>