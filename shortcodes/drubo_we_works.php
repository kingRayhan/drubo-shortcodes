<?php
/*
 * Drubo We Work
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

add_action('init', 'drubo_we_work_map'); // Call kc_add_map function ///

if(!function_exists('drubo_we_work_map')):
	function drubo_we_work_map(){
		if(function_exists('kc_add_map')): // if kingComposer is active
		kc_add_map(
		    array(
		        'drubo_we_work' => array( // <-- shortcode tag name

		            'name' => __('Work Box', DRUBO_SHORTCODE_TEXT_DOMAIN),
		            'icon' => 'et-basket',
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
		                    						'selector' => '+ .wework-social ul li a span'
		                    					),
		                    					array( 
		                    						'property' => 'font-size', 
		                    						'label' => 'Font Size', 
		                    						'selector' => '+ .wework-social ul li a span' 
		                    					),
		                    					array(
		                    						'property' => 'font-weight', 
		                    						'label' => 'Font Weight', 
		                    						'selector' => '+ .wework-social ul li a span'
		                    					),
		                    					array(
		                    						'property' => 'text-align', 
		                    						'label' => 'Text Align', 
		                    						'selector' => '+ .wework-social ul li a span'
		                    					),
		                    					array(
													'property' => 'text-transform', 
													'label' => 'Text Transform', 
													'selector' => '+ .wework-social ul li a span'
												),
		                    					array( 
		                    					    'property' => 'color', 
		                    					    'label' => 'Color', 
		                    					    'selector' => '+ .wework-social ul li a span' 
		                    					),
		                    					array( 
		                    					    'property' => 'color', 
		                    					    'label' => 'Hover Color', 
		                    					    'selector' => '+ .wework-social ul li:hover a i, .wework-social ul li:hover a span' 
		                    					),
		                    				),
		                    				'Icon'   => array(
		                    					array(
		                    						'property' => 'color', 
		                    						'label' => 'Icon color', 
		                    						'selector' => '+ .wework-social ul li a i'
		                    					),
		                    					array( 
		                    						'property' => 'background-color', 
		                    						'label' => 'Icon Backgrount Color', 
		                    						'selector' => '+ .wework-social ul li' 
		                    					),
		                    					array(
		                    						'property' => 'background-color', 
		                    						'label' => 'Icon Hover Background color', 
		                    						'selector' => '+ .wework-social ul li:hover'
		                    					),
		                    					array(
		                    						'property' => 'color', 
		                    						'label' => 'Hover Icon color', 
		                    						'selector' => '+ .wework-social ul li:hover a i, .wework-social ul li:hover a span'
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

function drubo_we_work_func($atts,$content){
    ob_start();
        $drubo_shortcode_atts = shortcode_atts(array(
                'title' => '',
                'icon' => '',
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
	<div class="wework-social uppercase">
		<ul>
			<li>
				<a href="#">
					<i class="<?php echo $icon; ?>" aria-hidden="true"></i>
					<span><?php echo $title; ?></span>
				</a>
			</li>
		<ul>
	</div>
</div>
<?php
    return ob_get_clean();
}
add_shortcode('drubo_we_work','drubo_we_work_func');