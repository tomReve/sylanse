<?php

add_action('wp', function() {
    add_action('wp_enqueue_scripts', 'sylanse_enqueue'); # /assets/assets.php

    #Base
    add_action('sylanse_header', 'sylanse_header'); # /src/controllers/header.php
    add_action('sylanse_footer', 'sylanse_footer'); # /src/controllers/footer.php

    #Page
    if ( get_post_type() == 'page') {
        if ( is_home() || is_front_page() ) {
            add_action('sylanse_content', 'sylanse_home');
        } else {
            add_action('sylanse_content', 'sylanse_page_single');
        }
    }; # /src/controllers/page.php

    #Posts
    if ( get_post_type() == 'post' ) add_action('sylanse_content', 'sylanse_post_single'); # /src/controllers/post
    if ( get_post_type() == 'page' && get_the_ID() == 683){
        remove_action('sylanse_content', 'sylanse_page_single');
        add_action('sylanse_content', 'sylanse_post_list');
    } #/src/controllers/post.php

    #Cours
    if ( get_post_type() == 'cours' ) add_action('sylanse_content', 'sylanse_cours_single'); # /src/controllers/post
    if ( get_post_type() == 'page' && get_the_ID() == 725){
        remove_action('sylanse_content', 'sylanse_page_single');
        add_action('sylanse_content', 'sylanse_cours_list');
    } #/src/controllers/post.php

    #Lecon
    if ( get_post_type() == 'lecon' ) add_action('sylanse_content', 'sylanse_lecon_single'); # /src/controllers/post

}, 1);
