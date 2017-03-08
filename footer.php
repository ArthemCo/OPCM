			<!-- end #inner-content -->

			<footer class="footer" role="contentinfo">
				<div id="inner-footer">
					<div class="">
						<nav role="navigation">
							<?php joints_footer_links(); ?>
							<p>
							<?php  if (get_theme_mod('opcm_nav_facebook') != '') : ?>
								<a href="<?php echo get_theme_mod('opcm_nav_facebook');?>" class="nav-social-media">Facebook</a>
							<?php endif; ?>
							<?php  if (get_theme_mod('opcm_nav_twitter') != '') : ?>
								<a href="<?php echo get_theme_mod('opcm_nav_twitter');?>" class="nav-social-media">Twitter</a>
							<?php endif; ?>
							<?php  if (get_theme_mod('opcm_nav_youtube') != '') : ?>
								<a href="<?php echo get_theme_mod('opcm_nav_youtube');?>" class="nav-social-media">YouTube</a>
							<?php endif; ?>
							</p>
						</nav>
					</div>
					<div class="">
						<p><a href="mailto:<?php echo get_theme_mod('opcm_nav_email'); ?>"><?php echo get_theme_mod('opcm_nav_email'); ?></a> | &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
					</div>
				</div>
				<!-- end #inner-footer -->
			</footer>
			</div>
			<!-- end #content -->

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
			<script> window.jQuery || document.write('<script src="js/vendor/jquery/dist/jquery.min.js"><\\/script>'); </script>
		<?php wp_footer(); ?>
	</body>
</html>
