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

::-webkit-scrollbar {
    display: none;
}
html {
	overflow-y: hidden;
}
.page-content, .entry-content, .entry-summary,p {
    margin: 0px;
}
	.entry-content a {
	/*	position: absolute;
		    position: absolute;*/
	    height: 100vh;
	    width: 100vw;
	    top: 0;
	    background-size: contain;
	    background-repeat: no-repeat;
	    background-position: center center;
	}

	/*.entry-content img{
		opacity: 0;
	}
*/
	#previous {
		position: absolute;
		width: 50vw;
		height:90vh;
		left:0;
		top:0;
		color:transparent;
		z-index: 2;
		cursor: w-resize;
	}

	#next {
		position: absolute;
		width: 50vw;
		height:90vh;
		right:0;
		top:0;
		color:transparent;
		z-index: 2;
		cursor: e-resize;
	}

	#primary-menu {
		display: none;
	}

	p {
		margin-bottom: 0;
	}
	img {
		max-height: 85vh;
		float:left;
		width:auto;
		padding-right:30px;
		pointer-events: none;
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

  img {
    max-height: 85vh;
    float: left;
    width: auto;
    padding-right: 30px;
    pointer-events: none;
    height: 310vh;
}

@media screen and (max-width: 480px){
    img {
      max-height: 85vh;
      float: left;
      width: 500px;
      padding-right: 30px;
      pointer-events: none;
      height: auto;
  }
  .entry-content {
    width: 1060px !important;
  }
}
</style>

	<div id="primary" class="content-area">

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
<script>
/*!
 * jQuery Mousewheel 3.1.13
 *
 * Copyright 2015 jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */
!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):"object"==typeof exports?module.exports=a:a(jQuery)}(function(a){function b(b){var g=b||window.event,h=i.call(arguments,1),j=0,l=0,m=0,n=0,o=0,p=0;if(b=a.event.fix(g),b.type="mousewheel","detail"in g&&(m=-1*g.detail),"wheelDelta"in g&&(m=g.wheelDelta),"wheelDeltaY"in g&&(m=g.wheelDeltaY),"wheelDeltaX"in g&&(l=-1*g.wheelDeltaX),"axis"in g&&g.axis===g.HORIZONTAL_AXIS&&(l=-1*m,m=0),j=0===m?l:m,"deltaY"in g&&(m=-1*g.deltaY,j=m),"deltaX"in g&&(l=g.deltaX,0===m&&(j=-1*l)),0!==m||0!==l){if(1===g.deltaMode){var q=a.data(this,"mousewheel-line-height");j*=q,m*=q,l*=q}else if(2===g.deltaMode){var r=a.data(this,"mousewheel-page-height");j*=r,m*=r,l*=r}if(n=Math.max(Math.abs(m),Math.abs(l)),(!f||f>n)&&(f=n,d(g,n)&&(f/=40)),d(g,n)&&(j/=40,l/=40,m/=40),j=Math[j>=1?"floor":"ceil"](j/f),l=Math[l>=1?"floor":"ceil"](l/f),m=Math[m>=1?"floor":"ceil"](m/f),k.settings.normalizeOffset&&this.getBoundingClientRect){var s=this.getBoundingClientRect();o=b.clientX-s.left,p=b.clientY-s.top}return b.deltaX=l,b.deltaY=m,b.deltaFactor=f,b.offsetX=o,b.offsetY=p,b.deltaMode=0,h.unshift(b,j,l,m),e&&clearTimeout(e),e=setTimeout(c,200),(a.event.dispatch||a.event.handle).apply(this,h)}}function c(){f=null}function d(a,b){return k.settings.adjustOldDeltas&&"mousewheel"===a.type&&b%120===0}var e,f,g=["wheel","mousewheel","DOMMouseScroll","MozMousePixelScroll"],h="onwheel"in document||document.documentMode>=9?["wheel"]:["mousewheel","DomMouseScroll","MozMousePixelScroll"],i=Array.prototype.slice;if(a.event.fixHooks)for(var j=g.length;j;)a.event.fixHooks[g[--j]]=a.event.mouseHooks;var k=a.event.special.mousewheel={version:"3.1.12",setup:function(){if(this.addEventListener)for(var c=h.length;c;)this.addEventListener(h[--c],b,!1);else this.onmousewheel=b;a.data(this,"mousewheel-line-height",k.getLineHeight(this)),a.data(this,"mousewheel-page-height",k.getPageHeight(this))},teardown:function(){if(this.removeEventListener)for(var c=h.length;c;)this.removeEventListener(h[--c],b,!1);else this.onmousewheel=null;a.removeData(this,"mousewheel-line-height"),a.removeData(this,"mousewheel-page-height")},getLineHeight:function(b){var c=a(b),d=c["offsetParent"in a.fn?"offsetParent":"parent"]();return d.length||(d=a("body")),parseInt(d.css("fontSize"),10)||parseInt(c.css("fontSize"),10)||16},getPageHeight:function(b){return a(b).height()},settings:{adjustOldDeltas:!0,normalizeOffset:!0}};a.fn.extend({mousewheel:function(a){return a?this.bind("mousewheel",a):this.trigger("mousewheel")},unmousewheel:function(a){return this.unbind("mousewheel",a)}})});



$(function() {
    $("html, body, *").mousewheel(function(event, delta) {
        this.scrollLeft -= (delta * 50);
        event.preventDefault();
    });
});

var totalWidth = 0;
$('.entry-content img').each(function(index){
	 totalWidth += parseInt($(this).width()) +35;
});

$('.entry-content').css('width',totalWidth);

console.log(totalWidth);

// (function(){


// 		var $slides = $('.entry-content a');

// 		$slides.on('click',function(e){
// 			e.preventDefault();
// 		});

// 		$slides.each(function(){
// 			var theImage = $(this).find('img').attr('src');
// 			$(this).css('background-image',"url("+theImage+")");
// 		});

// 		$slides.hide();
// 		x = 0;

// 		if ($slides.length <= 1) {
// 			$("#previous").hide();
// 			$("#next").hide();
// 		}



// 		$slides.each(function(index){
// 			$(this).attr('id',index);
// 		});

// 		function show(x,direction,currentSlideDirection) {
// 				// $('.current').css('transform','translate('+currentSlideDirection+',0px');
// 					$('.current').css({'transform':'translate('+currentSlideDirection+',0px','transition':'0s'});


// 				setTimeout(function delay(){

// 					$slides.not('.current').css({'transform':'translate('+direction+',0px)','transition':'0s'}).hide();
// 					// $slides.removeClass('current').hide();
// 					$currentSlide = $slides.eq(x);
// 					$currentSlide.addClass('current');
// 					$currentSlide.fadeIn('slow').css({'transform':'translate(0,0px)','transition':'0s'});

// 					setTimeout(function() {
// 					       $slides.not($currentSlide).removeClass('current');
// 					   }, 0);

// 				},0);

// 			}

// 			function previous() {
// 				var direction = '100vw';
// 				var currentSlideDirection = '-100vw';
// 				if (x === $slides.length-1) {
// 					x = 0;
// 					show(x,direction,currentSlideDirection);

// 				} else {
// 					x++;
// 					show(x,direction,currentSlideDirection);

// 				}
// 			}

// 			function next() {
// 				var direction = '-100vw';
// 				var currentSlideDirection = '100vw';
// 				if (x === -$slides.length+1) {
// 					x = 0;
// 					show(x,direction,currentSlideDirection);

// 				} else {
// 					x--;
// 					show(x,direction,currentSlideDirection);

// 				}
// 			}

// 			$("#next").click(function () {
// 				previous();
// 			});

// 			$("#previous").click(function () {
// 				next();
// 			});


// 			var isDragging = false;
// 			$("#previous").mousedown(function(e) {
// 				var previous_x_position = e.pageX;
// 				var previous_y_position = e.pageY;

// 				$(window).mousemove(function(event) {
// 				    isDragging = true;
// 				    var x_position = event.pageX;
// 				    var y_position = event.pageY;

// 				    if (previous_x_position < x_position) {
// 				        previous();
// 				    }
// 				    $(window).unbind("mousemove");
// 				});
// 				}).mouseup(function() {
// 				var wasDragging = isDragging;
// 				isDragging = false;
// 				$(window).unbind("mousemove");
// 			});

// 			var isDragging = false;
// 			$("#next").mousedown(function(e) {
// 				var previous_x_position = e.pageX;
// 				var previous_y_position = e.pageY;

// 				$(window).mousemove(function(event) {
// 				    isDragging = true;
// 				    var x_position = event.pageX;
// 				    var y_position = event.pageY;

// 				     if (previous_y_position < y_position) {
// 			            next();
// 			        }
// 				    $(window).unbind("mousemove");
// 				});
// 				}).mouseup(function() {
// 				var wasDragging = isDragging;
// 				isDragging = false;
// 				$(window).unbind("mousemove");
// 			});
// 			show(x);

// })();

/*
  creates a closure that does not pollute global space
*/
$(document).ready(function() {

});
</script>
<?php
