<?php 
/*
 * Drubo Portfolio ShortCode
 * Author: Hastech
 * Author URI: http://hastech.company
 * Version: 1.0.0
 */

add_action('init', 'drubo_portfolio', 99 );

if ( !function_exists('drubo_portfolio')) {

	function drubo_portfolio(){

		if (function_exists('kc_add_map')) { 

		    kc_add_map(
		        array(
		            'drubo_portfolio' => array(
		                'name' => 'Drubo Portfolio',
		                'icon' => 'et-book-open',
		                'category' => DRUBO_SHORTCODE_CATEGORY,
		                'is_container' => true,
		                'params' => array(
		                    'general' => array(
								array(
									'type'			=> 'number_slider',
									'label'			=> __( 'Items Limit', 'drubo' ),
									'name'			=> 'number_post',
									'description'	=> __( 'Specify number of post that you want to show. Set -1 to get all post', 'drubo' ),
									'value'			=> '6',
												'options'		=> array(
										'min'			=> 0,
										'max'			=> 30,
										'unit'			=> '',
										'show_input'	=> false
									)
								),
								array(
			                        'name' => 'menu_style',
			                        'label' => 'Menu Style',
			                        'type' => 'dropdown',
			                        'value' => '1',
			                        'options'		=> array(
										'1'  => __('Style 1', 'drubo'),
										'2' => __('Style 2', 'drubo'),
									),
			                    ),
								array(
			                        'name' => 'post_open_style',
			                        'label' => 'Post Open Type',
			                        'type' => 'dropdown',
			                        'value' => '1',
			                        'options'		=> array(
										'1'  => __('Open with single post', 'drubo'),
										'2' => __('Open with Lightbox', 'drubo'),
									),
			                    ),
								array(
			                        'name' => 'order',
			                        'label' => 'Post Order Style',
			                        'type' => 'dropdown',
			                        'value' => 'asc',
			                        'options'		=> array(
										''     => __('Select an order style', 'drubo'),
										'asc'  => __('Newest', 'drubo'),
										'desc' => __('Oldest', 'drubo'),
									),
			                    ),
			                    array(
									'name'	=> 'show_pegination',
									'label'	=> __( 'Display Pagination', 'drubo' ),
									'type'	=> 'toggle',
									'value'	=> 'no',
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
		                    				'Portfolio Menu' => array(
												array('property' => 'color', 'label' => 'Color', 'selector' => '+ .latest-content ul li'),
												array('property' => 'font-family', 'label' => 'Font Family', 'selector' => '+ .latest-content ul li'),
												array('property' => 'font-size', 'label' => 'Font Size', 'selector' => '+ .latest-content ul li'),
												array('property' => 'line-height', 'label' => 'Line Height', 'selector' => '+ .latest-content ul li'),
												array('property' => 'font-weight', 'label' => 'Font Weight', 'selector' => '+ .latest-content ul li'),
												array('property' => 'text-align', 'selector' => '+ .latest-content ul li'),
												array('property' => 'text-transform', 'label' => 'Text Transform', 'selector' => '+ .latest-content ul li'),
												array('property' => 'background-color', 'label' => 'Background Color', 'selector' => '+ .latest-content ul li'),
												array('property' => 'background-color', 'label' => 'Hover Color', 'selector' => '+ .latest-content ul li:hover'),
												array('property' => 'background-color', 'label' => 'Active Color', 'selector' => '+ .latest-content ul li.active'),
												array('property' => 'border', 'label' => 'Border', 'selector' => '+ .latest-content ul li'),
												array('property' => 'margin', 'label' => 'Margin', 'selector' => '+ .latest-content ul li'),
												array('property' => 'padding', 'selector' => '+ .latest-content ul li'),
																							
											), 
		                    				'Title' => array(
												array('property' => 'color', 'label' => 'Title Color', 'selector' => '+ .effect-titel h2'),
												array('property' => 'font-family', 'label' => 'Title Font Family', 'selector' => '+ .effect-titel h2'),
												array('property' => 'font-size', 'label' => 'Title Font Size', 'selector' => '+ .effect-titel h2'),
												array('property' => 'font-weight', 'label' => 'Title Font Weight', 'selector' => '+ .effect-titel h2'),
												array('property' => 'line-height', 'label' => 'Title Line Height', 'selector' => '+ .effect-titel h2'),
												array('property' => 'text-transform', 'label' => 'Title Text Transform', 'selector' => '+ .effect-titel h2'),
												array('property' => 'text-align', 'label' => 'Title Text Align', 'selector' => '+ .effect-titel h2'),
												array('property' => 'margin', 'label' => 'Title Margin', 'selector' => '+ .effect-titel h2'),
												array('property' => 'padding', 'label' => 'Title Padding', 'selector' => '+ .effect-titel h2'),
											),
					                    	'Subtitle' => array(
												array('property' => 'color', 'label' => 'Color', 'selector' => '+ .effect-titel > p'),
												array('property' => 'font-family', 'label' => 'Font Family', 'selector' => '+ .effect-titel > p'),
												array('property' => 'font-size', 'label' => 'Font Size', 'selector' => '+ .effect-titel > p'),
												array('property' => 'font-weight', 'label' => 'Font Weight', 'selector' => '+ .effect-titel > p'),
												array('property' => 'line-height', 'label' => 'Line Height', 'selector' => '+ .effect-titel > p'),
												array('property' => 'text-transform', 'label' => 'Text Transform', 'selector' => '+ .effect-titel > p'),
												array('property' => 'text-align', 'label' => 'Text Align', 'selector' => '+ .effect-titel > p'),
												array('property' => 'padding', 'label' => 'Padding', 'selector' => '+ .effect-titel > p'),
												array('property' => 'margin', 'label' => 'Margin', 'selector' => '+ .effect-titel > p'),
											),
		                    				'Icon' => array(
												array('property' => 'color', 'label' => 'Color', 'selector' => '+ .single-portfolio a i'),
												array('property' => 'background-color', 'label' => 'Background Color', 'selector' => '+ .icon-color'),
												array('property' => 'font-size', 'label' => 'Font Size', 'selector' => '+ .icon-color'),
												array('property' => 'height', 'label' => 'Height', 'selector' => '+ .icon-color'),
												array('property' => 'width', 'label' => 'Width', 'selector' => '+ .icon-color'),
												array('property' => 'line-height', 'label' => 'Line Height', 'selector' => '+ .icon-color'),
												array('property' => 'border', 'label' => 'Border', 'selector' => '+ .icon-color'),
												array('property' => 'border-radius', 'label' => 'Border Radius', 'selector' => '+ .icon-color'),
												array('property' => 'margin', 'label' => 'Margin', 'selector' => '+ .icon-color')
											),
											'Boxes' => array(
												array('property' => 'background-color', 'label' => 'Overlay Background Color', 'selector' => '+ .image-box::after'),
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

//drubo portfolio shortcode template
function drubo_portfolio_shortcode( $atts, $content = null ){
	extract( 
	 	shortcode_atts( array(
	 	'number_post'     => '',
	 	'menu_style'      => '',
	 	'post_open_style' => '',
	 	'show_pegination' => '',
	 	'custom_class'    => '',
	 	'custom_css'      => '',
	 	'order'           => '',
	  	), $atts )
	);		

	//custom class		
	$wrap_class  = apply_filters( 'kc-el-class', $atts );

	if( !empty( $custom_class ) ):
	 	$wrap_class[] = $custom_class;
    endif;

	$extra_class =  implode( ' ', $wrap_class );
    ob_start();
	$portfolio = null;
	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
	$args = array(
		'post_type' => 'drubo_portfolio',
		'posts_per_page' =>  $number_post,
		'order' => $order,
		'paged' => $paged,
	);
	$portfolio = new WP_Query( $args );
	if( $portfolio->have_posts() ):
		
    ?>
    <div class="<?php echo $extra_class; ?>">
    <!-- Latest Shot/Portfolio Menu Tab -->
    <div class="latest-content">
		<ul class="text-center <?php if($menu_style == '1'): echo 'latestshot'; else: echo 'portfolio'; endif; ?>-menu mt-55 mb-60 bg-white">
			<li class="active" data-filter="*">All</li>
			<?php 
			    $portfolio_category = get_terms( 'druboportfoliocat', array( 'hide_empty' => true ));
			    foreach ( $portfolio_category as $p_cat ) :
			    	echo '<li class="filter" data-filter=".'.$p_cat->slug.'">'.$p_cat->name.'</li>';
			    endforeach;
			?>
		</ul>
	</div>

    
	<!-- Latest Shot/Portfolio Menu Tab -->
    <!-- Latest Shot/Portfolio Menu Tab -->
	<div class="grid img-full portfolio-box">
            <?php 
            	while( $portfolio->have_posts() ): $portfolio->the_post();
            	
            	$post_terms = get_the_terms( get_the_ID(), 'druboportfoliocat' );
        	
        	    if( $post_terms && !is_wp_error( $post_terms ) ):

        	    	$portfolio_cat_slug = array();

        	    	foreach ( $post_terms as $term ):
        	    		$portfolio_cat_slug[] = $term->slug;
        	    	endforeach;

        	    	$portfolio_cat_class = join( ' ', $portfolio_cat_slug );

        	    endif;
                $prefix = '_drubo_';
        	    $portfolio_subtitle = get_post_meta(get_the_ID(),  $prefix . 'portfolio_subtitle', true);
              
            ?>
            <?php if($post_open_style == '1'): ?>

        	<div class="grid-sizer grid-item <?php echo $portfolio_cat_class; ?>">
				<!-- Latest Shot/Portfolio Single -->
				<div class="single-portfolio">
					<div class="image-effect">
						<div class="portfolio-image">
							<a href="<?php esc_url(the_permalink());?>">
								<?php 
									if( has_post_thumbnail() ):
										the_post_thumbnail('portfolio_small');
									endif;
								?>
							</a>
							<div class="effect-titel text-uppercase text-center">
								<a class="icon-color" href="<?php esc_url(the_permalink());?>">
								<i class="zmdi zmdi-link"></i>
								</a>
								<h2><?php the_title(); ?></h2>
								<?php if(!empty($portfolio_subtitle)
								): ?>
								<p><?php echo $portfolio_subtitle; ?></p>
							    <?php endif; ?>
							</div>
						</div>
					</div>
				</div>
				<!-- Latest Shot/Portfolio Single -->
			</div>

            <?php else: ?>
            <div class="grid-sizer grid-item <?php echo $portfolio_cat_class; ?>">
				<!-- Latest Shot/Portfolio Single -->
				<div class="single-portfolio">
					<div class="image-box">
						<?php 
						if( has_post_thumbnail() ):
							the_post_thumbnail('portfolio_small');
						endif; 
						?>
						<?php 
						$portfolio_medium = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'portfolio_medium');
						if(!empty($portfolio_medium)):
						?>
						<a class="venobox icon-color" href="<?php echo $portfolio_medium[0]; ?>">
						<i class="zmdi zmdi-link"></i>
						</a>
					    <?php endif; ?>
						</div>
					</div>
				</div>
			<?php endif; ?>
			<?php endwhile; ?>
			<!-- Latest Shot/Portfolio Single -->
		</div>
	</div>
	<?php if($show_pegination == 'yes'): ?>
	<div class="container">
	<div class="row">
	<div class="col-md-12">
	<div class="pagination-count text-center broder ptb-15 mt-60 white-bg">
	<?php
	    if( function_exists('drubo_pagination') ):
            drubo_pagination($portfolio->max_num_pages);
        endif;
    ?>
    </div>
    </div>
    </div>
    </div>
   <?php endif; ?>
   <?php 
	else:
		echo "<h1>No post available!</h1>";
	endif; 
	wp_reset_postdata(); 
	$portfolio_data = ob_get_clean();
	return $portfolio_data;
}
add_shortcode( 'drubo_portfolio', 'drubo_portfolio_shortcode' );