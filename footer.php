<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PhotoBlog_s
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'photoblog_s' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'photoblog_s' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'photoblog_s' ), 'photoblog_s', '<a href="https://Gott50.github.io">Gott50</a>' );
			?>
		</div><!-- .site-info -->
        <?php if ( has_nav_menu( 'footer' ) ) : ?>
            <?php
            wp_nav_menu(array(
                'theme_location'=>'footer',
                'menu_id'        => 'footer-menu',));
            ?>
        <?php endif;?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
