<?php
/*
Template Name: Home
*/

$home_1 = get_field('link-kamersHome');
$home_2 = get_field('buttonLinkStudentenkamerHome');

get_header(); ?>

<?php include 'slider-home.php';?>

<div class="homepage" id="home" style="background-image: url(http://localhost/studentenkamer-curacao/wp-content/uploads/2023/05/background_overlay.jpg);">
    <div class="homepage-inhoud" id="home-inhoud">
        <div class="homepage-c1">
            <?php if( get_field('titel-kamersHome') ): ?>
                <h2 class="titel-kamersHome"><?php the_field('titel-kamersHome'); ?></h2>
            <?php endif; ?>
            <?php
            if( $home_1): ?>
                <a class="buttonHome" href="<?php echo esc_url( $home_1 ); ?>">
                    <?php the_field('tektsButton-kamersHome'); ?>
                </a>
            <?php endif; ?>
        </div>
        <div class="homepage-c2" style="background-image: linear-gradient( rgb(0 0 0 / 0%), rgb(0 0 0 / 0%) ), url(<?php the_field('BackgroundImg-c2Home'); ?>)">
            <h2> placeholder </h2>
        </div>
    </div>
    <div id="homepage-inhoud-2">
        <div class="homepage-c3">
            <?php if( get_field('afbeeldingKamersvoorStudentenHome') ): ?>
                <img class="afbeeldingKamersvoorStudentenHome" src="<?php the_field('afbeeldingKamersvoorStudentenHome'); ?>" />
            <?php endif; ?>
        </div>
        <div class="homepage-c4">
            <?php if( get_field('titel1-studentenKamerHome') ): ?>
                <h2 class="titel1-studentenKamerHome"><?php the_field('titel1-studentenKamerHome'); ?></h2>
            <?php endif; ?>
            <?php if( get_field('titel2-studentenKamerHome') ): ?>
                <h2 class="titel2-studentenKamerHome"><?php the_field('titel2-studentenKamerHome'); ?></h2>
            <?php endif; ?>
            <?php if( get_field('informatiestudentenkamerhome') ): ?>
                <p class="informatiestudentenkamerhome"><?php the_field('informatiestudentenkamerhome'); ?></p>
            <?php endif; ?>
            <?php
            if( $home_2): ?>
                <a class="buttonHome" href="<?php echo esc_url( $home_2 ); ?>">
                    <?php the_field('buttonTekstStudentenkamerHome'); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>
<div id="onzeLocatiesHome" style="background-image: linear-gradient( rgb(0 0 0 / 80%), rgb(0 0 0 / 80%) ), url(http://localhost/studentenkamer-curacao/wp-content/uploads/2023/05/jorgen-hendriksen-F9MPYiczh14-unsplash-1.jpg)">
    <div id="onzeLocatiesHomeInhoud">
        <?php if( get_field('OnzeLocatiesTitelHome_1') ): ?>
            <h2 class="OnzeLocatiesTitelHome_1"><?php the_field('OnzeLocatiesTitelHome_1'); ?></h2>
        <?php endif; ?>
        <?php if( get_field('OnzeLocatiesTitelHome_2') ): ?>
            <h2 class="OnzeLocatiesTitelHome_2"><?php the_field('OnzeLocatiesTitelHome_2'); ?></h2>
        <?php endif; ?>
        <br>
        <div id="onzeLocatiesHome-c1">
            <?php if( get_field('OnzeLocatiesAfbeeldingHome_1') ): ?>
                <img class="OnzeLocatiesAfbeeldingHome_1" src="<?php the_field('OnzeLocatiesAfbeeldingHome_1'); ?>" />
            <?php endif; ?>
            <?php if( get_field('locatiePinAfbeeldingOnzeLocatiesHome') ): ?>
                <img class="locatiePinAfbeeldingOnzeLocatiesHome" src="<?php the_field('locatiePinAfbeeldingOnzeLocatiesHome'); ?>" />
            <?php endif; ?>
            <?php if( get_field('TitelbijAfbeeldingOnzeLocatiesHome_1') ): ?>
                <h2 class="TitelbijAfbeeldingOnzeLocatiesHome_1"><?php the_field('TitelbijAfbeeldingOnzeLocatiesHome_1'); ?></h2>
            <?php endif; ?>
        </div>
        <div id="onzeLocatiesHome-c2">
            <?php if( get_field('OnzeLocatiesAfbeeldingHome_2') ): ?>
                <img class="OnzeLocatiesAfbeeldingHome_2" src="<?php the_field('OnzeLocatiesAfbeeldingHome_2'); ?>" />
            <?php endif; ?>
            <?php if( get_field('locatiePinAfbeeldingOnzeLocatiesHome') ): ?>
                <img class="locatiePinAfbeeldingOnzeLocatiesHome" src="<?php the_field('locatiePinAfbeeldingOnzeLocatiesHome'); ?>" />
            <?php endif; ?>
            <?php if( get_field('TitelbijAfbeeldingOnzeLocatiesHome_2') ): ?>
                <h2 class="TitelbijAfbeeldingOnzeLocatiesHome_2"><?php the_field('TitelbijAfbeeldingOnzeLocatiesHome_2'); ?></h2>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php include 'callToAction.php';?>

<?php get_footer(); ?>

