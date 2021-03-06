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
            <?php if(get_field('singleHeader_date')): ?>
                <h2><?php the_field('singleHeader_date'); ?></h2>
            <?php endif; ?>
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
                    <a href="https://www.youtube.com/c/LeszekM%C5%82odzianowski" target="_blank" class="btn"><span>Sprawd??</span></a>
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
                    <p class="info">UWAGA!<br/>Prosimy by?? 15 minut wcze??niej na miejscu.<br/>W razie braku ??niegu zorganizujemy kulig na wozach na ko??ach.</p>
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
                <p>Nasza firma pracuje na swoj?? reputacj?? blisko 15 lat.<br/>Nie sk??adamy obietnic bez pokrycia.</p>
                <div class="usp">
                    <div class="usp__icon">
                        <img src="<?php echo get_template_directory_uri() . '/images/frontpage/reassurance_01.svg'; ?>"/>
                        <p>Super<br/>opinie</p>
                    </div>
                    <div class="usp__icon">
                        <img src="<?php echo get_template_directory_uri() . '/images/frontpage/reassurance_02.svg'; ?>"/>
                        <p>Gwarancja jako??ci<br/>obs??ugi</p>
                    </div>
                    <div class="usp__icon">
                        <img src="<?php echo get_template_directory_uri() . '/images/frontpage/reassurance_03.svg'; ?>"/>
                        <p>Lata<br/>do??wiadczenia</p>
                    </div>
                </div>
            </div>
            <div class="frontReassurance__right">
                <p>Bilety na nasz kulig szybko si?? wyprzedaj??. 
                Rezerwuj??c ONLINE masz gwarancj?? dost??pno??ci i najni??szej ceny. Wybierz miejscowo????, ilo???? os??b, termin, ewentualne ??wiadczenia dodatkowe, uzupe??nij swoje dane i dokonaj p??atno??ci.</p>
                <p>Proste, szybie i bezpiecznie!</p>
                <p>Jeste??my niezale??ni od warunk??w pogodowych. Kuligi zielone i bia??e odbywaj?? si?? przez ca??y rok od wiosny do zimy. W razie braku ??niegu organizujemy kuligi na bryczkach lub wozach drabiniastych z ko??ami. Ka??dy z naszych zaprz??g??w jest zadaszony i chroni kuligowicz??w przed ??niegiem, wiatrem lub deszczem. Na ka??dym znajduj?? si?? ciep??e koce do okrycia.</p>
            </div>
        </div>
    </section>
    <section class="frontAbout frontAbout--single">
        <?php include get_template_directory() . '/template-parts/_aboutBadges.php'; ?>
    </section>
    <section class="singleInfo">
        <div class="singleInfo__heading">
            <h2>Jak zarezerwowa?? imprez?? w naszym systemie rezerwacji imprez? Nic prostszego! </h2>
        </div>
        <div class="singleInfo__content">
            <div class="content container">
                <p>Klikasz w odpowiedni banerek, wybierasz odpowiedni?? ilo???? bilet??w normalnych (ewentualnie ulgowych w niekt??rych opcjach), przechodzisz do koszyka zakup??w klikaj??c w zielony koszyk, wybierasz dat?? i godzin?? imprezy, klikasz DALEJ, je??li s?? to wybierasz opcje dodatkowe do kuligu (np. napad zb??jnicki, kapela g??ralska, gaw??dziarz, DJ Janosik itp.), klikasz DALEJ podajesz swoje dane takie jak imi?? i nazwisko, numer telefonu oraz mail (TELEFON, DANE I MAIL MUSZ?? BY?? POPRAWNE ABY SYSTEM PRZYJ???? REZERWACJ?? - JAK PODASZ Z??EGO MAILA, POTWIERDZENIE REZERWACJI NIE SP??YNIE CI NA WSKAZANEGO MAILA - DLATEGO PROSIMY O DOK??ADNE SPRAWDZENIE DANYCH), mo??esz ponadto poprosi?? nas o wystawienie faktury wpisuj??c w rubryk?? wszystkie dane Twojej firmy z NIPem a my wy??lemy faktur?? na Twojego maila. Dalej trzeba KLIKN????: Zapozna??em si?? i akceptuj?? Regulamin sprzeda??y, Polityk?? prywatno??ci oraz Regulamin Kuligi w Beskidach a system przekieruje Ci?? automatycznie do p??atno??ci BlueCash. Mo??na za kulig zap??aci?? BLIKIEM lub z dowolnego banku a tak??e kart?? kredytow??. Po zap??aceniu od razu na wskazany przez Ciebie adres mailowy przychodzi potwierdzenie rezerwacji z ca??ym programem imprezy i informacjami technicznymi. Rezerwacji nie trzeba drukowa?? na imprez??, gdy?? nasi pracownicy maj?? listy uczestnik??w imprezy. ??yczymy udanych rezerwacji i wspania??ej zabawy! TO TAKIE PROSTE :)))</p>
            </div>
        </div>
    </section>
    <section class="singleBuy">
        <div class="singleBuy__wrap container">
            <div class="divider divider--long">
                <span>ZAPOZNAJ SI?? ZE SZCZEG????AMI OFERTY, CENNIKIEM, TERMINAMI I REGULAMINEM IMPREZY</span>
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
                    <span>ZOBACZ TAK??E INNE NASZE OFERTY</span>
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
