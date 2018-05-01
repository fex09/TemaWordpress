<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  
    <title>Super Tema</title>
    <?php wp_head(); ?><!-- aquí es donde wordpress agrega todo lo que yo modifico del tema.--> 
</head>


<?php
    /* is_home busca la pàgina de blog */
    /** */
    if(is_front_page()):
        $clases_body = array('super-clase', 'mi-clase');
    else:
        $clases_body = array('no-super-clase', 'no-mi-clase');
    endif;
?>


<body <?php body_class($clases_body);?>>

    <?php wp_nav_menu(array('theme_location' => 'primary')); ?> 
 