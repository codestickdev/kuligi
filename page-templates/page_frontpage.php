<?php
    /**
     * Template name: Strona główna
     */
get_header(); ?>

<main class="kwb kwb--main">
    <section class="frontSlider">
        <div class="frontSlider__wrap">
            <?php while(have_rows('frontSlider')): the_row();
                $image = get_sub_field('frontSlider_image');
                $title = get_sub_field('frontSlider_title');
                $desc = get_sub_field('frontSlider_desc');
                $btn = get_sub_field('frontSlider_btn');
            ?>
                <div class="frontSlider__slide" style="background-image: url('<?php echo $image; ?>');">
                    <div class="wrap">
                        <div class="content">
                            <h2><?php echo $title; ?></h2>
                            <p><?php echo $desc; ?></p>
                            <a href="<?php echo $btn['url']; ?>" class="btn btn--center"><span><?php echo $btn['title']; ?></span></a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </section>

    <section class="frontDivider frontDivider--rozeta">
        <div class="frontDivider__wrap container-lg">
            <h2>Oficjalny organizator kuligów w Beskidach</h2>
        </div>
    </section>

    <?php if(get_field('aboutSlider')): ?>
    <section class="frontAbout">
        <div class="frontAbout__badges">
            <div class="badge">
                <img src="<?php echo get_template_directory_uri() . '/images/logos/top_marka.png' ?>"/>
            </div>
            <div class="badge">
                <img src="<?php echo get_template_directory_uri() . '/images/logos/certyfikowany_produkt.svg' ?>"/>
            </div>
            <div class="badge">
                <img src="<?php echo get_template_directory_uri() . '/images/logos/odkrycie_turystyczne.png' ?>"/>
            </div>
            <div class="badge">
                <img src="<?php echo get_template_directory_uri() . '/images/logos/laur_jakosci.png' ?>"/>
            </div>
        </div>
        <div class="frontAbout__wrap container">
            <div class="aboutContent">
                <?php while(have_rows('aboutSlider')): the_row();?>
                    <div class="aboutContent__slide">
                        <?php echo get_sub_field('aboutSlider_content'); ?>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="aboutImages">
                <?php while(have_rows('aboutSlider')): the_row();?>
                    <div class="aboutImages__slide">
                        <img src="<?php echo get_sub_field('aboutSlider_image'); ?>"/>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- <section class="frontAbout">
        <div class="frontAbout__wrap container">
            <div class="frontAbout__badges">
                <div class="badge">
                    <img src="<?php echo get_template_directory_uri() . '/images/logos/top_marka.png' ?>"/>
                </div>
                <div class="badge">
                    <img src="<?php echo get_template_directory_uri() . '/images/logos/certyfikowany_produkt.svg' ?>"/>
                </div>
                <div class="badge">
                    <img src="<?php echo get_template_directory_uri() . '/images/logos/odkrycie_turystyczne.png' ?>"/>
                </div>
                <div class="badge">
                    <img src="<?php echo get_template_directory_uri() . '/images/logos/laur_jakosci.png' ?>"/>
                </div>
            </div>
            <div class="frontAbout__one">
                <img src="<?php echo get_template_directory_uri() . '/images/frontpage/frontAbout_01.png' ?>"/>
                <div class="content">
                    <p><b>Drodzy KULIGOWICZE!</b><br/>Witamy Was serdecznie na naszej stronie <b>KULIGI W BESKIDACH</b>. Na naszej stronie zarezerwujecie kuligi aż w <b>pięćdziesięciu</b> lokalizacjach w Beskidzie Żywieckim (Zawoja, Koszarawa, Korbielów, Kamesznica, Milówka, Żabnica, Rycerka Górna i Dolna, Soblówka, Ujsoły, Radziechowy, Węgierska Górka, Zwadroń), Beskidzie Śląskim (Istebna, Koniaków, Jaworzynka, Brenna, Szczyrk, Ustroń, Wisła - Dolina Białej Wisełki oraz Doliną Gościejowa, Jaworze koło Bielska Białej, Lipowa - Dolina Zimnika), Beskidzie Małym (Międzybrodzie Żywieckie, Międzybrodzie Bialskie, Targanice, Kocierz, Inawłd). Znajdziecie tutaj oferty bardzo tanich kuligów, jak również kuligów droższych, a nawet typu PREMIUM / VIP (dla firm i korporacji). Każdy znajdzie coś dla siebie. Ceny kuligów wahają się od 65 zł / os aż do 160 zł / os. w zależności od tego jaki kulig wybierzecie.</p>
                </div>
                <img src="<?php echo get_template_directory_uri() . '/images/frontpage/frontAbout_02.png' ?>"/>
            </div>
            <div class="frontAbout__two">
                <div class="images">
                    <img src="<?php echo get_template_directory_uri() . '/images/frontpage/frontAbout_03.png'; ?>"/>
                    <img src="<?php echo get_template_directory_uri() . '/images/frontpage/frontAbout_04.png'; ?>"/>
                    <img src="<?php echo get_template_directory_uri() . '/images/frontpage/frontAbout_05.png'; ?>"/>
                    <img src="<?php echo get_template_directory_uri() . '/images/frontpage/frontAbout_06.png'; ?>"/>
                </div>
                <div class="content">
                    <p><b>Jesteśmy oficjalnym, certyfikowanym organizatorem kuligów w Beskidach</b>, co daje Wam pewność najwyższej jakości świadczonych usług przez cały rok. Organizujemy tradycyjne kuligi zimowe na saniach, a wiosną, latem i jesienią - zielone kuligi na pięknie przystrojonych wozach drabiniastych.<br/>Na naszej stronie znajdziecie oferty na kuligi halloween, kuligi andrzejkowe, mikołajkowe, wigilie firmowe z kuligiem, kuligi bożonarodzeniowe, kuligi sylwestrowe, karnawałowe, walentynkowe, feryjne, z okazji dnia kobiet i wiele innych.<br/>Kuligi na naszej stronie pogrupowane są również tematycznie dla wielu grup docelowych takich jak kuligi dla firm, kuligi dla seniorów, kuligi dla szkół i przedszkoli, kuligi rodzinne, kuligi dla singli, kuligi specjalne i wiele innych.Nasze kuligi są niezwykłe, ponieważ obudowane są wielością atrakcji takich jak biesiady z kapelę góralską <a href="https://www.facebook.com/KapelaGoralskaKarpackieZboje" target="_blank">Karpackie Zbóje</a>, zabawami integracyjnymi z <a href="https://www.facebook.com/wodzirej.na.twojej.imprezie" target="_blank">wodzirejem / gawędziarzem</a>, zabawą taneczną z zespołem dancingowo - biesiadnym <a href="https://www.facebook.com/folkzboje" target="_blank">Folk Zbóje</a>, organizacją <a href="https://www.facebook.com/zbojnickienapady" target="_blank">profesjonalnego napadu zbójnickiego</a>, pokazem <a href="https://www.facebook.com/tanieczbojnicki" target="_blank">tańca zbójnickiego</a>, dyskotekami z karaoke po góralsku w stylu FOLK POLO z <a href="https://www.facebook.com/DJJanosik" target="_blank">DJ Janosikiem</a>, występem <a href="https://www.facebook.com/gajdosik.dudziarz.na.twojej.imprezie" target="_blank">dudziarza</a> na dudach żywieckich lub na gajdach, degustacją regionalnych alkoholi, serów i wędlin i <a href="https://www.facebook.com/zbojnickicatering" target="_blank">smakołykami kuchni regionalnej</a>, pieczeniem świniaka / dzika / jagnięcia. Wielu klientów życzy sobie samą biesiadę góralską bez kuligu. Tymi atrakcjami zajmuje się grupa <a href="https://www.facebook.com/goraleizbojnicy" target="_blank">GÓRALI i ZBÓJNIKÓW</a>. Jeśli ktoś chciałby wypożyczyć sobie góralski / zbójnicki czy folkowy strój na nasz kulig nie ma problemu!<br/>Zapraszamy do naszej <a href="https://www.facebook.com/wypozyczalniastrojowgoralskich" target="_blank">wypożyczalni strojów góralskich.</a></p>
                </div>
            </div>
            <div class="frontAbout__three">
                <div class="content">
                    <p>Na naszej stronie internetowej zarezerwujecie również zimowe atrakcje dla firm takie jak: zimowe wędrówki na rakietach śnieżnych, skitury, zajęcia typu pierwsza pomoc - ratownictwo medyczne, szkolenia lawinowe, nauka i doskonalenie jazdy na nartach i snowboardzie, zawody narciarskie, śnieżne safari skuterami, quady zimą, snowrafting, snowtubing, zimowa strzelanka paintballowa, zimowy Off Road, kula zorbingowa, zimowe zajęcia teambuildingowe, olimpiady zimowe z kapelą góralską, psie zaprzęgi Husky, rzeźba w lodzie.</p>
                    <p>Nowością są wyjazdy na narty na Podhale, w Tatry oraz na termalne źródła do Chochołowa (Termy Chochołowskie), Szaflary (Gorący Potok, Termy Szaflary), Białki Tatrzańskiej (Termy Bania), Bukowiny Tatrzańskiej (Termy Bukovina). Współpracujemy w tym zakresie z licencjonowanym biurem podróży <a href="https://www.facebook.com/BeskidzkieCentrumTurystyki" target="_blank">Beskidzkim Centrum Turystyki</a> oraz doświadczonym <a href="https://www.facebook.com/KarpackiGazdaPrzewodnikBeskidzkiPilotWycieczek" target="_blank">przewodnikiem beskidzkim</a>.</p>
                    <p>Nasza Firma pomaga również w rezerwacji noclegów w Beskidach a także transportu na kulig z dowolnego miejsca w Polsce dla grup (busy, autokary). Tą działką zajmuje się biuro podróży <a href="#">Żywieckie Centrum Turystyki i Kultury</a>.</p>
                    <p><b>Zarezerwuj KULIG teraz</b> - wystarczy 1 minuta.
                    <br/>
                    Wybierz atrakcję, KUP a bilety otrzymasz od razu na maila!
                    <br/>
                    <b>BAWMY SIĘ!</b></p>
                </div>
                <div class="images">
                    <img src="<?php echo get_template_directory_uri() . '/images/frontpage/frontAbout_07.png'; ?>"/>
                    <img src="<?php echo get_template_directory_uri() . '/images/frontpage/frontAbout_08.png'; ?>"/>
                    <img src="<?php echo get_template_directory_uri() . '/images/frontpage/frontAbout_09.png'; ?>"/>
                </div>
            </div>
        </div>
    </section> -->

    <section class="frontOffer">
        <div class="frontOffer__wrap">
            <div class="frontOffer__heading">
                <h2>Nasza oferta dla Ciebie</h2>
                <div class="frontOffer__badge">
                    <span>Przeżyj to!</span>
                </div>
            </div>
            <div class="frontOffer__type" style="background-image: url('<?php echo get_template_directory_uri() . '/images/frontpage/typeOffer_01.png'; ?>');">
                <div class="content container">
                    <h3>Zobacz ofertę kuligów w Beskidzie żywieckim</h3>
                    <a href="#" class="btn btn--center"><span>Rezerwuj teraz</span></a>
                </div>
            </div>
            <div class="frontOffer__type" style="background-image: url('<?php echo get_template_directory_uri() . '/images/frontpage/typeOffer_02.png'; ?>');">
                <div class="content container">
                    <h3>Zobacz ofertę kuligów w Beskidzie śląskim</h3>
                    <a href="#" class="btn btn--center"><span>Rezerwuj teraz</span></a>
                </div>
            </div>
            <div class="frontOffer__type" style="background-image: url('<?php echo get_template_directory_uri() . '/images/frontpage/typeOffer_03.png'; ?>');">
                <div class="content container">
                    <h3>Zobacz ofertę kuligów w Beskidzie małym</h3>
                    <a href="#" class="btn btn--center"><span>Rezerwuj teraz</span></a>
                </div>
            </div>
        </div>
    </section>

    <section class="frontInfo">
        <div class="frontInfo__wrap container">
            <h2>Jak zarezerwować imprezę w naszym systemie rezerwacji imprez? Nic prostszego!</h2>
            <p>Klikasz w odpowiedni banerek, wybierasz odpowiednią ilość biletów normalnych (ewentualnie ulgowych w niektórych opcjach), przechodzisz do koszyka zakupów klikając w zielony koszyk, wybierasz datę i godzinę imprezy, klikasz DALEJ, jeśli są to wybierasz opcje dodatkowe do kuligu (np. napad zbójnicki, kapela góralska, gawędziarz, DJ Janosik itp.), klikasz DALEJ podajesz swoje dane takie jak imię i nazwisko, numer telefonu oraz mail (TELEFON, DANE I MAIL MUSZĄ BYĆ POPRAWNE ABY SYSTEM PRZYJĄŁ REZERWACJĘ - JAK PODASZ ZŁEGO MAILA, POTWIERDZENIE REZERWACJI NIE SPŁYNIE CI NA WSKAZANEGO MAILA - DLATEGO PROSIMY O DOKŁADNE SPRAWDZENIE DANYCH), możesz ponadto poprosić nas o wystawienie faktury wpisując w rubrykę wszystkie dane Twojej firmy z NIPem a my wyślemy fakturę na Twojego maila. Dalej trzeba KLIKNĄĆ: Zapoznałem się i akceptuję Regulamin sprzedaży, Politykę prywatności oraz Regulamin Kuligi w Beskidach a system przekieruje Cię automatycznie do płatności BlueCash. Można za kulig zapłacić BLIKIEM lub z dowolnego banku a także kartą kredytową. Po zapłaceniu od razu na wskazany przez Ciebie adres mailowy przychodzi potwierdzenie rezerwacji z całym programem imprezy i informacjami technicznymi. Rezerwacji nie trzeba drukować na imprezę, gdyż nasi pracownicy mają listy uczestników imprezy. Życzymy udanych rezerwacji i wspaniałej zabawy! TO TAKIE PROSTE :)))</p>
        </div>
    </section>

    <section class="frontList">
        <div class="frontList__wrap">
            <div class="frontList__heading">
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() . '/images/vectors/gora.svg'; ?>"/>
                    <p>Top atrakcje</p>
                </div>
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() . '/images/vectors/rezerwuj_teraz.svg'; ?>"/>
                    <p>Rezerwacja online</p>
                </div>
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() . '/images/vectors/lokalizacje.svg'; ?>"/>
                    <p>50 lokalizacji</p>
                </div>
            </div>
        </div>
        <?php
        $args_one = array('hide_empty' => 0, 'number' => 6, 'orderby' => 'ID', 'order' => 'ASC');
        $terms_one = get_terms( 'kategorie_kuligi', $args_one );

        $args_two = array('hide_empty' => 0, 'number' => 6, 'offset' => 6, 'orderby' => 'ID', 'order' => 'ASC');
        $terms_two = get_terms( 'kategorie_kuligi', $args_two );

        $args_three = array('hide_empty' => 0, 'number' => 12, 'offset' => 12, 'orderby' => 'ID', 'order' => 'ASC');
        $terms_three = get_terms( 'kategorie_kuligi', $args_three );

        if ( !empty( $terms_one ) && !is_wp_error( $terms_one ) ): ?>
            <div class="frontList__list">
            <?php
                foreach ( $terms_one as $term ){
                    $catID = $term->term_id;
                    include get_template_directory() . '/template-parts/_catTile.php';
                }
            ?>
            </div>
        <?php endif; ?>
        <?php if ( !empty( $terms_two ) && !is_wp_error( $terms_two ) ): ?>
            <div class="offerDivider">
                <div class="offerDivider__wrap container">
                    <h2>Certyfikowany beskidzki produkt turystyczny</h2>
                    <p>#TheBestofBeskidyMountains</p>
                </div>
            </div>
            <div class="frontList__list">
            <?php
                foreach ( $terms_two as $term ){
                    $catID = $term->term_id;
                    include get_template_directory() . '/template-parts/_catTile.php';
                }
            ?>
            </div>
        <?php endif; ?>
        <?php if ( !empty( $terms_three ) && !is_wp_error( $terms_three ) ): ?>
            <div class="offerDivider">
                <div class="offerDivider__wrap container">
                    <h2>Certyfikowany beskidzki produkt turystyczny</h2>
                    <p>#TheBestofBeskidyMountains</p>
                </div>
            </div>
            <div class="frontList__list">
            <?php
                foreach ( $terms_three as $term ){
                    $catID = $term->term_id;
                    include get_template_directory() . '/template-parts/_catTile.php';
                }
            ?>
            </div>
        <?php endif; ?>
    </section>

    <section class="frontOffer">
        <div class="frontOffer__wrap">
            <div class="frontOffer__type frontOffer__type--other" style="background-image: url('<?php echo get_template_directory_uri() . '/images/frontpage/skutery_sniezne_bg.png'; ?>');">
                <div class="content container">
                    <h3>Zimowa oferta extreme</h3>
                    <a href="#" class="btn btn--center"><span>Rezerwuj</span></a>
                </div>
            </div>
            <div class="frontOffer__type frontOffer__type--other" style="background-image: url('<?php echo get_template_directory_uri() . '/images/frontpage/termy_bg.png'; ?>');">
                <div class="content container">
                    <h3>Wyjazdy<br/>na źródła termalne i narty</h3>
                    <a href="#" class="btn btn--center"><span>Rezerwuj</span></a>
                </div>
            </div>
            <div class="frontOffer__type frontOffer__type--other" style="background-image: url('<?php echo get_template_directory_uri() . '/images/frontpage/kapela_goralska_bg.png'; ?>');">
                <div class="content container">
                    <h3>Kapela góralska</h3>
                    <a href="#" class="btn btn--center"><span>Oferta kapeli</span></a>
                </div>
            </div>
        </div>
    </section>

    <section class="frontReassurance">
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

    <section class="frontTestimonial">
        <div class="frontTestimonial__wrap container">
            <div class="frontTestimonial__heading">
                <h2>JESTEŚMY CZŁONKIEM PRESTIŻOWYCH ORGANIZACJI TURYSTYCZNYCH I UCZESTNIKIEM PROGRAMÓW:</h2>
            </div>

            <div class="logoSlider">
                <?php while(have_rows('logoSlider')): the_row();
                    $logo = get_sub_field('logoSlider_logo');
                ?>
                <div class="logoSlider__slide">
                    <img src="<?php echo $logo; ?>"/>
                </div>
                <?php endwhile; ?>
            </div>

            <div class="testimonialSlider">
                <div class="testimonialSlider__heading">
                    <h3>Poznaj opinie naszych Klientów:</h3>
                </div>
                <div class="testimonialSlider__slider">
                    <?php while(have_rows('frontTestimonials')): the_row();
                        $title = get_sub_field('frontTestimonials_title');
                        $content = get_sub_field('frontTestimonials_content');
                        $author = get_sub_field('frontTestimonials_author');
                        $review = (int) get_sub_field('frontTestimonials_review');
                        $source = get_sub_field('frontTestimonials_source');
                    ?>
                    <div class="testimonialSlider__slide">
                        <h4><?php echo $title; ?></h4>
                        <p class="content"><?php echo $content; ?></p>
                        <p class="author"><?php echo $author; ?></p>
                        <div class="reviews">
                            <?php
                            $count = 5;
                            for($i = 0; $i < $review; $i++): $count--; ?>
                                <img src="<?php echo get_template_directory_uri() . '/images/review_star.svg' ?>"/>
                            <?php endfor; ?>
                            <?php for($i = 0; $i < $count; $i++): ?>
                                <img class="empty" src="<?php echo get_template_directory_uri() . '/images/review_star_empty.svg' ?>"/>
                            <?php endfor; ?>
                        </div>
                        <p class="source">Źródło: <?php echo $source; ?></p>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="frontBlog">
        <div class="frontBlog__heading" style="background-image: url('<?php echo get_template_directory_uri() . '/images/frontpage/blog_bg.png'; ?>');">
            <div class="wrap">
                <h2>ZOBACZ JAKIE SMAKOŁYKI SERWUJEMY NA NASZYCH KULIGACH</h2>
                <img src="<?php echo get_template_directory_uri() . '/images/frontpage/blog_swinka.svg'; ?>"/>
                <h3>GÓRALSKIE SMAKOŁYKI MOŻESZ ZAMÓWIĆ NA NASZEJ STRONIE: WWW.GORALSKICATERING.PL</h3>
                <a href="#" class="btn btn--center"><span>Sprawdź</span></a>
            </div>
        </div>
        <div class="frontBlog__list">
            <article class="post">
                <a href="#">
                    <div class="post__thumb">
                        <img src="<?php echo get_template_directory_uri() . '/images/frontpage/blogPost_01.png'; ?>"/>
                    </div>
                    <div class="post__title">
                        <p>Po góralsku - prosto i ze smakiem</p>
                    </div>
                </a>
            </article>
            <article class="post">
                <a href="#">
                    <div class="post__thumb">
                        <img src="<?php echo get_template_directory_uri() . '/images/frontpage/blogPost_02.png'; ?>"/>
                    </div>
                    <div class="post__title">
                        <p>Oscypek - co to za ser?</p>
                    </div>
                </a>
            </article>
            <article class="post">
                <a href="#">
                    <div class="post__thumb">
                        <img src="<?php echo get_template_directory_uri() . '/images/frontpage/blogPost_03.png'; ?>"/>
                    </div>
                    <div class="post__title">
                        <p>Specjały kuchni regionalnej</p>
                    </div>
                </a>
            </article>
        </div>
    </section>

    <section class="frontDegustation" style="background-image: url('<?php echo get_template_directory_uri() . '/images/frontpage/degustacja_bg.png'; ?>')">
        <div class="frontDegustation__wrap">
            <h2>ZAREZERWUJ DEGUSTACJĘ<br/>REGIONALNYCH ALKOHOLI PODCZAS KULIGU</h2>
            <h3>WYPIJ Z NAMI TĘGI HAUST PALĄCEGO TRUNKU!</h3>
            <a href="#" class="btn btn--center"><span>Rezerwuj teraz</span></a>
        </div>
    </section>

    <section class="frontRecommend">
        <div class="frontRecommend__wrap container">
            <h2>Firmy, które nam zaufały:</h2>
            <div class="logoSlider">
                <?php while(have_rows('frontRecommend')): the_row();
                    $logo = get_sub_field('frontRecommend_logo');
                ?>
                <div class="logoSlider__slide">
                    <img src="<?php echo $logo; ?>"/>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>