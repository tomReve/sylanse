<header class="mb-5">
    <div class="container">
        <div class="d-flex justify-content-between">
            <?php if (!empty($redux['logo_header'])): ?>
                <img src="<?= $redux['logo_header']['url'] ?>" alt="logo" style="max-height: 100px; width: auto">
            <?php endif; ?>
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
        </div>
    </div>
</header>
