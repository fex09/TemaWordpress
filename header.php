<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  
    <title>Super Tema</title>
    <?php wp_head(); ?><!-- aquí es donde wordpress agrega todo lo que yo modifico del tema.--> 
</head>
<body>

    <?php wp_nav_menu(array('theme_location' => 'primary')); ?> 
 