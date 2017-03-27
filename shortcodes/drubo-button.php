<?php 
/*
 * Drubo Button ShortCode
 * Author: Hastech
 * Author URI: http://hastech.company
 * Version: 1.0.0
 */

add_action('init', 'drubo_button', 99 );

if ( !function_exists('drubo_button')) {

	function drubo_button(){

		if (function_exists('kc_add_map')) { 

		    kc_add_map(
		        array(
		            'drubo_button' => array(
		                'name' => 'Drubo Button',
		                'icon' => 'sl-plus',
		                'category' => DRUBO_SHORTCODE_CATEGORY,
		                'params' => array(
		                    'general' => array(
		                    	array(
			                        'name' => 'button_title',
			                        'label' => __( 'Button Title', 'drubo'),
			                        'type' => 'text',
			                        'value' => 'Text Title',
			                        'admin_label' => true,
			                        'description' => __( 'Write your button title here.', 'drubo' ),
			                    ),
			                    array(
			                        'name' => 'button_link',
			                        'label' => __('Link', 'drubo'),
			                        'type' => 'link',
			                        'value' => '#',
			                        'description' => __( 'Write your button link here', 'drubo' ),
			                    ),
			                    
			                    array(
			                        'name' => 'custom_class',
			                        'label' => 'Class',
			                        'type' => 'text',
			                        'description' => __( 'Extra CSS class', 'drubo' ),
			                    ),
		                    ), //End of general

		                    'styling' => array(
								array(
									'type'			=> 'css',
									'name'			=> 'custom_css',
									'options'		=> array(
										array(
											'screens' => 'any,1024,999,767,479',
											'Button Style' => array(
												array('property' => 'color', 'label' => 'Text Color', 'selector' => '+ .read-more-btn > a'),
												array('property' => 'background-color', 'label' => 'Background Color', 'selector' => '+ .read-more-btn > a'),
												array('property' => 'font-family', 'label' => 'Font Family', 'selector' => '+ .read-more-btn > a'),
												array('property' => 'font-size', 'label' => 'Text Size', 'selector' => '+ .read-more-btn > a'),
												array('property' => 'line-height', 'label' => 'Line Height', 'selector' => '+ .read-more-btn > a'),
												array('property' => 'font-weight', 'label' => 'Font Weight', 'selector' => '+ .read-more-btn > a'),
												array('property' => 'text-transform', 'label' => 'Text Transform', 'selector' => '+ .read-more-btn > a'),
												array('property' => 'text-align', 'label' => 'Align', 'selector' => '+ .read-more-btn > a'),
												array('property' => 'letter-spacing', 'label' => 'Letter Spacing', 'selector' => '+ .read-more-btn > a'),
												array('property' => 'width', 'selector' => '+ .read-more-btn > a'),
												array('property' => 'height', 'selector' => '+ .read-more-btn > a'),
												array('property' => 'border', 'label' => 'Border', 'selector' => '+ .read-more-btn > a'),
												array('property' => 'border-radius', 'label' => 'Border Radius', 'selector' => '+ .read-more-btn > a'),
												array('property' => 'padding', 'label' => 'Padding', 'selector' => '+ .read-more-btn > a'),
											),
											'Mouse Hover' => array(
												array('property' => 'font-size', 'label' => 'Text Size', 'selector' => '+ .read-more-btn > a:hover'),
												array('property' => 'color', 'label' => 'Text Color', 'selector'=>'+ .read-more-btn > a:hover'),
												array('property' => 'background-color', 'label' => 'Background Color', 'selector'=>'+ .read-more-btn > a:hover'),
											)
										)
									)
								),
							), // End of styling

		                    
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

//drubo button shortcode template
function drubo_button_shortcode( $atts, $content = null ){
	extract( 
	 	shortcode_atts( array(
	 	'button_title'       => '',
	 	'button_link'        => '',
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

	$button_link	= kc_parse_link($button_link);
	
	if ( strlen( $button_link['url'] ) > 0 ) {
		$btn_href 	= $button_link['url'];
		$btn_target 	= strlen( $button_link['target'] ) > 0 ? $button_link['target'] : '_self';
	}		
         
	$html  = '';
	if( !empty($button_title) ):
	$html .= '<div class="read-more-btn '.$extra_class.'">';
	$html .= '<a href="'.esc_url($btn_href).'" target="'.$btn_target.'">'.$button_title.'</a>';
	$html .= '</div>';
	endif;
	return $html;
}
add_shortcode( 'drubo_button', 'drubo_button_shortcode' );