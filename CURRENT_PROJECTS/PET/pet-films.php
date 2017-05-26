<?php

/* 
Template Name: PET FILMS
*/ 

get_header(); ?>


<script src="https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.js"></script>
<style>#container {position:relative; width:400px; margin-top:4%; position: fixed; top:0;}
.ff-container {
  display: inline-block;
  position: relative;
  background: black url(http://www.picgifs.com/glitter-gifs/d/diamonds/animaatjes-diamonds-61528.gif) center center no-repeat; }
  .ff-container .ff-image {
    z-index: 0;
    vertical-align: top;
    background: rgba(0, 0, 0, 0.5);
    opacity: 0; }
    .ff-container .ff-image.ff-image-ready {
      opacity: 1; }
  .ff-container .ff-canvas {
    display: inline-block;
    position: absolute;
    top: 0;
    left: 0;
    pointer-events: none;
    z-index: 1;
    vertical-align: top;
    opacity: 0; }
    .ff-container .ff-canvas.ff-responsive {
      width: 100%; }
    .ff-container .ff-canvas.ff-canvas-ready {
      transition: opacity 300ms;
      opacity: 1; }
    .ff-container .ff-canvas.ff-canvas-active {
      transition: none;
      opacity: 0; }
  .ff-container.ff-responsive {
    width: 100%; }
    .ff-container.ff-responsive .ff-image {
      width: 100%; }
    .ff-container.ff-responsive .ff-canvas-ready {
      width: 100%; }

 
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
</style>

<div id="container">
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
		<main id="main" class="site-main film" role="main">
	 <?php query_posts( array ( 'category_name' => 'films', 'posts_per_page' => 12 ) ); ?>

		<?php if ( have_posts() ) : ?>


			<?php if ( is_home() && ! is_front_page() ) : ?>

				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>


				<div class="films" id="post-<?php the_ID(); ?>" 

					<?php post_class(); ?>>

					
					

						<div class="entry-content img-responsive">
						<?php if ( has_post_thumbnail() ) : ?>
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
								<?php the_post_thumbnail(); ?>
								</a>
							<?php endif; ?>

					</div><!-- .entry-content -->
					<header class="entry-header">
					<!-- 	<h2>
						<?php the_title( ); ?>
						</h2> -->
			<!-- 	<div class="the_date">
						<span>
							
								[ <?php the_time(); ?> ]
								<span class="entry-date">
									 <?php echo get_the_date(); ?></span>

						
							
						</span>
						
					</div> -->

						<?php if ( 'post' == get_post_type() ) : ?>
						<div class="entry-meta">
							
						</div><!-- .entry-meta -->
						<?php endif; ?>
					</header><!-- .entry-header -->

			<!-- <div class="the_excerpt">
				
				 <?php the_excerpt(); ?> 
			</div>

				 -->

					

					
				</div><!-- #post-## -->

			<?php endwhile; ?>

			

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

   
		</main><!-- #main -->
	</div><!-- #primary -->

	<section><text id="text2" transform="matrix(1 0 0 1 154.137 10.0081)" class="tooltip">tooltip 2</text></section>

<script>


	/*!
 * freezeframe.js v3.0.8
 * MIT License
 */

var freezeframe = (function($) { 

  var images, options, is_touch_device, default_state;

  //////////////////////////////////////////////////////////////////////////////
  //                                                                          //
  //  Private Methods                                                         //
  //                                                                          //
  //////////////////////////////////////////////////////////////////////////////
  
  // decorated console.warn message
  var warn = function(_message) {
    console.warn('✨ freezeframe.js ✨ : ' + _message);
  }

  // does freezeframe instance have any captured images?
  var has_images = function() {
    return this.images.length == 0 ? false : true;
  }

  // filter captured images by selector and warn if none found
  var filter = function(_selector, _images) {
    var filtered_images;

    if(_selector != undefined && _images.length > 1) {
      filtered_images = _images.filter( $(_selector) );
      if (filtered_images.length == 0) {
        warn("no images found for selector '" + _selector + "'")
        return false;
      }
    } else {
      filtered_images = _images;
    }

    return filtered_images;
  }

  // reset .gif to first frame and write to canvas
  var process = function ($_image) {
    var ff = this,
      $canvas = $_image.siblings('canvas'),
      transitionEnd = 'transitionend webkitTransitionEnd oTransitionEnd otransitionend',
      image_width = $_image[0].clientWidth,
      image_height = $_image[0].clientHeight;

    $canvas.attr({
      'width': image_width,
      'height': image_height
    });

    context = $canvas[0].getContext('2d');
    context.drawImage($_image[0], 0, 0, image_width, image_height);

    $canvas.addClass('ff-canvas-ready').on(transitionEnd, function() {
      $(this).off(transitionEnd);
      $_image.addClass('ff-image-ready');
    })
  }

  var trigger = function() {

  }

  var release = function() {

  }

  //////////////////////////////////////////////////////////////////////////////
  //                                                                          //
  //  Constructor                                                             //
  //                                                                          //
  //////////////////////////////////////////////////////////////////////////////
  function freezeframe(_options) {
    var options;

    // default options
    this.options = {
      selector : '.freezeframe',
      animation_play_duration: 5000,
      non_touch_device_trigger_event: 'hover'
    }

    // new selector as string
    options = typeof _options == 'string' ? { 'selector': _options } : _options;

    // new options
    if(options) {
      for (attribute in options) {
        if (attribute in this.options) {
          this.options[attribute] = options[attribute]
        } else {
          warn(attribute + 'not a valid option')
        }
      }
    }

    // is this a touch device?
    this.is_touch_device = ('ontouchstart' in window || 'onmsgesturechange' in window);
  }

  //////////////////////////////////////////////////////////////////////////////
  //                                                                          //
  //  Capture Images                                                          //
  //                                                                          //
  //////////////////////////////////////////////////////////////////////////////
  freezeframe.prototype.capture = function(_selector) {
    var selector;

    // Passed in string or default string
    if(_selector !== undefined) {
      selector = _selector;
    } else if (this.options.selector !== undefined) {
      selector = this.options.selector;
    } else {
      warn("no selector passed to capture function or set in options")
      return false;
    }

    // Empty jQuery object to add into
    if(this.images == undefined) {
      this.images = $();
    }

    // Add new selection, jQuery keeps it non redundant
    this.images = this.images.add( $('img' + selector) );

    // Get non gifs outta there
    for (i = 0; i < this.images.length; i++) {
      if (this.images[i].src.split('.').pop().toLowerCase().substring(0, 3) !== 'gif') {
        this.images.splice(i, 1);
      }
    }

    // If nothing was found, throw a fit
    if(this.images.length == 0) {
      console.warn('freezeframe : no gifs found for selector "' + selector + '"');
      return false;
    }

    return this;
  }

  //////////////////////////////////////////////////////////////////////////////
  //                                                                          //
  //  Setup Elements                                                          //
  //                                                                          //
  //////////////////////////////////////////////////////////////////////////////
  freezeframe.prototype.setup = function(_selector) {
    var ff = this,
      setup_required = this.images.not('.ff-setup'),
      container_classnames = ['ff-container'];

    if(!has_images.call(ff)) {
      warn("unable to run setup(), no images captured")
      return false;
    } else if(setup_required.length == 0) {
      warn("unable to run setup(), no images require setup")
      return false;
    }

    filter.call(ff, _selector, setup_required).each(function(e) {
      var $image = $(this);

      $image.addClass('ff-setup ff-image');

      if($image.hasClass('freezeframe-responsive')) {
        container_classnames.push('ff-responsive');
      }

      $canvas = $('<canvas />', {
        class: 'ff-canvas'
      }).attr({
        width: 0,
        height: 0
      }).insertBefore($image);

      $image.add($canvas).wrapAll(
        $('<div />', {
          class: container_classnames.join(' ')
        })
      );

    });

    imagesLoaded(setup_required).on('progress', function(instance, image) {
      process.call(ff, $(image.img));
    });

    return this;
  }

  //////////////////////////////////////////////////////////////////////////////
  //                                                                          //
  //  Attach Hover / Click Events                                             //
  //                                                                          //
  //////////////////////////////////////////////////////////////////////////////
  freezeframe.prototype.attach = function(_selector) {
    var ff = this,
      click_timeout,
      images;

    if(!has_images.call(ff)) {
      warn("unable to run attach(), no images captured")
      return false;
    }

    filter.call(ff, _selector, ff.images).each(function(e) {

      var $image = $(this);
      var $canvas = $(this).siblings('canvas');

      // hover
      if((!ff.is_touch_device && ff.options.non_touch_device_trigger_event == 'hover') || (ff.is_touch_device)) {

        $image.mouseenter(function() {
          (function() {

            if($image.hasClass('ff-image-ready')) {
              $image.attr('src', $image[0].src);
              $canvas.removeClass('ff-canvas-ready').addClass('ff-canvas-active');
            }

          })();
        })

        $image.mouseleave(function() {
          (function() {

            if($image.hasClass('ff-image-ready')) {
              $canvas.removeClass('ff-canvas-active').addClass('ff-canvas-ready');
            }

          })();
        })
      }

      // click
      if((!ff.is_touch_device && ff.options.non_touch_device_trigger_event == 'click') || (ff.is_touch_device)) {

        var click_timeout;

        $image.click(function() {

          (function() {
            var clicked = $canvas.hasClass('ff-canvas-active');

            if($image.hasClass('ff-image-ready')) {

              if(clicked) {

                if(ff.options.animation_play_duration != Infinity) {
                  clearTimeout(click_timeout);
                }

                $canvas.removeClass('ff-canvas-active').addClass('ff-canvas-ready');

              } else {

                $image.attr('src', $image[0].src);
                $canvas.removeClass('ff-canvas-ready').addClass('ff-canvas-active');

                if(ff.options.animation_play_duration != Infinity) {
                  click_timeout = setTimeout(function() {
                    $canvas.removeClass('ff-canvas-active').addClass('ff-canvas-ready');
                  }, ff.options.animation_play_duration);
                }
              }
            }
          })();
        })
      }
    })

    return this;
  }

  //////////////////////////////////////////////////////////////////////////////
  //                                                                          //
  //  Trigger Animation                                                       //
  //                                                                          //
  //////////////////////////////////////////////////////////////////////////////
  freezeframe.prototype.trigger = function(_selector) {
    var ff = this,
      errors = 0;

    filter.call(ff, _selector, ff.images).each(function(e) {

      if($(this).hasClass('ff-image-ready')) {
        $(this).attr('src', $(this)[0].src);
        $(this).siblings('canvas').removeClass('ff-canvas-ready').addClass('ff-canvas-active');
      } else {
        warn("image not done processing ! " + $(this).attr("src"));
        errors ++;
      }

    });

    return errors == 0 ? true : false;
  }

  //////////////////////////////////////////////////////////////////////////////
  //                                                                          //
  //  Release Animation                                                       //
  //                                                                          //
  //////////////////////////////////////////////////////////////////////////////
  freezeframe.prototype.release = function(_selector) {
    var ff = this,
      errors = 0;

    filter.call(ff, _selector, ff.images).each(function(e) {
      if($(this).hasClass('ff-image-ready')) {
        $(this).siblings('canvas').removeClass('ff-canvas-active').addClass('ff-canvas-ready');
      } else {
        warn("image not done processing ! " + $(this).attr("src"));
        errors ++;
      }
    });

    return errors == 0 ? true : false;
  }

  //////////////////////////////////////////////////////////////////////////////
  //                                                                          //
  //  Freeze Images                                                           //
  //                                                                          //
  //////////////////////////////////////////////////////////////////////////////
  freezeframe.prototype.freeze = function() {
    this.capture().setup().attach(); // ✨ tada ✨
    return this;
  }

  return freezeframe;
})(jQuery);

// jQuery plugin
$.fn.freezeframe = function(_options) {

  if (this.length == 0) {
    console.warn('✨ freezeframe.js ✨ : no images found for selector ' + this.selector);
    return false;
  }

  var ff = new freezeframe(_options);

  ff.images = this;

  ff.setup().attach();

  var self = this;
  var methods = ['trigger', 'release'];
  methods.forEach(function(method) {
    self[method] = function() {
      ff[method](self.selector);
      return self;
    };
  });

  return this;
};
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
	$('.img-responsive a img').freezeframe();

</script>
<?php get_footer(); ?>
