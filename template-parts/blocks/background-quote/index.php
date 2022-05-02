<?php

/**
 * Background Quote Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Load values and assing defaults.
$bqBackgroudArr = get_field('bq_image');
$bqBackgroundImg = $bqBackgroudArr['sizes']['large'];
$bqQuote = get_field('bq_quote');
?>
<img class="quote-border-top" src="<?php echo PDGC_ASSETS . '/img/borders/about_border.png'?>" alt="Quote border 1">
    <figure class="caption-container" style="background-image: url('<?php echo $bqBackgroundImg;?>')">
        <img class="gradient" src="<?php echo PDGC_ASSETS . '/img/other/gradient.png'?>" alt="Gradient">
        <div class="picture-quote-wrapper">
            <h3 class="f-oswald-picture-quote">
                <?php echo $bqQuote;?>
            </h3>
        </div>
    </figure>
<div>
    <img class="quote-border-bottom" src="<?php echo PDGC_ASSETS . '/img/borders/grid_border.png'?>" alt="Quote border 2">
</div>