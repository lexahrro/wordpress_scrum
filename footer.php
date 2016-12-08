<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package dazzling
 */
?>
                </div><!-- close .row -->
            </div><!-- close .container -->
        </div><!-- close .site-content -->

	<div id="footer-area">
		<div class="container footer-inner">
			<?php get_sidebar( 'footer' ); ?>
		</div>

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info container">
				<div class="social col-md-6 col-sm-6 col-xs-6">
					<a href="#"><img src="<?php bloginfo('url'); ?>/wp-content/themes/dazzling/img/fb.png" alt="fond_img"></a>
					<a href="#"><img src="<?php bloginfo('url'); ?>/wp-content/themes/dazzling/img/insta.png" alt="fond_img">
					<a href="#"><img src="<?php bloginfo('url'); ?>/wp-content/themes/dazzling/img/twitter.png" alt="fond_img"></a>
					<a href="#"><img src="<?php bloginfo('url'); ?>/wp-content/themes/dazzling/img/yt.png" alt="fond_img"></a>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6">
					<h4 class="pull-right">IIM e-Sport / Tous droits réservés</h4>
				</div>
			</div><!-- .site-info -->
			<div class="scroll-to-top"><i class="fa fa-angle-up"></i></div><!-- .scroll-to-top -->
		</footer><!-- #colophon -->
	</div>
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>