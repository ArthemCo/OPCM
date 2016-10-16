			<footer class="footer" role="contentinfo">
				<div id="inner-footer">
					<div class="">
						<nav role="navigation">
    						<?php joints_footer_links(); ?>
    					</nav>
    				</div>
					<div class="">
						<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
					</div>
				</div> <!-- end #inner-footer -->
			</footer> <!-- end .footer -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
			<script> window.jQuery || document.write('<script src="js/vendor/jquery/dist/jquery.min.js"><\\/script>'); </script>
		<?php wp_footer(); ?>
	</body>
</html>
