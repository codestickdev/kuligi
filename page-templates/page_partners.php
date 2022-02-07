<?php
    /**
     * Template name: Nasi partnerzy
     */
get_header(); ?>

<main class="kwb kwb--partners">
    <section class="subpageHeader subpageHeader--noshadow" style="background-image: url('<?php echo the_field('partnersHeader_bg'); ?>');">
        <div class="subpageHeader__wrap container">
            <h1>Kuligi w beskidach</h1>
            <h2>Nasi Partnery</h2>
        </div>
    </section>

    <section class="offerDivider offerDivider--nologos offerDivider--nomargin">
        <div class="offerDivider__wrap container-lg">
            <h3>Współpracujemy z najlepszymi, uczymy się od najlepszych!</h3>
        </div>
    </section>

    <section class="partnersList">
        <div class="partnersList__wrap">
            <?php while(have_rows('partnersList')): the_row();
                $logo = get_sub_field('partnersList_logo');
                $name = get_sub_field('partnersList_name');
                $desc = get_sub_field('partnersList_desc');
                $url = get_sub_field('partnersList_url');
            ?>
            <a href="<?php echo $url; ?>" target="_blank" class="partner">
                <img src="<?php echo $logo; ?>"/>
                <div class="partner__cover">
                    <h2><?php echo $name; ?></h2>
                    <p><?php echo $desc; ?></p>
                </div>
            </a>
            <?php endwhile; ?>
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