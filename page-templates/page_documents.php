<?php
    /**
     * Template name: Ważne dokumenty
     */
get_header(); ?>

<main class="kwb kwb--documents">
    <section class="subpageHeader subpageHeader--noshadow" style="background-image: url('<?php the_field('docsHeader_bg'); ?>');">
        <div class="subpageHeader__wrap container">
            <h1>Kuligi w beskidach</h1>
            <h2>Ważne dokumenty</h2>
        </div>
    </section>

    <section class="frontAbout frontAbout--single">
        <?php include get_template_directory() . '/template-parts/_aboutBadges.php'; ?>
    </section>

    <section class="staticInfo">
        <div class="staticInfo__wrap container">
            <div class="content">
                <h2>Ważne dokumenty</h2>
                <p>Moi kochani ta część naszej strony jest ogromnie ważna z wielu powodów. Znajduje się tutaj nasz regulamin, z którym obowiazkowo trzeba sie zapoznać a także informacje dotyczące warunków uczestnictwa w naszych imprezach, informacje zwiazane z Covid - 19 jak równiez polityka prywatności naszej Firmy. Byłbym bardzo smutny jakbyście nie zapoznali sie szczegółowo z naszymi zasadami, które stworzyliśmy po to, aby komunikacja pomiedzy nami była wzorowa. Zatem bardzo Was proszę o przeczytanie wszystkich dokumentów. Gdy już to uczynicie to zapraszam do wspólnej zabawy!</p>
                <h3>Bawmy się!</h3>
            </div>
            <div class="image">
                <img src="<?php echo get_template_directory_uri() . '/images/documents/documents_image.png'; ?>"/>
            </div>
        </div>
    </section>

    <section class="docsList">
        <div class="docsList__list container-lg">
            <a href="<?php echo get_field('docs_1'); ?>" target="_blank" class="docsList__doc">
                <div class="thumb">
                    <img src="<?php echo get_template_directory_uri() . '/images/documents/docs_01.png'; ?>"/>
                </div>
                <div class="name">
                    <h3>Nasze dokumenty</h3>
                </div>
            </a>
            <a href="<?php echo get_field('docs_2'); ?>" target="_blank" class="docsList__doc">
                <div class="thumb">
                    <img src="<?php echo get_template_directory_uri() . '/images/documents/docs_02.png'; ?>"/>
                </div>
                <div class="name">
                    <h3>Warunki uczestnictwa</h3>
                </div>
            </a>
            <a href="<?php echo get_field('docs_3'); ?>" target="_blank" class="docsList__doc">
                <div class="thumb">
                    <img src="<?php echo get_template_directory_uri() . '/images/documents/docs_03.png'; ?>"/>
                </div>
                <div class="name">
                    <h3>Oświadczenie COVID-19</h3>
                </div>
            </a>
            <a href="<?php echo get_field('docs_4'); ?>" target="_blank" class="docsList__doc">
                <div class="thumb">
                    <img src="<?php echo get_template_directory_uri() . '/images/documents/docs_04.png'; ?>"/>
                </div>
                <div class="name">
                    <h3>Polityka Prywatności</h3>
                </div>
            </a>
        </div>
    </section>

    <section class="offerDivider offerDivider--nologos offerDivider--nomargin">
        <div class="offerDivider__wrap container-lg">
            <h3>Zapraszamy do skarbca góralskich tradycji z naszą firmą KULIGI W BESKIDACH!</h3>
        </div>
    </section>

    <?php include get_template_directory() . '/template-parts/_frontOffer.php'; ?>

    <div class="mb-3"></div>
    
</main>

<?php get_footer(); ?>