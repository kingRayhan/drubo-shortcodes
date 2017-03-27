<?php 
/*
 * Drubo Tabs ShortCode
 * Author: Hastech
 * Author URI: http://hastech.company
 * Version: 1.0.0
 */

add_action('init', 'drubo_tabs', 99 );

if ( !function_exists('drubo_tabs')) {

	function drubo_tabs(){

		if (function_exists('kc_add_map')) { 

		    kc_add_map(
		        array(
		            'drubo_tabs' => array(
		                'name' => 'Drubo Tabs',
		                'icon' => 'fa-calendar-plus-o',
		                'category' => DRUBO_SHORTCODE_CATEGORY,
		                'params' => array(
		                	'general' => array(
		                		array(
			                        'name' => 'tabs_options',
			                        'label' => __('Options', 'drubo'),
			                        'type' => 'group',
			                        'options' => array('add_text' => __(' Add new tab', 'drubo')),
						            'value' => base64_encode( json_encode(array(
										'1' => array(
											'tabName' => 'New Tab',
											'content' => '',
										),
										'2' => array(
											'tabName' => 'New Tab',
											'content' => '',
										),
										'3' => array(
											'tabName' => 'New Tab',
											'content' => '',
										),
									) ) ),

									'params' => array(
										array(
					                        'name' => 'tabName',
					                        'label' => __('Tab Menu Name', 'drubo'),
					                        'type' => 'text',
					                        'value' => '',
					                    ),
					                    array(
					                        'name' => 'content',
					                        'label' => __('Tab Content', 'drubo'),
					                        'type' => 'textarea',
					                        'value' => '',
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
											'Tab' => array(
												array('property' => 'color', 'label' => 'Text Color', 'selector' => '+ .develope-menu ul li a'),
												array('property' => 'background-color', 'label' => 'Background Color', 'selector' => '+ .develope-menu ul li a'),
												array('property' => 'font-family', 'label' => 'Font Family', 'selector' => '+ .develope-menu ul li a'),
												array('property' => 'font-size', 'label' => 'Font Size', 'selector' => '+ .develope-menu ul li a'),
												array('property' => 'font-weight', 'label' => 'Font Weight', 'selector' => '+ .develope-menu ul li a'),
												array('property' => 'line-height', 'label' => 'Line Height', 'selector' => '+ .develope-menu ul li a'),
												array('property' => 'text-transform', 'label' => 'Text Transform', 'selector' => '+ .develope-menu ul li a'),
												array('property' => 'text-align', 'label' => 'Text Align', 'selector' => '+ .develope-menu ul li a'),
												array('property' => 'border', 'label' => 'Border', 'selector' => '+ .develope-menu ul li a'),
												array('property' => 'border-radius', 'label' => 'Border Radius', 'selector' => '+ .develope-menu ul li a'),
												array('property' => 'margin', 'label' => 'Margin', 'selector' => '+ .develope-menu ul li a'),
												array('property' => 'padding', 'label' => 'Padding', 'selector' => '+ .develope-menu ul li a'),
											),
		                    				'Tab Hover' => array(
												array('property' => 'color', 'label' => 'Text Color', 'selector' => '+ .develope-menu ul li a:hover'),
												array('property' => 'background-color', 'label' => 'Background Color', 'selector' => '+ .develope-menu ul li a:hover'),
											),
											'Tab Active' => array(
												array('property' => 'color', 'label' => 'Text Color', 'selector' => '+ .develope-menu ul li.active a'),
												array('property' => 'background-color', 'label' => 'Background Color', 'selector' => '+ .develope-menu ul li.active a'),
											),
											'Tab Body' => array(
												array('property' => 'color', 'label' => 'Text Color', 'selector' => '+ .tab-dicrib p'),
												array('property' => 'background-color', 'label' => 'Background Color', 'selector' => '+ .tab-content'),
												array('property' => 'font-family', 'label' => 'Font Family', 'selector' => '+ .tab-dicrib p'),
												array('property' => 'font-size', 'label' => 'Font Size', 'selector' => '+ .tab-dicrib p'),
												array('property' => 'font-weight', 'label' => 'Font Weight', 'selector' => '+ .tab-dicrib p'),
												array('property' => 'line-height', 'label' => 'Line Height', 'selector' => '+ .tab-dicrib p'),
												array('property' => 'text-transform', 'label' => 'Text Transform', 'selector' => '+ .tab-dicrib p'),
												array('property' => 'text-align', 'label' => 'Text Align', 'selector' => '+ .tab-dicrib p'),
												array('property' => 'border', 'label' => 'Border', 'selector' => '+ .tab-dicrib p'),
												array('property' => 'margin', 'label' => 'Margin', 'selector' => '+ .tab-dicrib p'),
												array('property' => 'padding', 'label' => 'Padding', 'selector' => '+ .tab-dicrib p'),
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

//drubo tabs shortcode template
function drubo_tabs_shortcode( $atts, $content = null ){
	extract( 
	 	shortcode_atts( array(
	 	'tabs_options'       => '',
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
	$html .= '<div class="project-develope '.$extra_class.'">';
	$html .= '<div class="develope-menu text-center text-uppercase pb-60">';
	$html .= '<ul>';
    if( !empty($tabs_options) ):
    	$i = 0;
    	foreach ($tabs_options as $tab) : 
    	$i++;
    	$active = ( $i == 1 ) ? 'class="active"' : '';
	$html .= '<li '.$active.'><a data-toggle="tab" href="#tab'.$i.'">'.$tab->tabName.'</a></li>';
        endforeach;
    endif;
    $html .= '</ul>';
    $html .= '</div>';
	$html .= '<div class="tab-content">';
    if( !empty($tabs_options) ):
    	$i = 0;
    	foreach ($tabs_options as $tab) :
    	$i++;
    	$active = ( $i == 1 ) ? 'in active' : '';
    	$image_full_width = wp_get_attachment_image_src( $tab->tabImage, 'full' );
	$html .= '<div id="tab'.$i.'" class="tab-pane fade '.$active.'">';
	$html .= '<div class="tab-single">';
	$html .= '<div class="tab-dicrib">';
	$html .= '<p>'.$tab->content.'</p>';
	$html .= '</div>';
	$html .= '</div>';
	$html .= '</div>';
	    endforeach;
    endif;

    $html .= '</div>';
	$html .= '</div>';				
   
	return $html;
}
add_shortcode( 'drubo_tabs', 'drubo_tabs_shortcode' );