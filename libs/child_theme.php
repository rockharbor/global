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
 * Set up some additional menu areas while overwriting the original 'footer' one
 * with a new name so it's consistent for this theme
 */
	public function after() {
		parent::after();
	}

/**
 * Overrides `setupAssets()` to include some custom assets
 */
	function setupAssets() {
		parent::setupAssets();

		$base = $this->info('url');
		wp_register_script('custom', "$base/js/custom.js");
		wp_register_style('custom-tablet', "$base/css/custom-tablet.css");

		wp_enqueue_script('custom');
		wp_enqueue_style('custom-tablet');
	}
}
