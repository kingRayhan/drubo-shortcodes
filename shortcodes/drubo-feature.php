<?php 
/*
 * Drubo Feature ShortCode
 * Author: Hastech
 * Author URI: http://hastech.company
 * Version: 1.0.0
 */

add_action('init', 'drubo_feature', 99 );

if ( !function_exists('drubo_feature')) {

	function drubo_feature(){

		if (function_exists('kc_add_map')) { 

		    kc_add_map(
		        array(
		            'drubo_feature' => array(
		                'name' => 'Drubo Feature',
		                'icon' => 'et-presentation',
		                'category' => DRUBO_SHORTCODE_CATEGORY,

		                'params' => array(
		                    'general' => array(
		                    	array(
			                        'name' => 'icon_name',
			                        'label' => __('Feature Icon', 'drubo'),
			                        'type' => 'icon_picker',
			                        'value' => 'fa-heart',
			                        'description' => __( 'Select your feature icon from here.', 'drubo' ),
			                    ),
		                    	array(
			                        'name' => 'title',
			                        'label' => __('Feature Title', 'drubo'),
			                        'type' => 'text',
			                        'value' => 'GREAT SUPPORT',
			                        'admin_label' => true,
			                        'description' => __( 'Write your feature title here.', 'drubo' ),
			                    ),
			                    array(
			                        'name' => 'feature_content',
			                        'label' => __('Feature Content', 'drubo'),
			                        'type' => 'textarea',
			                        'value' => base64_encode('Lorem ipsum dolor sit amet, consectetur ish dipisicing elit, sed do eiusmod tempor lorem incididunt ut labore et .'),
			                        'description' => __( 'Write your feature content here.', 'drubo' ),
			                    ),
			                    array(
									'name'	=> 'show_icon',
									'label'	=> __( 'Display Icon', 'drubo' ),
									'type'	=> 'toggle',
									'value'	=> 'yes',
								),
								array(
									'name'	=> 'show_content',
									'label'	=> __( 'Display Content', 'drubo' ),
									'type'	=> 'toggle',
									'value'	=> 'yes',
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
		                    				'Title' => array(
												array('property' => 'color', 'label' => 'Color', 'selector' => '+ .icon-titel h6'),
												array('property' => 'color', 'label' => 'Color Hover', 'selector' => '+:hover .icon-titel h6'),
												array('property' => 'font-family', 'label' => 'Font Family', 'selector' => '+ .icon-titel h6'),
												array('property' => 'font-size', 'label' => 'Font Size', 'selector' => '+ .icon-titel h6'),
												array('property' => 'font-weight', 'label' => 'Font Weight', 'selector' => '+ .icon-titel h6'),
												array('property' => 'line-height', 'label' => 'Line Height', 'selector' => '+ .icon-titel h6'),
												array('property' => 'text-transform', 'label' => 'Text Transform', 'selector' => '+ .icon-titel h6'),
												array('property' => 'text-align', 'label' => 'Text Align', 'selector' => '+ .icon-titel h6'),
												array('property' => 'margin', 'label' => 'Margin', 'selector' => '+ .icon-titel h6'),
												array('property' => 'padding', 'label' => 'Padding', 'selector' => '+ .icon-titel h6'),
											),
											'Desc' => array(
												array('property' => 'color', 'label' => 'Color', 'selector' => '+ .spe-discribe p'),
												array('property' => 'color', 'label' => 'Color Hover', 'selector' => '+:hover .spe-discribe p'),
												array('property' => 'font-family', 'label' => 'Font Family', 'selector' => '+ .spe-discribe p'),
												array('property' => 'font-size', 'label' => 'Font Size', 'selector' => '+ .spe-discribe p'),
												array('property' => 'font-weight', 'label' => 'Font Weight', 'selector' => '+ .spe-discribe p'),
												array('property' => 'line-height', 'label' => 'Line Height', 'selector' => '+ .spe-discribe p'),
												array('property' => 'text-transform', 'label' => 'Text Transform', 'selector' => '+ .spe-discribe p'),
												array('property' => 'text-align', 'label' => 'Text Align', 'selector' => '+ .spe-discribe p'),
												array('property' => 'padding', 'label' => 'Padding', 'selector' => '+ .spe-discribe p'),
												array('property' => 'margin', 'label' => 'Margin', 'selector' => '+ .spe-discribe p'),
											),
											'Icon' => array(
												array('property' => 'color', 'label' => 'Color', 'selector' => '+ .icon-titel i'),
												array('property' => 'color', 'label' => 'Hover Color', 'selector' => '+:hover .icon-titel i'),
												array('property' => 'background-color', 'label' => 'Background Color', 'selector' => '+ .icon-titel i::after'),
												array('property' => 'background-color', 'label' => 'BG Color Hover', 'selector' => '+ .icon-titel i::after'),
												array('property' => 'font-size', 'label' => 'Font Size', 'selector' => '+ .icon-titel i'),
												array('property' => 'height', 'label' => 'Height', 'selector' => '+ .icon-titel i'),
												array('property' => 'width', 'label' => 'Width', 'selector' => '+ .icon-titel i'),
												array('property' => 'line-height', 'label' => 'Line Height', 'selector' => '+ .icon-titel i'),
												array('property' => 'border', 'label' => 'Border', 'selector' => '+ .icon-titel i::after'),
												array('property' => 'border-color', 'label' => 'Border Hover Color', 'selector' => '+:hover .icon-titel i::after'),
												array('property' => 'border-radius', 'label' => 'Border Radius', 'selector' => '.icon-titel i::after'),
												array('property' => 'border-radius', 'label' => 'Border Radius Hover', 'selector' => '+:hover .icon-titel i::after'),
											),
											'Box' => array(
												array('property' => 'padding', 'label' => 'Padding', 'selector' => '+.specialty-single.two'),
												array('property' => 'margin', 'label' => 'Margin', 'selector' => '+.specialty-single.two'),
												array('property' => 'border', 'label' => 'Border', 'selector' => '+.specialty-single.two'),
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


//drubo feature shortcode template
function drubo_feature_shortcode( $atts, $content = null ){

    extract( 
	 	shortcode_atts( array(
	 	'title'           => '',
	 	'feature_content' => '',
	 	'icon_name'       => '',
	 	'show_icon'       => '',
	 	'show_content'    => '',
	 	'custom_class'    => '',
	 	'custom_css'      => '',
	  	), $atts )
	);		

	//custom class		
	$wrap_class  = apply_filters( 'kc-el-class', $atts );

	if( !empty( $custom_class ) ):
	 	$wrap_class[] = $custom_class;
    endif;

	$extra_class =  implode( ' ', $wrap_class );
		
							
	$html = '';
	$html .= '<div class="specialty-single two '.$extra_class.'">';
	$html .= '<div class="icon-titel">';
    if( !empty($icon_name) && $show_icon == 'yes' ):
	$html .= '<i class="' . $icon_name . '" aria-hidden="true"></i>';
    endif;
    if( !empty($title) ):
	$html .= '<h6>' . $title . '</h6>';
    endif;
	$html .= '</div>';
	if( !empty($feature_content) && $show_content == 'yes' ):
	$html .= '<div class="spe-discribe">';
	$html .= '<p>' . $feature_content . '</p>';
	$html .= '</div>';
	endif;
	
	$html .= '</div>';

	return $html;
}
add_shortcode( 'drubo_feature', 'drubo_feature_shortcode');