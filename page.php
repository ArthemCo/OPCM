<?php get_header(); ?>

	<div id="content">
		<?php if ( has_post_thumbnail()) : ?>
			<div class="page-featured-image">
				<?php the_post_thumbnail('large'); ?>
			</div>
		<?php endif; ?>

		<div id="inner-content">
		    <main id="main" role="main">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		    	<?php get_template_part( 'parts/loop', 'page' ); ?>
		    <?php endwhile; endif; ?>
			</main> <!-- end #main -->
		</div>

<?php get_footer(); ?>
