<div class="col-md-8 col-offset-2">
    <h4>Nos rédacteurs</h4>
    <div class="col-md-8 col-offset-2">
        <ul>
            <?php foreach($redacteurs as $key => $redacteur): ?>
                <li><a href="?p=redacteur&key=<?= $key ?>"><?= $redacteur ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>