<?php

/**
 * Person Quote Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Load values and assing defaults.
$pqPersonName = get_field('pq_person_name');
$pqOccupation = get_field('pq_occupation');
$pqQuote = get_field('pq_quote');
?>
<section class="feedback-juris-wrapper">
        <div class="feedback-juris">
            <h3 class="f3-oswald-medium"><?php echo $pqPersonName;?></h3>
                <?php if($pqOccupation):?>

                    <p class="f-mont-paragraph"><?php echo $pqOccupation;?></p>
                    
                <?php endif;?>
            <p class="f-mont-quote-italic feedback-text">
                <?php echo $pqQuote;?>
            </p>
            <div class="quote-button-wrapper">
                <button class="btn-arrow-left"></button>
                <button class="btn-arrow-right"></button>
            </div>
        </div>
</section>