<?php
/**
 * @package _tk
 */
?>



<article class="col-md-6 col-sm-12 pl-0" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="info-post">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
		<header>
			<h1 class="blog-post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		</header><!-- .entry-header -->
		<div class="blog-post-content">
        <?php the_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', '_tk' ) ); ?>
		</div><!-- .entry-content -->
		<footer class="entry-meta">
        <p class="post-date"><?php echo get_the_date('d,m,Y'); ?></p>
		</footer><!-- .entry-meta -->
	</div>
</article><!-- #post-## -->


