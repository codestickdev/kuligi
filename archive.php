<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kuligi
 */

get_header();
$page_id = get_the_ID();
$name = '';
$cat_id = 0;
$terms = get_the_terms($post->ID, 'kategorie_kuligi');
foreach($terms as $term){
	$name = $term->name;
	$cat_id = $term->term_id;
}
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
</main>
<?php
get_footer();
