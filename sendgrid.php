<?php

// config
require_once('includes/config.php');

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

// set up email
$params = array(
	'to' => 'kjnedrud@gmail.com',
	'toname' => 'Kirsten J. Nedrud',
	'from' => 'noreply@kirstenjnedrud.com',
	'fromname' => $data['email'],
	'replyto' => $data['email'],
	'subject' => 'New contact message from: ' . $data['email'],
	'text' => $data['message'],
);

$request = SENDGRID_URL . 'api/mail.send.json';

// Generate curl request
$session = curl_init($request);
// Tell PHP not to use SSLv3 (instead opting for TLS)
curl_setopt($session, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
curl_setopt($session, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . SENDGRID_API_KEY));
// Tell curl to use HTTP POST
curl_setopt ($session, CURLOPT_POST, true);
// Tell curl that this is the body of the POST
curl_setopt ($session, CURLOPT_POSTFIELDS, $params);
// Tell curl not to return headers, but do return the response
curl_setopt($session, CURLOPT_HEADER, false);
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

// obtain response
$response_json = curl_exec($session);

// check for curl error
if(curl_errno($session)){
	error_log(curl_error($session));
}

curl_close($session);

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
