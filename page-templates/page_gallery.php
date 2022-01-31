<?php
    /**
     * Template name: Galeria
     */
get_header(); ?>

<main class="kwb kwb--gallery">
    <section class="subpageHeader subpageHeader--noshadow" style="background-image: url('<?php echo the_field('galleryHeader_bg'); ?>');">
        <div class="subpageHeader__wrap container">
            <h1>Kuligi w beskidach</h1>
            <h2>Galeria</h2>
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
    <section class="galleries">
        <div class="galleries__wrap container-lg">
            <div class="galleries__list">
            <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="galleries__page">
                    <div class="thumb">
                        <img src="<?php echo get_field('galleryMain'); ?>"/>
                    </div>
                    <div class="name">
                        <h3><?php the_title(); ?></h3>
                    </div>
                </a>
            <?php endwhile; ?>
            </div>
        </div>
    </section>
    <?php endif; wp_reset_postdata(); ?>

    
            
        
    <section class="offerDivider offerDivider--nologos offerDivider--nomargin">
        <div class="offerDivider__wrap container-lg">
            <h3>Warto zaufać naszej Firmie!</h3>
        </div>
    </section>

    <?php include get_template_directory() . '/template-parts/_frontOffer.php'; ?>

    <div class="mb-3"></div>

</main>

<?php get_footer(); ?>