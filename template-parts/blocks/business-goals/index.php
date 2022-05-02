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
$bqGoalsHeader = get_field('bq_header');

$bqImgArrOne = get_field('bq_img_one');
$bqImgOne = $bqImgArrOne['sizes']['medium'];
$bqTextOne = get_field('bq_text_one');

$bqImgArrTwo = get_field('bq_img_two');
$bqImgTwo = $bqImgArrTwo['sizes']['medium'];
$bqTextTwo = get_field('bq_text_two');

$bqImgArrThree = get_field('bq_img_three');
$bqImgThree = $bqImgArrThree['sizes']['medium'];
$bqTextThree = get_field('bq_text_three');
?>
    <section class="goal-wrapper">
        <div class="goal-grid">
            <div class="goal-grid-row-one">
                <?php if($bqGoalsHeader):?>

                    <h2 class="f2-oswald-medium"><?php echo $bqGoalsHeader;?></h2>

                <?php endif;?>
            </div>
            <div class="goal-grid-row-two">
            <?php if($bqImgOne):?>

                <figure class="goal-grid-img-right">
                    
                        <img src="<?php echo $bqImgOne;?>" alt=""<?php echo $bqImgArrOne['title'];?>">

                </figure>

            <?php endif;?>
                <div class="goal-grid-2-row-p">
                    <?php if($bqTextOne):?>

                        <p class="f-mont-paragraph"><?php echo $bqTextOne;?></p>

                    <?php endif;?>
                </div>
            </div>
            <div class="goal-grid-row-three">
                <?php if($bqTextTwo):?>

                    <div class="goal-grid-3-row-p">
                        <p class="f-mont-paragraph"><?php echo $bqTextTwo;?></p>
                    </div>

                <?php endif;?>
                <?php if($bqImgTwo):?>

                    <figure>
                        <img src="<?php echo $bqImgTwo;?>" alt=""<?php echo $bqImgArrTwo['title'];?>">
                    </figure>

                <?php endif;?>
            </div>
            <div class="goal-grid-row-two">
                <?php if($bqImgThree):?>

                    <figure class="goal-grid-img-right">
                        <img src="<?php echo $bqImgThree;?>" alt="<?php echo $bqImgArrThree['title'];?>">
                    </figure>

                <?php endif;?>
                <?php if($bqTextThree):?>

                    <div class="goal-grid-2-row-p">
                        <p class="f-mont-paragraph"><?php echo $bqTextThree;?></p>
                    </div>

                <?php endif;?>
            </div>
        </div>
    </section>