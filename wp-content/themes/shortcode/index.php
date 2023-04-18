<?php 
get_header(); // Carga el encabezado del tema

if ( have_posts() ) : // Verifica si hay publicaciones disponibles
    while ( have_posts() ) : the_post();
        the_content(); // Muestra el contenido de la publicación actual
    endwhile;
endif;

get_footer(); 