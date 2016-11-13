
<a href="<?php echo home_url(); ?>">
	<?php if (get_theme_mod('opcm_header_logo') != '') : ?>
		<img id="nav-logo" src="<?php echo get_theme_mod( 'opcm_header_logo');?>" alt="Logo" class="logo-img">

		<?php else : bloginfo('name'); endif;?>
</a>

<a href="#nav" class="nav-trigger">Menu
		<div class="nav-icon">
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		</div>

		<svg x="0px" y="0px" width="54px" height="54px" viewBox="0 0 54 54">
			<circle fill="transparent" stroke="#ffffff" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
		</svg>
	</a>

	<div id="nav" class="nav" role="navigation">
		<div class="nav-wrapper">
			<div class="half-block">
				<h2><?php the_title(); ?></h2>

				<nav>
						<?php joints_top_nav(); ?>
				</nav>
			</div><!-- .half-block -->

			<?php if (get_theme_mod('opcm_nav_show_info') === true): ?>
			<div class="half-block">
				<address>
					<ul class="contact-info">
						<li><a href="mailto:<?php echo get_theme_mod('opcm_nav_email'); ?>"><?php echo get_theme_mod('opcm_nav_email'); ?></a></li>
						<li><a href="tel:<?php echo get_theme_mod('opcm_nav_tel'); ?>">
							<?php echo get_theme_mod('opcm_nav_tel'); ?>
						</a></li>
						<li>
							<span></span>
							<span>W1234X</span>
							<span>London, UK</span>
						</li>
					</ul>
				</address>
			</div>
		<?php endif; ?>

		<?php  if (get_theme_mod('opcm_nav_facebook') != '') : ?>
			<a href="<?php echo get_theme_mod('opcm_nav_facebook');?>" class="nav-social-media fb">
				<div class="nav-social-bg fb"></div>
				<img src="<?php echo get_template_directory_uri();?>/assets/images/facebook.png" alt="facebook link">
			</a>
		<?php endif; ?>
		<?php  if (get_theme_mod('opcm_nav_twitter') != '') : ?>
			<a href="<?php echo get_theme_mod('opcm_nav_twitter');?>" class="nav-social-media tw">
				<div class="nav-social-bg tw"></div>
				<img src="<?php echo get_template_directory_uri();?>/assets/images/twitter.png" alt="twitter link" />
			</a>
		<?php endif; ?>
		<?php  if (get_theme_mod('opcm_nav_youtube') != '') : ?>
			<a href="<?php echo get_theme_mod('opcm_nav_youtube');?>" class="nav-social-media yt">
				<div class="nav-social-bg yt"></div>
				<img src="<?php echo get_template_directory_uri();?>/assets/images/youtube.png" alt="youtube link">
			</a>
		<?php endif; ?>

		</div> <!-- .navigation-wrapper -->
	</div> <!-- .nav -->
