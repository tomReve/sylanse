<section id="detail_cours">
    <?php if (!empty($cours['image'])) : ?>
        <img class="head_article" src="https://d1fmx1rbmqrxrr.cloudfront.net/cnet/optim/i/edit/2019/04/eso1644bsmall__w770.jpg" alt="illustration">
    <?php endif; ?>
    <h1><?= $cours['post_title'] ?></h1>
    <p class="details">
        <?php if (!empty($cours['cat_cours'])): ?>
            <span>Catégorie : <?= $cours['cat_cours'] ?></span>
        <?php endif; ?>
        <?php if (!empty($cours['difficulte'])): ?>
            <span>Difficulté : <?= $cours['difficulte'] ?></span>
        <?php endif; ?>
        <?php if (!empty($cours['duree'])): ?>
            <span>Durée : <?= $cours['duree'] ?></span>
        <?php endif; ?>
    </p>
    <p class="author">Auteur : M. Gommery</p>
    <div>
        <?= $cours['post_content'] ?>
    </div>
    <a href="" class="cta">Commencer le cours</a>
    <?php if (!empty($cours['lecons'])): ?>
            <?php foreach ($cours['lecons'] as $id => $lecon): ?>
                <button class="accordion"><p><span><?= $id+1 ?>/</span><?= $lecon['post_title'] ?></p></button>
                <div class="panel">
                    <p><?= $lecon['post_content'] ?></p>
                </div>
            <?php endforeach; ?>
    <?php endif; ?>
    <a href="" class="cta">Commencer le Quizz</a>
</section>

<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
    panel.style.maxHeight = null;
    } else {
    panel.style.maxHeight = panel.scrollHeight + "px";
    }
    });
    }
</script>

