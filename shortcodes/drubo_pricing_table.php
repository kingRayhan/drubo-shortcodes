<?php
/*
 * Drubo Our Service
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

add_action('init', 'drubo_pricing_table_map'); // Call kc_add_map function ///

if(!function_exists('drubo_pricing_table_map')):
	function drubo_pricing_table_map(){

		if(function_exists('kc_add_map')): // if kingComposer is active
		kc_add_map(
		    array(
		        'drubo_pricing_table' => array( // <-- shortcode tag name

		            'name' => __('Pricing Table', DRUBO_SHORTCODE_TEXT_DOMAIN),
		            'description' => __('Drubo pricing table', DRUBO_SHORTCODE_TEXT_DOMAIN),
		            'icon' => 'fa-dollar',
		            'category' => DRUBO_SHORTCODE_CATEGORY,
		            'params' => array(


		         	'General' => array(

		                array(
		                    'name' => 'title',
		                    'label' => __('Title',DRUBO_SHORTCODE_TEXT_DOMAIN),
		                    'type' => 'text',
		                    'value' => 'SILVER PACK'
		                ),
		                array(
		                    'name' => 'price',
		                    'label' => __('Price',DRUBO_SHORTCODE_TEXT_DOMAIN),
		                    'type' => 'text',
		                    'value' => '$30'
		                ),
		                array(
		                    'name' => 'per_month',
		                    'label' => __('Per',DRUBO_SHORTCODE_TEXT_DOMAIN),
		                    'type' => 'text',
		                    'value' => '/ MONTH'
		                ),
		                array(
		                    'name' => 'pricing_table_attributes',
		                    'label' => __('Attributes:',DRUBO_SHORTCODE_TEXT_DOMAIN),
		                    'description' => __('Insert tag <strong> when you want highlight text.
Example: <strong>24/7</strong> Support',DRUBO_SHORTCODE_TEXT_DOMAIN),
		                    'type' => 'textarea',
		                    'value' => base64_encode("250 MB storage\r\n100 email forwards\r\n200 My sqi datebase\r\n50 social account\r\n24/7 support")
		                ),
	                    array(
							'name'	=> 'show_button',
							'label'	=> __( 'Display Button', DRUBO_SHORTCODE_TEXT_DOMAIN ),
							'type'	=> 'toggle',
							'value'	=> 'yes',
						),
		                array(
		                    'name' => 'button_text',
		                    'label' => __('Button Text',DRUBO_SHORTCODE_TEXT_DOMAIN),
		                    'type' => 'text',
		                    'value' => 'Order now',
	                        'relation'	=> array(
								'parent'	=> 'show_button',
								'show_when'	=> 'yes'
							),
		                ),
		                array(
		                    'name' => 'button_link',
		                    'label' => __('Button Link',DRUBO_SHORTCODE_TEXT_DOMAIN),
		                    'type' => 'link',
		                    'value' => '#',
	                        'relation'	=> array(
								'parent'	=> 'show_button',
								'show_when'	=> 'yes'
							),
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
		                    						'selector' => '+ .table-category > h6'
		                    					),
		                    					array( 
		                    						'property' => 'font-size', 
		                    						'label' => 'Font Size', 
		                    						'selector' => '+ .table-category > h6' 
		                    					),
		                    					array( 
		                    						'property' => 'line-height', 
		                    						'label' => 'Line height', 
		                    						'selector' => '+ .table-category > h6' 
		                    					),
		                    					array(
		                    						'property' => 'font-weight', 
		                    						'label' => 'Font Weight', 
		                    						'selector' => '+ .table-category > h6'
		                    					),
		                    					array(
		                    						'property' => 'text-align', 
		                    						'label' => 'Text Align', 
		                    						'selector' => '+ .table-category > h6'
		                    					),
		                    					array(
													'property' => 'text-transform', 
													'label' => 'Text Transform', 
													'selector' => '+ .table-category > h6'
												),
		                    					array(
													'property' => 'margin', 
													'label' => 'Margin', 
													'selector' => '+ .table-category > h6'
												),
		                    					array( 
		                    					    'property' => 'color', 
		                    					    'label' => 'Color', 
		                    					    'selector' => '+ .table-category > h6' 
		                    					),
		                    				),
		                    				'Price'   => array(
		                    					array(
		                    						'property' => 'font-family', 
		                    						'label' => 'Font Family', 
		                    						'selector' => '+ .table-category h1'
		                    					),
		                    					array( 
		                    						'property' => 'font-size', 
		                    						'label' => 'Font Size', 
		                    						'selector' => '+ .table-category h1' 
		                    					),
		                    					array( 
		                    						'property' => 'line-height', 
		                    						'label' => 'Line height', 
		                    						'selector' => '+ .table-category h1' 
		                    					),
		                    					array(
		                    						'property' => 'font-weight', 
		                    						'label' => 'Font Weight', 
		                    						'selector' => '+ .table-category h1'
		                    					),
		                    					array(
		                    						'property' => 'text-align', 
		                    						'label' => 'Text Align', 
		                    						'selector' => '+ .table-category h1'
		                    					),
		                    					array(
													'property' => 'margin', 
													'label' => 'Margin', 
													'selector' => '+ .table-category h1'
												),
		                    					array( 
		                    					    'property' => 'color', 
		                    					    'label' => 'Color', 
		                    					    'selector' => '+ .table-category h1' 
		                    					),
		                    				),
		                    				'Per/'   => array(
		                    					array(
		                    						'property' => 'font-family', 
		                    						'label' => 'Font Family', 
		                    						'selector' => '+ .table-category h1 span'
		                    					),
		                    					array( 
		                    						'property' => 'font-size', 
		                    						'label' => 'Font Size', 
		                    						'selector' => '+ .table-category h1 span' 
		                    					),
		                    					array( 
		                    						'property' => 'line-height', 
		                    						'label' => 'Line height', 
		                    						'selector' => '+ .table-category h1 span' 
		                    					),
		                    					array(
		                    						'property' => 'font-weight', 
		                    						'label' => 'Font Weight', 
		                    						'selector' => '+ .table-category h1 span'
		                    					),
		                    					array(
													'property' => 'text-transform', 
													'label' => 'Text Transform', 
													'selector' => '+ .table-category h1 span'
												),
		                    					array( 
		                    					    'property' => 'color', 
		                    					    'label' => 'Color', 
		                    					    'selector' => '+ .table-category h1 span' 
		                    					),
		                    				),
		                    				'Attributes'   => array(
		                    					array(
		                    						'property' => 'font-family', 
		                    						'label' => 'Font Family', 
		                    						'selector' => '+ .pricing-list > ul li a'
		                    					),
		                    					array( 
		                    						'property' => 'font-size', 
		                    						'label' => 'Font Size', 
		                    						'selector' => '+ .pricing-list > ul li a' 
		                    					),
		                    					array( 
		                    						'property' => 'line-height', 
		                    						'label' => 'Line height', 
		                    						'selector' => '+ .pricing-list > ul li a' 
		                    					),
		                    					array(
		                    						'property' => 'font-weight', 
		                    						'label' => 'Font Weight', 
		                    						'selector' => '+ .pricing-list > ul li a'
		                    					),
		                    					array(
													'property' => 'text-transform', 
													'label' => 'Text Transform', 
													'selector' => '+ .pricing-list > ul li a'
												),
		                    					array( 
		                    					    'property' => 'color', 
		                    					    'label' => 'Color', 
		                    					    'selector' => '+ .pricing-list > ul li a' 
		                    					),
		                    				),
		                    				'Button'   => array(
		                    					array(
		                    						'property' => 'font-family', 
		                    						'label' => 'Font Family', 
		                    						'selector' => '+ .order-button > a'
		                    					),
		                    					array( 
		                    						'property' => 'font-size', 
		                    						'label' => 'Font Size', 
		                    						'selector' => '+ .order-button > a' 
		                    					),
		                    					array( 
		                    						'property' => 'line-height', 
		                    						'label' => 'Line height', 
		                    						'selector' => '+ .order-button > a' 
		                    					),
		                    					array(
		                    						'property' => 'font-weight', 
		                    						'label' => 'Font Weight', 
		                    						'selector' => '+ .order-button > a'
		                    					),
		                    					array(
		                    						'property' => 'text-align', 
		                    						'label' => 'Text Align', 
		                    						'selector' => '+ .order-button > a'
		                    					),
		                    					array(
													'property' => 'text-transform', 
													'label' => 'Text Transform', 
													'selector' => '+ .order-button > a'
												),
		                    					array( 
		                    					    'property' => 'color', 
		                    					    'label' => 'Color', 
		                    					    'selector' => '+ .order-button > a' 
		                    					),
		                    					array( 
		                    					    'property' => 'color', 
		                    					    'label' => 'Hover color', 
		                    					    'selector' => '+ .order-button:hover > a' 
		                    					),
		                    					array( 
		                    					    'property' => 'background-color', 
		                    					    'label' => 'Background color', 
		                    					    'selector' => '+ .order-button > a' 
		                    					),
		                    					array( 
		                    					    'property' => 'background-color', 
		                    					    'label' => 'Hover Background color', 
		                    					    'selector' => '+ .order-button:hover > a' 
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


function drubo_pricing_table_func($atts,$content){
ob_start();
        $drubo_shortcode_atts = shortcode_atts(array(
        	// Front
                'title' => '',
                'price' => '',
                'per_month' => '',
                'pricing_table_attributes' => '',
                'show_button' => '',
                'button_text' => '',
                'button_link' => '',
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
	<div class="pricing-table-single white-bg">
		<div class="table-category text-center">
			<h6 class="title"><?php echo $title; ?></h6>
			<h1><?php echo $price; ?><span> <?php echo $per_month; ?></span></h1>
		</div>
		<div class="pricing-list text-center">
			<ul>
			<?php  
				$attributes = explode("\n", $pricing_table_attributes);
				if($attributes):
				foreach ($attributes as $key => $value) :
			?>

				<li><a href="#"><?php echo $value; ?></a></li>
			<?php endforeach; endif;?>
			</ul>
		</div>
		<?php if ($show_button) :?>
		<div class="order-button text-uppercase text-center">
			<a href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
		</div>
		<?php endif; ?>
	</div>
</div>
<?php
    return ob_get_clean();
}
add_shortcode('drubo_pricing_table','drubo_pricing_table_func');