<?php
    /**
     * Template name: Informacje covidowe
     */
get_header(); ?>

<main class="kwb kwb--covid">
    <section class="subpageHeader subpageHeader--noshadow" style="background-image: url('<?php the_field('covidHeader_bg'); ?>');">
        <div class="subpageHeader__wrap container">
            <h1>Kuligi w beskidach</h1>
            <h2>Informacje Covid'owe</h2>
        </div>
    </section>

    <section class="frontAbout frontAbout--single">
        <?php include get_template_directory() . '/template-parts/_aboutBadges.php'; ?>
    </section>

    <section class="staticInfo">
        <div class="staticInfo__wrap container">
            <div class="content">
                <h2>Informacje o bezpieczeństwie (Covid-19)</h2>
                <p>W związku z licznymi pytaniami mamy dla Was garść informacji związanych z organizacją kuligów w czasie zwiększonego reżimu sanitarnego. Gwarantujemy,  że w czasie trwania pandemii nasza firma spełnia najwyższe kryteria sanitarne. Większość obowiązków związanych z bezpieczeństwem leży w rękach naszych Pracowników, którzy na bieżąco dbają o dezynfekcję. Organizacja kuligu to idealny sposób, by całą rodziną odpocząć i zapomnieć na chwilę o pandemii!</p>
            </div>
            <div class="image">
                <img src="<?php echo get_template_directory_uri() . '/images/covid/covid_photo.png'; ?>"/>
            </div>
        </div>
    </section>

    <section class="covidList">
        <div class="covidList__list container-lg">
            <?php while(have_rows('covidInfo')): the_row();
                $title = get_sub_field('covidInfo_title');
                $content = get_sub_field('covidInfo_content');
            ?>
            <div class="covidList__pos">
                <h3><?php echo $title; ?></h3>
                <p><?php echo $content; ?></p>
            </div>
            <?php endwhile; ?>
        </div>
    </section>

    <section class="offerDivider offerDivider--nologos offerDivider--nomargin">
        <div class="offerDivider__wrap container-lg">
            <h3>Bawmy się! Ale z głową!</h3>
        </div>
    </section>

    <?php include get_template_directory() . '/template-parts/_frontOffer.php'; ?>

    <div class="mb-3"></div>
    
</main>

<?php get_footer(); ?>