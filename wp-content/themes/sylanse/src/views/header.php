<header>
    <nav>
        <?php if (!empty($redux['logo_header'])): ?>
            <img src="<?= $redux['logo_header']['url'] ?>" alt="logo">
        <?php endif; ?>
        <?php wp_nav_menu(
            array(
                'items_wrap' => '%3$s',
                'theme_location' => "menu_header",
                "container" => "div",
                'walker' => new sylanseWalker(),
            )
        );
        ?>
    </nav>
</header>
