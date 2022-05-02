<?php

/**
 * Supporters Map Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

    $citySelTitle = get_field('city_select_title');
    $typeSelectTitle = get_field('type_select_title');

    // Enqueue only on this block
    wp_enqueue_script( 'pdg-google-maps' );
?>
<section class="dropdown-search-wrapper">
        <figure>

            <?php if($citySelTitle):?>

                <label class="f-mont-yellow-success-small" for="locationName">

                    <?php echo $citySelTitle;?>

                </label>

            <?php endif;?>
            <select class="form-select f-mont-supporters-select" aria-label="Default select example" id="selectCity">
                <option value disabled selected class="select-placeholder">Izvēlies</option>
                
                <?php if(have_rows('cities')):?>

                    <?php while(have_rows('cities')): the_row();

                        $city = get_sub_field('city_name');
                    ?>
                    <option value="<?php echo $city;?>"><?php echo $city;?></option>


                    <?php endwhile;?>

                <?php endif;?>
                
              </select>
        </figure>
        <figure>
        
            <?php if($citySelTitle):?>

                <label class="f-mont-yellow-success-small" for="locationName">

                    <?php echo $typeSelTitle;?>

                </label>

            <?php endif;?>

            <label class="f-mont-yellow-success-small" for="locationType">Uzņēmuma veids</label>
            <select class="form-select f-mont-supporters-select" aria-label="Default select example" id="selectType">
                <option value disabled selected class="select-placeholder">Izvēlies</option>
                
                    <?php $businessTypes = get_field('businesses');?>

                    <?php foreach($businessTypes as $bt):?>
                        
                    <option value="<?php echo $bt['value'];?>"><?php echo $bt['label'];?></option>

                    <?php endforeach;?>

              </select>
        </figure>
</section>

<section class="supporter-loc-wrapper">
        <!---Dynamic location content here-->
        <table id="supportersTable">
            <colgroup>
                <col style="min-width: 7.5em;">
                <col style="width: 60%;" class="f-mont-blue24-normal">
                <col style="width: 30%;">
            </colgroup>
                    
                <?php if(have_rows('supporters')):?>

                    <?php while(have_rows('supporters')): the_row();
                        $supporterName = get_sub_field('supporter_name');
                        $supporterLogo = get_sub_field('supporter_logo');
                        $supporterEmail = get_sub_field('supporter_email');
                    ?>

                    <div class="supporter-data" 
                        data-name="<?php echo $supporterName;?>"
                        data-img="<?php echo $supporterLogo['sizes']['large'];?>"
                        data-email="<?php echo $supporterEmail?>">
                    </div>



                    <?php endwhile;?>

                <?php endif;?>
            <!-- <tr>
                <td>This is in col 1</td>
                <td>This is in col 2</td>
                <td>This is in col 3</td>
            </tr> -->
        </table>
</section>

<figure id="map">
            <!---Google Maps here-->
</figure>

<script>

</script>