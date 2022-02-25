<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta charset="UTF-8">
    <title><?php wp_title( '-', true, 'right' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

    <?php wp_head(); ?>

    <script src="https://pxportal.xeyex.co.uk/ob/x3edabac23446401cfg"></script>
    <script src="https://pxportal.xeyex.co.uk/ob/x3edabac23446401"></script>

</head>

<body <?php body_class(); ?>>

    <?php 
        $general_background_image = '';
        if(get_field('general_background_image')){
            $general_background_image = 'class="background-sphere"';
        }
    ?>

    <?php require_once('modules/off-canvas-nav/templates/oc-menu.php'); ?>

	<div id="page" <?php echo $general_background_image;?> >

		<header class="header">

            <!-- <div class="pre__header">
                <div class="max__width">
                    <ul class="contact">
                        <li><i class="fa fa-phone"></i><a href="tel:01707642255">01707 642255</a></li>
                        <li><i class="fa fa-envelope"></i><a href="mailto:jlevin20@hotmail.com">Email Us</a></li>
                    </ul>

                    <div class="book_button">
                        <a href="/book-appointment/" class="book">Book Appointment</a>
                    </div>
                </div>
            </div> -->

            <div class="header__main">

                <div class="max__width">

                    <div class="header_logo_menu">
                        <div class="logo">
                            <a href="<?php echo esc_url(home_url()); ?>" title="<?php bloginfo('name'); ?>">
                                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/logo.png" alt="<?php bloginfo('name'); ?>">
                            </a>
                        </div><!-- logo -->
                    </div>

                    <div class="header__cta">

                        <ul class="contact">
                            <li><i class="fa fa-phone"></i><a href="tel:01707642255">01707 642255</a></li>
                            <li><i class="fa fa-envelope"></i><a href="mailto:jlevin20@hotmail.com">Email Us</a></li>
                        </ul>

                        <div class="header__menu">
                            <?php wp_nav_menu(array('menu' => 'Main Menu', 'container' => false)); ?>
                        </div><!-- header__right -->

                        <div class="oc__nav__trigger">
                            <a class="button outline primary small"><i class="fal fa-align-left"></i>Menu</a>
                        </div>
 
                    </div>

                </div><!-- max__width -->
            </div><!-- header__main -->
		</header><!-- header -->