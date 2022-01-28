<?php
    /**
     * Template name: Recenzje
     */
get_header(); ?>

<main class="kwb kwb--reviews">
    <section class="subpageHeader subpageHeader--noshadow" style="background-image: url('<?php the_field('reviewsHeader_bg'); ?>');">
        <div class="subpageHeader__wrap container">
            <h1>Kuligi w beskidach</h1>
            <h2>Poznaj opinie naszych klientów</h2>
        </div>
    </section>

    <section class="frontAbout frontAbout--single">
        <?php include get_template_directory() . '/template-parts/_aboutBadges.php'; ?>
    </section>

    <section class="reviewsList">
        <div class="reviewsList__list container">
            <?php while(have_rows('reviewList')): the_row();
                $title = get_sub_field('reviewList_title');
                $content = get_sub_field('reviewList_content');
                $author = get_sub_field('reviewList_author');
                $stars = get_sub_field('reviewList_stars');
                $source = get_sub_field('reviewList_source');
            ?>
            <div class="reviewsList__review">
                <div class="content">
                    <h3><?php echo $title; ?></h3>
                    <p><?php echo $content; ?></p>
                </div>
                <div class="info">
                    <p class="author"><?php echo $author; ?></p>
                    <div class="stars">
                        <?php for($i = 0; $i < $stars; $i++): ?>
                        <div class="stars__star">
                            <img src="<?php echo get_template_directory_uri() . '/images/review_star.svg'; ?>"/>
                        </div>
                        <?php endfor; ?>
                    </div>
                    <p class="source">Źródło: <?php echo $source; ?></p>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </section>

    <section class="offerDivider offerDivider--nologos offerDivider--nomargin">
        <div class="offerDivider__wrap container-lg">
            <h3>Warto zaufać naszej firmie</h3>
        </div>
    </section>

    <?php include get_template_directory() . '/template-parts/_frontOffer.php'; ?>

    <div class="mb-3"></div>
    
</main>

<?php get_footer(); ?>