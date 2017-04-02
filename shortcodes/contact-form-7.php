<?php 
/*
 * Drubo Contact Form ShortCode
 * Author: Hastech
 * Author URI: http://hastech.company
 * Version: 1.0.0
 */

add_action('init', 'drubo_contact_form', 99 );

if ( !function_exists('drubo_contact_form')) {

	function drubo_contact_form(){
		
		if (function_exists('kc_add_map')) { 
			$contact_forms = kc_tools::get_cf7_names();
		    kc_add_map(
		        array(
		            'drubo_contact_form' => array(
		                'name' => 'Contact Form',
		                'icon' => 'et-envelope',
		                'category' => DRUBO_SHORTCODE_CATEGORY,
		                'params' => array(
		                	'general' => array(
		                		array(
			                        'name' => 'title',
			                        'label' => 'Title',
			                        'type' => 'text',
			                        'admin_label' => true,
			                        'description' => __( 'Write your section title here.', 'drubo' ),
			                    ),
			                    array(
									'type'			=> 'toggle',
									'name'			=> 'show_separator',
									'label'			=> __( 'Show Separator', 'drubo' ),
									'value'			=> 'yes',
								),
		                    	array(
									'name'        => 'slug',
									'type'        => 'select',
									'label'       => __( 'Select Contact Form', 'drubo' ),
									'admin_label' => true,
									'options'     => $contact_forms,
									'description' => __( 'Choose previously created contact form from the drop down list.', 'drubo' )
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

//drubo contact form shortcode template
function drubo_contact_form_shortcode( $atts, $content = null ){
	extract( 
	 	shortcode_atts( array(
	 	'title'               => '',
	 	'slug'                => '',
	 	'show_separator'      => '',
        'custom_class'        => '',
	 	'custom_css'          => '',
	  	), $atts )
	);		
   
	//custom class		
	$wrap_class  = apply_filters( 'kc-el-class', $atts );

	if( !empty( $custom_class ) ):
	 	$wrap_class[] = $custom_class;
    endif;

	$extra_class =  implode( ' ', $wrap_class );	
   
	global $wpdb;	
        
	$form = $wpdb->get_results("SELECT `ID` FROM `".$wpdb->posts."` WHERE `post_type` = 'wpcf7_contact_form' AND `post_name` = '".esc_attr(sanitize_title($slug))."' LIMIT 1");

    $separator_hide = ($show_separator != 'yes')?'separator_hide' : '';
    $html = '';
    $html .= '<div class="two">';
	$html .= '<div class="help-contact-area white-bg shadow ptb-100">';
	if( !empty($title)):
	$html .= '<div class="'.$separator_hide.' section-title text-center">';
	$html .= '<h4>'.$title.'</h4>';
	$html .= '</div>';
	endif;
	if( !empty( $form ) ) :
	$html .= '<div id="contact-form" class="form-group">';
             $html .= do_shortcode('[contact-form-7 id="'.$form[0]->ID.'" title="'.esc_attr($title).'"]');
		$html .= '</div>';
	else:
		$html .= __('Please select one of contact form 7 for display.', 'drubo');
	endif;
	$html .= '</div>';
    $html .= '</div>';
	return $html;
}
add_shortcode( 'drubo_contact_form', 'drubo_contact_form_shortcode' );