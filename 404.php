<?php get_header(); ?>

	<div id="content">
		<div id="inner-content" class="container">
			<main id="main" role="main">
				<article id="content-not-found" class="entry-content row">
					<header class="article-header">
						<h1><?php _e( '404 - Article Not Found', 'jointswp' ); ?></h1>
					</header>
					<p><?php _e( 'The article you were looking for was not found, but maybe try looking again!', 'jointswp' ); ?></p>
					<?php get_search_form(); ?>
				</article>
			</main>
		</div>
	</div>
	<?php get_template_part( 'parts/nav' ); ?>
<?php get_footer(); ?>
