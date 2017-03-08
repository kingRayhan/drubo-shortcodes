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

add_action('init', 'drubo_section_title'); // Call kc_add_map function ///

if(!function_exists('drubo_section_title')):
	function drubo_section_title(){
		if(function_exists('kc_add_map')): // if kingComposer is active
		kc_add_map(
		    array(
		        'drubo_section_title' => array( // <-- shortcode tag name

		            'name' => __('Section Title', DRUBO_SHORTCODE_TEXT_DOMAIN),
		            'description' => __('Description Here', DRUBO_SHORTCODE_TEXT_DOMAIN),
		            'icon' => 'kc-icon-progress',
		            'category' => DRUBO_SHORTCODE_CATEGORY,
		            'params' => array(
		        // .............................................
		        // ..... // Content TAB
		        // .............................................

		         	'Content' => array(

		                array(
		                    'name' => 'title',
		                    'label' => __('Title',DRUBO_SHORTCODE_TEXT_DOMAIN),
		                    'type' => 'text',
		                    'value' => 'Section Title'
		                ),
		                array(
		                    'name' => 'desc',
		                    'label' => __('Description',DRUBO_SHORTCODE_TEXT_DOMAIN),
		                    'type' => 'textarea',
		                    'value' => base64_encode('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim nostrud exercitation ullamco laboris nisi.')
		                ),
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
		                    				'Title'   => array(
		                    					array(
		                    						'property' => 'font-family', 
		                    						'label' => 'Title Font Family', 
		                    						'selector' => '+ .section-title h1'
		                    					),
		                    					array( 
		                    						'property' => 'font-size', 
		                    						'label' => 'Title Font Size', 
		                    						'selector' => '+ .section-title h1' 
		                    					),
		                    					array(
		                    						'property' => 'font-weight', 
		                    						'label' => 'Title Font Weight', 
		                    						'selector' => '+ .section-title h1'
		                    					),
		                    					array(
		                    						'property' => 'text-align', 
		                    						'label' => 'Title Text Align', 
		                    						'selector' => '+ .section-title h1'
		                    					),
		                    					array(
													'property' => 'text-transform', 
													'label' => 'Title Text Transform', 
													'selector' => '+ .section-title h1'
												),
		                    					array( 
		                    					    'property' => 'color', 
		                    					    'label' => 'Title Color', 
		                    					    'selector' => '+ .section-title h1' 
		                    					),
		                    				),
		                    				///////
		                    				'description'   => array(
		                    					array(
		                    						'property' => 'font-family', 
		                    						'label' => 'Description Font Family', 
		                    						'selector' => '+ .section-title p'
		                    					),
		                    					array( 
		                    						'property' => 'font-size', 
		                    						'label' => 'Description Font Size', 
		                    						'selector' => '+ .section-title p' 
		                    					),
		                    					array( 
		                    						'property' => 'line-height', 
		                    						'label' => 'Description Line Height', 
		                    						'selector' => '+ .section-title p' 
		                    					),
		                    					array(
		                    						'property' => 'font-weight', 
		                    						'label' => 'Description Font Weight', 
		                    						'selector' => '+ .section-title p'
		                    					),
		                    					array(
		                    						'property' => 'text-align', 
		                    						'label' => 'Description Text Align', 
		                    						'selector' => '+ .section-title p'
		                    					),
		                    					array(
													'property' => 'text-transform', 
													'label' => 'Description Text Transform', 
													'selector' => '+ .section-title p'
												),
		                    					array( 
		                    					    'property' => 'color', 
		                    					    'label' => 'Description Color', 
		                    					    'selector' => '+ .section-title p' 
		                    					),
		                    				),
		                    				///
		                    				'divider' => array(
		                    					array(
		                    						'property' => 'background-color', 
		                    						'label' => 'Divider color', 
		                    						'selector' => '+ .section-title h1::after, .section-title h4::after'
		                    					)
		                    				)
		                    				
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

function drubo_section_title_shortcode($atts,$content){
ob_start();
        $drubo_shortcode_atts = shortcode_atts(array(
                'title' => '',
                'desc' => '',
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
	<div class="section-title text-center">
		<h1><?php echo $title; ?></h1>
		<p><?php echo $desc; ?></p>
	</div>	
</div>

<?php
    return ob_get_clean();
}
add_shortcode('drubo_section_title' ,'drubo_section_title_shortcode');