<footer>
    <img src="<?= $redux['logo-footer']['url'] ?>" alt="logo-footer">
    <section>
        <div>
            <h2>Nous contacter</h2>
            <p>6 rue du Quebec, 10000 Troyes</p>
            <p>sylanse@gmail.com</p>
        </div>
        <?php wp_nav_menu(
            array(
                'items_wrap' => '%3$s',
                'theme_location' => "menu_header",
                "container" => "div",
                'walker' => new sylanseWalker(),
            )
        );
        ?>
    </section>
</footer>
