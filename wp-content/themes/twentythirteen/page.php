<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">1
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				
				<div id="one_background">
					<h1 id="one_headline">
					<?php
					    $page_id = 150;
					    $page_data = get_page( $page_id );
					    $the_excerpt = $page_data->post_excerpt;
					    $title = $page_data->post_title;
					?>
					    <?php echo $page_data->post_title; ?> 
				</h1>
				<p id="one_slogan"><?php echo $page_data->post_content; ?></p>
				</div><!--  end one_background -->

				<div id="three_background">
					<div id="timeline">
						<iframe src='http://embed.verite.co/timeline/?source=0AsojHconu80idGtiVTJhMzAyYndKaGFaVmZkQlVDZFE&font=Bevan-PotanoSans&maptype=HYBRID&lang=en&start_at_end=true&height=600' height='600px' width='70%' frameborder='0'></iframe>
					</div>
				</div><!--  end three_background  -->

				<div id="four_background" class="car_listings" style="padding-top:80px">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							
							<h1 class="entry-title"><?php the_title(); ?></h1>
						</header><!-- .entry-header -->
						<div id="car_listing_photo">
							<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
								<?php the_post_thumbnail('full'); ?>
							<?php endif; ?>
						</div>
						<div id="car_listing_content">
							<h1 class="entry-title"><?php the_title(); ?></h1>
							<?php the_content(); ?>
							<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
						</div><!-- .entry-content -->
						<div class="clearfix"></div>
					</article><!-- #post -->
				</div> <!-- end car_listings -->
				<div id="four_background" class="car_listings" style="padding-top: 0px">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							
							<h1 class="entry-title"><?php the_title(); ?></h1>
						</header><!-- .entry-header -->
						<div id="car_listing_photo">
							<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
								<?php the_post_thumbnail('full'); ?>
							<?php endif; ?>
						</div>
						<div id="car_listing_content">
							<?php the_content(); ?>
							<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
						</div><!-- .entry-content -->
						<div class="clearfix"></div>
					</article><!-- #post -->
				</div> <!-- end car_listings -->

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

	<script type="text/javascript">
			$(document).on("scroll",function(){
			    if($(document).scrollTop()>160){
			    	$("header").removeClass("navbar_big").addClass("navbar");

			    } else{
			        $("header").removeClass("navbar").addClass("navbar_big");
			    }
			});
			$(window).load(function() {
			  $('.flexslider').flexslider({
			    animation: "slide"
			  });
			});
	</script>
<?php get_sidebar(); ?>
<?php get_footer(); ?>