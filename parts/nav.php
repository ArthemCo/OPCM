<!-- Insert image from preferences or echo: -->
<a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>

<?php joints_top_nav(); ?>

<a href="#menu" id="nav-toggle">Menu</a>
<?php
$bool = false;
// joints top nav and the above output the following:
if ($bool == true) : ?>
<!-- just getting html styling. remove on production -->

<!-- user specified menu name -->
<nav role="navigation" id="nav-global">
		<ul class="menu">
			<li>
			<a href="http://localhost:8888/WPdev">OPCM</a>
			</li>
		</ul>

		<div class="top-bar-right">
			<ul id="menu-$" class="vertical medium-horizontal menu">
					<li id="menu-item-$$" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13">
						<a href="{{link}}">Orchestra</a>
					</li>
					<!-- ... -->
			</ul>
		</div>

</nav>
	<?php
endif;
?>
