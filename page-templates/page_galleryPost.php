<?php
    /**
     * Template name: Galeria - post
     */
get_header(); ?>

<main class="kwb kwb--galleryPost">
    <section class="subpageHeader subpageHeader--noshadow" style="background-image: url('<?php echo the_field('gallerySingleHeader_bg'); ?>');">
        <div class="subpageHeader__wrap container">
            <h1>Kuligi w beskidach</h1>
            <h2><?php the_title(); ?></h2>
        </div>
    </section>

    <section class="frontAbout frontAbout--single frontAbout--gray">
        <?php include get_template_directory() . '/template-parts/_aboutBadges.php'; ?>
    </section>

    <section class="galleryInfo">
        <div class="galleryInfo__wrap container">
            <p>Zapraszamy gorąco do zapoznania się z galerią zdjęć oraz filmów, abyście przed zakupem naszej imprezy zobaczyli jak fantastycznie ludzie bawią się z naszą Firmą! Podzielcie się swoimi zdjęciami i filmami z naszych kuligów i innych imprez na naszych mediach społecznościowych.<br/>
            <b>Bawmy się razem!<b></p>
        </div>
    </section>

    <section class="galleryList">
        <div class="galleryList__wrap container-lg">
            <?php $images = get_field('gallery'); ?>
            <?php foreach($images as $image): ?>
                <a href="<?php echo $image; ?>" class="galleryList__image" data-lightbox="<?php the_title(); ?>">
                    <img src="<?php echo $image; ?>"/>
                </a>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="offerDivider offerDivider--nologos offerDivider--nomargin">
        <div class="offerDivider__wrap container-lg">
            <h3>Warto zaufać naszej Firmie!</h3>
        </div>
    </section>

    <?php include get_template_directory() . '/template-parts/_frontOffer.php'; ?>

    <div class="mb-3"></div>

</main>

<?php get_footer(); ?>