<section id="det_article">
<?php if (!empty($post["image"])): ?>
            <img class="head_article" src="<?= $post["image"] ?>" alt="illustration article">
        <?php endif; ?>
    <h1><?= $post["post_title"] ?></h1>
    <?php if(!empty($post["category"])): ?>
        <p class="categorie"><?= $post['category'] ?></p>
    <?php endif; ?>
    <div class="content">
        
        <div>
            <?= $post["post_content"] ?>
        </div>
    </div>
    <div class="preview">
        <img src="<?= get_stylesheet_directory_uri().'/assets/img/home-cta-image.png' ?>" alt="home-cta-image">
        <div>
            <h3>Vous voulez en voir plus ? N'attendez plus !</h3>
            <p>Allez-y, consultez les cours ! Accédez au prochain à toutes mes leçons et former vous à l'administration réseau.</p>
            <br>
            <a href="<?= get_permalink(725) ?>" style="color:black;">> J'accède aux cours</a>
        </div>
    </div>
</section>

