<?php
 /* Template Name: Contact Template */

get_header(); ?>

<style>


.nav-open {
  color:white;
}
body {
  color:black;
  font-family: Karla, Arial, Sans-serif;
}
:root {
  --main-size: 30px;
}

#content {
     margin:0; 
}
.hover {
    position: relative;
    display: inline-block;
    /* line-height: 0; */
    /* background-color: transparent; */
     opacity: 1; 
     border: 0px dotted transparent; 
     padding: 0em; 
}
	.col-2 {
		cursor: move;
	}
	#top {
		position: absolute;
		left: -5px;
		top: -5px;
		border: 4px solid black;
		height: 14px;
		width: 14px;
		color: transparent;
		background-color: black;
		cursor: nw-resize;
	}
	#right {
		position: absolute;
		right: -5px;
		top: -5px;
		border: 4px solid black;
		height: 14px;
		width: 14px;
		color: transparent;
		background-color: black;
		cursor: ne-resize;
	}
	#left {
		position: absolute;
		right: -5px;
		bottom:0px;
		border: 4px solid black;
		height: 14px;
		width: 14px;
		color: transparent;
		background-color: black;
		cursor: se-resize;
	}
	#bottom {
		position: absolute;
		left: -5px;
		bottom:0px;
		border: 4px solid black;
		height: 14px;
		width: 14px;
		color: transparent;
		background-color: black;
		cursor: sw-resize;
	}

	.rotate {
		display: none;
	}

	#line {
		   
		    height: 50px;
		    position: absolute;
		    width: 1px;
		    top: -50px;
		    left: 0px;
		    right: 0px;
		    margin: 0px auto;
		    border-left: 1px dotted red;
	}

	.handle {
		    width: 12px;
		    height: 12px;
		    background-color: black;
		    display: block;
		    left: -6px;
		    position: relative;
		    top: -10px;
	}
	#simple_sketch {
		position: absolute;
		top:0;
		left:0;
	/*	cursor: url('https://cdn4.iconfinder.com/data/icons/48-bubbles/48/16.Pen-128.png'),auto;
*/
	}

	/*** TESTING THE DESIGN ***/



	.homepage-posts:nth-child(3) {
	    max-width: 450px;
	    padding:0px;
	    position:absolute;
	    top: 150px;
	    right: 30px;
	}

	.homepage-posts:nth-child(4) {
	    max-width: 550px;
	    padding:0px;
	    position:absolute;
	    top: 550px;
	    left: 90px;
	}

	.homepage-posts:nth-child(5) {
	    max-width: 550px;
	    padding:0px;
	    position:absolute;
	    top: 1100px;
	    right: 10vw;
	}

	.homepage-posts:nth-child(6) {
	    max-width: 350px;
	    padding:0px;
	    position:absolute;
	    top: 1100px;
	    left: 5vw;
	}

	#vertical-align a {
	    text-decoration: none;
	    color: black;
	    font-family: Karla;
	    letter-spacing: 5px;
      font-weight: lighter;
	}

.homepage-posts:nth-child(1) img {
    height: initial;
    max-width: auto;
    width: auto;
}



  img {
  max-width: 100%
}

.container {
  width: 100%;
  height: 800px;
  position: relative;
/*  outline: 1px solid blue;*/
/*  margin-top: 20px;*/
}

.thumb {
  max-width: inherit;
  margin: 0;
  padding: 0;
}
.container canvas,
.container .trigger {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
 /* height: 3600px;*/
  cursor: url('http://adeline.madeline-omoore.com/wp-content/uploads/2017/03/pencil-icon-614x460-e1489782448942.png'),auto;
      cursor: -webkit-image-set( url(http://adeline.madeline-omoore.com/wp-content/uploads/2017/03/pencil-icon-614x460-e1489782448942.png) 1x,
       url(http://adeline.madeline-omoore.com/wp-content/uploads/2017/03/pencil-icon-614x460-e1489782448942.png) 1x ), auto;

}

.container canvas {
/*  outline: 1px solid pink;*/
  z-index: 15;
  pointer-events: none;
}

.container .trigger {
  z-index: 5;
}

.container .thumbs {
  position: relative;
  z-index: 10;
}

.thumb {
  max-width: initial;
  position: absolute;
  cursor: pointer;

  width: 350px;
}


.thumb img {
  padding:30px;
      border: 1px dotted transparent;
}
.thumb:hover {
/*  outline: 1px solid red;*/
}

.homepage-posts:nth-child(2) {
    padding: 0px;
    max-width: 350px;
    margin: 0px;
}
.thumb:nth-of-type(1) {
  top: 120px;
  width: 390px;
  left:30px;
}

.thumb:nth-of-type(2) {
  top: 90px;
  right: 30px;
  width: 570px;
}

.thumb:nth-of-type(3) {
  top: 520px;
  left: 260px;
  width: 350px;
}



.thumb:nth-of-type(4) {
  top: 803px;
  right: 60px;  
  width: 360px;
}

.thumb:nth-of-type(5) {
  top: 1003px;
  right: 60px;  
  width: 460px;
}

.thumb:nth-of-type(6) {
     left: 30px;
    top: 1186px;
    cursor: move;
    height: 410px;
    width: 571px;
}

.thumb:nth-of-type(7) {
     right: 30px;
    top: 1188px;
    width: 612px;
}




.thumb:nth-of-type(8) {
    left: 60px;
       top: 1694px;
       width:350px;
    cursor: move;
}


.thumb:nth-of-type(9) {
   right: 60px;
    top: 2164px;
    width: 550px;
    cursor: move;

}
.thumb:nth-of-type(10) {
     left: 417px;
    top: 1692px;
    cursor: move;
}

.thumb:nth-of-type(11) {
       left: 733px;
    top: 2268px;
    width: 501.5px;
    cursor: move;
}

.thumb:nth-of-type(12) {
      left: 55px;
    top: 2420px;
    cursor: move;
}

.thumb:nth-of-type(13) {
    left: 263px;
    top: 2917px;
    width: 424.5px;
    cursor: move;
}

.thumb:nth-of-type(14) {
    left: 680px;
    top: 2923px;
    width: 380.5px;
    cursor: move;
}

.thumb:nth-of-type(15) {
     left: 681px;
      left: 679px;
    top: 3309px;
    cursor: move;
    width: 350px;
}

.thumb:nth-of-type(16) {
  top: 2003px;
     left: 260px;
    top: 1853px;
    cursor: move;
}

.thumb:nth-of-type(17) {
  top: 2003px;
     left: 260px;
    top: 1853px;
    cursor: move;
}

.thumb:nth-of-type(18) {
  top: 2003px;
     left: 260px;
    top: 1853px;
    cursor: move;
}

.thumb:nth-of-type(19) {
  top: 2003px;
     left: 260px;
    top: 1853px;
    cursor: move;
}

.thumb:nth-of-type(20) {
  top: 2003px;
     left: 260px;
    top: 1853px;
    cursor: move;
}

.homepage-posts {
  position: absolute !important;
}

.homepage-posts:nth-child(5) {
    max-width: 550px;
    padding: 0px;
    position: absolute;
    top: 1100px;
    right: 10vw;
        left: 436.5px;
    top: 804px;
}

.border {
  border: 1px dotted red !important;
  z-index: 20;
}
.drag-me {
  left:0;right:0;margin:0 auto;top:-50px;position: absolute;    background-color: red;
    width: 10px;
    height: 10px;
    cursor: crosshair;
    display: none;

    left: 0;
    right: 0;
    margin: 0 auto;
    top: -60px;
    position: absolute;
    background-color: black;
    width: 16px;
    height: 16px;
    cursor: crosshair;
    display: none;
    z-index: 30000;

}


::selection {
  background-color: transparent;
  }



#pane {
  position: absolute;
/*  width: 45%;
  height: 45%;
  top: 20%;
  left: 20%;

  */
  margin: 0;
/*  padding: 0;*/
  z-index: 99;
/*  border: 2px solid purple;
  background: #fefefe;*/
}

#title {
  font-family: monospace;
  background: purple;
  color: white;
  font-size: 24px;
  height: 30px;
  text-align: center;
}

#ghostpane {
  background: #999;
  opacity: 0.2;

  width: 45%;
  height: 45%;
  top: 20%;
  left: 20%;
  
  position: absolute;
  margin: 0;
  padding: 0;
  z-index: 98;

  -webkit-transition: all 0.25s ease-in-out;
  -moz-transition: all 0.25s ease-in-out;
  -ms-transition: all 0.25s ease-in-out;
  -o-transition: all 0.25s ease-in-out;
  transition: all 0.25s ease-in-out;
  display: none;
}

img {
  max-height: none;
}

.left-top,.left-bottom,.right-top,.right-bottom {
  width: 10px;
  height: 10px;
  background-color: black;
  position: absolute;
}


.left-top {
      top: -5px;
    left: -5px;
}
.left-bottom {
      bottom: -5px;
    left: -5px;
}

.right-top {
     top: -5px;
    right: -5px;
}

.right-bottom {
     bottom: -5px;
    right: -5px;
}

.homepage-posts {
  max-width: initial !important;
  height: initial !important

}
.site-title {
    position: fixed;
    left: 0;
    right: 0;

    top: 0;
    margin: 15px 0px;
  font-size: 5em !important;
  z-index: 99 !important;
}
.site-title a:hover {
  color:red !important;
  cursor: move;
}

.site-title a {

}
#pane .innerCap {
  opacity: 1;
}
.homepage-posts:nth-child(1) {
    padding-right: 0px;
}
#pane  img {
/*  opacity:0.95;*/
filter: brightness(90%);
}
.innerCap h2 {
    margin: 0;
    color: white;
    font-size: 20px;
    letter-spacing: 2px;
      /*  text-shadow: 0px 0px 70px rgba(6, 6, 6, 0.86);
*/
}
.innerCap {
       opacity: 0; 
    position: absolute;
    transform: translateY(-50%);
    top: 50%;
    left: 0;
    right: 0;
    text-align: center;
    text-transform: uppercase;
    line-height: 1em;
    height: 80%;
    padding-top: 25%;
}
.mobile {
  display: none;
}
@media screen and (max-width: 1240px) {
  .desktop  {
    display:none;
  }

.click-nav {
    top: 15px !important;
}
.mobile {
  display: block;
}
.mobile {
   margin-top: 12px;
   margin-bottom: 60px;
}
  .mobile-thumb {
   
    margin: 15px 0px;
    text-align: center;
    font-family: Karla, Arial,Sans-serif;
    font-size: 60%;
  }

  #click-nav {
    top: 15px !important;
  }
.site-title {
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    margin: 15px 0px;
    font-size: 30px !important;
    z-index: 99 !important;
        margin: 0px 0px !important;
}
#cattop {
  font-weight: 100;
  margin-bottom: 0;
      font-size: 12px;
    letter-spacing: 2px;
}
.cap h2:nth-child(2) {
      margin-top: 0px;
          font-size: 14px;
    letter-spacing: 3px;
        margin-bottom: 6px;
}
.mobile-thumb {
      padding: 15px;
}
  .mobile-thumbs a {
    color:black;
    text-decoration: none;
    text-transform: uppercase;
  }

    #page #masthead a {
      text-decoration: none;
      color: black;
         font-size: 16px;
      letter-spacing: 4px;
      font-family: Karla;
       font-family: Karla, Arial,Sans-serif;
  }
}

#click-nav {
     float: left;
    position: fixed;
    top: 30px;
    left: 30px;
    font-family: Karla;
     font-family: Karla, Arial,Sans-serif;
    z-index: 999;
    cursor: pointer;
    font-size: 12px;
    letter-spacing: 2px;

}
h1 { color: #666;display:inline-block; margin:0;text-transform:uppercase; }
#click-nav:after {
  display:block;
  content: '';
  border-bottom: solid 2px red;  
  transform: scaleX(0);  
  transition: transform 250ms ease-in-out;
}
#click-nav:hover:after { transform: scaleX(1); }

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

.large-menu h1 {
  color:white;  
}

.instructions {
    height: 500px;
    background-color: rgba(0, 0, 0, 0.47);
    position: fixed;
    margin: 0 auto;
    text-align: center;
    left: 0;
    right: 0;
    top: 150px;
    color: white;
    z-index: 9999999;
    cursor: pointer;
    height: 100vh;
    width: 100vw;
    top: 0;
    padding-top: 150px;

}

.instructions img {
  max-width: 450px
}

.instructions h2 {
  cursor: pointer;
}

.instructions .col4 {
  width: 50%;
  float:left;
  height: 250px;
 

}

.mobile-thumb hr {
  height: 2px;
  background-color: red;
  width: 30px;
}

#container {
  margin-top: 20vh;
  height:auto;
}


</style>

	<div id="container" class="content-area container desktop">
     
		<main id="main" class="site-main" role="main">

      <?php
      while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content', 'page' );

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;

      endwhile; // End of the loop.
      ?>
	   </main>

    
  </div>

<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
  <script
  src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>
  <script src="http://madeline-omoore.com/adeline/wp-content/themes/adeline/js/resize.js"></script>
<script>
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

