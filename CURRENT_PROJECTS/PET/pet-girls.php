<?php

/* 
Template Name: PET Girls
*/ 

get_header(); ?>
<style>#container {position:relative; width:400px; margin-top:4%; position: fixed; top:0;}

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
  .the-sticky-div.sticky {
     position: fixed;
     top: 0;
     width: 75%;
     padding: 1em 0em;
     background-color: black;
     transition: .2s;
  }

  .the-sticky-div {

     transition: .2s;
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
	 background-color: black;
	 color: white;
}
.main-navigation a {
    color: white !important;
}

.thegirls {
	widows: 33%;
}

body{
  background-color: black;
  padding-top: 10px;
} 

p{
  color: white; 
  font-size: 12px;
  overflow: hidden;
  text-align: left;
  font-family: dos;


}


.starting {
	    margin-top: -4em;
	    
}
.starting p {
	width: 30em;
	  white-space: nowrap;
	  animation: type 4s steps(60, end); 
	      font-size: 12px;
	        font-family: MorePerfectDOSVGA;

}

.starting p:nth-child(2){
  animation: type2 8s steps(60, end);
}

p a{
  text-decoration: none;
}

.entry-header p:hover {
	cursor: pointer;
}

/*span{
  animation: blink 1s infinite;
}*/

@keyframes type{ 
  from { width: 0; } 
} 

@keyframes type2{
  0%{width: 0;}
  50%{width: 0;}
  100%{ width: 100; } 
} 

@keyframes blink{
  to{opacity: .0;}
}

::selection{
  background: black;
}

body {
	color: white;
}

a {color:white !important;}
a:visited {color:white;}
a:hover {color:white !important;}

td {
	text-align: left;
}

.the_grl_table  {
	border-bottom: 1px dotted white;
	font-family: DOS;
}

.the_grl_table div{
	display: inline-block;
	width: 24%;
	text-align: left;
	    padding: 1.25em 1em;

}




.theitemcontent {
	display: none;
    padding: 2em;
    margin: 0em auto;
    text-align: left;
    background-color: black;
    color: white;
    /* margin: 1em 1em; */
    font-size: 12px;
    font-family: DOS;

}

.theitemcontent p {
	color:white  !important;
}

.th {
	padding: 1em;
	display: inline-block;
	width: 24%;
	text-align: left;
	font-family: dos;

}

#table-header {
	border-bottom: 1px solid white;
	font-family: dos;
}

.theitemcontent a {
    color: #67ccbe !important;
    font-family: monospace;
    font-size: 14px;
    text-decoration: none;

}

.th:first-child,#girl_name{
	   
	     width: 18%;
	       
}


.th:nth-child(2) ,#girl_des {
	      width: 75%;
}
.th:nth-child(3) ,#girl_link{
	    width: 5%;
}

.green {
	   background-color: #272727;
	color: #67ccbe;	    
	border-bottom: 1px dashed black;
	  text-shadow: 0 0 2px #67ccbe;

}

.the-name {

	text-decoration: underline;
	font-family: DOS;

}

.image-thumb {
	  display: inline-block;
	  max-width: 50px;
}

.image-thumb img {
	    max-width: 50px;
    width: 25px;
}
.the_grl_table:hover {
	    background-color: #272727;
	color: #67ccbe!important;
	transition: 0.2s;
	cursor: pointer;
	  text-shadow: 0 0 2px #67ccbe;
}


#line-left  {
	background-color: white;
}
#line-right  {
	background-color: white;
}

#up-arrow {
	 display: inline-block;
    transition: 1s;
}
.rotate_arrow {
	    transform: rotate(180deg);
    display: inline-block;
    transition: 1s;
}

.line-bottom {
	height: 2em;
	position: fixed;
	width: 100%;
	bottom: 0;
	background-color: black;
}

.line-top {
	height: 2em;
	position: fixed;
	width: 100%;
	top: 0;
	background-color: black;
}

.theitemcontent div {
	  
    padding: 1em;


}


</style>

<div id="container">
 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 230.6 52.6" style="enable-background:new 0 0 230.6 52.6;" xml:space="preserve">
<circle id="button1" cx="113.7" cy="42.7" r="9.8"/> PET
	<!-- <circle id="button2" cx="220.7" cy="42.7" r="9.8"/> -->
	<polyline id="line_1" class="line" points="115.6,42.5 84.4,13.1 13.1,13.1 0,0 "/>
	<polyline id="line_2" class="line" points="220.6,42.6 220.6,14.1 150.1,14.1 139,3 "/>

	<text id="text1" transform="matrix(1 0 0 1 16.137 10.0081)" class="tooltip">A menagerie of animals </text>
	
	</svg>
</div>

<div class="line-top"></div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="c">
				C: \  INVENTORY
			</div>

			<div class="starting">
				<p> >: \ Pets </p> 
			</div>

			<div id="outer">
	
					
				
				<div id="table-header" class="the-sticky-div">

					<div class="th">Name</div>
					<div class="th">Description</div>
					<div class="th">Work</div>
				
				
				</div>



				<?php query_posts( array ( 'category_name' => 'girls','order' => 'ASC','orderby'=> 'title', 'posts_per_page' => -1 ) ); ?>
	 			<?php while ( have_posts() ) : the_post(); ?>
		 		<div class="the_grl_table">


		 				<div id="girl_name"> 
		 				 <span class="image-thumb">
		 						<?php the_post_thumbnail(); ?>
		 					</span> 
		 					<span class='the-name'><?php the_title(); ?></span>
		 				</div>
		 			
		 				<div id="girl_des">
						
		 					<?php $my_description = 'Description'; ?>
							<?php echo get_post_meta($post->ID, $my_description, true); ?>

		 				</div>
		 				<div id="girl_link">
		 					<span id="up-arrow" color="white">
		 						&dArr;
		 					</span>
						</div>
		 				
		 			</div>
		 		<div class="theitemcontent">
		 				<div><?php the_content(); ?></div>
		 				<div><?php the_tags(); ?></div>
		 		</div>
				<?php endwhile; ?>

			</div> 
			<div class="line-bottom"></div>
		</main><!-- #main -->
	</div><!-- #primary -->

	<section><text id="text2" transform="matrix(1 0 0 1 154.137 10.0081)" class="tooltip">tooltip 2</text></section>

<script>
	
	$('article').each( function(index) {
			$(this).attr('id',index);
	});


$('.theitemcontent div').each(function(index){
	$(this).attr('id',index);


	console.log(index.length);
});


$( "article"  )
	.mouseover(function() {
			var URL = $(this).find('img').attr('src');
	   	 $( 'body' ).css( "background-image", 'url('+URL+')' );
	   	 $('article').not($(this)).css({'opacity':'0','color':'#67ccbe'});   
	   	 	$(this).css('opacity','1');

	  
		
	  })
	  .mouseout(function() {
  		$( 'body' ).css( "background-image", 'none' );
  		 $('article').css({'opacity':'1','color':'black'});

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


$('.the_grl_table').each(function(){
	$(this).on('click',function(){
		$(this).toggleClass("green");
		$(this).next('.theitemcontent').slideToggle();
	
		$(this).find('#up-arrow').toggleClass('rotate_arrow');
	});
});


	//capture scroll any percentage
$(window).scroll(function(){

    var wintop = $(window).scrollTop(), docheight = $(document).height(), winheight = $(window).height();
    var  scrolltrigger = 0.95;

    // console.log('%scrolled='+(wintop/(docheight-winheight))*100);

    var percentage = (wintop/(docheight-winheight))*100;

    var roundedP = Math.round(percentage);


    document.getElementById("percent").innerHTML = roundedP;

    if  ((wintop/(docheight-winheight)) > scrolltrigger) {
    
       lastAddedLiveFunc();
    }
});

var $window = $(window),
       $stickyEl = $('.the-sticky-div'),
       elTop = $stickyEl.offset().top;

   $window.scroll(function() {
        $stickyEl.toggleClass('sticky', $window.scrollTop() > elTop);
    });


</script>
<?php get_footer(); ?>
