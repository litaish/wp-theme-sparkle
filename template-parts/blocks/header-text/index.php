<?php

/**
 * Header Text Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Load values and assing defaults.
$headerTitle = get_field('header_title');
$headerParagraph = get_field('header_paragraph');
$headerTextSize = get_field('header_text_size');
?>
<header class="header">
    <h1 class="f1-oswald-medium "><?php echo $headerTitle;?></h1>
    
    <?php if($headerParagraph):?>

        <?php if($headerTextSize == 'normal'):?>

            <p class="f-mont-paragraph"><?php echo $headerParagraph;?></p>

            <?php else:?>

            <p class="f-mont-blue24-normal"><?php echo $headerParagraph;?></p>

        <?php endif;?>

    <?php endif;?>
</header>