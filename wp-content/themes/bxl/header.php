<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
    <link rel="icon" type="image/png" href="" />
    
    <title>Contacto</title>
    
    <!--Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- Styles -->
    <?php wp_head();?>
    
    
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top bg-white px-5">
        <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
            <img src="<?php bloginfo('template_directory');?>/img/logo_bx.png"  alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end text-white" id="navbarNav">
            
            <?php wp_nav_menu(
                array(
                    'theme_location' => 'top menu',
                    'menu' => 'main-menu',
                    'container' => 'ul',
                    'menu_class' => 'navbar-nav'
                )
                );
            ?>
        </div>
    </nav>
    <div class="container-fluid">