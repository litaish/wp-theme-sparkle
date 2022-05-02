<?php

/**
 * Supporters Logos Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Load values and assing defaults.
$supportersHeader = get_field('supporters_header');
$supportersLogos = get_field('supporters_logos');
?>

<div>
    <img class="supporters-border" src="<?php echo PDGC_ASSETS . '/img/borders/nav_border.png'?>" alt="Supporters border">
</div>
<section class="container-fluid supporters-container">
        <?php if($supportersHeader):?>

            <div class="row">
                <div class="col-sm-12">
                    <h3 class="supporters-text f-oswald-supporters"><?php echo $supportersHeader;?></h3>
                </div>
            </div>

        <?php endif;?>

<?php if($supportersLogos):?>

    <div class="row align-items-center justify-content-center gy-5 pt-5 pb-5">

    <?php foreach($supportersLogos as $supportersLogo):?>
        
            <div class="col-sm-6 col-md-6 col-lg-3 d-flex justify-content-center">
                <img src="<?php echo $supportersLogo['sizes']['large'];?>" alt="<?php echo $supportersLogo['title'];?>">
            </div>

    <?php endforeach;?>

    </div>

<?php endif;?>

</section>