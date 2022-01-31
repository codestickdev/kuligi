<?php
    /**
     * Template name: Mapa kuligów
     */
get_header(); ?>

<main class="kwb kwb--map">
    <section class="subpageHeader subpageHeader--noshadow" style="background-image: url('<?php echo the_field('mapHeader_bg'); ?>');">
        <div class="subpageHeader__wrap container">
            <h1>Kuligi w beskidach</h1>
            <h2>Nasz zespół</h2>
        </div>
    </section>

    <section class="frontAbout frontAbout--single">
        <?php include get_template_directory() . '/template-parts/_aboutBadges.php'; ?>
    </section>

    <section class="kwbMap">
        <div class="kwbMap__wrap container-lg">
            <div class="kwbMap__sidebar">
                <div class="thumb">
                    <img src="#" class="kuligImage"/>
                </div>
                <div class="title">
                    <div class="back"></div>
                    <h3 class="kuligTitle">
                        <span></span>
                        <a href="#" class="kuligLink"></a>
                    </h3>
                    
                </div>
                <div class="desc">
                    <p class="name">Nazwa</p>
                    <p class="kuligName"></p>
                    <p class="name">Opis</p>
                    <p class="kuligDesc"></p>
                </div>
            </div>
            <div id="kuligiMap" class="kuligiMap">
            <?php 
            $posts = get_posts(array(
                'posts_per_page'	=> -1,
                'post_type'			=> 'kuligi'
            ));
            if( $posts ): ?>
                <?php foreach( $posts as $post ):
                    setup_postdata( $post );
                    $cats = get_the_terms($post->ID, 'kategorie_kuligi');
                    $lat = get_field('singleMap_lat');
                    $lng = get_field('singleMap_lng');
                    $type = '';

                    foreach( $cats as $cat ){
                        $catID = $cat->term_id;
                        $available = array(
                            'maly' => 30,
                            'zywiecki' => 29,
                            'slaski' => 28,
                        );
                        if(in_array($catID, $available, true)){
                            $type = array_search($catID, $available);
                        }
                    }
                    if($type !== ''):
                ?>
                    <div class="marker" data-type="<?php echo $type; ?>" data-id="<?php echo $post->ID; ?>" data-lat="<?php echo $lat; ?>" data-lng="<?php echo $lng; ?>"></div>
                <?php 
                    endif;
                    endforeach;
                ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
            </div>
        </div>
    </section>

    <?php include get_template_directory() . '/template-parts/_frontOffer.php'; ?>

    <div class="mb-3"></div>

</main>

<?php get_footer(); ?>