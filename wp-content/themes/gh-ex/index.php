<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no page-blog.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _tk
 */

get_header(); ?>
	<div id="content" class="main-content-inner col-sm-12 col-md-8">

	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php
				/* Include the Post-Format-specific template for the content.
				 * If you want to overload this in a child theme then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );
			?>

		<?php endwhile; ?>


	<?php else : ?>

		<?php get_template_part( 'no-results', 'index' ); ?>

	<?php endif; ?>

	<?php
	$args = array(
		'show_all'     => false,
		'end_size'     => 1,
		'mid_size'     => 1,
		'prev_next'    => false,
		'add_args'     => false,
		'add_fragment' => '',
		'screen_reader_text' => false,
	); ?>
	<nav class="pagination-links text-left">
		<?php echo paginate_links($args); ?>
	</nav>

    <?php get_sidebar(); ?>

	</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->


<?php get_footer(); ?>