<?php 
/*
 * Drubo Portfolio Content ShortCode
 * Author: Hastech
 * Author URI: http://hastech.company
 * Version: 1.0.0
 */

add_action('init', 'drubo_portfoilo_content', 99 );

if ( !function_exists('drubo_portfoilo_content')) {

	function drubo_portfoilo_content(){

		if (function_exists('kc_add_map')) { 

		    kc_add_map(
		        array(
		            'drubo_portfoilo_content' => array(
		                'name' => 'Portfolio Content',
		                'icon' => 'et-pencil',
		                'category' => DRUBO_SHORTCODE_CATEGORY,
		                'is_container' => true,
		                'params' => array(
		                	'general' => array(
		                    	array(
			                        'name' => 'project_details_title',
			                        'label' => __('Title', 'drubo'),
			                        'type' => 'text',
			                        'value' => 'Project Details',
			                    ),
			                    array(
			                        'name' => 'content',
			                        'label' => __('Portfolio Description', 'drubo'),
			                        'type' => 'textarea_html',
			                        'value' => '',
			                        'description' => __( 'Write your single portfolio description here.', 'drubo' ),
			                    ),
			                    array(
			                        'name' => 'project_info_title',
			                        'label' => __('Title', 'drubo'),
			                        'type' => 'text',
			                        'value' => 'Project Info',
			                    ),
			                    array(
			                        'name' => 'project_options',
			                        'label' => __('Options', 'drubo'),
			                        'type' => 'group',
			                        'options' => array('add_text' => __(' Add new project info', 'drubo')),
						            'value' => base64_encode( json_encode(array(
										'1' => array(
											'label' => 'Name',
											'value' => 'Corporate Illustration',
										),
										'2' => array(
											'label' => 'Company',
											'value' => 'Centro Text Limited',
										),
										'3' => array(
											'label' => 'Category',
											'value' => 'Print, App , Web design',
										),
										'4' => array(
											'label' => 'Work Duration',
											'value' => '200 Weeks & 5 Days',
										),
										'5' => array(
											'label' => 'Budget',
											'value' => '$8000',
										),
									) ) ),

									'params' => array(
										array(
											'type' => 'text',
											'label' => __( 'Label', 'drubo' ),
											'name' => 'label',
										),
										 array(
					                        'name' => 'value',
					                        'label' => __('Value', 'drubo'),
					                        'type' => 'text',
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
		                    				'Title' => array(
												array('property' => 'color', 'label' => 'Title Color', 'selector' => '+ .project-details > h5'),
												array('property' => 'font-family', 'label' => 'Title Font Family', 'selector' => '+ .project-details > h5'),
												array('property' => 'font-size', 'label' => 'Title Font Size', 'selector' => '+ .project-details > h5'),
												array('property' => 'font-weight', 'label' => 'Title Font Weight', 'selector' => '+ .project-details > h5'),
												array('property' => 'line-height', 'label' => 'Title Line Height', 'selector' => '+ .project-details > h5'),
												array('property' => 'text-transform', 'label' => 'Title Text Transform', 'selector' => '+ .project-details > h5'),
												array('property' => 'text-align', 'label' => 'Title Text Align', 'selector' => '+ .project-details > h5'),
												array('property' => 'margin', 'label' => 'Title Margin', 'selector' => '+ .project-details > h5'),
												array('property' => 'padding', 'label' => 'Title Padding', 'selector' => '+ .project-details > h5'),
											),
											'Desc' => array(
												array('property' => 'color', 'label' => 'Color', 'selector' => '+ .project-details p'),
												array('property' => 'font-family', 'label' => 'Font Family', 'selector' => '+ .project-details p'),
												array('property' => 'font-size', 'label' => 'Font Size', 'selector' => '+ .project-details p'),
												array('property' => 'font-weight', 'label' => 'Font Weight', 'selector' => '+ .project-details p'),
												array('property' => 'line-height', 'label' => 'Line Height', 'selector' => '+ .project-details p'),
												array('property' => 'text-transform', 'label' => 'Text Transform', 'selector' => '+ .project-details p'),
												array('property' => 'text-align', 'label' => 'Text Align', 'selector' => '+ .project-details p'),
												array('property' => 'margin', 'label' => 'Margin', 'selector' => '+ .project-details p'),
												array('property' => 'padding', 'label' => 'Padding', 'selector' => '+ .project-details p'),
											),
		                    				'Label' => array(
												array('property' => 'color', 'label' => 'Color', 'selector' => '+ .project-information ul li span'),
												array('property' => 'font-family', 'label' => 'Font Family', 'selector' => '+ .project-information ul li span'),
												array('property' => 'font-size', 'label' => 'Font Size', 'selector' => '+ .project-information ul li span'),
												array('property' => 'font-weight', 'label' => 'Font Weight', 'selector' => '+ .project-information ul li span'),
												array('property' => 'line-height', 'label' => 'Line Height', 'selector' => '+ .project-information ul li span'),
												array('property' => 'text-transform', 'label' => 'Text Transform', 'selector' => '+ .project-information ul li span'),
											),
											'Value' => array(
												array('property' => 'color', 'label' => 'Color', 'selector' => '+ .project-information ul li'),
												array('property' => 'font-family', 'label' => 'Font Family', 'selector' => '+ .project-information ul li'),
												array('property' => 'font-size', 'label' => 'Font Size', 'selector' => '+ .project-information ul li'),
												array('property' => 'font-weight', 'label' => 'Font Weight', 'selector' => '+ .project-information ul li'),
												array('property' => 'line-height', 'label' => 'Line Height', 'selector' => '+ .project-information ul li'),
												array('property' => 'text-transform', 'label' => 'Text Transform', 'selector' => '+ .project-information ul li'),
												array('property' => 'margin', 'label' => 'Margin', 'selector' => '+ .project-information ul li'),
												array('property' => 'padding', 'label' => 'Padding', 'selector' => '+ .project-information ul li'),
											),
											'Boxes' => array(
												array('property' => 'background-color', 'label' => 'BG Color', 'selector' => '+ .project-details'),
												array('property' => 'margin', 'label' => 'Margin', 'selector' => '+ .project-details'),
												array('property' => 'padding', 'label' => 'Padding', 'selector' => '+ .project-details'),
												array('property' => 'height', 'label' => 'Height', 'selector' => '+ .project-details'),
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

//drubo portfolio content shortcode template
function drubo_portfoilo_content_shortcode( $atts, $content = null ){
	extract( 
	 	shortcode_atts( array(
	 	'project_details_title' => '',
	 	'content'               => '',
	 	'project_info_title'    => '',
	 	'project_options'       => '',
        'custom_class'          => '',
	 	'custom_css'            => '',
	  	), $atts )
	);		

	//custom class		
	$wrap_class  = apply_filters( 'kc-el-class', $atts );

	if( !empty( $custom_class ) ):
	 	$wrap_class[] = $custom_class;
    endif;

	$extra_class =  implode( ' ', $wrap_class );		
         
	$html  = '';
	$html .= '<div class="project-area '.$extra_class.'">';
	$html .= '<div class="project-details set-bg text-white">';
	if( !empty($project_details_title) ):
	$html .= '<h5>'.$project_details_title.'</h5>';
    endif;
    if( !empty($content) ):
	$html .= '<p>'.$content.'</p>';
    endif;
	$html .= '</div>';
	$html .= '<div class="project-details set-half-bg text-white">';
	if( !empty($project_info_title) ):
	$html .= '<h5>'.$project_info_title.'</h5>';
    endif;
    if( !empty($project_options) ):
	$html .= '<div class="project-information">';
	$html .= '<ul>';
	foreach ( $project_options as $project ) :
	$html .= '<li><span>'.$project->label.' : </span>'.$project->value.'</li>';
	endforeach;
	$html .= '</ul>';
	$html .= '</div>';
	endif;
	$html .= '</div>';
	$html .= '</div>';
	return $html;
}
add_shortcode( 'drubo_portfoilo_content', 'drubo_portfoilo_content_shortcode' );