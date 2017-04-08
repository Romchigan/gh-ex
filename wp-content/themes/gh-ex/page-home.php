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

get_header('home'); ?>
<div id="content" class="col-sm-12 col-md-12 pl-0 pr-0">
	<section class="main-back-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<img src="<?php echo get_theme_mod('image_red_section_settings'); ?>" alt="image-red-section" class="img-fluid image-red-section">
				</div>
				<div class="col-md-6 col-sm-12 info-start-section-wrap">
					<h1 class="heading-red-section text-uppercase">
							<?php echo get_theme_mod('heading_red_section_settings'); ?>
						<span class="text-uppercase heading-red-section heading-red-section-two">us?</span>
					</h1>
					<h3 class="sub-heading-red-section"><?php echo get_theme_mod('sub_heading_red_section_settings'); ?></h3>
					<p class="data-red-section"><?php echo get_theme_mod('data_red_section_settings'); ?></p>
					<p class="info-red-section"><?php echo get_theme_mod('info_red_section_settings'); ?></p>
				</div>
			</div>
		</div>
	</section>
	<section class="welcome-section">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-12">
					<img src="<?php echo get_theme_mod('image_welcome_section_settings'); ?>" alt="image-red-section" class="img-fluid image-welcome-section">
				</div>
				<div class="col-md-7 col-sm-12 wrap-info-welcome-section">
					<h2 class="heading-welcome-section text-uppercase"><?php echo get_theme_mod('heading_welcome_section_settings');?></h2>
					<p class="info-welcome-section"><?php echo get_theme_mod('info_welcome_section_settings');?></p>
				</div>
			</div>
		</div>
	</section>
	<section class="offering-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="offering-section-wrap-info">
						<h2 class="offering-section-heading"><?php echo get_theme_mod('heading_offering_section_settings');?></h2>
						<p class="offering-section-sub-heading"><?php echo get_theme_mod('info_offering_section_settings');?></p>
					</div>
					<div class="offering-list pl-0 mb-0">
              <?php $loop = new WP_Query( array( 'post_type' => 'offering', 'posts_per_page' => 3 ) ); ?>
              <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
								<div class="col-sm-4">
                    <?php	the_post_thumbnail(array(130, 130)); ?>
									<h3 class="head-offer"><?php the_title(); ?></h3>
									<p class="info-offer"><?php the_content(); ?></p>
								</div>
              <?php endwhile; wp_reset_query(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="clients-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

				</div>
			</div>
		</div>
	</section>



</div>

<?php get_footer(); ?>
