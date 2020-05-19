<section class="container">
    <h1><?= $page["post_title"] ?></h1>
    <?php if(!empty($page["post_excerpt"])): ?>
        <p>Chapô : <?= $page["post_excerpt"] ?></p>
    <?php endif; ?>

    <?php if (!empty($posts)): ?>
        <div>
            <?php foreach ($posts as $id => $post): ?>
                <div>
                    <a href="<?= get_permalink($post["ID"]) ?>"><h3><?= $post["post_title"] ?></h3></a>
                    <p><?= date('d.m.Y', strtotime($post["post_date"])) ?></p>
                    <img src="<?= !empty($post['image']) ? $post['image'] : get_stylesheet_directory_uri() . '/assets/img/placeholder.png'; ?>" alt="<?= $post['post_title']; ?>">
                    <?php if (!empty($post["category"])): ?>
                        <p>Catégorie : <?php foreach ($post["category"] as $category) : ?><?= $category["name"] ?> <?php endforeach; ?></p>
                    <?php endif; ?>
                    <p><?= !empty($post["post_excerpt"]) ? mb_substr($post["post_excerpt"], 0, 100) . '...' : mb_substr(strip_tags($post["post_content"]),0, 100) . '...'?></p>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <?php if (!empty($pagination)): ?>
        <p><?= $pagination ?></p>
    <?php endif; ?>
</section>
