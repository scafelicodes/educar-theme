<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
    
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta http-equiv="Lang" content="pt-br">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?php wp_head(); ?>

</head>

<body>
    	
 
<!-- header start -->   
<header>
    
    <div class="container text-center">
        <nav class="navbar navbar-expand-md navbar-light">
            
            <a class="navbar-brand" href="<?php bloginfo('home') ?>">Agência Educar</a>

            <!-- <a class="navbar-brand" href="<?php bloginfo('home') ?>"><img class="logo" src="<?php bloginfo('template_url') ?>/img/logo.svg" alt=""></a> -->
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <?php
                wp_nav_menu([
                'menu'            => 'top',
                'theme_location'  => 'top',
                'container'       => 'div',
                'container_id'    => 'bs4navbar',
                'container_class' => 'collapse navbar-collapse',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav ml-auto',
                'depth'           => 2,
                'fallback_cb'     => 'bs4navwalker::fallback',
                'walker'          => new bs4navwalker()
                ]);
            ?>

        </nav>
    </div>

</header>
<!-- header end -->