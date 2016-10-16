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


		    </main> <!-- end #main -->
		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->
<?php get_footer(); ?>