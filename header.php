<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bienvenue ! Découvrez mon site dédié à mon portfolio : explorez mes projets, découvrez qui je suis, et laissez place à l'inspiration. Bonne découverte !">
    <title>Portefolio</title>

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    
    <!--Police Libre Baskerville-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <!--Police Poppins-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>

<body>
 
 <!--MENU HEADER-->
 <header>
    <nav>
        <?php wp_nav_menu( array(
            'menu' => 'Header',
            'theme_location' => 'En tête du menu',
            'container_class' => 'menu-header',
            'container_id' => 'menu'
        ) );?>
    </nav>
</header>

</body>
</html>