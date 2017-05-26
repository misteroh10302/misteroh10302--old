<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package JV
 */

get_header(); ?>

<style>
.large-menu {
    display: none;
    width: 100vw;
    height: 100vh;
    background-color: rgba(0, 0, 0, 0.8);
    color: white;
    top: 0;
    position: fixed;
    z-index: 998;
    font-family: Karla,arial,Sans-serif;
}
html {
	overflow: hidden;
}
	.desktop .entry-content a {
		position: absolute;
		    position: absolute;
	    height: 80vh;
	    width: 100vw;
	    left: 0;
	    right:0;
	    top: 80px;
	    background-size: contain;
	    background-repeat: no-repeat;
	    background-position: center center;
	}

	.desktop .entry-content img{
		opacity: 0;
	}

	#previous {
		position: absolute;
		width: 50vw;
		height:80vh;
		left:0;
		top:60px;
		color:transparent;
		z-index: 2;
		cursor: w-resize;
	}

	#next {
		position: absolute;
		width: 50vw;
		height:80vh;
		right:0;
		top:60px;
		color:transparent;
		z-index: 2;
		cursor: e-resize;
	}

	#primary-menu {
		display: block;
	}

	p {
		margin-bottom: 0;
	}

	#vertical-align p {
    margin-bottom: 1.5em;
}
	img {
		max-height: 85vh;
		float:left;
		width:auto;
		padding-right:30px;
	}

	#post-title {
	position: fixed;
   
	    bottom: 18px;
	    right: 0;
	    left: 0;
	     margin: 0 auto; 
	    text-align: center;
	    display: inline-block;
	    font-size: 11px;
	    font-size: 9px;
	    z-index: 90000;
	    text-align: center;
	    text-transform: uppercase;
	    letter-spacing: 2px;
	    max-width: 300px;
	}

	#theline {
		    position: absolute;
    top: 50vh;
    width: 95%;
	}

	#theline hr {
		background-color:red;
	}

.desktop {
	display: block;
}
	.mobile {
  display: none;
}
.return {
	text-align: center
}
.return a {
	font-size: 8px;
		text-transform: uppercase;
		font-family: Karla, arial, sans-serif;
}
@media screen and (max-width: 786px) {
	  .desktop  {
	    display:none;
	  }

	.mobile {
	  display: block;
	}

	html {
	overflow: scroll;
	    overflow-x: hidden;
}

	img {
	    max-height: 85vh;
	    float: none;
	    width: auto;
	    padding-right: 00px;
	    margin: 15px 0 0 0;
	}

	#content {
	    margin: 30px 0px;
	}

	p {
	    margin-bottom: 0;
	    margin: 0 15px;
	    text-align: center;
	}
		.page-content, .entry-content, .entry-summary {
	    margin: 0em 0 0;
	}

	#click-nav {
	    float: left;
	    position: fixed;
	    top: 30px;
	    left: 15px;
	    font-family: Karla;
	    z-index: 999;
	    cursor: pointer;
	    font-size: 12px;
	    letter-spacing: 2px;
	}
	.return {

		font-size: 8px;
		text-transform: uppercase;
		font-family: Karla, arial, sans-serif;
	}
}
</style>

	<div id="primary" class="content-area desktop">
		<div id="theline"><hr></div>
		<div id="previous">prev</div>
		<div id="next">next</div>
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

		

		endwhile; // End of the loop.
		?>

		<span id="post-title">
			<?php the_title(); ?>
		</span>

		</main><!-- #main -->
	</div><!-- #primary -->

	<div id="primary" class="content-area mobile">
		
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

		

		endwhile; // End of the loop.
		?>

		<span id="post-title">
			<?php the_title(); ?>
		</span>

		</main><!-- #main -->

		<div class="return">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">return to home</a>
		</div>
	</div><!-- #primary -->
<script>
$('.mobile .site-main a').on('click',function(e){
	e.preventDefault();
});

(function(){
		var $slides = $('.desktop .entry-content a');

		$slides.on('click',function(e){
			e.preventDefault();
		});

		$slides.each(function(){
			var theImage = $(this).find('img').attr('src');
			$(this).css('background-image',"url("+theImage+")");
		});

		$slides.hide();
		x = 0;	

		if ($slides.length <= 1) {
			$("#previous").hide();
			$("#next").hide();
		} 

		

		$slides.each(function(index){
			$(this).attr('id',index);
		});

		function show(x,direction,currentSlideDirection) {
				// $('.current').css('transform','translate('+currentSlideDirection+',0px');
					$('.current').css({'transform':'translate('+currentSlideDirection+',0px','transition':'0s'});


				setTimeout(function delay(){

					$slides.not('.current').css({'transform':'translate('+direction+',0px)','transition':'0s'}).hide();
					// $slides.removeClass('current').hide();
					$currentSlide = $slides.eq(x);
					$currentSlide.addClass('current');
					$currentSlide.fadeIn('slow').css({'transform':'translate(0,0px)','transition':'0s'});
					
					setTimeout(function() {
					       $slides.not($currentSlide).removeClass('current');
					   }, 0);

				},0);
		
			}

			function previous() {
				var direction = '100vw';
				var currentSlideDirection = '-100vw';
				if (x === $slides.length-1) {
					x = 0;
					show(x,direction,currentSlideDirection);
				
				} else {
					x++;
					show(x,direction,currentSlideDirection);
					
				}
			}

			function next() {
				var direction = '-100vw';
				var currentSlideDirection = '100vw';
				if (x === -$slides.length+1) {
					x = 0;
					show(x,direction,currentSlideDirection);
				
				} else {
					x--;
					show(x,direction,currentSlideDirection);
					
				}
			}

			$("#next").click(function () {
				previous();
			});

			$("#previous").click(function () {
				next();
			});
		

			var isDragging = false;
			$("#previous").mousedown(function(e) {
				var previous_x_position = e.pageX;
				var previous_y_position = e.pageY;

				$(window).mousemove(function(event) {
				    isDragging = true;
				    var x_position = event.pageX;
				    var y_position = event.pageY;

				    if (previous_x_position < x_position) {
				        previous();
				    } 
				    $(window).unbind("mousemove");
				});
				}).mouseup(function() {
				var wasDragging = isDragging;
				isDragging = false;
				$(window).unbind("mousemove");
			});

			var isDragging = false;
			$("#next").mousedown(function(e) {
				var previous_x_position = e.pageX;
				var previous_y_position = e.pageY;

				$(window).mousemove(function(event) {
				    isDragging = true;
				    var x_position = event.pageX;
				    var y_position = event.pageY;

				     if (previous_y_position < y_position) {
			            next();
			        }
				    $(window).unbind("mousemove");
				});
				}).mouseup(function() {
				var wasDragging = isDragging;
				isDragging = false;
				$(window).unbind("mousemove");
			});
			show(x);
	
})();


	$(document).ready(function(){
		$("#theline").hide().delay(3000);
	});

	$('#click-nav').on('click',function(){
		$('.large-menu').fadeToggle();
	    $(this).find('.desktop').text(function(i, v){
	               return v === 'CLOSE' ? 'MENU' : 'CLOSE'
	            });

	    $(this).toggleClass('nav-open');
	    // $(this).html('close');
	    // $(this).css('color','white');
	});

</script>
<?php

