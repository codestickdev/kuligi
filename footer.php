<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kuligi
 */

?>

	<footer id="colophon" class="siteFooter">
		<div class="siteFooter__wrap container-lg">
			<div class="siteFooter__company">
				<img class="kuligi_logo" src="<?php echo get_template_directory_uri() . '/images/logo_white.svg'; ?>"/>
				<p>Projekt „SZLAK ZBÓJNIKÓW KARPACKICH” ® firmy Leszek Młodzianowski Zbójnicki Szlak Sp. z o.o., a w szczególności prezentowane koncepcje, pomysły, scenariusze zbójnickich imprez integracyjnych  i rozwiązania na mocy ustawy o prawach autorskich i prawach pokrewnych z dn. 04.02.1994 r. Dz. U. nr 24 poz. 83 stanowią własność autora. Projekt SZLAK ZBÓJNIKÓW KARPACKICH ® ani żadna z jego części nie może być w żaden sposób kopiowana, powielana, dystrybuowana bez pisemnej zgody autora.</p>
				<img src="<?php echo get_template_directory_uri() . '/images/zbojnickie_group_logo.svg'; ?>"/>
			</div>
			<div class="siteFooter__shops">
				<p>Zapraszamy<br/>do naszych sklepów:</p>
				<div class="list">
					<a href="#" target="_blank">
						<img src="<?php echo get_template_directory_uri() . '/images/allegro_logo.svg'; ?>"/>
					</a>
					<a href="#" target="_blank">
						<img src="<?php echo get_template_directory_uri() . '/images/olx_logo.svg'; ?>"/>
					</a>
				</div>
			</div>
			<div class="siteFooter__about">
				<div class="top">
					<div class="top__contact">
						<p><b>Kontakt</b><br/>
						<a href="tel:+48531557086">+48 531 557 086</a><br/>
						ul. Bracka 51<br/>
						34-300 Żywiec<br/>
						<a href="mailto:biuro@kuligiwbeskidach.pl">biuro@kuligiwbeskidach.pl</a></p>
						<div class="social">
							<a href="<?php the_field('social_fb_link', 'option'); ?>">
								<img src="<?php the_field('social_fb_logo_alt', 'option'); ?>" />
							</a>
							<a href="<?php the_field('social_ig_link', 'option'); ?>">
								<img src="<?php the_field('social_ig_logo_alt', 'option'); ?>" />
							</a>
							<a href="<?php the_field('social_yt_link', 'option'); ?>">
								<img src="<?php the_field('social_yt_logo_alt', 'option'); ?>" />
							</a>
							<a href="<?php the_field('social_wap_link', 'option'); ?>">
								<img src="<?php the_field('social_wap_logo_alt', 'option'); ?>" />
							</a>
							<a href="<?php the_field('social_air_link', 'option'); ?>">
								<img src="<?php the_field('social_air_logo_alt', 'option'); ?>" />
							</a>
							<a href="<?php the_field('social_trip_link', 'option'); ?>">
								<img src="<?php the_field('social_trip_logo_alt', 'option'); ?>" />
							</a>
							<a href="<?php the_field('social_pin_link', 'option'); ?>">
								<img src="<?php the_field('social_pin_logo_alt', 'option'); ?>" />
							</a>
						</div>
					</div>
					<div class="top__newsletter">
						<p>Zapisz się do naszego NEWSLETTERA i bądź na bieżąco!</p>
						<form class="newsletterForm">
							<input type="email" name="newsletterMail" placeholder="Wpisz swój adres e-mail..."/>
							<div class="checkbox">
								<input type="checkbox" name="newsletterAcceptance"/>
								<div class="checkbox__input"></div>
								<p>Zapisując się do newslettera, potwierdzasz zapoznanie się z Polityką prywatności i wyrażasz zgodę na otrzymywanie informacji o promocjach i super ofertach od kuligiwbeskidach.pl</p>
							</div>
							<button type="submit" class="btn btn--newsletter"><span>Zapisz się</span></button>
						</form>
					</div>
				</div>
				<div class="owner">
					<div class="owner__image">
						<img src="<?php echo get_template_directory_uri() . '/images/owner.png'; ?>"/>
					</div>
					<div class="owner__content">
						<p>Właścicielem firmy jest Leszek Młodzianowski – przedsiębiorca i wizjoner nowego rodzaju turystyki kulturowej i etnicznej, który od 15 lat buduje firmę, stając się zdecydowanym liderem w wielu sektorach turystyki w Beskidach. Z sukcesem stworzył kilkadziesiat prestiżowych marek turystcznych, które chętnie wybierane są przez turystów przyjeżdżających w Beskidy aby uatrakcyjnić swój pobyt w regionie Żywiecczyzny i Śląska Cieszyńskiego. Jest ekspertem na beskidzkim rynku usług turystycznych, osobą wielokrotnie nagradzaną za wkład w rozwój tursytyki międzynarodowej i lokalnej. Swoją cieżką pracą, solidnością, nieustępliwością i odwagą skupił wokół siebie mocne marki turystyczne, specjalistów w wielu dziedzinach turystyki, rekreacji, sportu i kultury. Jego Firma nowoczesnie zarządzana przez specjalistów obsługuje kilkadziesiąt tysięcy turystów każdego roku utrzymując ten sam bardzo wysoki poziom usług. Firma działa jako licencjonowany, certyfikowany ORGANIZATOR TURYSTYKI i od 15 lat inwestuje w nowoczesne technologie rezerwacji usług turystycznych ON - LINE w Karpatach. </p>
					</div>
				</div>
			</div>
		</div>
		<div class="siteFooter__menu container">
			<?php wp_nav_menu(array('theme_location' => 'menu-2')); ?>
		</div>
		<div class="siteFooter__copyright">
			<p>Copyright <?php echo get_the_date('Y') ?> kuligiwbeskidach.pl  |  All rights reserved. |  Desined by <a href="https://flodesign.studio">flodesign.studio</a>  |  Powered by <a href="https://codestick.pl/">Codestick.pl</a></p>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
