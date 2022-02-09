<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kuligi
 */

get_header();

$term = get_queried_object();
$name = $term->name;
$cat_id = $term->term_id;
?>
<main class="kwb kwb--category" data-id="<?php echo $cat_id; ?>">
	<header class="catHeader" style="background-image: url('<?php echo get_template_directory_uri() . '/images/frontpage/typeOffer_03.png'; ?>');">
		<div class="catHeader__wrap container">
			<h1><?php echo $name; ?></h1>
			<h2><?php echo get_field('kulcat_flag_text', 'term_' . $cat_id); ?></h2>
		</div>
	</header>

	<?php if(get_field('aboutSlider', 8)): ?>
    <section class="frontAbout">

        <?php include get_template_directory() . '/template-parts/_aboutBadges.php'; ?>
        
        <div class="frontAbout__wrap container">
            <div class="aboutContent">
                <?php while(have_rows('aboutSlider', 8)): the_row();?>
                    <div class="aboutContent__slide">
                        <?php echo get_sub_field('aboutSlider_content'); ?>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="aboutImages">
                <?php while(have_rows('aboutSlider', 8)): the_row();?>
                    <div class="aboutImages__slide">
                        <img src="<?php echo get_sub_field('aboutSlider_image'); ?>"/>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    
    <?php if(get_field('droplabs', 'term_' . $cat_id)): ?>
    <!-- <section class="frontReassurance frontReassurance--single">
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
    <section class="singleInfo mb-3">
        <div class="singleInfo__heading">
            <h2>Jak zarezerwować imprezę w naszym systemie rezerwacji imprez? Nic prostszego! </h2>
        </div>
        <div class="singleInfo__content">
            <div class="content container">
                <p>Klikasz w odpowiedni banerek, wybierasz odpowiednią ilość biletów normalnych (ewentualnie ulgowych w niektórych opcjach), przechodzisz do koszyka zakupów klikając w zielony koszyk, wybierasz datę i godzinę imprezy, klikasz DALEJ, jeśli są to wybierasz opcje dodatkowe do kuligu (np. napad zbójnicki, kapela góralska, gawędziarz, DJ Janosik itp.), klikasz DALEJ podajesz swoje dane takie jak imię i nazwisko, numer telefonu oraz mail (TELEFON, DANE I MAIL MUSZĄ BYĆ POPRAWNE ABY SYSTEM PRZYJĄŁ REZERWACJĘ - JAK PODASZ ZŁEGO MAILA, POTWIERDZENIE REZERWACJI NIE SPŁYNIE CI NA WSKAZANEGO MAILA - DLATEGO PROSIMY O DOKŁADNE SPRAWDZENIE DANYCH), możesz ponadto poprosić nas o wystawienie faktury wpisując w rubrykę wszystkie dane Twojej firmy z NIPem a my wyślemy fakturę na Twojego maila. Dalej trzeba KLIKNĄĆ: Zapoznałem się i akceptuję Regulamin sprzedaży, Politykę prywatności oraz Regulamin Kuligi w Beskidach a system przekieruje Cię automatycznie do płatności BlueCash. Można za kulig zapłacić BLIKIEM lub z dowolnego banku a także kartą kredytową. Po zapłaceniu od razu na wskazany przez Ciebie adres mailowy przychodzi potwierdzenie rezerwacji z całym programem imprezy i informacjami technicznymi. Rezerwacji nie trzeba drukować na imprezę, gdyż nasi pracownicy mają listy uczestników imprezy. Życzymy udanych rezerwacji i wspaniałej zabawy! TO TAKIE PROSTE :)))</p>
            </div>
        </div>
    </section> -->
	<section class="categoryDroplabs">
		<div class="categoryDroplabs__wrap">
			<?php echo get_field('droplabs', 'term_' . $cat_id); ?>
		</div>
	</section>
    <?php else: ?>
    <section class="productList">
		<div class="productList__list">
			<?php
				if ( have_posts() ){
					while(have_posts()){
						the_post();
                    	include get_template_directory() . '/template-parts/_prodTile.php';
					}
					the_posts_navigation();
				}else{
					get_template_part( 'template-parts/content', 'none' );

				}
			?>
		</div>
		<div class="divider divider--long"><span>Zobacz także inne nasze oferty</span></div>
		<?php
        $args_one = array('hide_empty' => 0, 'number' => 6, 'orderby' => 'ID', 'order' => 'ASC');
        $terms_one = get_terms( 'kategorie_kuligi', $args_one );
        if ( !empty( $terms_one ) && !is_wp_error( $terms_one ) ): ?>
            <div class="productList__list">
            <?php
                foreach ( $terms_one as $term ){
                    $catID = $term->term_id;
                    include get_template_directory() . '/template-parts/_catTile.php';
                }
            ?>
            </div>
        <?php endif; ?>
	</section>
    <?php endif; ?>

</main>
<?php
get_footer();
