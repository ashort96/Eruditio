<?php

session_start();

include 'libs/phpmailer/PHPMailerAutoload.php';

$errors = array();

if(isset($_POST['name'], $_POST['email'], $_POST['message'])) {
	$fields = array(
			'name' => $_POST['name'],
			'email' => $_POST['email'],
			'message' => $_POST['message']
		);

	foreach($fields as $field => $data) {
		if(empty($data)) {
			$errors[] = 'The ' . $field . ' field is required.';
		}
	}

	if(empty($errors)) {
		$m = new PHPMailer;

		$m->isSMTP();
		$m->SMTPAuth = true;


		$m->Host = 'smtp.gmail.com';
		$m->Username = 'eruditiohelp@gmail.com';
		$m->Password = 'a2gjmnps';
		$m->SMTPSecure = 'ssl';
		$m->Port = 465;

		$m->isHTML();

		$m->Subject = 'Contact form submitted';
		$m->Body = 'From: ' . $fields['name'] . ' (' . $fields['email'] . ')<p>' . $fields['message'] . ' </p>';

		$m->FromName = 'Contact';

		$m->AddAddress('adamconnorshort@gmail.com', 'AdamShort');

		if($m->send()) {
			header('Location: contact.php?sent=1');
			$sent = 1;
			die();
		} else {
			$errors[] = 'Sorry, could not send email. Try again later.';
		}

	}

} else {
	$errors[] = 'Something went wrong.';
}

$_SESSION['errors'] = $errors;
$_SESSION['fields'] = $fields;

header('Location: contact.php');
