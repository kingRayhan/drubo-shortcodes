<?php
/*
 * Drubo Our Service 2
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

add_action('init', 'drubo_ourservice_2_map'); // Call kc_add_map function ///

if(!function_exists('drubo_ourservice_2_map')):
	function drubo_ourservice_2_map(){
		if(function_exists('kc_add_map')): // if kingComposer is active
		kc_add_map(
		    array(
		        'drubo_shortcode_ourservoces_two' => array( // <-- shortcode tag name

		            'name' => __('Our Service 2', DRUBO_SHORTCODE_TEXT_DOMAIN),
		            'description' => __('Drubo Ourservice', DRUBO_SHORTCODE_TEXT_DOMAIN),
		            'icon' => 'kc-icon-progress',
		            'category' => DRUBO_SHORTCODE_CATEGORY,
		            'params' => array(


		         	'Content' => array(

		                array(
		                    'name' => 'title',
		                    'label' => __('Title',DRUBO_SHORTCODE_TEXT_DOMAIN),
		                    'type' => 'text',
		                    'value' => 'GRAPHIC DESIGN'
		                ),
		                array(
		                    'name' => 'desc',
		                    'label' => __('Description',DRUBO_SHORTCODE_TEXT_DOMAIN),
		                    'type' => 'textarea',
		                    'value' => base64_encode('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standdummy text ever since the 1500s,')
		                ),
		                array(
		                    'name' => 'icon',
		                    'label' => __('Icon',DRUBO_SHORTCODE_TEXT_DOMAIN),
		                    'type' => 'icon_picker',
		                    'value' => 'fa-paint-brush'
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
		                    						'label' => 'Font Family', 
		                    						'selector' => '+ .srvc-content > h6'
		                    					),
		                    					array( 
		                    						'property' => 'font-size', 
		                    						'label' => 'Font Size', 
		                    						'selector' => '+ .srvc-content > h6' 
		                    					),
		                    					array(
		                    						'property' => 'font-weight', 
		                    						'label' => 'Font Weight', 
		                    						'selector' => '+ .srvc-content > h6'
		                    					),
		                    					array(
		                    						'property' => 'text-align', 
		                    						'label' => 'Text Align', 
		                    						'selector' => '+ .srvc-content > h6'
		                    					),
		                    					array(
													'property' => 'text-transform', 
													'label' => 'Text Transform', 
													'selector' => '+ .srvc-content > h6'
												),
		                    					array( 
		                    					    'property' => 'color', 
		                    					    'label' => 'Color', 
		                    					    'selector' => '+ .srvc-content > h6' 
		                    					),
		                    					array( 
		                    					    'property' => 'color', 
		                    					    'label' => 'Hover Color', 
		                    					    'selector' => '+ .specialty-single:hover .icon-titel h6, .ourservice-single:hover .srvc-content h6' 
		                    					),
		                    				),
		                    				'Description'   => array(
		                    					array(
		                    						'property' => 'font-family', 
		                    						'label' => 'Font Family', 
		                    						'selector' => '+ .srvc-content > p'
		                    					),
		                    					array( 
		                    						'property' => 'font-size', 
		                    						'label' => 'Font Size', 
		                    						'selector' => '+ .srvc-content > p' 
		                    					),
		                    					array(
		                    						'property' => 'font-weight', 
		                    						'label' => 'Font Weight', 
		                    						'selector' => '+ .srvc-content > p'
		                    					),
		                    					array(
		                    						'property' => 'line-height', 
		                    						'label' => 'Line height', 
		                    						'selector' => '+ .srvc-content > p'
		                    					),
		                    					array(
		                    						'property' => 'text-align', 
		                    						'label' => 'Text Align', 
		                    						'selector' => '+ .srvc-content > p'
		                    					),
		                    					array(
													'property' => 'text-transform', 
													'label' => 'Text Transform', 
													'selector' => '+ .srvc-content > p'
												),
		                    					array( 
		                    					    'property' => 'color', 
		                    					    'label' => 'Color', 
		                    					    'selector' => '+ .srvc-content > p' 
		                    					),
		                    				),
		                    				'Icon'   => array(
		                    					array(
		                    						'property' => 'color', 
		                    						'label' => 'Icon color', 
		                    						'selector' => '+ .ourservice-single a i'
		                    					),
		                    					array( 
		                    						'property' => 'background-color', 
		                    						'label' => 'Icon Backgrount Color', 
		                    						'selector' => '+ .ourservice-single a' 
		                    					),
		                    					array(
		                    						'property' => 'background-color', 
		                    						'label' => 'Icon Hover Background color', 
		                    						'selector' => '+ .specialty-single:hover .icon-titel i::after, .social-rotate ul li a:hover, .ourservice-single:hover .srvc-icon a'
		                    					),
		                    					array(
		                    						'property' => 'color', 
		                    						'label' => 'Hover Icon color', 
		                    						'selector' => '+ .specialty-single:hover .icon-titel i, .ourservice-single:hover .srvc-icon a i'
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

function drubo_shortcode_ourservoces_two_func($atts,$content){
    ob_start();
        $drubo_shortcode_atts = shortcode_atts(array(
                'title' => '',
                'desc' => '',
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
    <div class="ourservice-single text-center">
        <div class="srvc-icon mb-40">
            <a href="#"><i class="<?php echo $icon; ?>" aria-hidden="true"></i></a>
        </div>
        <div class="srvc-content">
            <h6><?php echo $title; ?></h6>
            <p><?php echo $desc; ?></p>
        </div>
    </div>
</div>
<?php
    return ob_get_clean();
}
add_shortcode('drubo_shortcode_ourservoces_two','drubo_shortcode_ourservoces_two_func');