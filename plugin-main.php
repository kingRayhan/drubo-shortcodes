<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 * Plugin Name: Drubo Shortcodes
 * Author: Hastech
 * Author URI: http://hastech.company
*/




define('DRUBO_SHORTCODE_CATEGORY', 'Drubo Shortcodes');
define('DRUBO_SHORTCODE_TEXT_DOMAIN', 'drubo');

require dirname(__FILE__) . '/shortcodes/drubo-section-title.php';
require dirname(__FILE__) . '/shortcodes/drubo-counter-up.php';
//require dirname(__FILE__) . '/shortcodes/drubo_our_service.php';
require dirname(__FILE__) . '/shortcodes/drubo_our_service_two.php';
require dirname(__FILE__) . '/shortcodes/drubo_we_works.php';
require dirname(__FILE__) . '/shortcodes/drubo_speciality.php';
require dirname(__FILE__) . '/shortcodes/drubo_video.php';




add_action('wp_head',function(){
	?>
<style>
.successful-single {
    float: none;
    width: 100%;
}
</style>
	<?php
});
