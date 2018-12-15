<div class="col-md-8 col-md-offset-2">
    <?php foreach($posts as $key => $post): ?>
        <h2 class="text-center"><?= $post['title'] ?> <small><a href="?p=edit&key=<?= $key ?>">Modifier</a><a href="?p=remove&key=<?= $key ?>">Modifier</a></small></h2>
        <p>
            <?= $post['content'] ?>
        </p>
        <p>

        </p>
    <?php endforeach; ?>
</div>