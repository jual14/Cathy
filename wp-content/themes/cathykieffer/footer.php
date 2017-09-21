<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cathy-kieffer
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<p>N° de SIRET : 49462824100023 URSSAF BORDEAUX <span class="sep"> | </span>Le soin énergétique ne se substitue en aucun cas à un traitement médical ou à un avis médical</p>
			<!-- <div class="under-footer"> -->
				<a href="<?php echo get_permalink(96); ?>">Mentions Légales</a>
				<span class="sep"> | </span>
				<!-- <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'cathykieffer' ) ); ?>"><?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Site fièrement propulsé par %s', 'cathykieffer' ), 'WordPress' );
				?></a> -->
				<!-- <span class="sep"> | </span> -->
				<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'cathykieffer' ), 'cathykieffer', '<a href="https://www.aj-numerique.fr/">julien alix</a>' );
				?>
			<!-- </div> -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
