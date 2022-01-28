<?php
    /**
     * Template name: Dlaczego my?
     */
get_header(); ?>

<main class="kwb kwb--why">
    <section class="subpageHeader subpageHeader--noshadow" style="background-image: url('<?php the_field('whyHeader_bg'); ?>');">
        <div class="subpageHeader__wrap container">
            <h1>Kuligi w beskidach</h1>
            <h2>Dlaczgo my?</h2>
        </div>
    </section>

    <section class="frontAbout">
        <?php include get_template_directory() . '/template-parts/_aboutBadges.php'; ?>

        <div class="frontAbout__wrap container">
            <div class="aboutContent">
                <?php while(have_rows('infoSlider')): the_row();?>
                    <div class="aboutContent__slide">
                        <?php echo get_sub_field('infoSlider_content'); ?>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="aboutImages">
                <?php while(have_rows('infoSlider')): the_row();?>
                    <div class="aboutImages__slide">
                        <img src="<?php echo get_sub_field('infoSlider_image'); ?>"/>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>

    <section class="offerDivider offerDivider--nologos offerDivider--nomargin">
        <div class="offerDivider__wrap container-lg">
            <h3>Zapraszamy więc do skarbca góralskich tradycji z naszą firmą KULIGI W BESKIDACH!</h3>
        </div>
    </section>

    <?php include get_template_directory() . '/template-parts/_frontOffer.php'; ?>

    <div class="mb-3"></div>
    
</main>

<?php get_footer(); ?>