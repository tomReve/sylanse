<section id="liste_articles">
    <h2 class="title"><?= $page["post_title"] ?></h2>
    <hr>
    <?php if (!empty($posts)): ?>
        <div class="articles">
            <?php foreach ($posts as $id => $post): ?>
                <article class="card">
                    <img src="<?= !empty($post['image']) ? $post['image'] : get_stylesheet_directory_uri() . '/assets/img/placeholder.png'; ?>" alt="<?= $post['post_title']; ?>">
                    <?php if (!empty($post["category"])): ?>
                        <h3><?= $post['category'] ?></h3>
                    <?php endif; ?>
                    <h4><?= $post["post_title"] ?></h4>
                    <a href="<?= get_permalink($post["ID"]) ?>">> En savoir plus</a>
                </article>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>
