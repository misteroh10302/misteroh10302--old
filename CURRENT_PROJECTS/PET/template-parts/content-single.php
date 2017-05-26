<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pet
 */

?>
<style>
	
	#tags {
		  /*  position: absolute;
    		left: 3.2vw;*/
	}

	#tags a {
		font-size: 12px;
		text-decoration: underline;;
		font-family: 'Adobe';
		    color: #67ccbe !important;
	}
</style>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<span id="tags">
			<?php the_tags(); ?>
		</span>

	</header><!-- .entry-header -->

	

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pet' ),
				'after'  => '</div>',
			) );
		?>

	</div><!-- .entry-content -->

	<script>
	
	var div = $(".single-about").height();
var win = $(window).height();

if (div > win ) {
    $(".single-about").addClass('unfix');
}

</script>

	<footer class="entry-footer">
		
		<?php pet_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

