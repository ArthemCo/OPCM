<ul class="menu">
		<li><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>
</ul>
<?php joints_top_nav(); ?>


<?php
$bool = false;
// joints top nav and the above output the following:
if ($bool == true) : ?>
<!-- just getting html styling. remove on production -->

<!-- user specified menu name -->
	<div class="top-bar" id="main-menu">
		<div class="top-bar-left">
			<ul class="menu">
				<li>
				<a href="http://localhost:8888/WPdev">OPCM</a>
				</li>
			</ul>
		</div>

		<div class="top-bar-right">
			<ul id="menu-$" class="vertical medium-horizontal menu">
					<li id="menu-item-$$" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13">
						<a href="{{link}}">Orchestra</a>
					</li>
					<!-- ... -->
			</ul>
		</div>

	</div>
	<?php
endif;
?>
