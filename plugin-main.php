<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 * Plugin Name: Drubo Shortcodes
 * Description: shortcodes for drubo multipurpose wordpress theme
 * Author: Hastech
 * Author URI: http://hastech.company
*/

/**
 * TODO
 * --------------------------------
 * Our Service
 * circular progressbar
 * Team Member
 * Pricing Table 2
 * 
 */




define('DRUBO_SHORTCODE_CATEGORY', 'Drubo Shortcodes');
define('DRUBO_SHORTCODE_TEXT_DOMAIN', 'drubo');

require dirname(__FILE__) . '/shortcodes/drubo-section-title.php';
require dirname(__FILE__) . '/shortcodes/drubo-func-fact.php';
require dirname(__FILE__) . '/shortcodes/drubo_our_service.php';
require dirname(__FILE__) . '/shortcodes/drubo_we_works.php';
require dirname(__FILE__) . '/shortcodes/drubo-feature.php';
require dirname(__FILE__) . '/shortcodes/drubo_video.php';
require dirname(__FILE__) . '/shortcodes/drubo_brand_slider.php';
require dirname(__FILE__) . '/shortcodes/drubo_progressbar.php';
require dirname(__FILE__) . '/shortcodes/drubo_testimonial.php';
require dirname(__FILE__) . '/shortcodes/drubo_testimonial_two.php'; 
require dirname(__FILE__) . '/shortcodes/drubo_pricing_table.php';
require dirname(__FILE__) . '/shortcodes/drubo_pricing_table_2.php';
require dirname(__FILE__) . '/shortcodes/social_icons.php';
require dirname(__FILE__) . '/shortcodes/drubo_team.php';
require dirname(__FILE__) . '/shortcodes/drubo_blog.php';
require dirname(__FILE__) . '/shortcodes/drubo-portfolio.php';
require dirname(__FILE__) . '/shortcodes/drubo-portfolio-content.php';
require dirname(__FILE__) . '/shortcodes/drubo-button.php';
//require dirname(__FILE__) . '/shortcodes/drubo-contact-form.php'; // TODO
require dirname(__FILE__) . '/shortcodes/drubo-google-map.php';
require dirname(__FILE__) . '/shortcodes/drubo-tabs.php';
require dirname(__FILE__) . '/shortcodes/drubo-contact-info.php';




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




