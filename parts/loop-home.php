<article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

	<section class="entry-content" itemprop="articleBody">
	    <?php the_content(); ?>
	    <?php wp_link_pages(); ?>
	</section>
</article>
