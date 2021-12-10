<article class="catTile" data-id="<?php echo $catID; ?>">
    <a href="<?php echo get_term_link($catID); ?>" class="catTile__thumb">
        <div class="catTile__badge">
            <div class="icon">
                <img src="<?php echo get_field('kulcat_flag_ico', 'term_' . $catID); ?>"/>
            </div>
            <p><?php echo get_field('kulcat_flag_text', 'term_' . $catID); ?></p>
        </div>
        <img src="<?php echo get_field('kulcat_image', 'term_' . $catID); ?>"/>
    </a>
    <div class="catTile__content">
        <a href="<?php echo get_term_link($catID); ?>" class="title"><?php $term = get_term($catID); echo $term->name; ?></a>
        <?php if(get_field('kulcat_usp', 'term_' . $catID)): ?>
        <div class="catTile__list">
            <?php while(have_rows('kulcat_usp', 'term_' . $catID)): the_row();
                $icon = get_sub_field('kulcat_usp_ico');
                $text = get_sub_field('kulcat_usp_text');
            ?>
            <div class="pos">
                <div class="pos__icon">
                    <img src="<?php echo $icon; ?>"/>
                </div>
                <p><?php echo $text; ?></p>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
        <div class="catTile__reviews">
            <div class="stars">
                <img src="<?php echo get_template_directory_uri() . '/images/categories/review_star.svg'; ?>"/>
                <img src="<?php echo get_template_directory_uri() . '/images/categories/review_star.svg'; ?>"/>
                <img src="<?php echo get_template_directory_uri() . '/images/categories/review_star.svg'; ?>"/>
                <img src="<?php echo get_template_directory_uri() . '/images/categories/review_star.svg'; ?>"/>
                <img src="<?php echo get_template_directory_uri() . '/images/categories/review_star.svg'; ?>"/>
            </div>
            <?php
            
                $reviews = (int) get_field('kulcat_reviews', 'term_' . $catID);
                $span = '';
                if($reviews == 1){
                    $span = 'opinia';
                }else if($reviews > 1 && $reviews < 5){
                    $span = 'opinie';
                }else if($reviews > 5){
                    $span = 'opinii';
                }
            ?>
            <span class="reviews"><?php echo $reviews . ' ' . $span; ?></span>
        </div>
    </div>
</article>