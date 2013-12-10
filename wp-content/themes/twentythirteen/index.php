<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
	<!-- SECTION 1 HEADER/SLIDER-->
	<div id="one_background" class="parallax">
		<!-- <div id="one_background" class="parallax" style="background-image: url(../midsun/images/background.png);"> -->
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
		
			<a href="#two_background"><div class="down_arrow"></div></a>
		
	</div> <!-- end one_background -->

	<!-- SECTION 2 SUBSCRIBE -->
	<div id="two_background" class="container">
		<h3 id="two_headline">
			SUBSCRIBE TO MIDNIGHT SUN MAILING LIST
		</h3>
		<form>
			<input type="text" placeholder="Enter Email Address..." id="subscribe_container">
			<input type="submit" value="Subscribe" id="subscribe_submit">
		</form>
	</div><!-- end two_background -->

	<!-- SECTION 3 ABOUT US -->
	<div id="three_background">
		<div id="three_content" class="span10">
			<div class="flexslider">
			  <ul class="slides">
			  	<li>
			  		<div class="three_content_title"><?php echo get_the_title($ID=119); ?></div>
		      		<?php
						$my_id = 119;
						$post_id_119 = get_post($my_id);
						$content = $post_id_119->post_content;
						$content = apply_filters('the_content', $content);
						$content = str_replace(']]>', ']]>', $content);
						echo $content;
					?>
			    </li>
			    <li>
			    	<div class="three_content_title"> <?php echo get_the_title($ID=123); ?></div>
			     	<?php
						$my_id = 123;
						$post_id_123 = get_post($my_id);
						$content = $post_id_123->post_content;
						$content = apply_filters('the_content', $content);
						$content = str_replace(']]>', ']]>', $content);
						echo $content;
					?>
			    </li>
			    <li>
			    	<div class="three_content_title"> <?php echo get_the_title($ID=125); ?></div>
			      	<?php
						$my_id = 125;
						$post_id_125 = get_post($my_id);
						$content = $post_id_125->post_content;
						$content = apply_filters('the_content', $content);
						$content = str_replace(']]>', ']]>', $content);
						echo $content;
					?>
			    </li>
			    <li>
			    	<div class="three_content_title"> <?php echo get_the_title($ID=127); ?></div>
			      	<?php
						$my_id = 127;
						$post_id_125 = get_post($my_id);
						$content = $post_id_125->post_content;
						$content = apply_filters('the_content', $content);
						$content = str_replace(']]>', ']]>', $content);
						echo $content;
					?>
			    </li>
			    
			    <li>
			    	<div class="three_content_title"><?php echo get_the_title($ID=129); ?></div>
			   		<?php
						$my_id = 129;
						$post_id_129 = get_post($my_id);
						$content = $post_id_125->post_content;
						$content = apply_filters('the_content', $content);
						$content = str_replace(']]>', ']]>', $content);
						echo $content;
					?>
				</li>
				<li>
					<div class="three_content_title"><?php echo get_the_title($ID=131); ?></div>
		      		<?php
						$my_id = 131;
						$post_id_131 = get_post($my_id);
						$content = $post_id_125->post_content;
						$content = apply_filters('the_content', $content);
						$content = str_replace(']]>', ']]>', $content);
						echo $content;
					?>
			    </li>
			  </ul>
			</div><!-- end flexslider -->
		</div>

		<div id="three_gallery" class="span11">

			<ul class="gallery clearfix">
				<li>

					<a href="wp-content/themes/twentythirteen/images/gallery/1.jpg" rel="prettyPhoto[gallery1]" title="Midnight Sun Team at FSGP in Texas"><div class="ico"></div><img src="wp-content/themes/twentythirteen/images/gallery/1.jpg" width="60" height="60"/></a>
				</li>
				<li><a href="wp-content/themes/twentythirteen/images/gallery/2.jpg" rel="prettyPhoto[gallery1]" title="Midnight Sun Team at FSGP in Texas"><div class="ico"></div><img src="wp-content/themes/twentythirteen/images/gallery/2.jpg" width="60" height="60"/></a></li>
				<li><a href="wp-content/themes/twentythirteen/images/gallery/3.jpg" rel="prettyPhoto[gallery1]" title="Midnight Sun Team at FSGP in Texas"><div class="ico"></div><img src="wp-content/themes/twentythirteen/images/gallery/3.jpg" width="60" height="60"/></a></li>
				<li><a href="wp-content/themes/twentythirteen/images/gallery/4.jpg" rel="prettyPhoto[gallery1]" title="Midnight Sun Team at FSGP in Texas"><div class="ico"></div><img src="wp-content/themes/twentythirteen/images/gallery/4.jpg" width="60" height="60"/></a></li>
				<li><a href="wp-content/themes/twentythirteen/images/gallery/5.jpg" rel="prettyPhoto[gallery1]" title="Midnight Sun Team at FSGP in Texas"><div class="ico"></div><img src="wp-content/themes/twentythirteen/images/gallery/5.jpg" width="60" height="60"/></a></li>
			</ul>
			<a href="https://www.facebook.com/uwmidsun/photos_stream" style="color:#464646"><p>VIEW OUR GALLERY >></p></a>
			<div class="clearfix"></div>
		</div><!-- end three_gallery -->
	</div><!-- end three_background -->

	<!-- Section 4 OUR TEAMS -->
	<div id="four_background">
		<?php
		    $page_id = 138;
		    $page_data = get_page( $page_id );
		    $the_excerpt = $page_data->post_excerpt;
		    $title = $page_data->post_title;
		?>
		<!-- OUR TEAM -->
		<h3 id="four_headline"><?php echo $page_data->post_title; ?></h3>		
		<div id="four_content" class="span10">
			<p>
				<?php echo $page_data->post_content; ?>
			</p>
		</div><!-- end four_content -->
		<div id="four_teams" class="span10">
			<ul>
				<li>
					<a href="">
						<img style="border-radius:6px" src="wp-content/themes/twentythirteen/images/gallery/1.jpg">
						<a href="" style="color:white"><h4>MECHANICAL</h4></a>
						<p>Mechanical Team makes sure the car will possess reliable suspension, braking, and steering systems - while keeping it aesthetically pleasing and lightweight.</p>
						<a href="" class="findoutmore">Find Out More</a>
					</a>
				</li>
				<li style="margin-left: 300px;">
					<a href="">
						<img style="border-radius:6px"  src="wp-content/themes/twentythirteen/images/gallery/2.jpg">
						<a href="" style="color:white"><h4>ELECTRICAL</h4></a>
						<p>The Electrical Team is always determined to build the best and often brings forth designs that surpass our wildest expectations</p>
						<a href="" class="findoutmore">Find Out More</a>
					</a>
				</li>
				<li style="margin-left: 600px">
					<a href="">
						<img style="border-radius:6px" src="wp-content/themes/twentythirteen/images/gallery/3.jpg">
						<a href="" style="color:white"><h4>BUSINESS</h4></a>
						<p> Through events, videos, events, and more, the Business Team ensure you will always be updated on the latest from Midnight Sun Team.</p>
						<a href="" class="findoutmore">Find Out More</a>
					</a>
				</li>
			</ul>
			<div class="clearfix"></div>
		</div><!-- end four_teams -->

		<div id="four_button" class="span5">
			<a href=""><h4 id="four_team_button">JOIN A TEAM TODAY</h4></a>
			<div class="clearfix"></div>
		</div><!-- end four_button -->
		<div class="clearfix"></div>


	</div><!-- end four_background -->

		<!-- SECTION 5 SUBSCRIBE -->
	<div id="five_background" class="container">
		<h3 id="five_headline">
			FOLLOW US ON SOCIAL MEDIA! 
		</h3>
		<div class="social_media">
			<a href="https://twitter.com/uwmidsun"><div class="twitter"></div></a>
			<a href="https://www.facebook.com/uwmidsun"><div class="facebook"></div></a>
		</div>
	</div><!-- end two_background -->


	<!-- SECTION 6 ADOPT A CELL -->
	<div id="six_background" class="container">
		<?php
		    $page_id = 144;
		    $page_data = get_page( $page_id );
		    $the_excerpt = $page_data->post_excerpt;
		    $title = $page_data->post_title;
		?>
    
		<h3 id="six_headline"><?php echo $page_data->post_title; ?></h3><!-- six_headline -->
		<div id="six_content" class="span10">
			<p><?php echo $page_data->post_content; ?></p>
		</div><!-- end six_content -->

		<div id="six_steps" class="span10">
			<ul>
				<a href=""><li></li></a>
				<a href=""><li></li></a>
				<a href=""><li></li></a>
			</ul>
		</div><!-- end six_steps -->
	</div><!-- end six_background -->

	<!-- SECTION 7  SPONSOR-->
	<div id="seven_background" class="container">
		<?php
		    $page_id = 146;
		    $page_data = get_page( $page_id );
		    $the_excerpt = $page_data->post_excerpt;
		    $title = $page_data->post_title;
		?>
		<h3 id="seven_headline"><?php echo $page_data->post_title; ?></h3>
		<div id="seven_slogan" class="span9"><?php echo $page_data->post_content; ?></div>
		<div id="seven_content" class="span8">
			<ul>
				<li>ICON</li>
				<li>ICON</li>
				<li>ICON</li>
				<li>ICON</li>
				<li>ICON</li>
				<li>ICON</li>
				<li>ICON</li>
				<li>ICON</li>
				<li>ICON</li>
				<li>ICON</li>
				<li>ICON</li>
				<li>ICON</li>
				<li>ICON</li>
				<li>ICON</li>
				<li>ICON</li>
				<li>ICON</li>
			</ul>

		</div><!-- end seven_content -->

	</div><!-- end six_background -->

	<!-- SECTION 8 CONTACT US -->
	<div id="eight_background">
		<div id="eight_wrapper">
			<h3 id="eight_headline">CONTACT US</h3><!-- end eight_headline -->
			<p> info@uwmidsun.com</p>
			<p> University of Waterloo, Waterloo, Ontario, Canada, XXX XXX</p>
		</div><!-- eight_wrapper -->
	</div><!-- end eight_background -->


	<!-- PRETTYPHOTO -->
	<script type="text/javascript" charset="utf-8">
			$(document).ready(function(){
				$("area[rel^='prettyPhoto']").prettyPhoto();
				
				$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true});
				$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
		
				$("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
					custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
					changepicturecallback: function(){ initialize(); }
				});

				$("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
					custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
					changepicturecallback: function(){ _bsap.exec(); }
				});
			});
	</script>

	<script>
		// Smooth scroll
		$(document).ready(function() {		
		  $('a[href*="#"]').on('click.smoothscroll',function(e) {
		  	e.preventDefault();
		  	var target = this.hash;
		  	goScroll(target);
		  });
		});

		function goScroll(target){
			$target = $(target);
		  $('html, body').stop().animate({
		    'scrollTop': $target.offset().top - 120
		  }, 500, function () {
		    window.location.hash = target;
		  });
		}
	</script>

	<!-- BACKGROUND SLIDESHOW -->
	<script>
	$.vegas('slideshow', {
		 delay:8000,
		  backgrounds:[
		    { src:'wp-content/themes/twentythirteen/images/bg/bg1.png', fade:1500},
		    { src:'wp-content/themes/twentythirteen/images/bg/bg2.png', fade: 1500},
		    { src:'wp-content/themes/twentythirteen/images/bg/bg3.png', fade: 1500},
		    { src:'wp-content/themes/twentythirteen/images/bg/bg4.png', fade: 1500},
		    { src:'wp-content/themes/twentythirteen/images/bg/bg5.png', fade: 1500}
		  ]
		})('overlay');
	</script>
	<!-- menu change -->
	<script type="text/javascript">
		$(document).on("scroll",function(){
		    if($(document).scrollTop()>760){
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

</body>
</html>
<?php get_footer(); ?>