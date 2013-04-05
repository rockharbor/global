<?php
/**
 * Resets the `$theme` global to the subsite's theme
 */
function _include_theme() {
	global $theme;
	require_once 'libs/child_theme.php';
	$theme = new ChildTheme();
}
add_action('after_setup_theme', '_include_theme');

if (isset($_COOKIE['hidesplash']) && $_COOKIE['hidesplash'] !== 'www') {
	if (empty($_SERVER['HTTP_REFERER'])) {
		header('Location: http://'.$_COOKIE['hidesplash'].'.rockharbor.org');
		die();
	}
}
