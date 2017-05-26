<?php

/* 
Template Name: PET EVENTS
*/ 

get_header(); ?>
<style>#container {position:relative; width:400px; position: fixed; top:0;}

.line {
  fill:none;
  stroke:#000000;
  stroke-miterlimit:10;
  stroke-dasharray:400;
  stroke-dashoffset:400px;
  -webkit-transition: stroke-dashoffset 1s;
  -moz-transition: stroke-dashoffset 1s;
  -o-transition: stroke-dashoffset 1s;
  transition: stroke-dashoffset 1s;
}

h2 {
       font-size: 12px;
    line-height: .92;
    text-transform: none;
    font-weight: 400;
    color: rgb(0, 0, 0);
    -webkit-margin-before: 1em;
    -webkit-margin-after: 0em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
    font-family: helvetica;
}

.tooltip {
  opacity:0;
  -webkit-transition: all .3s .2s;
  font-size:12px;
}

body {
	background-size: cover;
	background-repeat:no-repeat;
	 background-attachment: fixed;
	 background-position: center center;
}
.sticky {
       width: 310px;
    height: 300px;
    position: absolute;
    right: 5vw;
    border: 1px solid #BDAA00;
    box-shadow: 0px 0px 20px 1px rgba(165, 163, 163, 0.5);
    background: #FEF597;
    cursor: default;
    z-index: 8;
}

.sticky-header {
    height: 11px;
    width: 100%;
    border-bottom: 1px solid #BDAA00;
    background: #FFEC1E;
}


a {
	cursor: pointer;
}



 .rowA {
     background-color:lightgreen;
 }
 /*Scroll Buttons*/
 .btnScroll {
     position: fixed;
     background-color: rgba(0, 0, 0, .5);
     width:40px;
     height:40px;
     text-align:center;
     line-height:40px;
     color:white;
     border-radius:4px;
     position: fixed;
    background-color: transparent;
    width: 40px;
    height: 7em;
    text-align: center;
    line-height: 40px;
    color: black;
    border-radius: 4px;
    left: 1em;
    top: 2em;
 }
 .btnScroll:hover {
     background-color: rgba(255, 255, 255, .2);
     cursor:pointer;
 }
 .btnScroll:active {
     background-color: rgba(255, 255, 255, .5);
     cursor:pointer;
     selection:none;
 }
 .btnPrev {
     bottom: 70px;
     right: 20px;
      z-index: 400000;
     position: relative;
 }
 .btnNext {
     bottom: 20px;
     right: 20px;
     z-index: 400000;
     position: relative;
 }
 .noselect {
     -webkit-touch-callout: none;
     -webkit-user-select: none;
     -khtml-user-select: none;
     -moz-user-select: none;
     -ms-user-select: none;
     user-select: none;
 }

#thebuttons {
	position: absolute;
	

}
</style>

<div id="container">
<div id="thebuttons">
	<div class="btnScroll btnPrev noselect">&#8593;</div>
	<div class="btnScroll btnNext noselect">&#8595;</div>
</div>

 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 230.6 52.6" style="enable-background:new 0 0 230.6 52.6;" xml:space="preserve">
<!-- 	<circle id="button1" cx="113.7" cy="42.7" r="9.8"/> PET
	 --><!-- <circle id="button2" cx="220.7" cy="42.7" r="9.8"/> -->
	<polyline id="line_1" class="line" points="115.6,42.5 84.4,13.1 13.1,13.1 0,0 "/>
	<polyline id="line_2" class="line" points="220.6,42.6 220.6,14.1 150.1,14.1 139,3 "/>

	<text id="text1" transform="matrix(1 0 0 1 16.137 10.0081)" class="tooltip">Creating work amongst the mavericks </text>
	
	</svg>
</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<div class="">
	<div class=""></div>
	 <?php query_posts( array ( 'category_name' => 'events', 'posts_per_page' => 12,'orderby'=>'desc' ) ); ?>

		<?php if ( have_posts() ) : ?>


			<?php if ( is_home() && ! is_front_page() ) : ?>

				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<div class="events section " id="post-<?php the_ID(); ?>" 

					<?php post_class(); ?>>

					
					

						<div class="entry-content ">
						
					</div><!-- .entry-content -->
					<header class="entry-header clear">
						<h2>
					<!-- 	<?php the_title( ); ?>
						<?php the_date(); ?> -->
						</h2>

						<?php the_content(); ?>


						<?php if ( 'post' == get_post_type() ) : ?>
						<div class="entry-meta">
							
						</div><!-- .entry-meta -->
						<?php endif; ?>
					</header><!-- .entry-header -->
					<div class="clear"></div>

					

					
				</div><!-- #post-## -->

			<?php endwhile; ?>

			

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

	<section><text id="text2" transform="matrix(1 0 0 1 154.137 10.0081)" class="tooltip">tooltip 2</text></section>

<script>


	
	$('article').each( function(index) {
			$(this).attr('id',index);
	});

$( "article" ).draggable({
  addClasses: false
});

$( "article"  )
	.mouseover(function() {
			var URL = $(this).find('img').attr('src');

	   	 $( 'body' ).css( "background-image", 'url('+URL+')' );
	   	 $('article').not($(this)).css('opacity','0');
	   	 	$(this).css('opacity','1');
	  
		
	  })
	  .mouseout(function() {
  		$( 'body' ).css( "background-image", 'none' );
  		 $('article').css('opacity','1');
	   	 $(this).css('opacity','1');
	
	  	
	  });
	  
 


	$(document).ready(function() {

  $("#button1").on("mouseover", function() {
    $('#line_1').css('stroke-dashoffset', '0');
    $('#text1').css('opacity', '100');
  });
  $("#button1").on("mouseout", function() {
    $('#line_1').css('stroke-dashoffset', '400px');
    $('#text1').css('opacity', '0');
  });
  
  $("#button2").on("mouseover", function() {
    $('#line_2').css('stroke-dashoffset', '0');
    $('#text2').css('opacity', '100');
  });
  $("#button2").on("mouseout", function() {
    $('#line_2').css('stroke-dashoffset', '400px');
    $('#text2').css('opacity', '0');
  });
});

		//capture scroll any percentage
$(window).scroll(function(){

    var wintop = $(window).scrollTop(), docheight = $(document).height(), winheight = $(window).height();
    var  scrolltrigger = 0.95;

    // console.log('%scrolled='+(wintop/(docheight-winheight))*100);

    var percentage = (wintop/(docheight-winheight))*100;

    var roundedP = Math.round(percentage);
    console.log(roundedP);

    document.getElementById("percent").innerHTML = roundedP;

    if  ((wintop/(docheight-winheight)) > scrolltrigger) {
       console.log('scroll bottom');
       lastAddedLiveFunc();
    }
});

var curr_el_index = 0;
var els_length = $(".section").length;

$('.btnNext').click(function () {
    curr_el_index++;
    if (curr_el_index >= els_length) curr_el_index = 0;
    $("html, body").animate({
        scrollTop: $(".section").eq(curr_el_index).offset().top - 20
    }, 700);
});

$('.btnPrev').click(function () {
    curr_el_index--;
    if (curr_el_index < 0) curr_el_index = els_length - 1;
    $("html, body").animate({
        scrollTop: $(".section").eq(curr_el_index).offset().top - 20
    }, 700);
});
</script>
<?php get_footer(); ?>
