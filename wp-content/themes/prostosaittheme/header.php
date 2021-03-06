<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
		<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KMFHQX3');</script>
<!-- End Google Tag Manager -->
	<meta charset="<?php bloginfo('charset') ?>">
	<title><?php wp_title() ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="https://fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond:400,400i,500,500i,600,600i,700,700i,800,800i&amp;subset=cyrillic" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KMFHQX3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <div class="wrapper">
            <header class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2 col-md-2 col-lg-2">
                            <a class="logo" href="<?php echo get_home_url(); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" title="">
                            </a>
                        </div>
                        <div class="col-sm-7 col-md-6 col-lg-7">
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
                        <div class="hidden-xs col-sm-3 col-md-4 col-lg-3">
                            <ul class="languages">
                                <?php pll_the_languages( array( 'show_flags' => 1,'show_names' => 0 ) ); ?>
                            </ul>
                            <ul class="contactsList">
                                <li>
                                    <span class="smartphone"></span>
                                    <a href="tel:+380683288541">(068)-328-85-41</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>