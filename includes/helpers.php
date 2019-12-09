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
 * @param  [array] $project : associative array of project info
 * @param  [boolean] $echo
 * @return [string]
 */
function get_project_html($project, $echo = true) {

	if ($echo) {
		include('project.php');
	}
	else {
		ob_start();
		include('project.php');
		return ob_get_clean();
	}
}
