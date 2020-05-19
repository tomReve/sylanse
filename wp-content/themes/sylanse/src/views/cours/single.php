<section class="container">
    <div class="mb-5">
        <h1 class="mb-5"><?= $cours['post_title'] ?></h1>
        <div>
            <?= $cours['post_content'] ?>
        </div>
    </div>
    <?php if (!empty($cours['lecons'])): ?>
        <div>
            <?php foreach ($cours['lecons'] as $id => $lecon): ?>
                <div>
                    <img src="<?= !empty(get_the_post_thumbnail_url($lecon['ID'])) ? get_the_post_thumbnail_url($lecon['ID'], 'liste-item') : get_stylesheet_directory_uri() . '/assets/img/placeholder.png' ?>"
                         alt="<?= $lecon['post_title'] ?>">
                    <h3><?= $lecon['post_title'] ?></h3>
                    <?php if (!empty($lecon['post_content'])): ?>
                        <p><?= mb_substr(strip_tags($lecon['post_content']), 0, 150) . '...' ?></p>
                    <?php endif; ?>
                    <a href="<?= get_permalink($lecon['ID']) ?>">En savoir plus</a>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>

