<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>

<?php
    $footerLogo = get_field('footer_logo', 'options');
    $bankGroup = get_field('bank_information', 'options');
    $contactGroup = get_field('contact_information', 'options');
?>

</div>

<div>
    <img class="footer-border" src="<?php echo PDGC_ASSETS . '/img/borders/blue_border.png';?>" alt="Footer border"> 
</div>
<footer class="site-footer">
    <!-- Footer content goes here -->
        <div class="footer-item-1" id="columnOne">
            <div>
                <img src="<?php echo $footerLogo['sizes']['large'];?>" alt="<?php echo $footerLogo['title'];?>">
            </div>
            <p class="f-mont-white24" id="contactName1">

                <?php echo $contactGroup['contact_name'];?>

            </p>
            <?php get_template_part( 'template-parts/copyright' ); ?> 

        </div>
        <div class="footer-item-2">
            <ul>
                <?php
                    wp_nav_menu(array (
                        'theme_location'    => 'footer-menu',
                        'add_a_class'       => 'f-mont-white18'
                    ));
                ?>
            </ul>
        </div>
        <div class="footer-item-3">
            <p class="f-mont-white24">

                    <?php echo $bankGroup['business_name'];?>

            </p>
            <p class="f-mont-white18">

                <?php echo $bankGroup['registration_number'];?> 

            </p>
            <p class="f-mont-white18">Banka:
                
                <?php echo $bankGroup['bank_name'];?>   

            </p>
            <p class="f-mont-white18">

                <?php echo $bankGroup['account_number'];?>

            </p>
        </div>
        <div class="footer-item-4" id="columnTwo">
            <p class="f-mont-white24" id="contactName2">

                <?php echo $contactGroup['contact_name'];?>

            </p>
            <p class="f-mont-white18">

                    <?php echo $contactGroup['email'];?>

            </p>
            <p class="f-mont-white18">

                    <?php echo $contactGroup['phone_number'];?>

            </p>
            <p class="f-mont-white18">

                    <?php echo $contactGroup['address'];?>

            </p>
            <button class="f-mont-white18-bold" id="viewDetails">Skatīt rekvizītus</button>
            <div class="socials">
                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                
            </div>
            
            <a class="privacy-policy f-mont-white14" href="https://www.google.lv/?hl=lv" id="privacyPolicy">Privātuma politika</a>
        </div>
</body>
</html>
    
</footer>

<?php get_template_part( 'template-parts/foot' ); ?>