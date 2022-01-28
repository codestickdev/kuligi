<?php
    /**
     * Template name: FAQ
     */
get_header(); ?>

<main class="kwb kwb--faq">
    <section class="subpageHeader subpageHeader--noshadow" style="background-image: url('<?php echo the_field('faqHeader_bg'); ?>');">
        <div class="subpageHeader__wrap container">
            <h1>Kuligi w beskidach</h1>
            <h2>Najczęściej zadawane pytania</h2>
        </div>
    </section>

    <section class="frontAbout">
        <?php include get_template_directory() . '/template-parts/_aboutBadges.php'; ?>
    </section>

    <section class="faqList">
        <div class="faqList__wrap">
            <p>Zachęcamy Państwa do zapoznania się z najczęściej zadawanymi przez naszych Gości pytaniami. Wystarczy poświęcić nieco czasu na zapoznanie się z tymi cennymi informacjami, a Wasz kulig odbędzie się bezstresowo.</p>
            <div class="faqList__list">
                <?php while(have_rows('faqList')): the_row();
                    $question = get_sub_field('faqList_question');
                    $answer = get_sub_field('faqList_answer');
                ?>
                <div class="question">
                    <div class="question__heading">
                        <h2><?php echo $question; ?></h2>
                    </div>
                    <div class="question__content">
                        <?php echo $answer; ?>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>

    <section class="offerDivider offerDivider--nologos offerDivider--nomargin">
        <div class="offerDivider__wrap container-lg">
            <h3>Zapraszamy do rezerwacji kuligów!</h3>
        </div>
    </section>

    <?php include get_template_directory() . '/template-parts/_frontOffer.php'; ?>

    <div class="mb-3"></div>
</main>

<?php get_footer(); ?>