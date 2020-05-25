<section class="container">
    <?php if (!empty($articles)): ?>
        <h2 class="mb-3 mt-3">Les dernières actualités</h2>
        <div>
            <?php foreach ($articles as $id => $article): ?>
                <div>
                    <img style="max-height: 300px; width: auto" alt="<?= $article["post_title"] ?>" src="<?= !empty($article["image"]) ? $article["image"] : get_stylesheet_directory_uri()."/assets/img/placeholder.png"?>">
                    <h4><?= $article["post_title"] ?></h4>
                    <p><?= !empty($article["post_excerpt"]) ? $article["post_excerpt"] : mb_substr(strip_tags($article["post_content"]), 0, 100)."..." ?></p>
                    <a href="<?= get_permalink($article['ID']) ?>">En savoir plus</a>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <?php if (!empty($testimonies)): ?>
    <h2  class="mb-3 mt-3">Les témoignages</h2>
        <div>
            <?php foreach ($testimonies as $id => $testimony): ?>
                <div>
                    <p><?= $testimony["post_excerpt"] ?></p>
                    <img style="max-height: 300px; width: auto" alt="<?= $testimony["post_title"] ?>" src="<?= !empty($testimony["image"]) ? $testimony["image"] : get_stylesheet_directory_uri()."/assets/img/placeholder.png"?>">
                    <h4><?= $testimony["post_title"] ?></h4>
                    <?php if (!empty($testimony["age"])): ?>
                        <p><?= $testimony["age"] ?> ans</p>
                    <?php endif; ?>
                    <?php if (!empty($testimony["note"])): ?>
                        <p>Note : <?= $testimony["note"] ?></p>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>

