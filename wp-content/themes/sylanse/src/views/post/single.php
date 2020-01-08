<h1><?= $post["post_title"] ?></h1>
<ul>
    <li>Date de publication : <?= date('d.m.Y',strtotime($post["post_date"]))?></li>
    <?php if (!empty($post["image"])): ?>
        <li><img src="<?= $post["image"] ?>" alt="illustration article"></li>
    <?php endif; ?>
    <?php if(!empty($post["category"])): ?>
        <li>
            Catégorie : <?php foreach ($post["category"] as $category) : ?><?= $category["name"] ?> <?php endforeach; ?>
        </li>
    <?php endif; ?>
    <?php if($post["post_excerpt"]): ?>
        <li>Chapô : <?= $post["post_excerpt"] ?></li>
    <?php endif; ?>
    <li><?= $post["post_content"] ?></li>
</ul>
