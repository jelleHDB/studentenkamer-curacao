<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sydney
 */
$link1 = get_field('linkKolom1_1', 'options');
$link2 = get_field('linkKolom1_2', 'options');
$link3 = get_field('linkKolom1_3', 'options');
$link4 = get_field('linkKolom1_4', 'options');
$link5 = get_field('linkKolom1_5', 'options');
$link6 = get_field('linkKolom1_6', 'options');
$link7 = get_field('linkKolom3_1', 'options');
$link8 = get_field('linkKolom3_2', 'options');
$link9 = get_field('mailKolom3', 'options');
?>
			</div>
		</div>
	</div><!-- #content -->

	<?php do_action('sydney_before_footer'); ?>

	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

	<?php $container 	= get_theme_mod( 'footer_credits_container', 'container' ); ?>
	<?php $credits 		= sydney_footer_credits(); ?>

	<footer id="footer-footer" class="Footer">
		<div id="footer-inhoud">
			<div id="footerKolom1">
				<?php if( get_field('titel-footer-kolom_1', 'options') ): ?>
					<h2 class="titel-footer-kolom_1"><?php the_field('titel-footer-kolom_1', 'options'); ?></h2>
				<?php endif; ?>
				<?php
				if( $link1 ): ?>
					<a class="linkInKolom1" href="<?php echo esc_url( $link1 ); ?>">
						<?php the_field('tekstkolom1_1', 'options'); ?>
					</a>
				<?php endif; ?>
				<?php
				if( $link2 ): ?>
					<a class="linkInKolom1" href="<?php echo esc_url( $link2 ); ?>">
						<?php the_field('tekstkolom1_2', 'options'); ?>
					</a>
				<?php endif; ?>
				<?php
				if( $link3 ): ?>
					<a class="linkInKolom1" href="<?php echo esc_url( $link3 ); ?>">
						<?php the_field('tekstkolom1_3', 'options'); ?>
					</a>
				<?php endif; ?>
				<?php
				if( $link4 ): ?>
					<a class="linkInKolom1" href="<?php echo esc_url( $link4 ); ?>">
						<?php the_field('tekstkolom1_4', 'options'); ?>
					</a>
				<?php endif; ?>
				<?php
				if( $link5 ): ?>
					<a class="linkInKolom1" href="<?php echo esc_url( $link5 ); ?>">
						<?php the_field('tekstkolom1_5', 'options'); ?>
					</a>
				<?php endif; ?>
				<?php
				if( $link6 ): ?>
					<a class="linkInKolom1" href="<?php echo esc_url( $link6 ); ?>">
						<?php the_field('tekstkolom1_6', 'options'); ?>
					</a>
				<?php endif; ?>
			</div>
			<div id="footerKolom2">
				<?php if( get_field('titelKolom2', 'options') ): ?>
					<h2 class="titelKolom2"><?php the_field('titelKolom2', 'options'); ?></h2>
				<?php endif; ?>
				<?php if( get_field('informatieKolom2', 'options') ): ?>
					<p class="informatieKolom2"><?php the_field('informatieKolom2', 'options'); ?></p>
				<?php endif; ?>
			</div>
			<div id="footerKolom3">
				<?php if( get_field('titelKolom3', 'options') ): ?>
					<h2 class="titelKolom3"><?php the_field('titelKolom3', 'options'); ?></h2>
				<?php endif; ?>
				<?php if( get_field('adresRegel-Kolom3_1', 'options') ): ?>
					<p class="adresRegel-Kolom3_1"><?php the_field('adresRegel-Kolom3_1', 'options'); ?></p>
				<?php endif; ?>
				<?php if( get_field('adresRegel-Kolom3_2', 'options') ): ?>
					<p class="adresRegel-Kolom3_2"><?php the_field('adresRegel-Kolom3_2', 'options'); ?></p>
				<?php endif; ?>
				<?php
				if( $link9 ): ?>
					<a class="linkMailKolom3" href="<?php echo esc_url( $link9 ); ?>">
						<?php the_field('MailTekstKolom3', 'options'); ?>
					</a>
				<?php endif; ?>
				<?php
				if( $link7 ): ?>
					<a class="linkInKolom3" href="<?php echo esc_url( $link7 ); ?>">
						<img class="whatsapp-logo" src="<?php the_field('afbeeldingKolom3_1', 'options'); ?>" />
					</a>
				<?php endif; ?>
				<?php
				if( $link8 ): ?>
					<a class="linkInKolom3" href="<?php echo esc_url( $link8 ); ?>">
						<img class="facebook-logo" src="<?php the_field('afbeeldingKolom3_2', 'options'); ?>" />
					</a>
				<?php endif; ?>
			</div>
			<?php echo wp_kses_post( $credits ); ?>
		</div>
	</footer><!-- #colophon -->

	<?php do_action('sydney_after_footer'); ?>

	

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
