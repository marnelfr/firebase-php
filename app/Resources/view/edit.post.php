<div class="col-md-8 col-md-offset-2">
    <form action="index.php?p=update&key=<?= $key ?>" method="post">
        <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" name="title" class="form-control" value="<?= $post['title'] ?>">
        </div>
        <div class="form-group">
            <label for="content">Contenu</label>
            <textarea name="content" class="form-control" cols="30" rows="10"><?= $post['content'] ?></textarea>
        </div>
        <div class="form-group">
            <label for="pseudo">Pseudo</label>
            <input type="text" name="pseudo" value="<?= $post['pseudo'] ?>" class="form-control">
        </div>
        <input type="submit" class="btn btn-success">
    </form>
</div>