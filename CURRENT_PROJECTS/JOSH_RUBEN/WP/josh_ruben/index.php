<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package josh_ruben
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<!--Create the drawer to pull out for all posts  -->
			<div class="drawer">
				<div class="close">
						<span></span>
						<span></span>
				</div>
				<div class="tabs">
					<?php
            // Display all pages on the site with their title and content
                    $pages = get_pages();
                    foreach ($pages as $page_data) {
                        $content = apply_filters(‘the_content’, $page_data->post_content);
                        $title = strtolower($page_data->post_title);
                        $noSpacestring = preg_replace('/\s+/', '', $title);
                        echo '<div class="'.$noSpacestring.'">';
                        echo '<h2>'.$title.'</h2>';
                        echo $content;
                        echo '</div>';
                    }
        ?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
	<script type="text/javascript">
		//Set up the nav to work properly
		///Get the nav item
		var theCurrentNav = $('#primary-menu li a');

		$(theCurrentNav).each(function(){
				var theWord = $(this).text().toLowerCase().split(" ").join("");
				$.trim(theWord);
				$(this).addClass(theWord);
		});
			// set up the drawers
			var theDrawer = $('.drawer');
			// set up variables for the nav items
			var navItems = $('.main-navigation a');

			// set variables for the secions
			var theTabs = $('.tabs div');

			// Close the Drawer
			var closeDrawer = $('.close');

			//Close the drawer
			$(closeDrawer).on('click',function(){
					$(theDrawer).removeClass('open');
					$(navItems).parent().removeClass('active');
			});

			var theBiotab = $('.bio');

			$(theBiotab).on('click',function(e){

				$(navItems).parent().removeClass('active');
				e.preventDefault();

				$(theDrawer).addClass('open');

				$(this).parent().addClass('active');
				//Set up the nav Varibale using this
				var theNavClass = $(this)[0].classList.value;

				// Run through the navigation array and check if the value of a tab matchs
				for (x=0; x < navItems.length; x++) {

					// Set up the Tab variables to check
					var theTabClass = theTabs[x].classList.value;

					if (theNavClass === theTabClass) {
						// Show the current clicked tab
						$(theTabs[x]).fadeIn('4000');
					} else {
						// Do not show the other tabs
						$(theTabs[x]).hide();
					}
				}

				$('.tabs .writing').hide();

			});

			//Add a click event to each nav item
			$(navItems).on('click',function(e){
				$(theBiotab).parent().removeClass('active');
				$(navItems).parent().removeClass('active');
				if ($(this).hasClass('social-link')){

				} else {
					e.preventDefault();
					//Show the Drawer
					$(theDrawer).addClass('open');

					//Add Active class
					$(this).parent().addClass('active');

					//Set up the nav Varibale using this
					var theNavClass = $(this)[0].classList.value;

					// Run through the navigation array and check if the value of a tab matchs
					for (x=0; x < navItems.length; x++) {

						// Set up the Tab variables to check
						var theTabClass = theTabs[x].classList.value;
						if (theNavClass === "writing") {
							$('.tabs .writing').fadeIn('4000');
						}
						if (theNavClass === theTabClass) {
							// Show the current clicked tab
							$(theTabs[x]).fadeIn('4000');
							$('.tabs .writing').hide();
						} else {
							// Do not show the other tabs
							$(theTabs[x]).hide();
						}
					}
				}


			});

// Create a dropdown for the writing section for PDFS
 // $('.writing ul li').each(function(){
 //  $(this).find('ul').hide();
 //  $('.writing ul li').removeClass('active-drop');
 //  $(this).on('click',function(){
 // 	 	$(this).find('ul').slideToggle();
 // 		$(this).addClass('active-drop');
 //  });
 // });

	 // Make the last news image become a fun news image
	 $('.newsandstuff img').last().addClass('newslast');


	 //Mobile navigation button
	 var theMobileNavbutton = $('.mobile-button');

	// Get the mobile nav
	var theMobileNav = $('#mobile-nav');

	// get the mobile nav links
	var theMobileNavLinks = $('#mobile-nav a');

	// get the mobile nav close button
	var closeMobileNav = $('.close-mobile');

	// Get all the div sections
	var allSec = $('.tabs div');

	// create anchor tags for each section
	$(allSec).each(function(){
		var theClass = $(this).attr('class');
		$(this).before('<a name='+theClass+'></a>');
	});

	// Give the movile links a new href correlating to anchor tags
	$(theMobileNavLinks).each(function(){
		var theClass = $(this).attr('class');
		$(this).attr('href','#'+theClass);
	});

	// Close the whole mobile nav after you click on it
	$(theMobileNavLinks).on('click',function(){
		$(theMobileNav).hide();
	});


	// Show the mobile nav on a button click
	 $(theMobileNavbutton).on('click',function(){
		 $(theMobileNav).show();
	 });

	 // close the mobile nav when you click close
	 $(closeMobileNav).on('click',function(){
		$(theMobileNav).hide();
	 });

	 // Wrap all iframes on the directing page
	 var theVideos = $('.directing iframe');
	 $(theVideos).wrapAll('<div class="clear"></div>');

	 // add CSS readable class to the news
	$('.tabs div').each(function(){
		var theClass = $(this).attr('class');
		var newsV = 'news';
		if (theClass) {
			var c = theClass.toString();
			if(theClass.indexOf(newsV) != -1){

					$(this).attr('id','newsandstuff');
			}
		}
		//console.log(c);
	});


	</script>
<?php
get_footer();
