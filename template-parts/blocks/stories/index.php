<?php

/**
 * Stories Cards Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

?>
<section class="stories-grid-wrapper" id="storiesGridWrapper">
        <div class="stories-grid" id="storiesGrid">
            
            <?php if(have_rows('cards')): $i = 1;?>

                <?php while(have_rows('cards')): the_row();

                    $isActive = get_sub_field('is_active');

                ?>

                <?php if($isActive == 'active'):?>

                    <?php
                        $previewImg = get_sub_field('preview_image');
                        $videoLink = get_sub_field('video_link');
                        $name = get_sub_field('name');

                        $videoId = pdg_get_youtube_video_id($videoLink);
                        $thumb = 'http://img.youtube.com/vi/' . $videoId . '/maxresdefault.jpg';
                    ?>


                    <?php if($previewImg):?>

                        <figure data-name="<?php echo $name;?>"
                                class="story-card story-card-active" 
                                style="background-image: url('<?php echo $previewImg['sizes']['large'];?>');">

                            <img
                                youtubeid="<?php echo $videoId;?>" 
                                class="youtube-link card-yellow-overlay video-active" 
                                src="<?php echo PDGC_ASSETS . '/img/stories/yellow-overlay.png'?>" 
                                alt="Yellow overlay">

                            <span class="f-oswald-card-number"><?php echo $i;?></span>
                        </figure>

                    <?php else:?>

                        <figure 
                                class="story-card story-card-active card-active-alt" 
                                style="background-image: url('<?php echo PDGC_ASSETS . '/img/stories/yellow-overlay.png';?>');">

                            <img
                                data-name="<?php echo $name;?>" 
                                youtubeid="<?php echo $videoId;?>" 
                                class="youtube-link card-yellow-overlay video-active"
                                src="<?php echo PDGC_ASSETS . '/img/stories/yellow-overlay.png'?>" 
                                alt="Yellow overlay">

                            <h2 class="card-inner-text f-oswald-alt-text card-alt-text"><?php echo $name;?></h2>
                            <span class="f-oswald-card-number"><?php echo $i;?></span>
                        </figure>

                    <?php endif;?>


                <?php else:?>

                    <figure data-id="story-<?php echo $i;?>" class="story-card story-card-inactive">
                        <img class="card-yellow-overlay" src="<?php echo PDGC_ASSETS . '/img/stories/yellow-overlay.png';?>" alt="Yellow overlay">

                    <?php $tba = get_sub_field('to_be_announced');?>

                    <?php if($tba):?>
                        
                            <h2 class="card-inner-text f-oswald-tba-text"><?php echo $tba;?></h2>       

                    <?php endif;?>

                        <span class="f-oswald-card-number"><?php echo $i;?></span>
                    </figure>

                <?php endif;?>


                <?php $i++; endwhile;?>

            <?php endif;?>

        </div>
</section>

