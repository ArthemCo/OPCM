<?php /*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

	<div id="content">


		<div id="hero" style="background:url('<?php echo get_theme_mod('home_img');?>') center center">
			<!-- call to action b'doodle -->
			<div id="home-cta">
				<?php if (get_theme_mod('home_CTA_text') != '') : ?>
					<h1><?php echo get_theme_mod('home_CTA_text');?></h1>
				<?php endif; ?>

				<?php if (!empty(get_theme_mod('home_CTA_link'))): ?>
					<a href="<?php echo esc_url(get_permalink(get_theme_mod('home_CTA_link'))); ?>" class="button">
						<?php if (!empty(get_theme_mod('home_CTA_link_text'))) {
							echo get_theme_mod('home_CTA_link_text');
						} else {
							echo get_the_title(get_theme_mod('home_CTA_link'));
						}?>
					</a>
				<?php endif; ?>
			</div>
		</div>

		<div id="inner-content">
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
