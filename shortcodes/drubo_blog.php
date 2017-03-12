<?php
/*
 * Drubo Blog
 * Author: Hastech
 * Author URI: http://hastech.company
 * Version: 1.0.0
 * ======================================================
 */




add_action('init',function(){
	add_image_size( 'drubo_blog_shortcode' , 370 , 212 , true );
});



/**
 * =======================================================
 *    KC Shortcode Map
 * =======================================================
 */

add_action('init', 'drubo_blog_map'); // Call kc_add_map function ///

if(!function_exists('drubo_blog_map')):
	function drubo_blog_map(){
		if(function_exists('kc_add_map')): // if kingComposer is active



// Categories
$output_categories = array();
$categories = get_categories();
  foreach($categories as $category) { 
     $output_categories[$category->cat_ID] = $category->name;
}





		kc_add_map(
		    array(
		        'drubo_blog' => array( // <-- shortcode tag name

		            'name' => __('Blog', DRUBO_SHORTCODE_TEXT_DOMAIN),
		            'description' => __('Drubo Blog', DRUBO_SHORTCODE_TEXT_DOMAIN),
		            'icon' => 'fa-th',
		            'category' => DRUBO_SHORTCODE_CATEGORY,
		            'params' => array(
		        // .............................................
		        // ..... // Content TAB
		        // .............................................

		         	'Content' => array(

		                array(
		                    'name' => 'category',
		                    'label' => __('Select category',DRUBO_SHORTCODE_TEXT_DOMAIN),
		                    'type' => 'select',
		                    'admin_label' => true,
		                    'options' => $output_categories
		                ),
		                array(
		                    'name' => 'show_author',
		                    'label' => __('Show Author name',DRUBO_SHORTCODE_TEXT_DOMAIN),
		                    'type' => 'toggle',
		                    'value' => 'yes'
		                ),
		                array(
		                    'name' => 'show_comment_count',
		                    'label' => __('Show comment count',DRUBO_SHORTCODE_TEXT_DOMAIN),
		                    'type' => 'toggle',
		                    'value' => 'yes'
		                ),
		                array(
		                    'name' => 'show_publish_date',
		                    'label' => __('Show publish date',DRUBO_SHORTCODE_TEXT_DOMAIN),
		                    'type' => 'toggle',
		                    'value' => 'yes'
		                ),
		                array(
		                    'name' => 'post_count',
		                    'label' => __('Post count',DRUBO_SHORTCODE_TEXT_DOMAIN),
		                    'type' => 'number_slider',
		                    'value' => 3
		                ),
		                array(
		                    'name' => 'excerpt_length',
		                    'label' => __('Show publish date',DRUBO_SHORTCODE_TEXT_DOMAIN),
		                    'type' => 'number_slider',
		                    'value' => 25
		                ),
		                array(
		                    'name' => 'readmore_txt',
		                    'label' => __('Readmore text',DRUBO_SHORTCODE_TEXT_DOMAIN),
		                    'type' => 'text',
		                    'value' => 'Read More'
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
		                    						'label' => 'Title Font Family', 
		                    						'selector' => '+ .style-two > h6'
		                    					),
		                    					array( 
		                    						'property' => 'font-size', 
		                    						'label' => 'Title Font Size', 
		                    						'selector' => '+ .style-two > h6' 
		                    					),
		                    					array(
		                    						'property' => 'font-weight', 
		                    						'label' => 'Title Font Weight', 
		                    						'selector' => '+ .style-two > h6'
		                    					),
		                    					array(
		                    						'property' => 'line-height', 
		                    						'label' => 'Title Font weight', 
		                    						'selector' => '+ .style-two > h6'
		                    					),
		                    					array(
		                    						'property' => 'text-align', 
		                    						'label' => 'Title Text Align', 
		                    						'selector' => '+ .style-two > h6'
		                    					),
		                    					array(
													'property' => 'text-transform', 
													'label' => 'Title Text Transform', 
													'selector' => '+ .style-two > h6'
												),
		                    					array( 
		                    					    'property' => 'color', 
		                    					    'label' => 'Title Color', 
		                    					    'selector' => '+ .style-two > h6' 
		                    					),
		                    					array( 
		                    					    'property' => 'padding', 
		                    					    'label' => 'Title Padding', 
		                    					    'selector' => '+ .style-two > h6'
		                    					)
		                    				),
		                    				'Post meta'   => array(
		                    					array(
		                    						'property' => 'font-family', 
		                    						'label' => 'Font Family', 
		                    						'selector' => '+ .post-meta'
		                    					),
		                    					array( 
		                    						'property' => 'font-size', 
		                    						'label' => 'Font Size', 
		                    						'selector' => '+ .post-meta' 
		                    					),
		                    					array(
		                    						'property' => 'font-weight', 
		                    						'label' => 'Font Weight', 
		                    						'selector' => '+ .post-meta'
		                    					),
		                    					array(
		                    						'property' => 'text-align', 
		                    						'label' => 'Text Align', 
		                    						'selector' => '+ .post-meta'
		                    					),
		                    					array(
													'property' => 'text-transform', 
													'label' => 'Text Transform', 
													'selector' => '+ .post-meta'
												),
		                    					array( 
		                    					    'property' => 'color', 
		                    					    'label' => 'Color', 
		                    					    'selector' => '+ .post-meta' 
		                    					),
		                    				),
		                    				'Excerpt'   => array(
		                    					array(
		                    						'property' => 'font-family', 
		                    						'label' => 'Font Family', 
		                    						'selector' => '+ .post-content p'
		                    					),
		                    					array( 
		                    						'property' => 'font-size', 
		                    						'label' => 'Font Size', 
		                    						'selector' => '+ .post-content p' 
		                    					),
		                    					array( 
		                    						'property' => 'line-height', 
		                    						'label' => 'Line Height', 
		                    						'selector' => '+ .post-content p' 
		                    					),
		                    					array(
		                    						'property' => 'font-weight', 
		                    						'label' => 'Font Weight', 
		                    						'selector' => '+ .post-content p'
		                    					),
		                    					array(
		                    						'property' => 'text-align', 
		                    						'label' => 'Text Align', 
		                    						'selector' => '+ .post-content p'
		                    					),
		                    					array(
													'property' => 'text-transform', 
													'label' => 'Text Transform', 
													'selector' => '+ .post-content p'
												),
		                    					array( 
		                    					    'property' => 'color', 
		                    					    'label' => 'Color', 
		                    					    'selector' => '+ .post-content p' 
		                    					),
		                    				),
		                    				'Footer'   => array(
		                    					array(
		                    						'property' => 'font-family', 
		                    						'label' => 'Font Family', 
		                    						'selector' => '+ footer'
		                    					),
		                    					array( 
		                    						'property' => 'font-size', 
		                    						'label' => 'Font Size', 
		                    						'selector' => '+ footer' 
		                    					),
		                    					array(
		                    						'property' => 'font-weight', 
		                    						'label' => 'Font Weight', 
		                    						'selector' => '+ footer'
		                    					),
		                    					array(
		                    						'property' => 'text-align', 
		                    						'label' => 'Text Align', 
		                    						'selector' => '+ footer'
		                    					),
		                    					array(
													'property' => 'text-transform', 
													'label' => 'Text Transform', 
													'selector' => '+ footer'
												),
		                    					array( 
		                    					    'property' => 'color', 
		                    					    'label' => 'Color', 
		                    					    'selector' => '+ footer' 
		                    					),
		                    				)
		                    				
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
// [$shortcode_name title="" desc="" css_class=""]

function drubo_blog_func($atts,$content){
ob_start();
        $drubo_shortcode_atts = shortcode_atts(array(
                'title' => '',
                'desc' => '',

                //
                'show_author' => '',
                'show_comment_count' => '',
                'show_publish_date' => '',

                'category' => '',
                'excerpt_length' => '',
                'post_count' => '',
                'readmore_txt' => '',

                'custom_css' => '',
                'custom_css_class' => '',
        ),$atts); 
        extract($drubo_shortcode_atts);


		$args = array(
			'post_type'        => array( 'post' ),
			'cat'              => $category,
			'posts_per_page'   => $post_count
		);
		$query = new WP_Query( $args );



    //custom class		
	$wrap_class  = apply_filters( 'kc-el-class', $atts );
	if( !empty( $custom_class ) ):
	 	$wrap_class[] = $custom_class;
    endif;
	$extra_class =  implode( ' ', $wrap_class );	


?>
<div class="<?php echo $extra_class; ?> <?php echo $custom_css_class; ?>">

<div class="row">
		<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
					<!-- Single Blog -->
					<div class="col-md-4 col-sm-6 col-xs-12 res-pb-xs-30 pt-55">
						<div class="single-blog style-two white-bg broder">
							<h6><a href="<?php the_permalink(); ?>"><?php 
							if (!empty(get_the_title())) 
								echo get_the_title();
							else
								echo "(.. No Title ..)";
							?></a></h6>
							<div class="blog-img">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('drubo_blog_shortcode'); ?></a>
							</div>
							<div class="blog-content">
								<div class="post-info">
									<div class="post-meta">
										<?php if($show_author): ?>
										<span class="post-date mr-15">
											<i class="zmdi zmdi-account"></i>By : <?php the_author(); ?>
										</span>
										<?php endif; ?>
										
										<?php if($show_comment_count): ?>
										<span class="post-date mr-15">
											<i class="zmdi zmdi-comments"></i>( <?php comments_number(); ?> )
										</span>
										<?php endif; ?>
									</div>

									<div class="post-content">
										<p><?php echo wp_trim_words( get_the_content() , $excerpt_length , '' ); ?></p>
									</div>

									<footer>
										<?php if($show_publish_date): ?>
										<span class="post-date">
											<i class="zmdi zmdi-time"></i> <?php echo the_date('M d, Y'); ?>
										</span>
										<?php endif; ?>

										<span class="post-btn pull-right">
											<a href="<?php the_permalink(); ?>"><?php echo $readmore_txt; ?><i class="zmdi zmdi-arrow-right"></i></a>
										</span>
									</footer>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Blog -->
		<?php endwhile; endif; ?>
				</div>
</div>
<?php
    return ob_get_clean();
}
add_shortcode('drubo_blog' ,'drubo_blog_func');