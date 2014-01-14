<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Responsive
 */

get_header(); ?>

	<div id="content-full" class="content-area <?php echo get_responsive_grid( 'col-12' ); ?>">
		<main id="main" class="site-main" role="main">

			<?php responsive_entry_before(); ?>
			<section id="post-0" class="error404 not-found">
				<?php responsive_entry_top(); ?>
				<div class="post-entry">

					<?php get_template_part( 'loop-no-posts' ); ?>

				</div><!-- .post-entry -->
			</section><!-- #post-0 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>