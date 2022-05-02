<?php if ( ! defined( 'ABSPATH' ) ) exit;

if ( $copyright = get_field( 'copyright', 'option' ) ): ?>
    <p class="f-mont-white14"><?php echo str_replace( '[year]', date( 'Y' ), $copyright ); ?></p>
<?php endif; ?>