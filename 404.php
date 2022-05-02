<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>

<?php get_header('bordered'); ?>
    <section class="not-found-info-wrapper">
        <h1 class="not-found-white">404</h1>
        <h3 class="f3-oswald-medium">Lapa netika atrasta!</h3>
        <p class="f-mont-paragraph">Radusies kāda tehniska kļūda, vai šī lapa vairs nav pieejama</p>
        <button class="f-mont-yellow-success-small btn-yellow-choice" onclick="window.location.href = '<?php echo esc_url(home_url());?>';">Uz sākumlapu</button>
    </section>
    
<?php get_footer(); ?>