<?php
/*
 * Drubo Section Title ShortCode
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

add_action('init', 'drubo_social_icons_map'); // Call kc_add_map function ///

if(!function_exists('drubo_social_icons_map')):
	function drubo_social_icons_map(){
		if(function_exists('kc_add_map')): // if kingComposer is active
		kc_add_map(
		    array(
		        'drubo_social_icons' => array( // <-- shortcode tag name

		            'name' => __('Social Icons', DRUBO_SHORTCODE_TEXT_DOMAIN),
		            'icon' => 'kc-icon-progress',
		            'category' => DRUBO_SHORTCODE_CATEGORY,
		            'params' => array(
		        // .............................................
		        // ..... // Content TAB
		        // .............................................

		         	'Content' => array(

								array(
									'type'			=> 'group',
									'label'			=> __('Testimonials', DRUBO_SHORTCODE_TEXT_DOMAIN),
									'name'			=> 'icons',
									'options'		=> array('add_text' => __('Add new progress bar', 'kingcomposer')),
									'value' => base64_encode( json_encode(array(
										"1" => array(
											"icon" => "fa-facebook",
											"url" => "https://www.facebook.com/rayhan095",
										),
									) ) ),
									'params' => array(
										array(
											'type' => 'icon_picker',
											'label' => __( 'Icon', DRUBO_SHORTCODE_TEXT_DOMAIN ),
											'name' => 'icon',
										),
										array(
											'type' => 'text',
											'label' => __( 'url', DRUBO_SHORTCODE_TEXT_DOMAIN ),
											'name' => 'url',
										),
									),
								), // group array
		                array(
		                    'name' => 'custom_css_class',
		                    'label' => __('CSS Class',DRUBO_SHORTCODE_TEXT_DOMAIN),
		                    'description' => __('Custom css class for css customisation',DRUBO_SHORTCODE_TEXT_DOMAIN),
		                    'type' => 'text'
		                ),
		         	), // content
		        // .............................................
		        // ..... // Styling
		        // .............................................
		                    'styling' => array(
		                    	array(
		                    		'name' => 'custom_css',
		                    		'type' => 'css',
		                    		'options' => array(
		                    			array(
		                    				'screens' => 'any,1024,999,767,479',
		                    				'Icon'   => array(
		                    					array(
		                    						'property' => 'color', 
		                    						'label' => 'Icon color', 
		                    						'selector' => '+ .social-rotate ul li a'
		                    					),
		                    					array(
		                    						'property' => 'color', 
		                    						'label' => 'Icon hover color', 
		                    						'selector' => '+ .social-rotate ul li a:hover'
		                    					),
		                    					array( 
		                    						'property' => 'background-color', 
		                    						'label' => 'Icon background color', 
		                    						'selector' => '+ .social-rotate ul li a' 
		                    					),
		                    					array(
		                    						'property' => 'background-color', 
		                    						'label' => 'Icon hover background color', 
		                    						'selector' => '+ .social-rotate ul li a:hover'
		                    					),
		                    				),
		                    				'BOX'   => array(
		                    					array(
		                    						'property' => 'margin', 
		                    						'label' => 'Margin', 
		                    						'selector' => '+ .social-rotate ul li a'
		                    					),
		                    					array(
		                    						'property' => 'padding', 
		                    						'label' => 'Padding', 
		                    						'selector' => '+ .social-rotate ul li a'
		                    					),
		                    					array(
		                    						'property' => 'background', 
		                    						'label' => 'Background', 
		                    						'selector' => '+ .social-rotate ul li a'
		                    					),
		                    				),
		                    				
		                    			)
		                    		) //End of options
		                    	)
		                    ), //End of styling
                            'animate' => array(
								array(
									'name'    => 'animate',
									'type'    => 'animate'
								)
							), //End of animate
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
// [$shortcode_name title="" desc="" css_class=""]

function drubo_social_icons_func($atts,$content){
ob_start();
        $drubo_shortcode_atts = shortcode_atts(array(
                'icons' => '',
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
	<div class="social-rotate pt-15">
		<ul>
			<?php foreach ($icons as $key => $value): ?>
				<li><a href="<?php echo $value->url; ?>"><i class="<?php echo $value->icon; ?>"></i></a></li>
			<?php endforeach; ?>

		</ul>
	</div>
</div>
<?php
    return ob_get_clean();
}
add_shortcode('drubo_social_icons' ,'drubo_social_icons_func');