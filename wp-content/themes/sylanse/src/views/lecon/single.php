<section class="container">
    <div class="mb-5">
        <h1 class="mb-5"><?= $lecon['post_title'] ?></h1>
        <div>
            <?= $lecon['post_content'] ?>
        </div>
    </div>
    <?php if (!empty($quizz) && !empty($quizz['questions'])): ?>
        <div>
            <h3 class="mb-2"><?= $quizz['post_title'] ?></h3>
            <form method="post" action="">
                <?php foreach ($quizz['questions'] as $id => $question): ?>
                    <?php if(!empty($question['reponses_possibles']) && !empty($question['bonne_reponse'])): ?>
                        <p class="mb-3 mt-3"><?= $question['libelle'] ?></p>
                        <?php foreach ($question['reponses_possibles'] as $reponse): ?>
                            <div>
                                <input type="radio" id="<?= $reponse['reponse'] ?>" name="<?= slugify($question['libelle']) ?>" value="<?= $reponse['id'] ?>">
                                <label for="<?= $reponse['reponse'] ?>"><?= $reponse['reponse'] ?></label>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
                <input type="submit" value="Valider" class="mt-3">
            </form>
        </div>
    <?php endif; ?>
</section>
