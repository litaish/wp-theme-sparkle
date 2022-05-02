<?php

/**
 * Team Members Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Load values and assing defaults.
$tmTitle = get_field('tm_title');
$tmParagraph = get_field('tm_paragraph');
?>

<section class="team-wrapper">
    <?php if($tmTitle):?>

        <h2 class="f2-oswald-medium"><?php echo $tmTitle;?></h2>

    <?php endif;?>
    
    <?php if($tmParagraph):?>

        <p class="f-mont-blue18-team"><?php echo $tmParagraph;?></p>
    
    <?php endif;?>

    <div class="team-cards-wrapper">

            <?php if(have_rows('tm_cards')):?>

                <?php while(have_rows('tm_cards')): the_row();

                    $memberName = get_sub_field('member_name');
                    $memberRole = get_sub_field('member_role');
                    $memberImage = get_sub_field('member_image');

                ?>

                <figure class="team-card" style="background-image: url('<?php echo $memberImage['sizes']['large'];?>');">
                    <img src="<?php echo PDGC_ASSETS . '/img/other/small_blue_overlay.png'?>" alt="Blue gradient">
                    <figcaption>
                        <p class="f-oswald-team-card-name team-card-title"><?php echo $memberName;?></p>

                        <?php if($memberRole):?>

                            <p class="f-mont-white18-team-desc team-card-desc"><?php echo $memberRole;?></p>

                        <?php endif;?>

                    </figcaption>
                </figure>


                <?php endwhile;?>

            <?php endif;?>

    </div>
</section>