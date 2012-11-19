<?php
/**
 * RH Global theme
 * 
 * @package rockharbor
 * @subpackage global
 */
class ChildTheme extends RockharborThemeBase {
		
/**
 * List of options for this theme
 * 
 * @var array
 */
	protected $themeOptions = array(
		'slug' => 'global',
		'short_name' => '',
		'supports' => array(
			'message',
			'staff',
			'curriculum'
		),
		'hide_name_in_global_nav' => true
	);
}