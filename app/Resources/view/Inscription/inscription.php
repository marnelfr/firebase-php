<?php
if(!empty($_POST)){
    $user = App::getApp()->getTable('user');
    if($user->existe()){
       //l'utilisateur existe déjà
        ?>
        <div class="alert alert-danger">
            <p>
                Monsieur <?= $_POST['nom'] ?> <?= $_POST['prenom'] ?> à déjà un compte sur le site.<br>
                Avez-vous oublié votre mot de passe?.<br>
                = = = = ==============>>> <a href="">Obtenir un nouveau mot de passe</a>
            </p>
        </div>
        <?php
    }else{
        if($user->addUser()){
            ?>
            <div class="alert alert-success">
                <p>
                    Merci pour votre inscription monsieur <?= $_POST['nom'] ?> <?= $_POST['prenom'] ?>.<br>
                    Bienvenue sur notre site.<br>
                    = = = = ==============>>> <a href="">Editez votre premier article</a>
                </p>
            </div>
            <?php
        }
    }

}
?>

<div align="center">
    <h2>Formulaire d'inscription</h2>
    <form method="post">
        <?php
        $form = new \Core\Html\Form($_POST);
        echo $form->input([
            "name" => "nom",
            "autofocus" => "",
            "required" => ""
        ]);
        echo $form->input([
            "name" => "prenom",
            "required" => ""
        ]);
        echo $form->input([
            "name" => "sexe",
            "required" => "",
            "maxlength" => "1"
        ]);
        echo $form->input([
            "type" => "email",
            "required" => "",
            "name" => "email"
        ]);
        echo $form->input([
            "name" => "login",
            "required" => ""
        ]);
        echo $form->input([
            "name" => "pwd",
            "required" => "",
            "placeholder" => "Votre mot de passe"
        ]);
        echo $form->submit('S\'inscrire');
        ?>
    </form>
</div>