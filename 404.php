<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package kuligi
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<div class="wrap">
				<h1>404</h1>
				<p>Strona o wskazanym adresie nie istnieje</p>
				<a href="<?php echo get_home_url(); ?>" class="btn"><span>Strona główna</span></a>
			</div>
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
