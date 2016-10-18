<?php /*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

	<div id="content">

		<div id="inner-content">

			<?php  if (get_theme_mod('home_img') != '') : ?>
				<img src="<?php echo get_theme_mod( 'home_img');?>" alt="Logo" class="logo-img">
				<?php endif; ?>

					<main id="main" class="" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<?php get_template_part( 'parts/loop', 'home' ); ?>

								<?php endwhile; endif; ?>


					</main>
					<!-- end #main -->
		</div>
		<!-- end #inner-content -->

		<footer class="footer" role="contentinfo">
			<div id="inner-footer">
				<div class="">
					<nav role="navigation">
						<?php joints_footer_links(); ?>
					</nav>
				</div>
				<div class="">
					<p class="source-org copyright">&copy;
						<?php echo date('Y'); ?>
							<?php bloginfo('name'); ?>.</p>
				</div>
			</div>
			<!-- end #inner-footer -->
		</footer>
		<!-- end .footer -->
	</div>
	<!-- end #content -->

<?php get_template_part( 'parts/nav' ); ?>

<?php get_footer(); ?>