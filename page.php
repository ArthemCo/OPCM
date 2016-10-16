<?php get_header(); ?>
	
	<div id="content">
	
	<?php if ( has_post_thumbnail()) : the_post_thumbnail();  endif; ?>
	
		<div id="inner-content">
	
		    <main id="main" class="" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page' ); ?>
			    
			    <?php endwhile; endif; ?>							
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>