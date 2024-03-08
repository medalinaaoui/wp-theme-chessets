<!DOCTYPE html>
<html     <?php language_attributes();?>
>
<head>
    <meta charset="<?php bloginfo('charset')   ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback"  href="<?php bloginfo("pingback") ?>"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <title><?php wp_title("-", true, "right"); bloginfo('name'); ?></title>
    <?php  wp_head(); ?>

</head>
<body>
    
<header>

    <h1>
        <?php
        bloginfo('name')
        ?>
    </h1>



<?php
add_header_menu_to_the_menu();

?>


<div class="actions">
<i class="fa-solid fa-magnifying-glass"></i>

</div>

</header>