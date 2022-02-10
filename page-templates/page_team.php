<?php
    /**
     * Template name: Nasz zespół
     */
get_header(); ?>

<main class="kwb kwb--team">
    <section class="subpageHeader subpageHeader--noshadow" style="background-image: url('<?php echo the_field('teamHeader_bg'); ?>');">
        <div class="subpageHeader__wrap container">
            <h1>Kuligi w beskidach</h1>
            <h2>Nasz zespół</h2>
        </div>
    </section>

    <section class="frontAbout">
        <?php include get_template_directory() . '/template-parts/_aboutBadges.php'; ?>
    </section>

    <section class="staticInfo">
        <div class="staticInfo__wrap container">
            <div class="content">
                <h2>Nasz zespół</h2>
                <p>Zespół firmy KULIGI W BESKIDACH to zespół profesjonalistów w dziedzinie turystyki lokalnej oraz turystyki przyjazdowej w Beskidy. Wyjątkowe doznania i piękne wspomnienia dla Turystów i Mieszkańców Beskidów - to nasza misja już od 15 lat. Współpracujemy jedynie z rzetelnymi przedsiębiorcami, których wyróżnia najwyższa jakość na każdym etapie świadczenia usług.</p>
                <p>Firma KULIGI W BESKIDACH to firma, której zakres działalności obejmuje całe Beskidy. Kilkunastoletnie doświadczenie w branży turystycznej to gwarancja najwyższej jakości dla naszych Klientów. Kompleksowo organizujemy kuligi białe i zielone w kilkudziesięciu miejscowościach w Beskidach.</p>
                <p>Na naszych kuligach zatrudniamy naszych serdecznych przyjaciół, którzy są licencjonowanymi przewodnikami beskidzkimi, instruktorami narciarskimi, pracownikami GOPR, góralami z dziada pradziada. Z kolei podczas naszych imprez gra najlepsza kapela góralska w Beskidach - kapela Karpackie Zbóje.</p>
            </div>
            <div class="image">
                <img src="<?php echo get_template_directory_uri() . '/images/team/team_image.png'; ?>"/>
            </div>
        </div>
    </section>

    <section class="teamInfo">
        <div class="teamInfo__wrap container">
            <?php while(have_rows('teamList')): the_row();
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