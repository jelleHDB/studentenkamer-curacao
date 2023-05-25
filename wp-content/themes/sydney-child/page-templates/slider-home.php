<?php 


$link1 = get_field('link-slider');
$link2 = get_field('scroll-slider');

?>


<div id="header" class="headerWithImage" style="background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(<?php the_field('afbeelding-slider'); ?>)">
	<div id="header-inhoud">
		<?php if( get_field('titel-slider') ): ?>
			<h2 class="titel-slider"><?php the_field('titel-slider'); ?></h2>
		<?php endif; ?>
		<?php
		if( $link1 ): ?>
			<a class="linkInHeader buttonSlider" href="<?php echo esc_url( $link1 ); ?>">
				<?php the_field('tekstVoorLink-slider'); ?>
			</a>
		<?php endif; ?>
		<br>
		<?php
		if( $link2 ): ?>
			<div id="link-down">
				<a class="link-pijl" href="<?php echo esc_url( $link2); ?>">
					<i class="fa fa-angle-down"></i>
				</a>
			</div>
		<?php endif; ?>
	</div>
</div>