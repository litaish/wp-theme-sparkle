<?php

/**
 * Cards With Links Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

?>

<?php if(have_rows('cards_with_links')):?>

    <section class="dream-type-wrapper">
        <div class="dream-type">

    <?php while(have_rows('cards_with_links')): the_row();
    
        $cardIcon = get_sub_field('card_icon');
        $cardHeader = get_sub_field('card_header');
        $cardText = get_sub_field('card_text');
        $cardBtnText = get_sub_field('card_button_text');
        $cardBtnPage = get_sub_field('card_button_page');

    ?>

        <div class="dream-type-item dti-first-child">
            <?php if($cardIcon):?>

                <div class="dream-type-img">
                    <img src="<?php echo $cardIcon['sizes']['large'];?>" alt="<?php echo $cardIcon['title'];?>">
                </div>

            <?php endif;?>
            
            <?php if($cardHeader):?>

                <h2 class="f2-oswald-medium"><?php echo $cardHeader;?></h2>

            <?php endif;?>
            
            <?php if($cardText):?>

                <p class="f-mont-paragraph"><?php echo $cardText;?></p>

            <?php endif;?>
            <button class="btn-yellow-choice f-mont-choice-btn" onclick="window.location.href = '<?php echo $cardBtnPage;?>';"><?php echo $cardBtnText;?></button>
        </div>


    
    <?php endwhile;?>

        </div>
    </section>

<?php endif;?>