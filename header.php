<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekin Value Development</title>

    <?php wp_head();?>
    
</head>
<body <?php body_class('casiopea-main-class');?>>



<header id="cp-header" class="">


    <nav class="nm-nav">

        <div class="logo-container">
                <a href="<?php bloginfo('url');?>" class="enlace">
                    <!-- Descomentar las siguientes dos lineas para versiones distintas en móvil y escritorio -->
                    <!-- <img src="<?php bloginfo('template_directory');?>/assets/images/logo_nav_apaisada.svg" alt="LogoEmpresa" width="145" height="70" class="logo logo__nav__apaisada"> -->
                    <!-- <img src="<?php bloginfo('template_directory');?>/assets/images/logo-vertical.svg" alt="LogoEmpresa" width="145" height="70" class="logo logo__nav__vertical"> -->

                    <img src="<?php bloginfo('template_directory');?>/assets/images/logo.png" alt="LogoEmpresa" width="145" height="70" class="logo">
                </a>    
        </div>

        <input type="checkbox" id="check">
        
        <label for="check" class="hamburger-btn">
            <!-- <div class="nav__label"> -->
                    <span class="line1__bars-menu"></span>
                    <span class="line2__bars-menu"></span>
                    <span class="line3__bars-menu"></span>
        
            <!-- </div> -->
        </label>    
        
        <?php 
            wp_nav_menu(
                array(
                    'theme_location' => 'header-menu',
                    'container' => 'ul',
                    'menu_class' => 'nav-list',
                    'add_li_class' => 'active'
                )
                );
        ?>
        
    </nav>
    

</header>
 




