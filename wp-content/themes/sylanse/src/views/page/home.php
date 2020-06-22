<section id="home">
    <div class="intro">
        <img src="<?= $redux['image-cta']['url'] ?>" alt="image-cta">
        <div>
            <h1><?= $redux['titre-cta'] ?></h1>
            <p><?= $redux['description-cta'] ?></p>
            <a href="<?= get_permalink(725) ?>" style="color:black;">> Voir les cours</a>
        </div>
    </div>
    <?php if (!empty($articles)): ?>
        <h2 class="title">Dernières actualités</h2>
        <div class="articles">
            <?php foreach ($articles as $id => $article): ?>
                <article class="card">
                    <img src="<?= !empty($article["image"]) ? $article["image"] : get_stylesheet_directory_uri()."/assets/img/placeholder.png"?>" alt="<?= $article["post_title"] ?>">
                    <h3>Lorem ipsum</h3>
                    <h4><?= $article["post_title"] ?></h4>
                    <a href="<?= get_permalink($article['ID']) ?>">> En savoir plus</a>
                </article>
            <?php endforeach; ?>
        </div>
        <a style="color: black;display: block;text-align: center;margin-top: 4em" href="<?= get_permalink(683) ?>">> Voir toutes les actualités</a>
        <hr>
    <?php endif; ?>
    <?php if (!empty($testimonies)): ?>
        <h2  class="title">Les témoignages de mes élèves</h2>
        <div class="recommandations">
            <?php foreach ($testimonies as $id => $testimony): ?>
                <article class="reco">
                    <img src="<?= !empty($testimony["image"]) ? $testimony["image"] : get_stylesheet_directory_uri()."/assets/img/placeholder.png"?>" alt="<?= $testimony["post_title"] ?>">
                    <div>
                        <h3><?= $testimony["post_title"] ?></h3>
                        <h4><?= !empty($testimony['post_date']) ? date('d/m/Y', strtotime($testimony['post_date'])) : '' ?></h4>
                        <p><?= $testimony["post_excerpt"] ?></p>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
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

