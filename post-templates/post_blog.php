<?php
/**
 *
 * Template Name: Blog
 * Template Post Type: post
 * 
 * @package kuligi
 */

get_header(); ?>

<main class="kwb kwb--post">
    <section class="subpageHeader subpageHeader--noshadow" style="background-image: url('<?php echo the_field('postHeader_bg'); ?>');">
        <div class="subpageHeader__wrap container">
            <h1>Kuligi w beskidach</h1>
            <h2>Nasz zespół</h2>
        </div>
    </section>

    <section class="frontAbout">
        <?php include get_template_directory() . '/template-parts/_aboutBadges.php'; ?>
        <div class="frontAbout__wrap container">
            <div class="aboutContent">
                <?php while(have_rows('postSlider')): the_row();?>
                    <div class="aboutContent__slide">
                        <?php echo get_sub_field('postSlider_content'); ?>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="aboutImages">
                <?php while(have_rows('postSlider')): the_row();?>
                    <div class="aboutImages__slide">
                        <img src="<?php echo get_sub_field('postSlider_image'); ?>"/>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>

    <section class="offerDivider offerDivider--nologos offerDivider--nomargin">
        <div class="offerDivider__wrap container-lg">
            <h3>Po góralsku – prosto i ze smakiem!</h3>
        </div>
    </section>

    <section class="postInfo">
        <div class="postInfo__wrap container">
            <p>Życie w górach nie należy do najłatwiejszych, a i z dostępnością wyszukanych składników czy przypraw lekko dawniej nie było. Stąd też kuchnia góralska oparta jest na produktach łatwych w pozyskaniu, dostępnych na miejscu. Mimo wszystko jednak sycących i smacznych. Stąd w góralskich recepturach znajdziemy proste dania z kapusty, ziemniaków, mąki, a także pozostałości z produkcji serów – jak żętyca czy serwatka. No i oczywiście tradycyjne placki z blachy że szpyrkami lub z wyrzoskami.</p>
        </div>
    </section>

    <section class="frontBlog">
        <div class="frontBlog__heading" style="background-image: url('<?php echo get_template_directory_uri() . '/images/frontpage/blog_bg.png'; ?>');">
            <div class="wrap">
                <h2>To wszystko możesz zamówić na naszej stronie</h2>
                <h3>www.goralskicatering.pl</h3>
                <a href="http://goralskicatering.pl/" target="_blank" class="btn btn--center"><span>Sprawdź</span></a>
            </div>
        </div>
    </section>

    <div class="mb-3"></div>

</main><!-- #main -->

<?php get_footer(); ?>
