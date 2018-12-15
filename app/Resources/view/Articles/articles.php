<div class="col-sm-9">
    <?php foreach(App::getApp()->getTable('article')->all() as $article): ?>
        <h2><a href="<?= null ?>"><?= $article->titre ?></a></h2>
        <p><?= $article->ext ?></p>
    <?php endforeach; ?>
</div>