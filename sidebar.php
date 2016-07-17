<?php

if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) || is_active_sidebar( 'sidebar-1' )  ) : ?>
	<div id="secondary" class="secondary">
		<?php get_search_form(); ?>
		<?php
			include(get_template_directory() . "/snippets/mailchimp-sidebar.php");
			$catquery = new WP_Query( 'category_name=sidebar&posts_per_page=10' );
			while($catquery->have_posts()) : $catquery->the_post();
		?>
		<div class="sidebar-feature border-bottom">
			<h5><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h5>
			<div>
				<?php the_excerpt(); ?>
			</div>
		</div>

		<?php endwhile; ?>

		<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
			<div id="widget-area" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</div><!-- .widget-area -->
		<?php endif; ?>

	</div><!-- .secondary -->

<?php endif; ?>
