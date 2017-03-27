<?php 
/*
 * Drubo Contact Info ShortCode
 * Author: Hastech
 * Author URI: http://hastech.company
 * Version: 1.0.0
 */

add_action('init', 'drubo_contact_info', 99 );

if ( !function_exists('drubo_contact_info')) {

	function drubo_contact_info(){

		if (function_exists('kc_add_map')) { 

		    kc_add_map(
		        array(
		            'drubo_contact_info' => array(
		                'name' => 'Contact Info',
		                'icon' => 'et-envelope',
		                'category' => DRUBO_SHORTCODE_CATEGORY,
		                'params' => array(
		                	'general' => array(
		                    	array(
			                        'name' => 'contact_options',
			                        'label' => __('Contact Options', 'drubo'),
			                        'type' => 'group',
			                        'options' => array('add_text' => __(' Add new contact info', 'drubo')),
						            'value' => base64_encode( json_encode(array(
										'1' => array(
											'iconName' => 'fa fa-map-marker',
											'content' => '',
										),
										'2' => array(
											'iconName' => 'fa fa-envelope',
											'content' => '',
										),
										'3' => array(
											'iconName' => 'fa fa-phone',
											'content' => '',
										),
									) ) ),

									'params' => array(
										array(
											'type' => 'icon_picker',
											'label' => __( 'Icon', 'drubo' ),
											'name' => 'iconName',
											'description' => __( 'Select your icon from here.', 'drubo' ),
										),
										 array(
					                        'name' => 'content',
					                        'label' => __('Contact Content', 'drubo'),
					                        'type' => 'textarea',
					                        'description' => __( 'Write your contact content here.', 'drubo' ),
					                    ),
						            ),
			                    ),
			                    array(
			                        'name' => 'custom_class',
			                        'label' => __('Class', 'drubo'),
			                        'type' => 'text',
			                        'description' => __( 'Extra CSS class', 'drubo' ),
			                    ),
		                    ), //End of general
                            'styling' => array(
		                    	array(
		                    		'name' => 'custom_css',
		                    		'type' => 'css',
		                    		'options' => array(
		                    			array(
		                    				'screens' => 'any,1024,999,767,479',
		                    				'Icon' => array(
												array('property' => 'color', 'label' => 'Color', 'selector' => '+.adrs-details ul li a'),
												array('property' => 'color', 'label' => 'Hover Color', 'selector' => '+.adrs-details ul li:hover a'),
												array('property' => 'background-color', 'label' => 'Background Color', 'selector' => '+.adrs-details ul li a'),
												array('property' => 'background-color', 'label' => 'BG Color Hover', 'selector' => '+.adrs-details ul li:hover a'),
												array('property' => 'font-size', 'label' => 'Font Size', 'selector' => '+.adrs-details ul li a'),
												array('property' => 'text-transform', 'label' => 'Text Transform', 'selector' => '+.adrs-details ul li ap'),
												array('property' => 'height', 'label' => 'Height', 'selector' => '+.adrs-details ul li a'),
												array('property' => 'width', 'label' => 'Width', 'selector' => '+.adrs-details ul li a'),
												array('property' => 'line-height', 'label' => 'Line Height', 'selector' => '+.adrs-details ul li a'),
												array('property' => 'border', 'label' => 'Border', 'selector' => '+.adrs-details ul li a'),
												array('property' => 'border-color', 'label' => 'Border Hover Color', 'selector' => '+.adrs-details ul li:hover a'),
												array('property' => 'border-radius', 'label' => 'Border Radius', 'selector' => '+.adrs-details ul li a'),
												array('property' => 'border-radius', 'label' => 'Border Radius Hover', 'selector' => '+.adrs-details ul li:hover a'),
											),
											'Desc' => array(
												array('property' => 'color', 'label' => 'Color', 'selector' => '+.adrs-details p'),
												array('property' => 'font-family', 'label' => 'Font Family', 'selector' => '+.adrs-details p'),
												array('property' => 'font-size', 'label' => 'Font Size', 'selector' => '+.adrs-details p'),
												array('property' => 'font-weight', 'label' => 'Font Weight', 'selector' => '+.adrs-details p'),
												array('property' => 'line-height', 'label' => 'Line Height', 'selector' => '+.adrs-details p'),
												array('property' => 'text-transform', 'label' => 'Text Transform', 'selector' => '+.adrs-details p'),
												array('property' => 'text-align', 'label' => 'Text Align', 'selector' => '+.adrs-details p'),
												array('property' => 'margin', 'label' => 'Margin', 'selector' => '+.adrs-details p'),
												array('property' => 'padding', 'label' => 'Padding', 'selector' => '+.adrs-details p'),
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
		                   
		                ) // End of params

		            ),  // End of elemnt of drubo_feature
		        )
		    ); // End add map

		} // End if

	} 

 } // End if

//drubo contact info shortcode template
function drubo_contact_info_shortcode( $atts, $content = null ){
	extract( 
	 	shortcode_atts( array(
	 	'contact_options' => '',
        'custom_class'       => '',
	 	'custom_css'         => '',
	  	), $atts )
	);		

	//custom class		
	$wrap_class  = apply_filters( 'kc-el-class', $atts );

	if( !empty( $custom_class ) ):
	 	$wrap_class[] = $custom_class;
    endif;

	$extra_class =  implode( ' ', $wrap_class );		
         
	$html  = '';
	$html .= '<div class="adrs-details mt-60 '.$extra_class.'">';
	$html .= '<ul>';
	if( !empty($contact_options) ):
    	foreach ( $contact_options as $contact ) :
	$html .= '<li><a href="#"><i class="'.$contact->iconName.'"></i></a>
	         <p>'.$contact->content.'</p>
			 </li>';
        endforeach;
    endif;
	$html .= '</ul>';
	$html .= '</div>';
	return $html;
}
add_shortcode( 'drubo_contact_info', 'drubo_contact_info_shortcode' );