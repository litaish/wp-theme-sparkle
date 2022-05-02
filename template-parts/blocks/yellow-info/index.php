<?php

/**
 * Yellow Info Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Load values and assing defaults.
$yellowInfoIconArr = get_field('yellow_info_icon');
$yellowInfoIcon = $yellowInfoIconArr['sizes']['large'];
$yellowInfoText = get_field('yellow_info_text');
?>
<img class="quote-border-top" src="<?php echo PDGC_ASSETS . '/img/borders/about_border.png'?>" alt="Quote border 1">
    <figure class="yellow-section-one">
        <?php if($yellowInfoIcon):?>
            <div>
                <img src="<?php echo $yellowInfoIcon;?>" alt="<?php echo $yellowInfoIconArr['title'];?>">
            </div>
        <?php endif;?>
        <?php if($yellowInfoText):?>
            <p class="f-mont-white24"><?php echo $yellowInfoText;?></p>
        <?php endif;?>
    </figure>
<div>
    <img class="grid-border" src="<?php echo PDGC_ASSETS . '/img/borders/grid_border.png'?>" alt="Grid-border">
</div>