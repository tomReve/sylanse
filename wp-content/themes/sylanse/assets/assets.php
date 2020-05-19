<?php

function sylanse_enqueue() {
    #bootsrap
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js');

    # Sylanse
    wp_enqueue_style('sylanse', get_stylesheet_directory_uri() . '/assets/css/main.css');
    wp_enqueue_script('sylanse', get_stylesheet_directory_uri() . '/assets/js/app.js');
}

//add_image_size('nc_header', 720, 400, true);

add_image_size('liste-actu-home', 720, 400, true);
add_image_size('liste-testimony-home', 720, 400, true);
add_image_size('detail-item', 720, 400, true);
add_image_size('liste-item', 720, 400, true);
