<?php

/**
 * Image Gallery Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Load values and assing defaults.
$imgOneArr = get_field('image_1');
$imgOne = $imgOneArr['sizes']['large'];

$imgTwoArr = get_field('image_2');
$imgTwo = $imgTwoArr['sizes']['large'];

$imgThreeArr = get_field('image_3');
$imgThree = $imgThreeArr['sizes']['large'];

$imgFourArr = get_field('image_4');
$imgFour = $imgFourArr['sizes']['large'];

$imgFiveArr = get_field('image_5');
$imgFive = $imgFiveArr['sizes']['large'];

$splitRowLoc = get_field('split_row_loc');
?>

<img class="about-border" src="<?php echo PDGC_ASSETS . '/img/borders/about_border.png'?>" alt="About border">

<?php if($splitRowLoc == 'second'):?>

    <div class="img-container-2">
        <div class="child-1">
            <img class="grid-img" src="<?php echo $imgOne;?>" alt="<?php echo $imgOneArr['title'];?>">
        </div>
        <div class="grid-split">
            <div>
                <img class="grid-img" src="<?php echo $imgTwo;?>" alt="<?php echo $imgTwoArr['title'];?>">
            </div>
            <div>
                <img class="grid-img" src="<?php echo $imgThree;?>" alt="<?php echo $imgThreeArr['title'];?>">
            </div>
        </div>
        <div class="child-2">
            <img class="grid-img" src="<?php echo $imgFour;?>" alt="<?php echo $imgFourArr['title'];?>">
        </div>
        <div class="child-4">
            <img class="grid-img" src="<?php echo $imgFive;?>" alt="<?php echo $imgFiveArr['title'];?>">
        </div>
    </div> 

<?php else:?>

    <div class="img-container-1">
        <div class="child-1">
            <img class="grid-img" src="<?php echo $imgOne;?>" alt="<?php echo $imgOneArr['title'];?>">
        </div>
        <div class="child-2">
            <img class="grid-img" src="<?php echo $imgTwo;?>" alt="<?php echo $imgTwoArr['title'];?>">
        </div>
        <div class="grid-split">
            <div>
                <img class="grid-img" src="<?php echo $imgThree;?>" alt="<?php echo $imgThreeArr['title'];?>">
            </div>
            <div>
                <img class="grid-img" src="<?php echo $imgFour;?>" alt="<?php echo $imgFourArr['title'];?>">
            </div>
        </div>
        <div class="child-4">
            <img class="grid-img" src="<?php echo $imgFive;?>" alt="<?php echo $imgFiveArr['title'];?>">
        </div>
    </div>

<?php endif;?>

<div>
    <img class="grid-border" src="<?php echo PDGC_ASSETS . '/img/borders/grid_border.png'?>" alt="Grid-border">
</div>