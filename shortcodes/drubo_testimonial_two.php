<?php
/*
 * Drubo Testimonial two
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

add_action('init', 'drubo_testimonial_two_map'); // Call kc_add_map function ///

if(!function_exists('drubo_testimonial_two_map')):
	function drubo_testimonial_two_map(){
		if(function_exists('kc_add_map')): // if kingComposer is active
		kc_add_map(
		    array(
		        'drubo_testimonial_two' => array( // <-- shortcode tag name

		            'name' => __('Testimonial 2', DRUBO_SHORTCODE_TEXT_DOMAIN),
		            'description' => __('Drubo testimonial', DRUBO_SHORTCODE_TEXT_DOMAIN),
		            'icon' => 'kc-icon-progress',
		            'category' => DRUBO_SHORTCODE_CATEGORY,
		            'params' => array(

		     			'general' => array(
								array(
									'type'			=> 'group',
									'label'			=> __('Testimonials', DRUBO_SHORTCODE_TEXT_DOMAIN),
									'name'			=> 'testimonial',
									'options'		=> array('add_text' => __('Add new progress bar', 'kingcomposer')),
									'value' => base64_encode( json_encode(array(
										"1" => array(
											"client_name" => "PHOTOSHOP",
											"client_desig" => "CEO",
											"client_testimonial" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip "
										),

	
									) ) ),
									'params' => array(
										array(
											'type' => 'text',
											'label' => __( 'Client Name', DRUBO_SHORTCODE_TEXT_DOMAIN ),
											'name' => 'client_name',
										),
										array(
											'type' => 'text',
											'label' => __( 'Client Designation', DRUBO_SHORTCODE_TEXT_DOMAIN ),
											'name' => 'client_desig',
										),
										array(
											'type' => 'attach_image',
											'label' => __( 'Client Photo', DRUBO_SHORTCODE_TEXT_DOMAIN ),
											'name' => 'client_photo',
										),
										array(
											'type' => 'textarea',
											'label' => __( 'Client Testimonial', DRUBO_SHORTCODE_TEXT_DOMAIN ),
											'name' => 'client_testimonial',
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
		                    				'screens' => 'any,1024,999,767,479',
		                    				'Testimonial text'   => array(
		                    					array(
		                    						'property' => 'font-family', 
		                    						'label' => 'Font Family', 
		                    						'selector' => '+ .client-say > p'
		                    					),
		                    					array( 
		                    						'property' => 'font-size', 
		                    						'label' => 'Font Size', 
		                    						'selector' => '+ .client-say > p' 
		                    					),
		                    					array( 
		                    						'property' => 'line-height', 
		                    						'label' => 'Line height', 
		                    						'selector' => '+ .client-say > p' 
		                    					),
		                    					array(
		                    						'property' => 'font-weight', 
		                    						'label' => 'Font Weight', 
		                    						'selector' => '+ .client-say > p'
		                    					),
		                    					array(
		                    						'property' => 'text-align', 
		                    						'label' => 'Text Align', 
		                    						'selector' => '+ .client-say > p'
		                    					),
		                    					array(
													'property' => 'text-transform', 
													'label' => 'Text Transform', 
													'selector' => '+ .client-say > p'
												),
		                    					array( 
		                    					    'property' => 'color', 
		                    					    'label' => 'Color', 
		                    					    'selector' => '+ .client-say > p' 
		                    					),
		                    					array( 
		                    					    'property' => 'margin', 
		                    					    'label' => 'Margin', 
		                    					    'selector' => '+ .client-say > p' 
		                    					),
		                    				),// Testimonial text
		                    				'Client Name'   => array(
		                    					array(
		                    						'property' => 'font-family', 
		                    						'label' => 'Font Family', 
		                    						'selector' => '+ .client-info > h6'
		                    					),
		                    					array( 
		                    						'property' => 'font-size', 
		                    						'label' => 'Font Size', 
		                    						'selector' => '+ .client-info > h6' 
		                    					),
		                    					array( 
		                    						'property' => 'line-height', 
		                    						'label' => 'Line height', 
		                    						'selector' => '+ .client-info > h6' 
		                    					),
		                    					array(
		                    						'property' => 'font-weight', 
		                    						'label' => 'Font Weight', 
		                    						'selector' => '+ .client-info > h6'
		                    					),
		                    					array(
		                    						'property' => 'text-align', 
		                    						'label' => 'Text Align', 
		                    						'selector' => '+ .client-info > h6'
		                    					),
		                    					array(
													'property' => 'text-transform', 
													'label' => 'Text Transform', 
													'selector' => '+ .client-info > h6'
												),
		                    					array( 
		                    					    'property' => 'color', 
		                    					    'label' => 'Color', 
		                    					    'selector' => '+ .client-info > h6' 
		                    					),
		                    					array( 
		                    					    'property' => 'margin', 
		                    					    'label' => 'Margin', 
		                    					    'selector' => '+ .client-info > h6' 
		                    					),
		                    				),// Client Name
		                    				'Client Designation'   => array(
		                    					array(
		                    						'property' => 'font-family', 
		                    						'label' => 'Font Family', 
		                    						'selector' => '+ .client-info > p, .client-adrs > p'
		                    					),
		                    					array( 
		                    						'property' => 'font-size', 
		                    						'label' => 'Font Size', 
		                    						'selector' => '+ .client-info > p, .client-adrs > p' 
		                    					),
		                    					array( 
		                    						'property' => 'line-height', 
		                    						'label' => 'Line height', 
		                    						'selector' => '+ .client-info > p, .client-adrs > p' 
		                    					),
		                    					array(
		                    						'property' => 'font-weight', 
		                    						'label' => 'Font Weight', 
		                    						'selector' => '+ .client-info > p, .client-adrs > p'
		                    					),
		                    					array(
		                    						'property' => 'text-align', 
		                    						'label' => 'Text Align', 
		                    						'selector' => '+ .client-info > p, .client-adrs > p'
		                    					),
		                    					array(
		                    						'property' => 'font-style', 
		                    						'label' => 'Font Style', 
		                    						'selector' => '+ .client-info > p, .client-adrs > p'
		                    					),
		                    					array(
													'property' => 'text-transform', 
													'label' => 'Text Transform', 
													'selector' => '+ .client-info > p, .client-adrs > p'
												),
		                    					array( 
		                    					    'property' => 'color', 
		                    					    'label' => 'Color', 
		                    					    'selector' => '+ .client-info > p, .client-adrs > p' 
		                    					),
		                    					array( 
		                    					    'property' => 'margin', 
		                    					    'label' => 'Margin', 
		                    					    'selector' => '+ .client-info > p, .client-adrs > p' 
		                    					),
		                    					array( 
		                    					    'property' => 'background-color', 
		                    					    'label' => 'Border Botom color', 
		                    					    'selector' => '+ .client-info > p::after' 
		                    					),
		                    				),// Client designation
		                    				'Testimonial panel'   => array(
		                    					array(
		                    						'property' => 'background', 
		                    						'label' => 'Testimonial Background', 
		                    						'selector' => '+ .client-testimonial-single'
		                    					),
		                    				),// Testimonial
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

function drubo_testimonial_two_func($atts,$content){
ob_start();
        $drubo_shortcode_atts = shortcode_atts(array(
                'testimonial' => '',
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
				<!-- Testimonial Content Area Start -->
				<div class="client-testimonial-owl pt-55">

<?php foreach ($testimonial as $key => $value): 

			$image_size = apply_filters('','large');
			$img_src = wp_get_attachment_image_src($value->client_photo , $image_size)[0];
?>

					<!-- Client Testimonial Single -->
					<div class="client-testimonial-single bg-opacity-1">
						<div class="ct-cp">
							<img src="<?php echo $img_src; ?>" alt="" />
						</div>
						<div class="client-say text-white">
							<p><?php echo $value->client_testimonial; ?></p>
							<div class="client-info">
								<h6><?php echo $value->client_name; ?></h6>
								<p><?php echo $value->client_desig; ?></p>
							</div>
						</div>
					</div>
					<!-- Client Testimonial Single -->

<?php endforeach; ?>

				</div>
				<!-- Testimonial Content Area End -->

</div>
<?php
    return ob_get_clean();
}
add_shortcode('drubo_testimonial_two','drubo_testimonial_two_func');









