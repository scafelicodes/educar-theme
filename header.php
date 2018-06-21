 <!doctype html>
<html <?php language_attributes(); ?> class="no-js">
    
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php if(is_home()) { echo bloginfo("name"); echo " - "; echo bloginfo("description"); } else { echo wp_title(" - ", false, right); } ?></title>


    <!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-WGSMV6P');</script>
	<!-- End Google Tag Manager -->

    <meta http-equiv="Lang" content="pt-br">
	   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- All css here -->
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/slick.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/nice-select.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/meanmenu.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/animate.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/default.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/responsive.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css">

    <?php wp_head(); ?>
</head>
    <body>
    	<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WGSMV6P"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
 
       <!-- header start -->   
       <header>
         
           <div class="header-bottom-area pl-60 pr-60">
               <div class="container">
                   <div class="row align-items-center">
                       <div class="col-xl-3 col-lg-3">
                           <div class="logo">
                               <a href="<?php bloginfo('home') ?>"><img src="<?php bloginfo('template_url') ?>/img/logo/logo.png" alt=""></a>
                           </div>
                       </div>
                       <div class="col-xl-9 col-lg-9">
                            <div class="header-button f-right d-none d-lg-block">
                                <a href="<?php bloginfo( 'url' ); ?>/contato">CONTATO</a>
                            </div>
                           <div class="main-menu f-right">
                               <nav id="mobile-menu">
                                   <ul>
                                       <li><a href="<?php bloginfo('home') ?>">Início</a></li>
                                       <li><a href="<?php bloginfo( 'url' ); ?>/sobre">Sobre a Educar</a></li></li>
                                       <li><a href="<?php bloginfo( 'url' ); ?>/cases">Cases</a></li>
                                       <li><a href="<?php bloginfo( 'url' ); ?>/servicos">Serviços</a></li>
                                       <li><a href="<?php bloginfo( 'url' ); ?>/blog">Blog</a></li>
                                   </ul>
                               </nav>
                           </div>
                           <div class="mobile-menu"></div>
                       </div>
                   </div>
               </div>
           </div>
       </header>
        <!-- header end -->