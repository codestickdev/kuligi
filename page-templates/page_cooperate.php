<?php
    /**
     * Template name: Współpraca
     */
get_header(); ?>

<main class="kwb kwb--coop">
    <section class="subpageHeader subpageHeader--noshadow" style="background-image: url('<?php echo the_field('coopHeader_bg'); ?>');">
        <div class="subpageHeader__wrap container">
            <h1>Kuligi w beskidach</h1>
            <h2>Współpraca</h2>
        </div>
    </section>

    <section class="frontAbout">
        <?php include get_template_directory() . '/template-parts/_aboutBadges.php'; ?>

        <div class="frontAbout__wrap container">
            <div class="aboutContent">
                <?php while(have_rows('coopSlider')): the_row();?>
                    <div class="aboutContent__slide">
                        <?php echo get_sub_field('coopSlider_content'); ?>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="aboutImages">
                <?php while(have_rows('coopSlider')): the_row();?>
                    <div class="aboutImages__slide">
                        <img src="<?php echo get_sub_field('coopSlider_image'); ?>"/>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>

    <section class="offerDivider offerDivider--nologos offerDivider--nomargin">
        <div class="offerDivider__wrap container-lg">
            <h3>W celu nawiązania współpracy prosimy o kontakt:</h3>
        </div>
    </section>

    <section class="coopContact">
        <div class="coopContact__wrap container">
            <div class="coopContact__info">
                <a href="tel:+48531557086">
                    <img src="<?php echo get_template_directory_uri() . '/images/icons/phone_ico.svg'; ?>"/>
                    <span>+48 531 557 086</span>
                </a>
                <a href="mailto:biuro@kuligiwbeskidach.pl">
                    <img src="<?php echo get_template_directory_uri() . '/images/icons/mail_ico.svg'; ?>"/>
                    <span>biuro@kuligiwbeskidach.pl</span>
                </a>
            </div>
            <form class="coopForm" name="coopForm">
                <div class="coopForm__row">
                    <input type="text" placeholder="Pełna  nazwa firmy zgodna z KRS lub CEIDG" name="companyNumber" />
                </div>
                <div class="coopForm__row coopForm__row--half">
                    <input type="text" maxlength="10" placeholder="NIP firmy" name="companyNIP" />
                    <input type="tel" placeholder="Telefon" name="companyNumber" />
                </div>
                <div class="coopForm__row">
                    <input type="text" placeholder="Ulica, numer domu i lokalu" name="companyAddress" />
                </div>
                <div class="coopForm__row coopForm__row--half">
                    <input type="text" placeholder="Kod pocztowy" name="companyPostal" />
                    <input type="text" placeholder="Miasto" name="companyCity" />
                </div>
                <div class="coopForm__row">
                    <textarea placeholder="Treść wiadomości" name="companyMessage"></textarea>
                </div>
                <div class="coopForm__submit">
                    <button type="submit"><span>Wyślij</span></button>
                </div>
            </form>
            <h3>Możesz także skorzystać z <a href="#">formularza DROPLABS</a></h3>
        </div>
    </section>
</main>

<?php get_footer(); ?>