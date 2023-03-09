<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/35da025e0b.js" crossorigin="anonymous"></script>
    <?php if (
        wp_get_environment_type() === 'local' &&
        is_array(wp_remote_get('http://localhost:3000'))
    ) : ?>
        <script type="module" src="http://localhost:3000/@vite/client"></script>
        <script type="module" src="http://localhost:3000/resources/scripts/index.js"></script>
    <?php else : ?>
        <?php $manifest = json_decode(file_get_contents(get_theme_file_path('assets/manifest.json')), true); ?>
        <script type="module" src="<?= get_theme_file_uri('assets/' . $manifest['resources/scripts/index.js']['file']) ?>" defer></script>
        <link rel="stylesheet" href="<?= get_theme_file_uri('assets/' . $manifest['resources/scripts/index.js']['css'][0]) ?>">
    <?php endif; ?>

    <?php wp_head(); ?>
</head>

<body class="z-0" >
        <?php wp_body_open(); ?>
    <header class="relative flex justify-between md:items-center p-4">
        <div class="logo">
             <?php the_custom_logo(  ) ?>
        </div>
        <nav role="navigation" id="desktop-menu" class="flex justify-between md:flex-col md:items-center w-full">
            <div  class="flex flex-col md:flex-row mb-4 text-2xl text-bold">
                <p class="capitalize">JIHANE MALFI </p>
            </div>
            <?php wp_nav_menu([
                'theme_location' => 'navigation',
                'menu_class'     => 'nav-menu-desktop',
                'container_class' => 'flex justify-center',
                ]);
            ?>
            <div class="flex flex-col">
                <div class="btn-toggle md:hidden">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <div id="nav-menu-mobile" class="hidden">
                    <div class="flex justify-end p-2 btn-toggle">
                        <i class="fa-solid fa-xmark fa-lg"></i>
                    </div>
                    <?php wp_nav_menu([
                            'theme_location' => 'navigation',
                            'menu_class'     => '',
                            'container_class' => 'flex justify-start',
                        ]);
                    ?>
                </div>
            </div>
        </nav>
    </header>
