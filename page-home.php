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

			<div id="home-blocks">
			<?php if (get_theme_mod('home_feature_one') != -1): ?>
				<?php $block1 = get_theme_mod('home_feature_one'); ?>

				<a href="<?php echo esc_url(get_permalink($block1));?>" class="home-block" style="background-image:url(<?php echo get_the_post_thumbnail($block1->ID);?>);">
					<section>
						<h3><?php echo get_the_title($block1); ?></h3>
					</section>
				</a>
			<?php endif; ?>

			<?php if (get_theme_mod('home_feature_two') != -1): ?>
				<?php $block2 = get_theme_mod('home_feature_two'); ?>

				<a href="<?php echo esc_url(get_permalink($block2));?>" class="home-block">
					<section>
						<h3><?php echo get_the_title($block2); ?></h3>
					</section>
				</a>
			<?php endif; ?>

			<?php if (get_theme_mod('home_feature_three') != -1): ?>
				<?php $block3 = get_theme_mod('home_feature_three'); ?>

				<a href="<?php echo esc_url(get_permalink($block3));?>" class="home-block">
					<section>
						<h3><?php echo get_the_title($block3); ?></h3>
					</section>
				</a>
			<?php endif; ?>

			<?php if (get_theme_mod('home_feature_four') != -1): ?>
				<?php $block4 = get_theme_mod('home_feature_four'); ?>

				<a href="<?php echo esc_url(get_permalink($block4));?>" class="home-block">
					<section>
						<h3><?php echo get_the_title($block4); ?></h3>
					</section>
				</a>
			<?php endif; ?>
		</div>
		</div>

<?php get_footer(); ?>
