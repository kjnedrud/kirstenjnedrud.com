<?php
/**
 * Helper Functions :)
 */

/**
 * Get path to asset with auto-generated timestamp for cache-busting
 * Based on http://particletree.com/notebook/automatically-version-your-css-and-javascript-files/
 * @param  [string] $asset
 * @param  [boolean] $echo
 * @return [string]
 */
function get_asset($asset, $echo = true) {

	$pathinfo = pathinfo($asset);
	$timestamp = filemtime($_SERVER['DOCUMENT_ROOT'] . $asset);

	if (!empty($timestamp)) {
		$asset_with_timestamp = "{$pathinfo['dirname']}/{$pathinfo['filename']}.$timestamp.{$pathinfo['extension']}";
	}

	if ($echo) {
		echo $asset_with_timestamp ?? $asset;
	}
	else {
		return $asset_with_timestamp ?? $asset;
	}
}

/**
 * Get path to responsive image at a given size
 * @param  [string] $image
 * @param  [string] $dimensions
 * @param  [boolean] $echo
 * @return [string]
 */
function get_responsive_image($image, $dimensions, $echo = true) {
	$img_pieces = explode('.', $image);
	$img_name = $img_pieces[0];
	$img_ext = $img_pieces[1];
	$responsive_image = "{$img_name}-$dimensions.{$img_ext}";
	// use cache-busting asset function
	get_asset("/assets/img/{$responsive_image}", $echo);
}

/**
 * Get html for a project
 * @param  [array] $options : associative array of project info
 * @param  [boolean] $echo
 * @return [string]
 */
function get_project_html($options, $echo = true) {

	$defaults = [
		'type' => 'primary',
	];
	$project = array_merge($defaults, $options);
	$template = "project.php";

	if ($echo) {
		include($template);
	}
	else {
		ob_start();
		include($template);
		return ob_get_clean();
	}
}

/**
 * Wrapper function to send a cURL post request
 * @param  [string] $url : request URL
 * @param  [array] $params : associative array of params to send with request
 * @param  [string] $auth : optional auth header token
 * @return [string] $response_json : resposne as a JSON-encoded string
 */
function send_post_request($url, $params, $auth = null) {

	// Generate curl request
	$session = curl_init($url);

	// Tell PHP not to use SSLv3 (instead opting for TLS)
	curl_setopt($session, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);

	// Auth header
	if ($auth) {
		curl_setopt($session, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $auth));
	}

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

	return $response_json;
}
