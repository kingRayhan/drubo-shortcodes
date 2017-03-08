<?php
/*
 * Drubo Speciality
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

add_action('init', 'drubo_shortcode_speciality_map'); // Call kc_add_map function ///

if(!function_exists('drubo_shortcode_speciality_map')):
	function drubo_shortcode_speciality_map(){
		if(function_exists('kc_add_map')): // if kingComposer is active
		kc_add_map(
		    array(
		        'drubo_shortcode_speciality' => array( // <-- shortcode tag name

		            'name' => __('Speciality', DRUBO_SHORTCODE_TEXT_DOMAIN),
		            'description' => __('Drubo Speciality', DRUBO_SHORTCODE_TEXT_DOMAIN),
		            'icon' => 'kc-icon-progress',
		            'category' => DRUBO_SHORTCODE_CATEGORY,
		            'params' => array(


		         	'Content' => array(
			                array(
			                    'name' => 'title',
			                    'label' => __('Title',DRUBO_SHORTCODE_TEXT_DOMAIN),
			                    'type' => 'text',
			                    'value' => 'PLAN'
			                ),
			                array(
			                    'name' => 'icon',
			                    'label' => __('Icon',DRUBO_SHORTCODE_TEXT_DOMAIN),
			                    'type' => 'icon_picker',
			                    'value' => 'fa-paint-brush'
			                ),
			                array(
			                    'name' => 'desc',
			                    'label' => __('Icon',DRUBO_SHORTCODE_TEXT_DOMAIN),
			                    'type' => 'textarea',
			                    'value' => base64_encode('Lorem ipsum dolor sit amet, consectetur ish dipisicing elit, sed do eiusmod tempor lorem incididunt ut labore et .')
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
		                    						'selector' => '+ .icon-titel h6'
		                    					),
		                    					array( 
		                    						'property' => 'font-size', 
		                    						'label' => 'Font Size', 
		                    						'selector' => '+ .icon-titel h6' 
		                    					),
		                    					array(
		                    						'property' => 'font-weight', 
		                    						'label' => 'Font Weight', 
		                    						'selector' => '+ .icon-titel h6'
		                    					),
		                    					array(
		                    						'property' => 'text-align', 
		                    						'label' => 'Text Align', 
		                    						'selector' => '+ .icon-titel h6'
		                    					),
		                    					array(
													'property' => 'text-transform', 
													'label' => 'Text Transform', 
													'selector' => '+ .icon-titel h6'
												),
		                    					array( 
		                    					    'property' => 'color', 
		                    					    'label' => 'Color', 
		                    					    'selector' => '+ .icon-titel h6' 
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
		                    						'selector' => '+ .spe-discribe > p'
		                    					),
		                    					array( 
		                    						'property' => 'font-size', 
		                    						'label' => 'Font Size', 
		                    						'selector' => '+ .spe-discribe > p' 
		                    					),
		                    					array(
		                    						'property' => 'font-weight', 
		                    						'label' => 'Font Weight', 
		                    						'selector' => '+ .spe-discribe > p'
		                    					),
		                    					array(
		                    						'property' => 'line-height', 
		                    						'label' => 'Line Height', 
		                    						'selector' => '+ .spe-discribe > p'
		                    					),
		                    					array(
		                    						'property' => 'text-align', 
		                    						'label' => 'Text Align', 
		                    						'selector' => '+ .spe-discribe > p'
		                    					),
		                    					array(
													'property' => 'text-transform', 
													'label' => 'Text Transform', 
													'selector' => '+ .spe-discribe > p'
												),
		                    					array( 
		                    					    'property' => 'color', 
		                    					    'label' => 'Color', 
		                    					    'selector' => '+ .spe-discribe > p' 
		                    					),
		                    				),
		                    				'Icon'   => array(
		                    					array(
		                    						'property' => 'color', 
		                    						'label' => 'Icon color', 
		                    						'selector' => '+ .icon-titel i'
		                    					),
		                    					array(
		                    						'property' => 'color', 
		                    						'label' => 'Icon hover color', 
		                    						'selector' => '+ .specialty-single:hover .icon-titel i'
		                    					),
		                    					array(
		                    						'property' => 'background-color', 
		                    						'label' => 'Icon background color', 
		                    						'selector' => '+ .icon-titel i::after'
		                    					),
		                    					array(
		                    						'property' => 'background-color', 
		                    						'label' => 'Hover background color', 
		                    						'selector' => '+ .specialty-single:hover .icon-titel i::after'
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

function drubo_shortcode_speciality_func($atts,$content){
ob_start();
        $drubo_shortcode_atts = shortcode_atts(array(
                'title' => '',
                'icon' => '',
                'desc' => '',
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
	<div class="specialty-single two">
		<div class="icon-titel">
			<i class="icon <?php echo $icon; ?>" aria-hidden="true"></i>
			<h6 class="title"><?php echo $title; ?></h6>
		</div>
		<div class="spe-discribe">
			<p class="desc"><?php echo $desc; ?></p>
		</div>
	</div>
</div>
<?php
    return ob_get_clean();
}
add_shortcode('drubo_shortcode_speciality','drubo_shortcode_speciality_func');