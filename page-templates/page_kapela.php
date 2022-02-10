<?php
    /**
     * Template name: Kapela góralska
     */
get_header(); ?>

<main class="kwb kwb--kapela">
    <section class="subpageHeader subpageHeader--noshadow" style="background-image: url('<?php echo the_field('kapelaHeader_bg'); ?>');">
        <div class="subpageHeader__wrap container">
            <h1>Kuligi w beskidach</h1>
            <h2>Kapela Góralska</h2>
        </div>
    </section>

    <section class="frontAbout">
        <?php include get_template_directory() . '/template-parts/_aboutBadges.php'; ?>

        <div class="frontAbout__wrap container">
            <div class="aboutContent">
                <?php while(have_rows('kapelaSlider')): the_row();?>
                    <div class="aboutContent__slide">
                        <?php echo get_sub_field('kapelaSlider_content'); ?>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="aboutImages">
                <?php while(have_rows('kapelaSlider')): the_row();?>
                    <div class="aboutImages__slide">
                        <img src="<?php echo get_sub_field('kapelaSlider_image'); ?>"/>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>

    <section class="offerDivider offerDivider--nologos offerDivider--nomargin offerDivider--uppercase">
        <div class="offerDivider__wrap container-lg">
            <h3>Bawmy się!</h3>
        </div>
    </section>

    <?php
    $args = array(
        'post_type'      => 'page',
        'posts_per_page' => -1,
        'post_parent'    => $post->ID,
        'order'          => 'ASC',
        'orderby'        => 'menu_order'
    );
    $parent = new WP_Query( $args );
    if ( $parent->have_posts() ) : ?>
    <section class="partnersList partnersList--kapela">
        <div class="partnersList__wrap">
            <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="partner">
                <h2><?php the_title(); ?></h2>
            </a>
            <?php endwhile; ?>
        </div>
    </section>
    <?php endif; wp_reset_postdata(); ?>    

    <section class="offerDivider offerDivider--nologos offerDivider--nomargin offerDivider--uppercase">
        <div class="offerDivider__wrap container-lg">
            <h3>Dołącz do nas i baw się razem z nami! Hej!</h3>
        </div>
    </section>

    <section class="galleryList galleryList--kapela">
        <div class="galleryList__wrap container-lg">
            <?php $images = get_field('kapelaGallery');?>
            <?php foreach($images as $image): ?>
                <a href="<?php echo $image; ?>" class="galleryList__image" data-lightbox="<?php the_title(); ?>">
                    <img src="<?php echo $image; ?>"/>
                </a>
            <?php endforeach; ?>
        </div>
    </section>

</main>

<?php get_footer(); ?>