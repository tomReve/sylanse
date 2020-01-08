<header>
    header
    <?php wp_nav_menu(
        array(
            'theme_location' => "menu_header",
            "container" => "ul",
            'menu_class' => "menu",
            'menu_id' => "main-menu",
            //'walker' => new Walker()
        )
    );
    ?>
</header>
