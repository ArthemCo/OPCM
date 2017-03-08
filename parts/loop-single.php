<article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">



  <section class="entry-content" itemprop="articleBody">

		<header class="article-header">
			<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
			</header> <!-- end article header -->
		<?php the_post_thumbnail('full'); ?>
		<?php the_content(); ?>
	</section> <!-- end article section -->

	<footer class="article-footer">
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jointswp' ), 'after'  => '</div>' ) ); ?>
		<p class="tags"><?php the_tags('<span class="tags-title">' . __( 'Tags:', 'jointswp' ) . '</span> ', ', ', ''); ?></p>
	</footer> <!-- end article footer -->

</article> <!-- end article -->
