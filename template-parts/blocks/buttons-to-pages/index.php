<?php

/**
 * Buttons To Pages Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>
<?php if(have_rows('pages_buttons')):?>

    <section class="choice-panel f3-oswald-medium">
        
        <?php while(have_rows('pages_buttons')): the_row();?>

            <?php
                $btnHeader = get_sub_field('button_header');
                $btnText = get_sub_field('button_text');
                $btnLink = get_sub_field('button_link');
            ?>

        <div class="choice-item">
            <?php if($btnHeader):?>
                <?php echo $btnHeader;?>
            <?php endif;?>
            <button class="btn-yellow-choice f-mont-choice-btn" onclick="window.location.href='<?php echo $btnLink;?>'">
                <?php echo $btnText;?>
            </button>
        </div>

        <?php endwhile;?>

    </section>

<?php endif;?>