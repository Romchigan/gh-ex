<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _tk
 */

get_header(); ?>
<div id="content" class="main-content-inner col-sm-12 col-md-12">
	Lorem ipsum dolor sit amet, consectetur adipisicing.

<!--	<ul class="our-team-list pl-0 mb-0 d-flex justify-content-between flex-wrap">-->
<!--      --><?php //$loop = new WP_Query( array( 'post_type' => 'Team', 'posts_per_page' => -1 ) ); ?>
<!--      --><?php //while ( $loop->have_posts() ) : $loop->the_post(); ?>
<!--				<li>-->
<!--            --><?php	//the_post_thumbnail(array(265, 200)); ?>
<!--					<h3 class="worker-name text-uppercase">--><?php //the_title(); ?><!--</h3>-->
<!--					<p class="worker-position">--><?php //the_field('team_position'); ?><!--</p>-->
<!--					<p class="our-team-content">--><?php //the_content(); ?><!--</p>-->
<!--				</li>-->
<!--      --><?php //endwhile; wp_reset_query(); ?>
<!--	</ul>-->

</div>

<?php get_footer(); ?>
