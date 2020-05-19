<section class="container">
    <div class="page-content mb-5">
        <h1><?= $page['post_title'] ?></h1>
        <div>
            <?= $page['post_content'] ?>
        </div>
    </div>
    <?php if (!empty($cours)): ?>
        <div class="liste-cours">
            <?php foreach ($cours as $id => $item): ?>
                <div>
                    <img src="<?= !empty($item['image']) ? $item['item'] : get_stylesheet_directory_uri().'/assets/img/placeholder.png' ?>" alt="<?= $item['post_title'] ?>">
                    <h3><?= $item['post_title'] ?></h3>
                    <?php if (!empty($item['post_content'])): ?>
                        <p><?= mb_substr(strip_tags($item['post_content']), 0, 150) . '...' ?></p>
                    <?php endif; ?>
                    <div>
                        <a href="<?= get_permalink($item['ID']) ?>">En savoir plus</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>

