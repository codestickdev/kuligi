<?php
    /**
     * Template name: O nas
     */
get_header(); ?>

<main class="kwb kwb--about">
    <section class="subpageHeader subpageHeader--noshadow" style="background-image: url('<?php echo the_field('aboutHeader_bg'); ?>');">
        <div class="subpageHeader__wrap container">
            <h1>Kuligi w beskidach</h1>
            <h2>O nas</h2>
        </div>
    </section>

    <section class="frontAbout">
        <?php include get_template_directory() . '/template-parts/_aboutBadges.php'; ?>

        <div class="frontAbout__wrap container">
            <div class="aboutContent">
                <?php while(have_rows('aboutSlider')): the_row();?>
                    <div class="aboutContent__slide">
                        <?php echo get_sub_field('aboutSlider_content'); ?>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="aboutImages">
                <?php while(have_rows('aboutSlider')): the_row();?>
                    <div class="aboutImages__slide">
                        <img src="<?php echo get_sub_field('aboutSlider_image'); ?>"/>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>

    <section class="offerDivider offerDivider--nologos offerDivider--nomargin">
        <div class="offerDivider__wrap container-lg">
            <h3>Sprawdź co Cię czeka</h3>
        </div>
    </section>

    <section class="aboutBlocks">
        <div class="aboutBlocks__wrap container">
            <div class="block">
                <div class="divider">
                    <span>Galeria</span>
                </div>
                <a href="#" class="block__link">
                    <img src="<?php echo get_template_directory_uri() . '/images/about/gallery_image.png'; ?>"/>
                </a>
            </div>
            <div class="block">
                <div class="divider">
                    <span>Video</span>
                </div>
                <a href="#" class="block__link">
                    <img src="<?php echo get_template_directory_uri() . '/images/about/video_image.png'; ?>"/>
                </a>
            </div>
        </div>
    </section>

    <?php include get_template_directory() . '/template-parts/_frontOffer.php'; ?>

    <div class="mb-3"></div>

</main>

<?php get_footer(); ?>