<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>

<?php get_template_part( 'template-parts/head' ); ?>

    <!-- Header content goes here -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <nav>
        <div class="nav-brand">
            <a href="/">
                <?php
                    if (function_exists('the_custom_logo')) {
                        the_custom_logo();
                    }
                ?>
            </a>
        </div>
        <a href="#" class="toggle-btn">
            <span id="firstBar" class="bar bar1"></span>
            <span id="secondBar" class="bar bar2"></span>
            <span id="thirdBar" class="bar bar3"></span>
        </a>
        <div class="nav-links">
            <ul>
                <li>
                    <div id="langContainer" class="nav-languages">
                        <a class="f-mont-nav" href="#">LV</a>
                        <a class="f-mont-nav" href="#">EN</a>
                        <a  class="f-mont-nav"href="#">RU</a>
                    </div>
                </li>
                <?php
                    wp_nav_menu(array (
                        'theme_location'    => 'top-menu',
                        'add_a_class'        => 'f-mont-nav'
                    ));
                ?>
                <li class="lv-lang"><a class="f-mont-nav" href="#">LV</a></li>
            </ul>
        </div>
    </nav>

<div class="site-content">
