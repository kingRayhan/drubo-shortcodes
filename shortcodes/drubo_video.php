<?php
/*
 * Drubo Video Shortcode
 * Author: Hastech
 * Author URI: http://hastech.company
 * Version: 1.0.0
 * ======================================================
 */


/**
 * =======================================================
 *    KC Shortcode Map
 * =======================================================
 */

add_action('init', 'drubo_video_shortcode_map'); // Call kc_add_map function ///

if(!function_exists('drubo_video_shortcode_map')):
	function drubo_video_shortcode_map(){
		if(function_exists('kc_add_map')): // if kingComposer is active
		kc_add_map(
		    array(
		        'drubo_video_shortcode' => array( // <-- shortcode tag name

		            'name' => __('Video', DRUBO_SHORTCODE_TEXT_DOMAIN),
		            'icon' => 'sl-control-play',
		            'category' => DRUBO_SHORTCODE_CATEGORY,
		            'params' => array(


		         	'Video' => array(
			                array(
			                    'name' => 'video_url',
			                    'label' => __('Video URL',DRUBO_SHORTCODE_TEXT_DOMAIN),
			                    'description' => __('youtube video URL',DRUBO_SHORTCODE_TEXT_DOMAIN),
			                    'type' => 'text',
			                ),
			                array(
			                    'name' => 'preview_img',
			                    'label' => __('Preview image',DRUBO_SHORTCODE_TEXT_DOMAIN),
			                    'description' => __('youtube video URL',DRUBO_SHORTCODE_TEXT_DOMAIN),
			                    'type' => 'attach_image',
			                ),
			                array(
			                    'name' => 'icon',
			                    'label' => __('Play Icon',DRUBO_SHORTCODE_TEXT_DOMAIN),
			                    'type' => 'icon_picker',
			                    'value' => 'sl-control-play'
			                ),
			                array(
			                    'name' => 'custom_css_class',
			                    'label' => __('CSS Class',DRUBO_SHORTCODE_TEXT_DOMAIN),
			                    'description' => __('Custom css class for css customisation',DRUBO_SHORTCODE_TEXT_DOMAIN),
			                    'type' => 'text'
			                ),
		         	), // content
		        // .............................................
		        // .............................................
		        // .............................................

		        /////////////////////////////////////////////////////////
		            )// Params

		        )// end shortcode key
		    )// first array
		); // End add map
		endif;
	}
endif;




/**
 * =======================================================
 *    Register Shortcode
 * =======================================================
 */

function drubo_vodeo_shortcode_func($atts,$content){
ob_start();
        $drubo_shortcode_atts = shortcode_atts(array(
                'video_url' => '',
                'preview_img' => '',
                'icon' => '',
            // css
                'custom_css' => '',
                'custom_css_class' => '',
        ),$atts); 
        extract($drubo_shortcode_atts);

    //custom class		
	$wrap_class  = apply_filters( 'kc-el-class', $atts );
	if( !empty( $custom_class ) ):
	 	$wrap_class[] = $custom_class;
    endif;
	$extra_class =  implode( ' ', $wrap_class );	
?>
<div class="<?php echo $extra_class; ?> <?php echo $custom_css_class; ?>">
	<div class="video-area">
		<div class="img">
			<img src="<?php 
			$image_size = apply_filters('','large');
			$img_src = wp_get_attachment_image_src($preview_img , $image_size)[0]; 
			echo $img_src;

			?>" alt="">
			<a href="<?php echo $video_url; ?>" class="popup-youtube">
				<i class="<?php echo $icon; ?>"></i>
			</a>
		</div>
	</div>
</div>
<?php
    return ob_get_clean();
}
add_shortcode('drubo_video_shortcode','drubo_vodeo_shortcode_func');