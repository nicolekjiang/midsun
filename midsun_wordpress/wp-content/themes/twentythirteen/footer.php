<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->


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
		    { src:'wp-content/themes/twentythirteen//images/bg/bg1.png', fade:1500},
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
<footer>
	<div class="social_media_footer">
		<a href="https://twitter.com/uwmidsun"><div class="twitter_footer"></div></a>
		<a href="https://www.facebook.com/uwmidsun"><div class="facebook_footer"></div></a>
		<a href=""><div class="phone_footer"></div></a>
		<a href=""><div class="location_footer"></div></a>
		<a href="mailto:mail@uwmidsun.com "><div class="email_footer"></div></a>

	</div>
	<h3 id="footer_content">©2013 Midnight Sun Solar Rayce Car Team   All Rights Reserved.</h3>
</footer>
</html>