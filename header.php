<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="<?php echo esc_url(home_url('/')); ?>">Strona główna</a></li>
                <li><a href="<?php echo esc_url(home_url('/kim-jestesmy')); ?>">Kim Jesteśmy</a></li>
                <li><a href="<?php echo esc_url(home_url('/kontakt')); ?>">Kontakt</a></li>
            </ul>
        </nav>
    </header>
    <main>
