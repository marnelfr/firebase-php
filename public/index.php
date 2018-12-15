<?php
define('ROOT', dirname(__DIR__));

require_once ROOT . '/vendor/autoload.php';


$app = App::get();

if(isset($_GET['p'])){
    $p = strip_tags($_GET['p']);
}else{
    $p = 'home';
}

ob_start();

start:

if($p === 'home'){
    require ROOT . '/app/Resources/view/home.php';
}elseif($p === 'ajout'){
    require ROOT . '/app/Resources/view/ajout.php';
}elseif($p === 'ajouter'){
    $app->addPost($_POST);
    $p = 'home';
    goto start;
}elseif($p === 'remove'){
    $app->removePost(strip_tags($_GET['key']));
    $p = 'home';
    goto start;
}elseif($p === 'redacteur'){
    $key = strip_tags($_GET['key']);
    $data = $app->userPosts($key);
    $posts = $data['posts'];
    $user = $data['user'];
    require ROOT . '/app/Resources/view/listPosts.php';
}elseif($p === 'redacteurs'){
    $redacteurs = $app->usersList();
    require ROOT . '/app/Resources/view/redacteurs.php';
}elseif($p === 'post'){
    $key = strip_tags($_GET['key']);
    $posts = $app->getPost($key);
    require ROOT . '/app/Resources/view/show.post.php';
}elseif($p === 'update'){
    $key = strip_tags($_GET['key']);
    $posts = $app->editPost($key, $_POST);
    require ROOT . '/app/Resources/view/show.post.php';
}elseif($p === 'edit'){
    $key = strip_tags($_GET['key']);
    $posts = $app->getPost($key);
    $post = end($posts);
    require ROOT . '/app/Resources/view/edit.post.php';
}elseif($p === 'articles'){
    require ROOT . '/app/Resources/view/Articles/articles.php';
}

$content = ob_get_clean();

require ROOT . '/app/Resources/view/Templates/default.php';


/*


$database = $app->getDatabase();


*/


