<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>

		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->


<section class="footer-contact-us">
	<div class="footer-contact-us-bg">
		<div class="container pb-0">
			<div class="row">
				<div class="col-md-6 col-xs-12 footer-contact-info-wrap">
					<h3 class="footer-contact-heading"><?php echo get_theme_mod('footer_contact_heading_settings'); ?></h3>
					<p class="footer-contact-info"><?php echo get_theme_mod('footer_contact_info_settings'); ?></p>
					<span class="footer-contact-phone"><?php echo get_theme_mod('footer_contact_phone_settings'); ?></span>
					<p class="footer-contact-address"><?php echo get_theme_mod('footer_contact_address_settings'); ?></p>
					<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d760.4642158235881!2d32.094586522242764!3d49.42608632307095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x40d14ba5f16da949%3A0x752d2a59322437eb!2z0LLRg9C70LjRhtGPINCT0L7RgNGM0LrQvtCz0L4sIDYwLCDQp9C10YDQutCw0YHQuCwg0KfQtdGA0LrQsNGB0YzQutCwINC-0LHQu9Cw0YHRgtGMLCAxODAwMA!3m2!1d49.4261238!2d32.0946832!5e0!3m2!1sru!2sua!4v1491643580329" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="col-md-6 col-xs-12">
            <?php echo do_shortcode( '[contact-form-7 id="66" title="Contact form 1"]' ); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="sub-footer">
	<a href="<?php echo get_site_url(); ?>">
		<img src="<?php echo get_theme_mod('sub_footer_logo_settings'); ?>" alt="footer-banner" class="img-fluid">
	</a>
</section>
<footer  class="site-footer" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 site-footer-wrap">
				<span class="footer-copyright text-uppercase">&copy
					<?php echo date('Y'); ?>
					<?php echo get_theme_mod('footer_ifo_settings'); ?>

				</span>

			</div>
		</div>
	</div>
</footer><!-- close footer -->

<?php wp_footer(); ?>

</body>
</html>
