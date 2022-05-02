<?php

/**
 * Header Text Small Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Load values and assing defaults.
$htsTitle = get_field('hts_title');
$htsParagraph = get_field('hts_paragraph');
?>
<section class="mission-wrapper">
        <?php if($htsTitle):?>

            <h2 class="f2-oswald-medium"><?php echo $htsTitle;?></h2>

        <?php endif;?>

        <?php if($htsParagraph):?>

            <p class="f-mont-blue24-mission"><?php echo $htsParagraph;?></p>
            
        <?php endif;?>
</section>