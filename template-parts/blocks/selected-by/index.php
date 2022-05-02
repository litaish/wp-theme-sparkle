<?php

/**
 * Selected By Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

 // Get fields and assign defaults
 $selecteddByHeader = get_field('selected_by_header');
?>
<section class="dream-selection-wrapper">

    <?php if($selecteddByHeader):?>
        <h2 class="f2-oswald-medium"><?php echo $selecteddByHeader;?></h2>
    <?php endif;?>

<?php if(have_rows('selected_by')):?>

    <div class="ds-icons-wrapper">

    <?php while(have_rows('selected_by')): the_row();?>

    <?php
        $selectedByIconArr = get_sub_field('selected_by_icon');
        $selectedByIcon = $selectedByIconArr['sizes']['medium'];
        $selectedByText = get_sub_field('selected_by_text');
    ?>

            <figure class="ds-figure">
                <div class="ds-img-wrapper">
                    <img src="<?php echo $selectedByIcon;?>" alt="<?php echo $selectedByIconArr['title'];?>">
                </div>
                <p class="f-mont-blue24-dream-selection"><?php echo $selectedByText;?></p>
            </figure>
       
    <?php endwhile;?>

    </div>

<?php endif;?>

</section>