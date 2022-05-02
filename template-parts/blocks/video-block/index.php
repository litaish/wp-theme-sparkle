<?php

/**
 * Video Block Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Load values and assing defaults.
$vbThumbnailArr = get_field('vb_thumbnail');
$vbThumbnailImg = $vbThumbnailArr['sizes']['large'];
$vbVideo = get_field('vb_video');
$setThumb = get_field('set_thumbnail');

// Use preg_match to find iframe src.
preg_match('/src="(.+?)"/', $vbVideo, $matches);
$src = $matches[1];

// Find vide title
preg_match('/title="(.+?)"/', $vbVideo, $titleMatches);

// Add extra parameters to src and replace HTML.
$params = array(
    'controls'  => 1,
    'hd'        => 1,
    'autohide'  => 1,
);
$new_src = add_query_arg($params, $src);
$vbVideo = str_replace($src, $new_src, $vbVideo);

// Get video ID
$videoId = pdg_get_youtube_video_id( $src );

// Get default video thumbnail
$defThumb = 'http://img.youtube.com/vi/' . $videoId . '/maxresdefault.jpg';

// Add extra attributes to iframe HTML.
$attributes = 'frameborder="0"';
$vbVideo = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $vbVideo);

// Add ID for iframe

?>
<section class="video-wrapper">
    <img 

        id="videoCover" 
        
        <?php if($setThumb == 'default'):?>

            src="<?php echo $defThumb;?>"

        <?php else:?>

            src="<?php echo $vbThumbnailImg;?>" 

        <?php endif;?>
        alt="<?php echo $titleMatches[1];?>">

    <?php echo $vbVideo;?>
    <a class="play-circle" id="playBtn"><i class="fa fa-play fa-2x"></i></a>
</section>