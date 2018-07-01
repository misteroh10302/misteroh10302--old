

// make logo smaller on scroll
headerShift = () => {
  let windowHeight = $(window).height();
  console.log(windowHeight);
  let windowTop = $(window).scrollTop();

  if (windowTop > windowHeight) {
    $('.logo').addClass('smaller');
  } else if (windowTop < windowHeight) {
      $('.logo').removeClass('smaller');
  }
}

shiftImage = (e) => {
  console.log(e);
  //   let move = e.screenX/6;
  // if (move > 400) {
  //   move = move/6;
  // } else {
  //   move = move;
  // }
  //
  // $('.logo').css('transform','skew('+move+'deg)')
}

// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      &&
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });

// put in onload function
$(() => {

    $(window).on('scroll',headerShift);
    $(window).on('mouseover',function(e){
      shiftImage(e);
    });

    var width = window.offsetWidth;
var height = window.offsetHeight;
var playground = document.getElementById('px-render');

var canvas;

var ratio = 150 / 830;

var count = 0;
var raf;


var renderer = PIXI.autoDetectRenderer(width, height, {transparent:true});
renderer.autoResize = true;
var tp, preview;
var displacementSprite,
	displacementFilter,
	stage;

function setScene(url){
			playground.appendChild(renderer.view);

	        stage = new PIXI.Container();

	        tp = PIXI.Texture.fromImage(url);
	        preview = new PIXI.Sprite(tp);

	        preview.anchor.x = 0;

	        displacementSprite = PIXI.Sprite.fromImage('https://res.cloudinary.com/dvxikybyi/image/upload/v1486634113/2yYayZk_vqsyzx.png');
	        displacementSprite.texture.baseTexture.wrapMode = PIXI.WRAP_MODES.REPEAT;

	       	displacementFilter = new PIXI.filters.DisplacementFilter(displacementSprite);

	        displacementSprite.scale.y = 0.6;
	        displacementSprite.scale.x = 0.6;


	        stage.addChild(displacementSprite);

	        stage.addChild(preview);

			animate();
}

function removeScene(){
	cancelAnimationFrame(raf);
	stage.removeChildren();
	stage.destroy(true);
	playground.removeChild(canvas);
}


function animate() {
    raf = requestAnimationFrame(animate);

    displacementSprite.x = count*10;
	displacementSprite.y = count*10;

	count += 0.05;

    stage.filters = [displacementFilter];

    renderer.render(stage);

    canvas = playground.querySelector('canvas');
}

setScene('');
});
