
<article class="catTile" data-id="<?php echo $catID; ?>">
    <a href="<?php echo get_permalink(); ?>" class="catTile__thumb">
        <div class="catTile__badge">
            <div class="icon">
                <img src="<?php echo get_field('main_icon'); ?>"/>
            </div>
            <p><?php echo get_field('main_icon_text'); ?></p>
        </div>
        <img src="<?php echo get_field('main_image'); ?>"/>
    </a>
    <div class="catTile__content">
        <a href="<?php echo get_permalink(); ?>" class="title"><?php echo get_the_title(); ?></a>
        <?php if(get_field('main_list')): ?>
        <div class="catTile__list">
            <?php while(have_rows('main_list')): the_row();
                $icon = get_sub_field('main_list_ico');
                $text = get_sub_field('main_list_pos');
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
            
                $reviews = (int) get_field('main_reviews');
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