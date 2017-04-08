<?php
/**
 * @package _tk
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="single-blog">
	<div class="info-single-post">
		<header>
			<div class="entry-content-thumbnail">
          <?php the_post_thumbnail(); ?>
			</div>
			<h1 class="single-page-title "><?php the_title(); ?></h1>
		</header><!-- .entry-header -->

		<div class="single-entry-content">

        <?php the_content(); ?>
        <?php _tk_link_pages(); ?>
		</div><!-- .entry-content -->


	</div>
</article><!-- #post-## -->

<?php /*previous_post_link(); */?><!--
--><?php /*next_post_link(); */?>

