<section id="liste_cours">
    <h2 class="title"><?= $page['post_title'] ?></h2>
    <hr>
    <?php if (!empty($cours)): ?>
        <div class="recommandations">
            <?php foreach ($cours as $id => $item): ?>
                <article class="reco">
                    <img src="<?= !empty($item['image']) ? $item['item'] : get_stylesheet_directory_uri().'/assets/img/placeholder.png' ?>" alt="<?= $item['post_title'] ?>">
                    <div>
                        <?php if (!empty($item['cat_cours'])) : ?>
                            <h4><?= $item['cat_cours'] ?></h4>
                        <?php endif; ?>
                        <h3><?= $item['post_title'] ?></h3>
                        <?php if (!empty($item['post_content'])): ?>
                            <p><?= mb_substr(strip_tags($item['post_content']), 0, 150) . '...' ?></p>
                        <?php endif; ?>
                        <a style="color: black;" href="<?= get_permalink($item['ID']) ?>">> Cliquez ici</a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>
