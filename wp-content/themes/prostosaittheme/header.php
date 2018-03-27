<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<title><?php wp_title() ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="https://fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond:400,400i,500,500i,600,600i,700,700i,800,800i&amp;subset=cyrillic" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body>
    <div class="wrapper">
            <header class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2 col-lg-2">
                            <a class="logo" href="<?php echo get_home_url(); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" title="">
                            </a>
                        </div>
                        <div class="col-sm-7 col-lg-8">
                            <nav>
                                <?php wp_nav_menu( array(
                                    'theme_location'  => 'main',
                                    'menu'            => '',
                                    'container'       => '',
                                    'container_class' => '',
                                    'container_id'    => '',
                                    'menu_class'      => 'menu',
                                    'menu_id'         => '',
                                    'echo'            => true,
                                    'fallback_cb'     => 'wp_page_menu',
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'depth'           => 0,
                                    'walker'          => '',
                                ) ); ?>
                            </nav>
                        </div>
                        <div class="hidden-xs col-sm-3 col-lg-2">
                            <ul class="languages">
                                <?php pll_the_languages( array( 'show_flags' => 1,'show_names' => 0 ) ); ?>
                            </ul>
                            <ul class="contactsList">
                                <li>
                                    <span class="smartphone"></span>
                                    <a href="tel:+380683288541">(068)-328-85-41</a>
                                </li>
                                <li>
                                    <span class="house"></span>
                                    <?php echo get_post_meta($post->ID, 'street-address', true); ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>