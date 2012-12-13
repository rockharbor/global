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

/**
 * Overrides `setupAssets()` to include some custom assets
 */
	function setupAssets() {
		$base = $this->info('url');
		wp_register_style('custom', "$base/css/custom.css");
		
		wp_enqueue_style('custom');
		
		parent::setupAssets();
	}
}