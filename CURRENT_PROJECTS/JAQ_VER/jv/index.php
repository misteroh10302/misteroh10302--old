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
 * @package JV
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		  	<section id="allimages">
		  		<?php query_posts('showposts=-1'); ?> 
		  						  		                  
		  		  		                    <?php if (!have_posts()) : ?>
		  		  		                          <div class="alert alert-warning">
		  		  		                    <?php _e('Sorry, no results were found.', 'roots'); ?>
		  		  		                          </div> 
		  		  		                   
		  		  		                    <?php get_search_form(); ?>
		  		  		                    <?php endif; ?>
		  		  		                    <?php while (have_posts()) : the_post(); ?> 
		  		
		  		  		                   
		  		  			                    <div class="col-2 homepage-posts <?php $category = get_the_category();echo $category[0]->cat_name;?>" data-scroll-speed>
		  		  			                    	<a href="<?php the_permalink(); ?>" class="col-two-style">
		  		  			                        <?php the_post_thumbnail();?>
		  		  			                      
		  		  			                     <!--  -->
		  		  			                         </a>
		  		  			                    </div>
		  						  		                 
		  						  		               
		  						  	<?php endwhile; ?>
		  						  </section>
		</main><!-- #main -->
	</div><!-- #primary -->
<script>

$('#primary-menu li a').each(function(){
	var newClass = $(this)[0].innerHTML;
	var newString = newClass+'-nav';
	console.log(newClass);
	$(this).addClass(newString);

});

$('#primary-menu  a').on('click',function(e){
	e.preventDefault();

});



	$('.Editorial-nav').on('click',function(){
		
			$('#allimages div img').not('.edit').css({'-webkit-filter': 'blur(5px)', 'filter':' blur(5px)'}).fadeIn();
			$('.edit img').css({'-webkit-filter': 'blur(0px)', 'filter':' blur(0px)'});
	});

	$('.Concerts-nav').on('click',function(){
			$('#allimages div img').not('.concert').css({'-webkit-filter': 'blur(5px)', 'filter':' blur(5px)'}).fadeIn();
			$('.concert img').css({'-webkit-filter': 'blur(0px)', 'filter':' blur(0px)'});
	});

	$('.Studio-nav').on('click',function(){
			$('#allimages div img').not('.studio').css({'-webkit-filter': 'blur(5px)', 'filter':' blur(5px)'}).fadeIn();
			$('.studio img').css({'-webkit-filter': 'blur(0px)', 'filter':' blur(0px)'});
	});

	$('.brand').on('click',function(){
			$('#allimages div img').css({'-webkit-filter': 'blur(0px)', 'filter':' blur(0px)'});
	});
</script>
<?php
