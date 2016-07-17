<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<div class="row">
	<div class="col-sm-9">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the post format-specific template for the content. If you want to
				 * use this in a child theme, then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );

				

			// End the loop.
			endwhile;
			?>

			</main><!-- .site-main -->
		</div><!-- .content-area -->
	</div>
	<div class="col-sm-3">
		<?php get_sidebar(); ?>		
	</div>
</div>
	

<?php get_footer(); ?>
