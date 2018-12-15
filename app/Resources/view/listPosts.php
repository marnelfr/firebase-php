<div class="col-md-8 col-offset-md-2">
    <h3>Liste des articles de <?= $user ?></h3>
    <div class="col-md-11 col-offset-md-1">
        <ul>
            <?php foreach($posts as $key => $post): ?>
                <li><a href="?p=post&key=<?= $key ?>"><?= $post['title'] ?></a></li>
                <small><?php echo substr($post['content'], 0, 20) . '...' ?></small>
            <?php endforeach; ?>
        </ul>
    </div>
</div>