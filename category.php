<?php
/**
 * The default template for displaying a category
 *
 *
 * @package NakedData
 */

get_header();

?>

<div class="row">
	<div id="category_body" class="col-sm-8">
		<?php if ( have_posts() ) : while ( have_posts() ) :  the_post(); ?>
		<div class="post border-bottom">
			<div><h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3></div>
			<div class="row" style="display: table">
				<div class="col-sm-10 col-xs-12" style="display: table-cell; float: none">
					<?php the_excerpt(); ?>
				</div>
				<div class="col-sm-2 hidden-xs" style="display: table-cell; float: none; height: 100%; width: 100%; background-image: url(<?= wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' )[0] ?>); background-size: cover">
				</div>
			</div>
		</div>
		<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div>
	<div id="category_side" class="col-sm-4">
		<?php
			get_sidebar();
		?>
	</div>
</div>
<?php get_footer(); ?>