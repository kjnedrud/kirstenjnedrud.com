<?php

// config
require_once('includes/config.php');
require_once('includes/helpers.php');

$data = $_POST;

// clean up data
foreach ($data as $key=>$val) {
	$data[$key] = htmlspecialchars(trim($val));
}

// keep track of validation errors
$errors = array();

// validate email
if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
	$errors[] = array('name' => 'email', 'message' => 'Please enter a valid email.');
}
// validate message
if (empty($data['message'])) {
	// $errors['message'] = 'Message cannot be blank.';
	$errors[] = array('name' => 'message', 'message' => 'Message cannot be blank.');
}
// validate recaptcha token
if (empty($data['token'])) {
	$errors[] = array('name' => 'token', 'message' => 'Invalid recatcha token.');
}

// validation errors - allow user to fix and try again
if (!empty($errors)) {
	// print out error json
	echo json_encode(array(
		'status' => 'error',
		'message' => 'Please fix the error(s) above.',
		'errors' => $errors
	));
	die();
}

// verify recaptcha first
$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
$recaptcha_params = array(
	'secret' => RECAPTCHA_SECRET,
	'response' => $data['token'],
);
$recaptcha_response_json = send_post_request($recaptcha_url, $recaptcha_params);
$recaptcha_response = json_decode($recaptcha_response_json);
if (!$recaptcha_response->success) {
	// print out error json
	echo json_encode(array(
		'status' => 'error',
		'message' => 'Error verifying captcha.',
	));
	die();
}

// set up email
$sendgrid_params = array(
	'to' => 'kjnedrud@gmail.com',
	'toname' => 'Kirsten J. Nedrud',
	'from' => 'noreply@kirstenjnedrud.com',
	'fromname' => $data['email'],
	'replyto' => $data['email'],
	'subject' => 'New contact message from: ' . $data['email'],
	'text' => $data['message'],
);

$sendgrid_url = SENDGRID_URL . 'api/mail.send.json';

$response_json = send_post_request($sendgrid_url, $sendgrid_params, SENDGRID_API_KEY);

// handle response
if ($response_json) {
	// decode json response
	$response = json_decode($response_json);

	// success
	if ($response->message == 'success') {
		// print out success json
		echo json_encode(array('status' => 'success'));
		die();
	}
	// error
	else if ($response->message == 'error' || !empty($response->errors)) {
		// log error response
		error_log($response_json);
	}
	// some other response
	else {
		// log error response
		error_log('Unexpected response from SendGrid API');
		error_log($response_json);
	}
}

// print out error json
echo json_encode(array('status' => 'error'));
die();
