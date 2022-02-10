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

        <?php include get_template_directory() . '/template-parts/_aboutBadges.php'; ?>

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

    <?php include get_template_directory() . '/template-parts/_frontOffer.php'; ?>

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
        $args_one = array('hide_empty' => 0, 'number' => 6, 'orderby' => 'ID', 'order' => 'ASC', 'post__not_in' => 28, 29, 30);
        $terms_one = get_terms( 'kategorie_kuligi', $args_one );

        $args_two = array('hide_empty' => 0, 'number' => 6, 'offset' => 6, 'orderby' => 'ID', 'order' => 'ASC', 'post__not_in' => 28, 29, 30);
        $terms_two = get_terms( 'kategorie_kuligi', $args_two );

        $args_three = array('hide_empty' => 0, 'number' => 12, 'offset' => 12, 'orderby' => 'ID', 'order' => 'ASC', 'post__not_in' => 28, 29, 30);
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
                    <a href="/kapela-goralska/" class="btn btn--center"><span>Oferta kapeli</span></a>
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
                <a href="http://goralskicatering.pl/" target="_blank" class="btn btn--center"><span>Sprawdź</span></a>
            </div>
        </div>
        <div class="frontBlog__list">
            <article class="post">
                <a href="<?php echo get_home_url() . '/jakie-smakolyki-serwujemy-na-kuligach' ?>">
                    <div class="post__thumb">
                        <img src="<?php echo get_template_directory_uri() . '/images/frontpage/blogPost_01.png'; ?>"/>
                    </div>
                    <div class="post__title">
                        <p>Po góralsku - prosto i ze smakiem</p>
                    </div>
                </a>
            </article>
            <article class="post">
                <a href="<?php echo get_home_url() . '/oscypki' ?>">
                    <div class="post__thumb">
                        <img src="<?php echo get_template_directory_uri() . '/images/frontpage/blogPost_02.png'; ?>"/>
                    </div>
                    <div class="post__title">
                        <p>Oscypek - co to za ser?</p>
                    </div>
                </a>
            </article>
            <article class="post">
                <a href="<?php echo get_home_url() . '/jaka-jest-goralska-kuchnia' ?>">
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
            <a href="/degustacja-regionalnych-alkoholi/" class="btn btn--center"><span>Rezerwuj teraz</span></a>
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