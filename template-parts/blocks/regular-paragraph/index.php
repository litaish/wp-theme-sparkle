<?php

/**
 * Regular Paragraph Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Load values and assing defaults.
$regularParagraphText = get_field('regular_paragraph_text');
?>
<article class="about-panel">
    <p class="f-mont-paragraph"><?php echo $regularParagraphText;?></p>
</article>