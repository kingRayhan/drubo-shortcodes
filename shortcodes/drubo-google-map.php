<?php 
/*
 * Drubo Google Map ShortCode
 * Author: Hastech
 * Author URI: http://hastech.company
 * Version: 1.0.0
 */

add_action('init', 'drubo_google_map', 99 );

if ( !function_exists('drubo_google_map')) {

	function drubo_google_map(){
		if (function_exists('kc_add_map')) { 

		    kc_add_map(
		        array(
		            'drubo_google_map' => array(
		                'name' => 'Drubo Google Map',
		                'icon' => 'et-map-pin',
		                'category' => DRUBO_SHORTCODE_CATEGORY,
		                'params' => array(
		                	'general' => array(
		                		array(
			                        'name' => 'zoom',
			                        'label' => __('Zoom', 'drubo'),
			                        'type' => 'text',
			                        'admin_label' => true,
			                        'value' => '16',
			                    ),
			                    array(
			                        'name' => 'latitude',
			                        'label' => __('Latitude', 'drubo'),
			                        'type' => 'text',
			                        'value' => '34.073781',
			                    ),
			                    array(
			                        'name' => 'longitude',
			                        'label' => __('Longitude', 'drubo'),
			                        'type' => 'text',
			                        'value' => '-84.302295',
			                    ),
			                    array(
			                        'name' => 'width',
			                        'label' => __('Width', 'drubo'),
			                        'type' => 'text',
			                        'value' => '100%',
			                    ),
			                    array(
			                        'name' => 'height',
			                        'label' => __('Height', 'drubo'),
			                        'type' => 'text',
			                        'value' => '500px',
			                    ),
			                    array(
			                        'name' => 'marker_icon',
			                        'label' => __( 'Upload Marker Icon', 'drubo'),
			                        'type' => 'attach_image',
			                        'value' => '',
			                    ),
			                    array(
			                        'name' => 'custom_class',
			                        'label' => __('Class', 'drubo'),
			                        'type' => 'text',
			                        'description' => __( 'Extra CSS class', 'drubo' ),
			                    ),
		                    ), //End of general
		                    
                            'animate' => array(
								array(
									'name'    => 'animate',
									'type'    => 'animate'
								)
							), //End of animate
		                   
		                ) // End of params

		            ),  // End of elemnt of drubo_feature
		        )
		    ); // End add map

		} // End if

	} 

 } // End if

//drubo google map shortcode template
add_action('wp_head', 'drubo_googlemap_head'); 
function drubo_googlemap_head(){ ?>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4HK9CBH7xsHFwPYe3T7mp4eI9G-irK_M"></script>
<?php }

function drubo_google_map_shortcode( $atts, $content = null ){
	extract( 
	 	shortcode_atts( array(
	 	'zoom'           => '',
	 	'latitude'       => '',
	 	'longitude'      => '',
        'marker_icon'    => '',
        'width'          => '',
        'height'         => ''
	  	), $atts )
	);	

	ob_start();	
	if( !empty($marker_icon) ):
    	$marker_icon = wp_get_attachment_image_src( $marker_icon, 'full' );
    endif;	
    ?>
    <div class="map-area">
		<div id="googleMap" style="width:<?php echo $width; ?>;height:<?php echo $height; ?>;"></div>
	</div>
	<script type="text/javascript">
		function initialize() {
		  var mapOptions = {
			zoom: <?php echo esc_attr( $zoom ); ?>,
			scrollwheel: false,
			center: new google.maps.LatLng(<?php echo esc_attr( $latitude ); ?>, <?php echo esc_attr( $longitude ); ?>)
		  };

		  var map = new google.maps.Map(document.getElementById('googleMap'),
			  mapOptions);


		  var marker = new google.maps.Marker({
			position: map.getCenter(),
			animation:google.maps.Animation.BOUNCE,
			icon: '<?php echo $marker_icon[0]; ?>',
			map: map
		  });

		}

		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
<?php 
return  ob_get_clean();
}
add_shortcode( 'drubo_google_map', 'drubo_google_map_shortcode' );