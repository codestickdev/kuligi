<?php
/**
 * The template for displaying all kuligi posts
 *
 * @package kuligi
 */

get_header();
?>

<main class="kwb kwb--single">
    <header class="singleHeader" style="background-image: url('<?php the_field('singleHeader'); ?>');">
        <div class="singleHeader__wrap container">
            <h1><?php the_field('singleHeader_title'); ?></h1>
            <h2><?php the_field('singleHeader_date'); ?></h2>
            <h3><?php the_field('singleHeader_lead'); ?></h3>
        </div>
    </header>
    <section class="singleUsp">
        <div class="singleUsp__wrap">
            <?php while(have_rows('singleHeader_icons')): the_row();
                $icon = get_sub_field('singleHeader_icons_icon');
                $text = get_sub_field('singleHeader_icons_text');
            ?>
            <div class="singleUsp__pos">
                <div class="icon">
                    <img src="<?php echo $icon; ?>"/>
                </div>
                <p><?php echo $text; ?></p>
            </div>
            <?php endwhile; ?>
        </div>
    </section>
    <section class="singleContent singleContent--top">
        <div class="singleContent__wrap container">
            <div class="singleContent__left">
                <div class="divider divider--left">
                    <span>O kuligu</span>
                </div>
                <div class="singleContent__desc">
                    <?php the_field('singleDesc'); ?>
                </div>
            </div>
            <div class="singleContent__right">
                <?php $images = get_field('singleGallery');
                if($images): ?>
                    <div class="divider divider--left">
                        <span>Galeria</span>
                    </div>
                    <div class="singleContent__gallery">
                        <?php foreach($images as $image): ?>
                            <img src="<?php echo $image; ?>"/>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <?php if(get_field('singleVideo')): ?>
                <div class="divider divider--left">
                    <span>Video</span>
                </div>
                <div class="singleContent__video">
                    <?php echo get_field('singleVideo'); ?>
                    <p>Zobacz inne nasze filmy na YouTube</p>
                    <a href="https://www.youtube.com/c/LeszekM%C5%82odzianowski" target="_blank" class="btn"><span>Sprawdź</span></a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="singleLocation">
        <div class="singleLocation__wrap container">
            <div class="singleLocation__content">
                <?php if(get_field('singleLocation_place')): ?>
                <div class="singleLocation__place">
                    <div class="divider divider--left">
                        <span>Miejsce</span>
                    </div>
                    <?php the_field('singleLocation_place'); ?>
                </div>
                <?php endif; ?>

                <?php if(get_field('singleLocation_program')): ?>
                <div class="singleLocation__program">
                    <div class="divider divider--left">
                        <span>Program kuligu</span>
                    </div>
                    <ul>
                        <?php while(have_rows('singleLocation_program')): the_row(); ?>
                        <li><?php echo get_sub_field('singleLocation_program_pos'); ?></li>
                        <?php endwhile; ?>
                    </ul>
                    <p class="info">UWAGA!<br/>Prosimy być 15 minut wcześniej na miejscu.<br/>W razie braku śniegu zorganizujemy kulig na wozach na kołach.</p>
                </div>
                <?php endif; ?>
            </div>
            <div class="singleLocation__map">
                <div id="kuligMap" data-zoom="14">
                    <?php $lat = get_field('singleMap_lat'); ?>
                    <?php $lng = get_field('singleMap_lng'); ?>
                    <div class="marker" data-lat="<?php echo $lat; ?>" data-lng="<?php echo $lng; ?>"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="singleContent">
        <div class="singleContent__wrap container">
            <div class="singleContent__left">
                <div class="divider divider--left">
                    <span>Cena obejmuje</span>
                </div>
                <div class="singleContent__text">
                    <?php the_field('singlePrice'); ?>
                </div>
            </div>
            <div class="singleContent__right">
                <div class="divider divider--left">
                    <span>Wozy / sanie</span>
                </div>
                <div class="singleContent__text">
                    <?php the_field('singleWozy'); ?>
                </div>

                <div class="divider divider--left">
                    <span>Transport</span>
                </div>
                <div class="singleContent__text">
                    <?php the_field('singleTransport'); ?>
                </div>

                <div class="divider divider--left">
                    <span>Noclegi</span>
                </div>
                <div class="singleContent__text">
                    <?php the_field('singleNocleg'); ?>
                </div>
            </div>
        </div>
    </section>
    <section class="frontReassurance frontReassurance--single">
        <div class="frontReassurance__wrap container">
            <div class="frontReassurance__left">
                <h2>Zaufaj profesjonalistom!</h2>
                <p>Nasza firma pracuje na swoją reputację blisko 15 lat.<br/>Nie składamy obietnic bez pokrycia.</p>
                <div class="usp">
                    <div class="usp__icon">
                        <img src="<?php echo get_template_directory_uri() . '/images/frontpage/reassurance_01.svg'; ?>"/>
                        <p>Super<br/>opinie</p>
                    </div>
                    <div class="usp__icon">
                        <img src="<?php echo get_template_directory_uri() . '/images/frontpage/reassurance_02.svg'; ?>"/>
                        <p>Gwarancja jakości<br/>obsługi</p>
                    </div>
                    <div class="usp__icon">
                        <img src="<?php echo get_template_directory_uri() . '/images/frontpage/reassurance_03.svg'; ?>"/>
                        <p>Lata<br/>doświadczenia</p>
                    </div>
                </div>
            </div>
            <div class="frontReassurance__right">
                <p>Bilety na nasz kulig szybko się wyprzedają. 
                Rezerwując ONLINE masz gwarancję dostępności i najniższej ceny. Wybierz miejscowość, ilość osób, termin, ewentualne świadczenia dodatkowe, uzupełnij swoje dane i dokonaj płatności.</p>
                <p>Proste, szybie i bezpiecznie!</p>
                <p>Jesteśmy niezależni od warunków pogodowych. Kuligi zielone i białe odbywają się przez cały rok od wiosny do zimy. W razie braku śniegu organizujemy kuligi na bryczkach lub wozach drabiniastych z kołami. Każdy z naszych zaprzęgów jest zadaszony i chroni kuligowiczów przed śniegiem, wiatrem lub deszczem. Na każdym znajdują się ciepłe koce do okrycia.</p>
            </div>
        </div>
    </section>
    <section class="frontAbout frontAbout--single">
        <?php include get_template_directory() . '/template-parts/_aboutBadges.php'; ?>
    </section>
    <section class="singleInfo">
        <div class="singleInfo__heading">
            <h2>Jak zarezerwować imprezę w naszym systemie rezerwacji imprez? Nic prostszego! </h2>
        </div>
        <div class="singleInfo__content">
            <div class="content container">
                <p>Klikasz w odpowiedni banerek, wybierasz odpowiednią ilość biletów normalnych (ewentualnie ulgowych w niektórych opcjach), przechodzisz do koszyka zakupów klikając w zielony koszyk, wybierasz datę i godzinę imprezy, klikasz DALEJ, jeśli są to wybierasz opcje dodatkowe do kuligu (np. napad zbójnicki, kapela góralska, gawędziarz, DJ Janosik itp.), klikasz DALEJ podajesz swoje dane takie jak imię i nazwisko, numer telefonu oraz mail (TELEFON, DANE I MAIL MUSZĄ BYĆ POPRAWNE ABY SYSTEM PRZYJĄŁ REZERWACJĘ - JAK PODASZ ZŁEGO MAILA, POTWIERDZENIE REZERWACJI NIE SPŁYNIE CI NA WSKAZANEGO MAILA - DLATEGO PROSIMY O DOKŁADNE SPRAWDZENIE DANYCH), możesz ponadto poprosić nas o wystawienie faktury wpisując w rubrykę wszystkie dane Twojej firmy z NIPem a my wyślemy fakturę na Twojego maila. Dalej trzeba KLIKNĄĆ: Zapoznałem się i akceptuję Regulamin sprzedaży, Politykę prywatności oraz Regulamin Kuligi w Beskidach a system przekieruje Cię automatycznie do płatności BlueCash. Można za kulig zapłacić BLIKIEM lub z dowolnego banku a także kartą kredytową. Po zapłaceniu od razu na wskazany przez Ciebie adres mailowy przychodzi potwierdzenie rezerwacji z całym programem imprezy i informacjami technicznymi. Rezerwacji nie trzeba drukować na imprezę, gdyż nasi pracownicy mają listy uczestników imprezy. Życzymy udanych rezerwacji i wspaniałej zabawy! TO TAKIE PROSTE :)))</p>
            </div>
        </div>
    </section>
    <section class="singleBuy">
        <div class="singleBuy__wrap container">
            <div class="divider divider--long">
                <span>ZAPOZNAJ SIĘ ZE SZCZEGÓŁAMI OFERTY, CENNIKIEM, TERMINAMI I REGULAMINEM IMPREZY</span>
            </div>
            <div class="droplabs">
                <?php the_field('single_droplabs'); ?>
            </div>
            <?php if(get_field('single_droplabs_extra')): ?>
                <div class="divider divider--long">
                    <span>REZERWUJ DODATKOWE ATRAKCJE PODCZAS TWOJEGO KULIGU</span>
                </div>
                <div class="droplabs">
                    <?php the_field('single_droplabs_extra'); ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <section class="singleOther">
        <div class="singleOther__wrap">
            <div class="singleOther__heading container">
                <div class="divider divider--long">
                    <span>ZOBACZ TAKŻE INNE NASZE OFERTY</span>
                </div>
            </div>
            <?php
            $args_one = array('hide_empty' => 0, 'number' => 6, 'orderby' => 'rand', 'order' => 'ASC');
            $terms_one = get_terms( 'kategorie_kuligi', $args_one );
            if ( !empty( $terms_one ) && !is_wp_error( $terms_one ) ): ?>
                <div class="singleOther__list">
                <?php
                    foreach ( $terms_one as $term ){
                        $catID = $term->term_id;
                        include get_template_directory() . '/template-parts/_catTile.php';
                    }
                ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php
get_footer();
