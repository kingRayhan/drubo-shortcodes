<?php
/*
 * Drubo Team Member
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

add_action('init', 'drubo_team_member_map'); // Call kc_add_map function ///

if(!function_exists('drubo_team_member_map')):
	function drubo_team_member_map(){

		if(function_exists('kc_add_map')): // if kingComposer is active
		kc_add_map(
		    array(
		        'drubo_team_member' => array( // <-- shortcode tag name

		            'name' => __('Team member', DRUBO_SHORTCODE_TEXT_DOMAIN),
		            'description' => __('Drubo pricing table', DRUBO_SHORTCODE_TEXT_DOMAIN),
		            'icon' => 'kc-icon-progress',
		            'category' => DRUBO_SHORTCODE_CATEGORY,
		            'params' => array(


		         	'General' => array(
		                array(
		                    'name' => 'name',
		                    'label' => __('Name',DRUBO_SHORTCODE_TEXT_DOMAIN),
		                    'type' => 'text',
		                    'value' => 'King Rayhan'
		                ),
		                array(
		                    'name' => 'desig',
		                    'label' => __('Name',DRUBO_SHORTCODE_TEXT_DOMAIN),
		                    'type' => 'text',
		                    'value' => 'King Rayhan'
		                ),
						array(
							'type' => 'attach_image',
							'label' => __( 'Member Photo', DRUBO_SHORTCODE_TEXT_DOMAIN ),
							'name' => 'image',
						),
						array(
							'type' => 'text',
							'label' => __( 'Custom CSS class', DRUBO_SHORTCODE_TEXT_DOMAIN ),
							'name' => 'custom_css_class',
						),
		         	), // content

		         	'Social' => array(
		                array(
		                    'name' => 'follow_text',
		                    'label' => __('Follow Text',DRUBO_SHORTCODE_TEXT_DOMAIN),
		                    'type' => 'text',
		                    'value' => 'Follow on:'
		                ),
						array(
								'type'			=> 'group',
								'label'			=> __('Icons', DRUBO_SHORTCODE_TEXT_DOMAIN),
								'name'			=> 'icons',
								'options'		=> array('add_text' => __('Add new Social icon', DRUBO_SHORTCODE_TEXT_DOMAIN)),
								'value' => base64_encode( json_encode(array(
									"1" => array(
										"icon" => "fa-facebook",
										"url" => "#"
									),
									"2" => array(
										"icon" => "fa-twitter",
										"url" => "#"
									),
									"3" => array(
										"icon" => "fa-google-plus",
										"url" => "#"
									),
									"4" => array(
										"icon" => "fa-github",
										"url" => "#"
									),

								) ) ),
								'params' => array(
									array(
										'type' => 'icon_picker',
										'label' => __( 'Icon', DRUBO_SHORTCODE_TEXT_DOMAIN ),
										'name' => 'icon',
									),
									array(
										'type' => 'text',
										'label' => __( 'URL', DRUBO_SHORTCODE_TEXT_DOMAIN ),
										'name' => 'url',
									),
								),
							), // group array


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
		                    				'Name'   => array(
		                    					array(
		                    						'property' => 'font-family', 
		                    						'label' => 'Font Family', 
		                    						'selector' => '+ .name'
		                    					),
		                    					array( 
		                    						'property' => 'font-size', 
		                    						'label' => 'Font Size', 
		                    						'selector' => '+ .name' 
		                    					),
		                    					array( 
		                    						'property' => 'line-height', 
		                    						'label' => 'Line height', 
		                    						'selector' => '+ .name' 
		                    					),
		                    					array(
		                    						'property' => 'font-weight', 
		                    						'label' => 'Font Weight', 
		                    						'selector' => '+ .name'
		                    					),
		                    					array(
		                    						'property' => 'text-align', 
		                    						'label' => 'Text Align', 
		                    						'selector' => '+ .name'
		                    					),
		                    					array(
													'property' => 'text-transform', 
													'label' => 'Text Transform', 
													'selector' => '+ .name'
												),
		                    					array(
													'property' => 'margin', 
													'label' => 'Margin', 
													'selector' => '+ .name'
												),
		                    					array( 
		                    					    'property' => 'color', 
		                    					    'label' => 'Color', 
		                    					    'selector' => '+ .name' 
		                    					),
		                    				),
		                    				'Designation'   => array(
		                    					array(
		                    						'property' => 'font-family', 
		                    						'label' => 'Font Family', 
		                    						'selector' => '+ .desig'
		                    					),
		                    					array( 
		                    						'property' => 'font-size', 
		                    						'label' => 'Font Size', 
		                    						'selector' => '+ .desig' 
		                    					),
		                    					array( 
		                    						'property' => 'line-height', 
		                    						'label' => 'Line height', 
		                    						'selector' => '+ .desig' 
		                    					),
		                    					array(
		                    						'property' => 'font-weight', 
		                    						'label' => 'Font Weight', 
		                    						'selector' => '+ .desig'
		                    					),
		                    					array(
		                    						'property' => 'text-align', 
		                    						'label' => 'Text Align', 
		                    						'selector' => '+ .desig'
		                    					),
		                    					array(
													'property' => 'text-transform', 
													'label' => 'Text Transform', 
													'selector' => '+ .desig'
												),
		                    					array(
													'property' => 'margin', 
													'label' => 'Margin', 
													'selector' => '+ .desig'
												),
		                    					array( 
		                    					    'property' => 'color', 
		                    					    'label' => 'Color', 
		                    					    'selector' => '+ .desig' 
		                    					),
		                    				),


		                    				'Panel'   => array(
		                    					array(
		                    						'property' => 'background', 
		                    						'label' => 'Panel Background', 
		                    						'selector' => '+ .pricing-table-single'
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


function drubo_team_menber_func($atts,$content){
ob_start();
        $drubo_shortcode_atts = shortcode_atts(array(
        	// Front
                'name' => '',
                'desig' => '',
                'icons' => '',
                'image' => '',
                'follow_text' => '',
            // css
                'custom_css' => '',
                'custom_css_class' => '',
        ),$atts); 
        extract($drubo_shortcode_atts);


		$image_size = apply_filters('','large');
		$img_src = wp_get_attachment_image_src($image , $image_size)[0]; 

    //custom class		
	$wrap_class  = apply_filters( 'kc-el-class', $atts );
	if( !empty( $custom_class ) ):
	 	$wrap_class[] = $custom_class;
    endif;
	$extra_class =  implode( ' ', $wrap_class );	
?>
<div class="<?php echo $extra_class; ?> <?php echo $custom_css_class; ?>">
	<div class="team-single">
		<img src="<?php echo $img_src; ?>">
		<div class="team-details text-center">
			<div class="team-adrs pt-120">
				<h5 class="name"><?php echo $name; ?></h5>
				<p class="desig"><?php echo $desig; ?></p>
			</div>								
			<div class="team-socaladrs mt-95">
				<ul>
					<li><?php echo $follow_text; ?></li>
					<?php foreach ($icons as $key => $value): ?>
						<li><a href="<?php echo $value->url ?>"><i class="<?php echo $value->icon ?>"></i></a></li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php
    return ob_get_clean();
}
add_shortcode('drubo_team_member','drubo_team_menber_func');