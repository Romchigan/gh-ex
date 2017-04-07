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

<footer  class="site-footer" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 site-footer-wrap">
				<span class="footer-copyright text-uppercase">&copy Copyright
					<?php echo date('Y'); ?>
				</span>
				<div class="footer-social-wrap">
					<ul class="footer-social-list">
						<?php if(true === get_theme_mod('facebook_checkbox_settings')): { ?>
							<li>
								<a href="<?php echo get_theme_mod('footer_facebook_settings'); ?>" class="footer-social d-flex align-items-center justify-content-center"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							</li>
						<?php } endif; ?>
						<?php if(true === get_theme_mod('twitter_checkbox_settings')): { ?>
							<li>
								<a href="<?php echo get_theme_mod('footer_twitter_settings'); ?>" class="footer-social d-flex align-items-center justify-content-center"><i class="fa fa-tumblr" aria-hidden="true"></i></a>
							</li>
						<?php } endif; ?>
						<?php if(true === get_theme_mod('linkedin_checkbox_settings')): { ?>
							<li>
								<a href="<?php echo get_theme_mod('footer_linkedin_settings'); ?>" class="footer-social d-flex align-items-center justify-content-center"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
							</li>
						<?php } endif; ?>
					</ul>
				</div>

				<!--<div class="wrap-btn-social">
					<div class="social">
						<?php /*if(true === get_theme_mod('facebook_checkbox_settings')): { */?>
							<a class="facebookBtn smGlobalBtn" href="https://www.facebook.com/" ></a>
						<?php /*} endif; */?>
						<?php /*if(true === get_theme_mod('twitter_checkbox_settings')): { */?>
							<a class="twitterBtn smGlobalBtn" href="https://twitter.com/" ></a>
						<?php /*} endif; */?>
						<?php /*if(true === get_theme_mod('linkedin_checkbox_settings')): { */?>
							<a class="googleplusBtn smGlobalBtn" href="https://plus.google.com/?hl=ru" ></a>
						<?php /*} endif; */?>
					</div>
				</div>-->



			</div>
		</div>
	</div>
</footer><!-- close footer -->

<?php wp_footer(); ?>

</body>
</html>
