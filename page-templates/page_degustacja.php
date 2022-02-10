<?php
    /**
     * Template name: Degustacja alkoholi
     */
get_header(); ?>

<main class="kwb kwb--degustacja">
    <section class="subpageHeader subpageHeader--noshadow" style="background-image: url('<?php echo the_field('alkoHeader_bg'); ?>');">
        <div class="subpageHeader__wrap container">
            <h1>Kuligi w beskidach</h1>
            <h2>Degustacja regionalnych alkoholi</h2>
        </div>
    </section>

    <section class="frontAbout">
        <?php include get_template_directory() . '/template-parts/_aboutBadges.php'; ?>

        <div class="alkoText">
            <div class="alkoText__wrap container">
                <p>Na naszych kuligach serwujemy najlepszego grzańca na polskim rynku - ZBÓJNICKIE GRZANE oraz GRZANIEC GALICYJSKI.</p>
                <p>Wina te wyprodukowane według staranie opracowanej receptury, podawane na gorąco przyjemnie rozgrzewają kuligowiczów dając bogaty i niezwykle trwały aromat. Wyśmienicie smakują zimową porą, idealne do spożycia na nartach, kuligu czy przy domowym kominku. To miła perspektywa gdy za oknem śnieg, hulający wiatr i zawierucha. Na naszych imprezach serwujemy wina grzane o smaku korzennym, malinowym, rumowym i piernikowym.</p>
            </div>
        </div>
        <div class="divider divider--long divider--lightText"><span>Zapraszamy na stronę naszego partnera strategicznego <b>www.zbojeckie.pl</b></span></div>
    </section>

    <section class="alkoFullImage">
        <img src="<?php echo get_template_directory_uri() . '/images/degustacja/fullwidth_info.png'; ?>"/>
    </section>

    <section class="alkoInfo">
        <div class="alkoInfo__wrap container">
            <h2>Degustacja Góralskich trunków czyli sakramencko próbowacka podczas zbójeckiego kuligu</h2>
            <?php echo get_field('alkoInfo'); ?>
        </div>
    </section>

    <section class="offerDivider offerDivider--nologos offerDivider--nomargin offerDivider--uppercase">
        <div class="offerDivider__wrap container-lg">
            <h3>Jakie alkohole możemy zaserwować podczas degustacji?</h3>
        </div>
    </section>

    <section class="partnersList partnersList--alkohol">
        <div class="partnersList__wrap">
            <?php while(have_rows('alkoList')): the_row();
                $image = get_sub_field('alkoList_image');
                $name = get_sub_field('alkoList_name');
                $desc = get_sub_field('alkoList_desc');
            ?>
            <div class="partner">
                <img src="<?php echo $image; ?>"/>
                <div class="partner__cover">
                    <h2><?php echo $name; ?></h2>
                    <p><?php echo $desc; ?></p>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <div class="partnersList__info container">
            <p><b>UWAGA:</b> Podane powyżej alkohole mogą być wymienne z innymi regionalnymi alkoholami takimi jak np: wiśniówka, cytrynówka, miętówka, orzechówka, śliwowica, bimber, przepalanka, zbójnicki grzaniec, zbójecka miodówka na ciepło i inne.</p>
        </div>
    </section>

    <section class="alkoDroplabs">
        <div class="alkoDroplabs__droplabs">
            <?php echo get_field('alkoDroplabs_droplabs'); ?>
        </div>
        <div class="alkoDroplabs__info">
            <div class="wrap container">
                <div class="left">
                    <div class="divider"><span>Cena obejmuje</span></div>
                    <?php echo get_field('alkoDroplabs_price'); ?>
                </div>
                <div class="right">
                    <div class="divider divider--auto"><span>Rezerwacja imprezy</span></div>
                    <?php echo get_field('alkoDroplabs_rezerwacja'); ?>
                </div>
            </div>  
        </div>
    </section>

    <section class="offerDivider offerDivider--nologos offerDivider--nomargin offerDivider--uppercase">
        <div class="offerDivider__wrap container-lg">
            <h3>Dołącz do nas i baw się razem z nami! Hej!</h3>
        </div>
    </section>

    <section class="galleryList galleryList--alkohol">
        <div class="galleryList__wrap container-lg">
            <?php $images = get_field('alkoGallery');?>
            <?php foreach($images as $image): ?>
                <a href="<?php echo $image; ?>" class="galleryList__image" data-lightbox="<?php the_title(); ?>">
                    <img src="<?php echo $image; ?>"/>
                </a>
            <?php endforeach; ?>
        </div>
    </section>

    <div class="ageModal">
        <div class="ageModal__wrap">
            <div class="heading">
                <img src="<?php echo get_template_directory_uri() . '/images/logo_new.jpg'; ?>"/>
                <h3>Strona zawiera materiały reklamowe dotyczące materiałów alkoholowych przeznaczone wyłącznie dla osób pełnoletnich.</h3>
                <form class="ageForm">
                    <p>Wprowadź datę swoich urodzin</p>
                    <div class="ageForm__wrap">
                        <input type="number" name="year" class="ageForm__input ageForm__input--year" placeholder="RRRR" minlength="4" maxlength="4" required/>
                        <input type="number" name="month" class="ageForm__input ageForm__input--month" placeholder="MM" minlength="2"  maxlength="2" required/>
                        <input type="number" name="day" class="ageForm__input ageForm__input--day" placeholder="DD" minlength="2" maxlength="2" required/>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="remember"/>
                        <label for="remember">Zapamiętaj mnie</label>
                    </div>
                    <button type="submit" class="btn btn--button"><span>Zatwierdź</span></button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>