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

    <section class="frontAbout">
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
                    <p><b>Drodzy KULIGOWICZE!</b><br/>Witamy Was serdecznie na naszej stronie KULIGI W BESKIDACH. Na naszej stronie zarezerwujecie kuligi aż w pięćdziesięciu lokalizacjach w Beskidzie Żywieckim (Zawoja, Koszarawa, Korbielów, Kamesznica, Milówka, Żabnica, Rycerka Górna i Dolna, Soblówka, Ujsoły, Radziechowy, Węgierska Górka, Zwadroń), Beskidzie Śląskim (Istebna, Koniaków, Jaworzynka, Brenna, Szczyrk, Ustroń, Wisła - Dolina Białej Wisełki oraz Doliną Gościejowa, Jaworze koło Bielska Białej, Lipowa - Dolina Zimnika), Beskidzie Małym (Międzybrodzie Żywieckie, Międzybrodzie Bialskie, Targanice, Kocierz, Inawłd). Znajdziecie tutaj oferty bardzo tanich kuligów, jak również kuligów droższych, a nawet typu PREMIUM / VIP (dla firm i korporacji). Każdy znajdzie coś dla siebie. Ceny kuligów wahają się od 65 zł / os aż do 160 zł / os. w zależności od tego jaki kulig wybierzecie.</p>
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
                    <p><b>Jesteśmy oficjalnym, certyfikowanym organizatorem kuligów w Beskidach</b>, co daje Wam pewność najwyższej jakości świadczonych usług przez cały rok. Organizujemy tradycyjne kuligi zimowe na saniach, a wiosną, latem i jesienią - zielone kuligi na pięknie przystrojonych wozach drabiniastych.<br/>Na naszej stronie znajdziecie oferty na kuligi halloween, kuligi andrzejkowe, mikołajkowe, wigilie firmowe z kuligiem, kuligi bożonarodzeniowe, kuligi sylwestrowe, karnawałowe, walentynkowe, feryjne, z okazji dnia kobiet i wiele innych.<br/>Kuligi na naszej stronie pogrupowane są również tematycznie dla wielu grup docelowych takich jak kuligi dla firm, kuligi dla seniorów, kuligi dla szkół i przedszkoli, kuligi rodzinne, kuligi dla singli, kuligi specjalne i wiele innych.Nasze kuligi są niezwykłe, ponieważ obudowane są wielością atrakcji takich jak biesiady z kapelę góralską Karpackie Zbóje, zabawami integracyjnymi z wodzirejem / gawędziarzem, zabawą taneczną z zespołem dancingowo - biesiadnym Folk Zbóje, organizacją profesjonalnego napadu zbójnickiego, pokazem tańca zbójnickiego, dyskotekami z karaoke po góralsku w stylu FOLK POLO z DJ Janosikiem, występem dudziarza na dudach żywieckich lub na gajdach, degustacją regionalnych alkoholi, serów i wędlin i smakołykami kuchni regionalnej, pieczeniem świniaka / dzika / jagnięcia. Wielu klientów życzy sobie samą biesiadę góralską bez kuligu. Tymi atrakcjami zajmuje się grupa GÓRALI i ZBÓJNIKÓW. Jeśli ktoś chciałby wypożyczyć sobie góralski / zbójnicki czy folkowy strój na nasz kulig nie ma problemu!<br/><b>Zapraszamy do naszej wypożyczalni strojów góralskich.</b></p>
                </div>
            </div>
            <div class="frontAbout__three">
                <div class="content">
                    <p>Na naszej stronie internetowej zarezerwujecie również zimowe atrakcje dla firm takie jak: zimowe wędrówki na rakietach śnieżnych, skitury, zajęcia typu pierwsza pomoc - ratownictwo medyczne, szkolenia lawinowe, nauka i doskonalenie jazdy na nartach i snowboardzie, zawody narciarskie, śnieżne safari skuterami, quady zimą, snowrafting, snowtubing, zimowa strzelanka paintballowa, zimowy Off Road, kula zorbingowa, zimowe zajęcia teambuildingowe, olimpiady zimowe z kapelą góralską, psie zaprzęgi Husky, rzeźba w lodzie.</p>
                    <p>Nowością są wyjazdy na narty na Podhale, w Tatry oraz na termalne źródła do Chochołowa (Termy Chochołowskie), Szaflary (Gorący Potok, Termy Szaflary), Białki Tatrzańskiej (Termy Bania), Bukowiny Tatrzańskiej (Termy Bukovina). Współpracujemy w tym zakresie z licencjonowanym biurem podróży Beskidzkim Centrum Turystyki oraz doświadczonym przewodnikiem beskidzkim.</p>
                    <p>Nasza Firma pomaga również w rezerwacji noclegów w Beskidach a także transportu na kulig z dowolnego miejsca w Polsce dla grup (busy, autokary). Tą działką zajmuje się biuro podróży Żywieckie Centrum Turystyki i Kultury.</p>
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
    </section>

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
        $taxonomy = 'kategorie_kuligi';
        $taxonomy_terms = get_terms( $taxonomy, array(
            'hide_empty' => 0,
            'fields'     => 'ids'
        ));
        $count = count($taxonomy_terms);
        if($count > 0): ?>
            <div class="frontList__list">
            <?php
                for($i = 0; $i < $count; $i++){
                    $catID = $taxonomy_terms[$i];
                    include get_template_directory() . '/template-parts/_catTile.php';
                } 
                wp_reset_postdata();
            ?>
            </div>
        <?php endif; ?>
    </section>
</main>

<?php get_footer(); ?>