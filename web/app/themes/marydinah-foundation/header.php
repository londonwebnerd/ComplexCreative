<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mary_Dinah_Foundation
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo( 'name' ); ?></title>
    <link rel="stylesheet" href="/app/themes/marydinah-foundation/css/normalize.css">
    <link rel="stylesheet" href="/app/themes/marydinah-foundation/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="/app/themes/marydinah-foundation/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/app/themes/marydinah-foundation/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/app/themes/marydinah-foundation/style.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="header__logo">
                        <img class="header__logo-img" src="/app/themes/marydinah-foundation/assets/MDFLogo_V1.svg">
                        <img class="header__logo-img-secondary" src="/app/themes/marydinah-foundation/assets/ZHP-Logo.svg">
                        <a href="#" class="header__logo-link"></a>
                    </div>
                    <div class="header__navigation">
                        <ul class="header__navigation--menu">
                            <li class="menu-item"><a href="#">About Us</a></li>
                            <li class="menu-item"><a href="#">Our Programs</a></li>
                            <li class="menu-item"><a href="#">Our Partners</a></li>
                            <li class="menu-item"><a href="#">Success Stories</a></li>
                            <li class="menu-item"><a href="#">Media</a></li>
                            <li class="menu-item"><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
	<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
