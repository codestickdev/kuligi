<?php
    /**
     * Template name: Regulamin
     */
get_header(); ?>

<main class="kwb kwb--regulamin">
    <section class="subpageHeader subpageHeader--noshadow" style="background-image: url('<?php the_field('regHeader_bg'); ?>');">
        <div class="subpageHeader__wrap container">
            <h1>Kuligi w beskidach</h1>
            <h2>Regulamin</h2>
        </div>
    </section>

    <section class="frontAbout frontAbout--single">
        <?php include get_template_directory() . '/template-parts/_aboutBadges.php'; ?>
    </section>

    <section class="regList">
        <div class="regList__list container-lg">
            <?php while(have_rows('regList')): the_row();
                $content = get_sub_field('regList_content');
            ?>
            <div class="regList__pos">
                <?php 
                    $row = get_row_index();
                    $index = 0;
                    if($row < 10){
                        $index = '0' . $row;
                    }else{
                        $index = $row;
                    }
                ?>
                <h3><?php echo $index; ?></h3>
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