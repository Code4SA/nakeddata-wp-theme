<?php
/**
 * NakedData's home page template
 *
 * Making data look good since 2016
 *
 */

get_header(); ?>
<div class="row">
	<div id="fp_academy" class="col-sm-6">
		<?php
			$catquery = new WP_Query( 'category_name=top-story&posts_per_page=1' );
			while($catquery->have_posts()) : $catquery->the_post();
		?>
		<div class="post first-post">
			<div class="post first-post"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail("full", array("class"=>"img img-responsive")); ?></a></div>
			<div><h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2></div>
			<?php the_excerpt(); ?>
		</div>
		<?php endwhile; ?>

		<?php
			$catquery = new WP_Query( 'category_name=top-story&posts_per_page=5&offset=1' );
			while($catquery->have_posts()) : $catquery->the_post();
		?>
		<div class="post">
			<div><h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3></div>
			<div class="row" style="display: table">
				<div class="col-sm-10 col-xs-12" style="display: table-cell; float: none">
					<?php the_excerpt(); ?>
				</div>
				<div class="col-sm-2 hidden-xs" style="display: table-cell; float: none; height: 100%; width: 100%; background-image: url(<?= wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' )[0] ?>); background-size: cover">
				</div>
			</div>
		</div>
		<?php endwhile; ?>
	</div>
	<div id="fp_briefs" class="col-sm-2 border-left border-right">
		<?php
		$catquery = new WP_Query( 'category_name=brief&posts_per_page=20' );
		while($catquery->have_posts()) : $catquery->the_post();
		?>
		<div class="brief border-bottom"><h5><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h5></div>
		<?php endwhile; ?>
	</div>
	<div id="fp_side" class="col-sm-4">
		<?php
			get_sidebar();
		?>
	</div>
</div>
<?php get_footer(); ?>