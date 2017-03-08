<?php
/*
 * Drubo Progressbar
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

add_action('init', 'drubo_progressbar_map'); // Call kc_add_map function ///

if(!function_exists('drubo_progressbar_map')):
	function drubo_progressbar_map(){
		if(function_exists('kc_add_map')): // if kingComposer is active
		kc_add_map(
		    array(
		        'drubo_progressbar' => array( // <-- shortcode tag name

		            'name' => __('Progressbar', DRUBO_SHORTCODE_TEXT_DOMAIN),
		            'description' => __('Drubo progressbar', DRUBO_SHORTCODE_TEXT_DOMAIN),
		            'icon' => 'kc-icon-progress',
		            'category' => DRUBO_SHORTCODE_CATEGORY,
		            'params' => array(

		     			'general' => array(
								array(
									'type'			=> 'group',
									'label'			=> __('Slides', DRUBO_SHORTCODE_TEXT_DOMAIN),
									'name'			=> 'progressbar',
									'options'		=> array('add_text' => __('Add new progress bar', 'kingcomposer')),
									'value' => base64_encode( json_encode(array(
										"1" => array(
											"label" => "PHOTOSHOP",
											"percent" => "90%"
										),
										"2" => array(
											"label" => "ILLUSTRATOR",
											"percent" => "80%"
										),
										"3" => array(
											"label" => "Wordpress",
											"percent" => "95%"
										),
	
									) ) ),
									'params' => array(
										array(
											'type' => 'text',
											'label' => __( 'Label', DRUBO_SHORTCODE_TEXT_DOMAIN ),
											'name' => 'label',
										),
										array(
											'type' => 'number_slider',
											'label' => __( 'Parcent', DRUBO_SHORTCODE_TEXT_DOMAIN ),
											'name' => 'percent',
											'options' => array(
												'min' => 0,
												'max' => '100',
												'unit' => '%',
												'show_input' => true
											)
										),
									),
								), // group array
			                array(
			                    'name' => 'custom_css_class',
			                    'label' => __('CSS Class',DRUBO_SHORTCODE_TEXT_DOMAIN),
			                    'description' => __('Custom css class for css customisation',DRUBO_SHORTCODE_TEXT_DOMAIN),
			                    'type' => 'text'
			                ),
							),// general
		                    'styling' => array(
		                    	array(
		                    		'name' => 'custom_css',
		                    		'type' => 'css',
		                    		'options' => array(
		                    			array(
		                    				'Slide style'   => array(
		                    					array(
		                    						'property' => 'color', 
		                    						'label' => 'Label color', 
		                    						'selector' => '+ .skill .progress .lead',
		                    					),
		                    					array(
		                    						'property' => 'background-color', 
		                    						'label' => 'Progressbar Color', 
		                    						'selector' => '+ .skill .progress-bar',
		                    					),
		                    					array(
		                    						'property' => 'border-color', 
		                    						'label' => 'Progressbar Rounder border', 
		                    						'selector' => '+ .skill .progress-bar::after',
		                    					),
		                    					array(
		                    						'property' => 'background-color', 
		                    						'label' => 'Progressbar Rounder background', 
		                    						'selector' => '+ .skill .progress-bar::after',
		                    					),

		                    				),
		                    			)
		                    		) //End of options
		                    	)
		                    ), //End of styling
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

function drubo_progressbar_func($atts,$content){
ob_start();
        $drubo_shortcode_atts = shortcode_atts(array(
                'progressbar' => '',
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
	<div class="skill">
		<div class="skill-content">
			<div class="skill">
			<?php foreach($progressbar as $key => $value): ?>


				<!-- PROGRESS START -->
				<div class="progress">
					<div class="lead"><?php echo $value->label; ?><span><?php echo $value->percent; ?></span></div>
					<div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: <?php echo $value->percent; ?>; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="<?php echo $value->percent; ?>" class="progress-bar wow fadeInLeft  animated"></div>
				</div>
				<!-- PROGRESS END -->	



		    <?php endforeach; ?>					
			</div>						
		</div>
		<!-- skill end -->
	</div>
</div>
<?php
    return ob_get_clean();
}
add_shortcode('drubo_progressbar','drubo_progressbar_func');