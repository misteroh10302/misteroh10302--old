<?php
/*
Template Name: PET ABOUT US
*/ 
get_header(); ?>

<style>
	#main {
    max-width: 600px;
    font-size: 28px;
    margin-top: 0em;
    font-family: sans-serif;
    text-align: right;
    margin-left: auto;
    margin-right: 2em;
    text-transform: none;
    font-weight: lighter;
    letter-spacing: -1px;
        z-index: 2000;
    position: relative;
	} 

	html {
		overflow: hidden;
	}

	.bcg-about {
		position: absolute;
		/* Safari */
-webkit-transform: rotate(-45deg);

/* Firefox */
-moz-transform: rotate(-45deg);

/* IE */
-ms-transform: rotate(-45deg);

/* Opera */
-o-transform: rotate(-45deg);

/* Internet Explorer */
filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
    max-width: 120%;
    font-size: 100px;
    position: absolute;
    top: -6em;
        color: #f3f3f3;
    opacity: 0.7;

    z-index: 0;

	}

	.page-template-page-petabout .entry-title {
		display: none;
	}

	.page-template-page-petabout footer {
		display: none;
	}
	body {
  overflow: hidden;
  margin: 0;
  background-size: cover;
  background-repeat: none;
  height: 100vh;
  font-family: Arial;
}
p {
  color: #444;
}
.italic {
  color: #999;
  font-style: italic;
}
h1 {
  color: #454647;
  font-size: 24px;
}
.topbar {
  padding-left: 25px;
  width: 100%;
  background: rgba(255, 255, 255, 0.8);
  height: 30px;
  font-size: 20px;
  line-height: 1.5;
}
.app {

    position: absolute;
    overflow: hidden;
    border-radius: 5px 5px 0 0;
    width: 500px;
    box-shadow: 1px 1px 10px #dedede;
       left: 2.4vw;
   
    top: 4%;
    /* border: 1px solid #ccc; */
    border-radius: 0px;
 /*   box-shadow: 0px 20px 50px 1px rgba(50, 50, 50, 0.5);*/
    background: black;
    color: white;


}

.top {
    cursor: move;
    /* position: relative; */
    background: rgba(255, 255, 255, 0.95);
    width: 100%;
    padding: 5px;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    /* height: 21px; */
    width: 100%;
    /* border-radius: 6px 6px 0 0; */
    border-bottom: 1px solid #bbbbbb;
    background: #67ccbe;
    clear: both;
    color: white;
}


.app .content p {
    color: white;
    font-size: 14px;
    font-family: inherit;
    /* padding: 0.5em; */
    letter-spacing: .75px;

    margin-bottom: 0px;

   /* font-family: "Adobe";*/
        font-family: Arial, sans-serif;
  
}

.larger {
  width: 1000px;
}

.buttons {
  position: relative;
  float: left;
  width: 33%;
  z-index: 1;
}

.circle {
    float: left;
    margin: 2px 6px 0 0;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    cursor: pointer;
}
.circle:nth-child(1) {
     background: black;
    border: 1px solid black;
}
.circle:nth-child(1):hover {
  background: gray;
}
.circle:nth-child(2) {
  background: gray;
    border: 1px solid gray;
}
.circle:nth-child(2):hover {
  background: lightgray;
}
.circle:nth-child(3) {
  background: lightgray;
    border: 1px solid lightgray;
}
.circle:nth-child(3):hover {
  background: lightgray;
}
.clear {
  clear: left;
}
.title {
    z-index: 0;
    color: white;
    /* float: left; */
    /* width: 33%; */
    text-align: center;
    /* margin-left: -10px; */
    font-family: arial;
    font-size: 12px;
    margin: 0 auto;
}
.info {
  color: #BFBFCF;
  width: 33%;
  float: right;
  text-align: right;
}
.words {
  color: #ccc;
  margin-top: 0;
  float: right;
}
.main {
  position: relative;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  padding: 1em;
  width: 100%;
}
.content {
  margin-top: 0px;
}
button {
  cursor: pointer;
  position: absolute;
  margin: 50px;
  background: rgba(255, 255, 255, 0);
  border: none;
  border-radius: 3px;
  padding: 10px;
  font-family: 'Open Sans', sans-serif;
  color: #fff;
  text-shadow: 1px 1px #333;
  outline: 0;
}
button:hover {
  background: rgba(255, 255, 255, 0.4);
}
button span {
  color: #FFF;
  font-size: 14px;
  text-shadow: 0 0 8px #333;
}

h1 {
	display: none;
}


video { 
    position: fixed;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -100;
    transform: translateX(-50%) translateY(-50%);

  background-size: cover;
  transition: 1s opacity;
}

#polina { 
  font-family: Agenda-Light, Agenda Light, Agenda, Arial Narrow, sans-serif;
  font-weight:100; 
  background: rgba(0,0,0,0.3);
  color: white;
  padding: 2rem;
  width: 33%;
  margin:2rem;
  float: right;
  font-size: 1.2rem;
}
h1 {
  font-size: 3rem;
  text-transform: uppercase;
  margin-top: 0;
  letter-spacing: .3rem;
}
#polina button { 
  display: block;
  width: 80%;
  padding: .4rem;
  border: none; 
  margin: 1rem auto; 
  font-size: 1.3rem;
  background: rgba(255,255,255,0.23);
  color: #fff;
  border-radius: 3px; 
  cursor: pointer;
  transition: .3s background;
}
#polina button:hover { 
   background: rgba(0,0,0,0.5);
}

a {
  display: inline-block;
  color: #fff;
  text-decoration: none;
/*  background:rgba(0,0,0,0.5);*/
  padding: .5rem;
  transition: .6s background; 
}
a:hover{
  background:rgba(0,0,0,0.9);
}
/*@media screen and (max-width: 500px) { 
  div{width:70%;} 
}*/
@media screen and (max-device-width: 800px) {
  #bgvid { display: none; }
}

.main-navigation li {
    margin: .5em 0em;
    cursor: pointer;
    position: relative;
}

.content a{    color: #67ccbe !important;
    font-size: 12px;
    font-weight: lighter;
    letter-spacing: 1.2px;
}

</style>

<!-- <div class="bcg-about">
	pet pet pet pet pet pet pet pet pet pet pet pet pet pet pet pet pet pet pet pet pet pet pet pet pet pet pet pet pet pet pet pet pet pet pet pet pet pet pet pet pet pet pet pet pet pet  pet pet pet pet pet pet pet pet pet pet pet pet 
</div> -->
<video poster="" id="bgvid" playsinline autoplay muted loop>
  <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
<!-- <source src="http://thenewcode.com/assets/videos/polina.webm" type="video/webm"> -->
<source src="http://pet.cool/wp-content/uploads/2016/07/FINAL-LOGO-22-Converted.m4v" type="video/mp4">
</video>


<div class='app draggable'>
  <div class='top'>
    <div class='buttons'>
    <!--   <div class='circle'></div>
      <div class='circle'></div>
      <div class='circle'></div> -->
    </div>
    <div class='title'>
      Untitled.txt
    </div>
    <div class='info'>
     
    </div>
    <div class='clear'></div>
  </div>
  <div class='main'>
<!--     <p class='words'>220 words</p> -->
    <div class='content'>
      <h1>About</h1>
	   <p>PET is a platform for women Filmmakers, Musicians and Artists focused on bringing the most compelling and unique voices to the foreground. PET focuses on nurturing the collaborative space for passionate female creative professionals. We release film, music, art, showcase curated events and exhibitions. 
     Founded by Cara Stricker and Madeline O'Moore. 
      <br> <br>
      Please send all inquiries to <a href="mailto:contact@pet.cool">contact@pet.cool</a>
		</p> 
	</div>
  </div>

</div>

<!-- s -->
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
