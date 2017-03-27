<?php
/*
 * Drubo Pricing ShortCode
 * Author: Hastech
 * Author URI: http://hastech.company
 * Version: 1.0.0
 */

add_action('init', 'drubo_pricing', 99 );

if ( !function_exists('drubo_pricing')) {

	function drubo_pricing(){

		if (function_exists('kc_add_map')) { 

		    kc_add_map(
		        array(
		            'drubo_pricing' => array(
		                'name' => 'Drubo Pricing 2',
		                'icon' => 'fa-dollar',
		                'category' => DRUBO_SHORTCODE_CATEGORY,
		                'is_container' => true,
		                'params' => array(
		                    'general' => array(
		                    	array(
			                        'name' => 'pricing_title',
			                        'label' => __( 'Pricing Package Name', 'drubo'),
			                        'type' => 'text',
			                        'value' => 'Text Title',
			                        'admin_label' => true,
			                        'description' => __( 'Write your pricing package name here.', 'drubo' ),
			                    ),
			                    array(
			                        'name' => 'currency_sign',
			                        'label' => __('Currency Sign', 'drubo'),
			                        'type' => 'text',
			                        'value' => '$',
			                        'description' => __( 'Write your currency sign here.', 'drubo' ),
			                    ),
			                    array(
			                        'name' => 'price',
			                        'label' => __('Price', 'drubo'),
			                        'type' => 'text',
			                        'value' => '56',
			                        'description' => __( 'Write your pricing package price here.', 'drubo' ),
			                    ),
			                    array(
			                        'name' => 'duration',
			                        'label' => __('Per', 'drubo'),
			                        'type' => 'text',
			                        'value' => '/month',
			                    ),
			                    array(
			                        'name' => 'price_desc',
			                        'label' => __('Attributes', 'drubo'),
			                        'type' => 'textarea',
			                        'description'	=> __( 'Insert tag &lt;strong&gt; when you want highlight text.<br> Example: &lt;strong&gt;<strong>24/7</strong>&lt;/strong&gt; Support', 'drubo' ),
			                        'value'			=> '',
			                    ),
			                    array(
									'name'	=> 'show_icon',
									'label'	=> __( 'Show Icon Attributes', 'drubo' ),
									'type'	=> 'toggle',
									'value'	=> 'yes'
								),
								array(
									'name'			=> 'icon_name',
									'label'			=> __( 'Icon Attributes', 'drubo' ),
									'type'			=> 'icon_picker',
									'value'			=> 'fa-check',
									'relation'		=> array(
										'parent'	=> 'show_icon',
										'show_when'	=> 'yes'
									)
								),
			                    array(
									'name'	=> 'show_button',
									'label'	=> __( 'Display Button', 'drubo' ),
									'type'	=> 'toggle',
									'value'	=> 'yes',
								),
			                    array(
			                        'name' => 'price_btn_text',
			                        'label' => __('Button Text', 'value'),
			                        'type' => 'text',
			                        'value' => 'Order Now',
			                        'relation'	=> array(
										'parent'	=> 'show_button',
										'show_when'	=> 'yes'
									),
			                    ),
			                    array(
			                        'name' => 'price_btn_link',
			                        'label' => __('Button Link', 'drubo'),
			                        'type' => 'link',
			                        'value' => '#',
			                        'relation'	=> array(
										'parent'	=> 'show_button',
										'show_when'	=> 'yes'
									),
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
		                    		'name' => 'custom_css',
		                    		'type' => 'css',
		                    		'options' => array(
		                    			array(
		                    				'screens' => 'any,1024,999,767,479',
		                    				'Title' => array(
												array('property' => 'color', 'label' => 'Title Color', 'selector' => '+ .pricing-table-single.two h6'),
												array('property' => 'color', 'label' => 'Title Color Hover', 'selector' => '+:hover .pricing-table-single.two h6'),
												array('property' => 'font-family', 'label' => 'Title Font Family', 'selector' => '+ .pricing-table-single.two h6'),
												array('property' => 'font-size', 'label' => 'Title Font Size', 'selector' => '+ .pricing-table-single.two h6'),
												array('property' => 'font-weight', 'label' => 'Title Font Weight', 'selector' => '+ .pricing-table-single.two h6'),
												array('property' => 'line-height', 'label' => 'Title Line Height', 'selector' => '+ .pricing-table-single.two h6'),
												array('property' => 'text-transform', 'label' => 'Title Text Transform', 'selector' => '+ .pricing-table-single.two h6'),
												array('property' => 'text-align', 'label' => 'Title Text Align', 'selector' => '+ .pricing-table-single.two h6'),
												array('property' => 'margin', 'label' => 'Title Margin', 'selector' => '+ .pricing-table-single.two h6'),
												array('property' => 'padding', 'label' => 'Title Padding', 'selector' => '+ .pricing-table-single.two h6'),
											),
					                    	'Price' => array(
												array('property' => 'color', 'label' => 'Color', 'selector' => '+ .price-category h1'),
												array('property' => 'color', 'label' => 'Color Hover', 'selector' => '+:hover .price-category h1'),
												array('property' => 'font-family', 'label' => 'Font Family', 'selector' => '+ .price-category h1'),
												array('property' => 'font-size', 'label' => 'Font Size', 'selector' => '+ .price-category h1'),
												array('property' => 'font-weight', 'label' => 'Font Weight', 'selector' => '+ .price-category h1'),
												array('property' => 'line-height', 'label' => 'Line Height', 'selector' => '+ .price-category h1'),
												array('property' => 'text-transform', 'label' => 'Text Transform', 'selector' => '+ .price-category h1'),
												array('property' => 'text-align', 'label' => 'Text Align', 'selector' => '+ .price-category h1'),
												array('property' => 'padding', 'label' => 'Padding', 'selector' => '+ .price-category h1'),
												array('property' => 'margin', 'label' => 'Margin', 'selector' => '+ .price-category h1'),
											),
											'Duration' => array(
												array('property' => 'color', 'label' => 'Color', 'selector' => '+ .price-category h1 span'),
												array('property' => 'color', 'label' => 'Color Hover', 'selector' => '+:hover .price-category h1 span'),
												array('property' => 'font-family', 'label' => 'Font Family', 'selector' => '+ .price-category h1 span'),
												array('property' => 'font-size', 'label' => 'Font Size', 'selector' => '+ .price-category h1 span'),
												array('property' => 'font-weight', 'label' => 'Font Weight', 'selector' => '+ .price-category h1 span'),
												array('property' => 'line-height', 'label' => 'Line Height', 'selector' => '+ .price-category h1 span'),
												array('property' => 'text-transform', 'label' => 'Text Transform', 'selector' => '+ .price-category h1 span'),
												array('property' => 'text-align', 'label' => 'Text Align', 'selector' => '+ .price-category h1 span'),
												array('property' => 'padding', 'label' => 'Padding', 'selector' => '+ .price-category h1 span'),
												array('property' => 'margin', 'label' => 'Margin', 'selector' => '+ .price-category h1 span'),
											),
											'Desc' => array(
												array('property' => 'color', 'label' => 'Color', 'selector' => '+ .price-list > ul li a'),
												array('property' => 'color', 'label' => 'Color Hover', 'selector' => '+:hover .price-list > ul li a'),
												array('property' => 'font-family', 'label' => 'Font Family', 'selector' => '+ .price-list > ul li a'),
												array('property' => 'font-size', 'label' => 'Font Size', 'selector' => '+ .price-list > ul li a'),
												array('property' => 'font-weight', 'label' => 'Font Weight', 'selector' => '+ .price-list > ul li a'),
												array('property' => 'line-height', 'label' => 'Line Height', 'selector' => '+ .price-list > ul li a'),
												array('property' => 'text-transform', 'label' => 'Text Transform', 'selector' => '+ .price-list > ul li a'),
												array('property' => 'text-align', 'label' => 'Text Align', 'selector' => '+ .price-list > ul li a'),
												array('property' => 'padding', 'label' => 'Padding', 'selector' => '+ .price-list > ul li'),
											),
		                    				'Button' => array(
												array('property' => 'color', 'label' => 'Color', 'selector' => '+ .order-button > a'),
												array('property' => 'color', 'label' => 'Hover Color', 'selector' => '+:hover .order-button > a'),
												array('property' => 'background-color', 'label' => 'Background Color', 'selector' => '+ .order-button > a'),
												array('property' => 'background-color', 'label' => 'BG Color Hover', 'selector' => '+:hover .order-button > a'),
												array('property' => 'font-size', 'label' => 'Font Size', 'selector' => '+ .order-button > a'),
												array('property' => 'line-height', 'label' => 'Line Height', 'selector' => '+ .order-button > a'),
												array('property' => 'border', 'label' => 'Border', 'selector' => '+ .order-button > a'),
												array('property' => 'border-color', 'label' => 'Border Hover Color', 'selector' => '+:hover .order-button > a'),
												array('property' => 'border-radius', 'label' => 'Border Radius', 'selector' => '+ .order-button > a'),
												array('property' => 'border-radius', 'label' => 'Border Radius Hover', 'selector' => '+:hover .order-button > a'),
												array('property' => 'padding', 'label' => 'Padding', 'selector' => '+ .order-button > a'),
												array('property' => 'margin', 'label' => 'Margin', 'selector' => '+ .order-button > a')
											),
											'Boxes' => array(
												array('property' => 'background-color', 'label' => 'Outer BG Color', 'selector' => '+.pricing-table-single'),
												array('property' => 'background-color', 'label' => 'Outer BG Color Hover', 'selector' => '+:hover'),
												array('property' => 'background-color', 'label' => 'Inner BG Color', 'selector' => '+ .table-content'),
												array('property' => 'background-color', 'label' => 'Inner BG Color  Hover', 'selector' => '+:hover .table-content'),
												array('property' => 'box-shadow', 'label' => 'Box Shadow', 'selector' => '+ .table-content'),
												array('property' => 'box-shadow', 'label' => 'Box Shadow Hover', 'selector' => '+:hover .table-content'),
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

//drubo Pricing shortcode template
function drubo_pricing_shortcode( $atts, $content = null ){
	extract( 
	 	shortcode_atts( array(
	 	'pricing_title'        => '',
	 	'currency_sign'        => '',
	 	'price'                => '',
	 	'duration'             => '',
	 	'price_desc'           => '',
	 	'show_icon'            => '',
	 	'icon_name'            => '',
	 	'show_button'          => '',
	 	'price_btn_text'       => '',
	 	'price_btn_link'       => '',
        'custom_class'         => '',
	 	'custom_css'           => '',
	  	), $atts )
	);		
    
	//custom class		
	$wrap_class  = apply_filters( 'kc-el-class', $atts );

	if( !empty( $custom_class ) ):
	 	$wrap_class[] = $custom_class;
    endif;

	$extra_class =  implode( ' ', $wrap_class );		
         
	$html  = '';
	$html .= '<div class="pricing-table-single set-bg two '.$extra_class.'">';
	if( !empty($pricing_title) ):
	$html .= '<h6>'.$pricing_title.'</h6>';
    endif;
	$html .= '<div class="table-content">';
	$html .= '<div class="price-category">';

	$currency_sign = !empty($currency_sign) ? $currency_sign : '';
	$price = !empty($price) ? $price : '';
	$duration = !empty($duration) ? $duration : '';

	$html .= '<h1>'.$currency_sign.$price.'<span>'.$duration.'</span></h1>';
	$html .= '</div>';
	$html .= '<div class="price-list">';
	
	if( !empty($price_desc) ){
		$pros = explode( "\n", $price_desc );
		if( count( $pros ) ) {
			$html .= '<ul>';
			foreach( $pros as $pro ) {
				if ( $show_icon == 'yes' ) {
				    $html .= '<li><a href="#"><i class="'. $icon_name .'"></i>'. $pro .'</a></li>';
				} else {
					$html .= '<li>'. $pro .' </li>';
				}
			}
			$html .= '<ul>';
		}
	}
	$html .= '</div>';
	if( $show_button == 'yes' ):
	$price_btn_link	= kc_parse_link($price_btn_link);
	
	if ( strlen( $price_btn_link['url'] ) > 0 ) {
		$price_btn_href 	= $price_btn_link['url'];
		$price_btn_target 	= strlen( $price_btn_link['target'] ) > 0 ? $price_btn_link['target'] : '_self';
	}
    $price_btn_text = !empty($price_btn_text) ? $price_btn_text : '';
	$html .= '<div class="order-button text-uppercase text-center">';
	$html .= '<a href="'.esc_url($price_btn_href).'" target="'.$price_btn_target.'">'.$price_btn_text.'</a>';
	$html .= '</div>';
	endif;
	$html .= '</div>';
	$html .= '</div>';

	return $html;
}
add_shortcode( 'drubo_pricing', 'drubo_pricing_shortcode' );