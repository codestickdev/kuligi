<?php
    /**
     * Template name: Kontakt
     */
get_header(); ?>

<main class="kwb kwb--contact">
    <section class="subpageHeader subpageHeader--noshadow" style="background-image: url('<?php echo the_field('contactHeader_bg'); ?>');">
        <div class="subpageHeader__wrap container">
            <h1>Kuligi w beskidach</h1>
            <h2>Nasz zespół</h2>
        </div>
    </section>

    <section class="frontAbout frontAbout--single frontAbout--gray">
        <?php include get_template_directory() . '/template-parts/_aboutBadges.php'; ?>
    </section>

    <section class="staticInfo staticInfo--contact">
        <div class="staticInfo__wrap container">
            <div class="content">
                <h2>Zapraszamy do kontaktu z naszą firmą.</h2>
                <p>Do Waszej dyspozycji oddajemy infolinię: +48 531 557 086. Z chęcią odpowiemy na każde Wasze pytanie. Można się, z nami skontaktować przez formularz kontaktowy, tradycyjnym mailem pisząc na adres <b>biuro@kuligiwbeskidach.pl</b> bądź też przez media społecznościowe.</p>
                <p>
                    <b>Adres siedziby firmy</b><br/>
                    ul. Bracka 51<br/>
                    34-300 Żywiec
                </p>
                <div class="half">
                    <p>
                        <b>Godziny otwarcia</b><br/>
                        Pon-Pt : 09.00 - 17.00<br/>
                        Sobota : 09.00 - 13.00
                    </p>
                    <p>
                        <b>Infolinia czynna codziennie</b><br/>
                        w godzinach od 09.00 do 20.00
                    </p>
                </div>
            </div>
            <div class="image">
                <img src="<?php echo get_template_directory_uri() . '/images/covid/covid_photo.png'; ?>"/>
            </div>
        </div>
    </section>

    <section class="coopContact coopContact--contact">
        <div class="coopContact__wrap container">
            <form class="coopForm" name="contactForm">
                <div class="coopForm__row coopForm__row--half">
                    <input type="text" placeholder="Imię" name="contactName" required/>
                    <input type="text" placeholder="Nazwisko" name="contactSurname" required/>
                </div>
                <div class="coopForm__row coopForm__row--half">
                    <input type="text" placeholder="Telefon" name="contactPhone" required/>
                    <input type="email" placeholder="Adres e-mail" name="contactMail" required/>
                </div>
                <div class="coopForm__row">
                    <input type="text" placeholder="Temat" name="contactSubject" required/>
                </div>
                <div class="coopForm__row">
                    <textarea placeholder="Treść wiadomości" name="contactSubject" required></textarea>
                </div>
                <div class="coopForm__row">
                    <div class="checkbox">
                        <input type="checkbox" name="contactAcceptance" required/>
                        <label for="contactAcceptance">Zgadzam się na otrzymywanie drogą elektroniczną na wskazany przeze mnie adres e-mail informacji handlowych od kuligiwbeskidach.pl zgodnie z ustawą z dnia 18 lipca 2002 roku o świadczeniu usług drogą elektroniczną oraz z ustawą z dnia 16 lipca 2004 roku prawo telekomunikacyjne.</label>
                    </div>
                </div>
                <div class="coopForm__submit">
                    <button type="submit"><span>Wyślij</span></button>
                </div>
            </form>
        </div>
    </section>

    <section class="teamInfo">
        <div class="teamInfo__wrap container">
            <?php while(have_rows('teamList', 456)): the_row();
                $image = get_sub_field('teamList_image');
                $position = get_sub_field('teamList_position');
                $name = get_sub_field('teamList_name');
                $mail = get_sub_field('teamList_mail');
                $phone = get_sub_field('teamList_phone');
            ?>
            <div class="team">
                <div class="team__image">
                    <img src="<?php echo $image; ?>"/>
                </div>
                <div class="team__content">
                    <p class="position"><?php echo $position; ?></p>
                    <p class="name"><?php echo $name; ?></p>
                    <p class="email">e-mail: <?php echo $mail; ?></p>
                    <p class="tel">Tel. <?php echo $phone; ?></p>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </section>

</main>

<?php get_footer(); ?>