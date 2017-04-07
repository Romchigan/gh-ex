<?php
/**
 * @package _tk
 */
?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row">
		<div class="col-xs-12">
			<header>
				<h1 class="blog-post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				<ul class="info-blog-list pl-0 d-flex justify-content-start">
					<li class="info-blog-item-comments"><?php comments_number(); ?></li>
					<li class="info-blog-item-categories"><?php the_category(); ?></li>
				</ul>
			</header><!-- .entry-header -->

        <?php if ( is_search() || is_archive() ) : // Only display Excerpts for Search and Archive Pages ?>
					<div class="blog-post-content">
              <?php the_excerpt(); ?>
					</div><!-- .entry-summary -->
        <?php else : ?>
					<div class="blog-post-content">
              <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', '_tk' ) ); ?>
              <?php _tk_link_pages(); ?>
					</div><!-- .entry-content -->
        <?php endif; ?>
			<footer class="entry-meta">
				<a href="<?php echo get_permalink(); ?>" class="btn-read-more text-uppercase"><?php echo get_theme_mod('text_btn_blog_settings'); ?>
				</a>
			</footer><!-- .entry-meta -->
		</div>
	</div>
</article><!-- #post-## -->


