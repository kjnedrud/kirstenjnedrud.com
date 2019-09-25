<?php
/**
 * Helper Functions :)
 */

/**
 * Get path to asset with auto-generated timestamp for cache-busting
 * Based on http://particletree.com/notebook/automatically-version-your-css-and-javascript-files/
 * @return [String]
 */
function get_asset($asset, $echo = true) {

	$pathinfo = pathinfo($asset);
	$timestamp = filemtime($_SERVER['DOCUMENT_ROOT'] . $asset);

	if (!empty($timestamp)) {
		$asset_with_timestamp = "{$pathinfo['dirname']}/{$pathinfo['filename']}.$timestamp.{$pathinfo['extension']}";
	}

	if ($echo) {
		echo $asset_with_timestamp ? $asset_with_timestamp : $asset;
		// todo: upgrade server to php7 so we can use this
		// echo $asset_with_timestamp ?? $asset;
	}
	else {
		return $asset_with_timestamp ? $asset_with_timestamp : $asset;
		// todo: upgrade server to php7 so we can use this
		// return $asset_with_timestamp ?? $asset;
	}
}
