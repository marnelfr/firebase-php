<?php
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

/**
 * Created by PhpStorm
 * User: Marnel Fresh'eur
 * Date: 14/12/2018
 * Time: 01:29
 */

class App {

    private static $_instance;
    private $db;

    public static function get() {
        if(self::$_instance === null) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function getDatabase() {
        if($this->db === null) {
            // TODO: implement connexion
        }
        return $this->db;
    }

    public function addPost($data) {
        // TODO: Imprement add post
    }

    public function userPosts($key) {
        // TODO: Imprement the user posts

        return [
            'user' => $username,
            'posts' => $posts
        ];
    }

    public function usersList() {
        // TODO: Imprement users list
    }

    public function getPost($key) {
        // TODO: Imprement get post
    }

    public function editPost($key, $data) {
        // TODO: Imprement update post
        return $this->getPost($key);
    }

    public function removePost($key) {
        // TODO: Imprement remove post
    }


}

function dump($var) {
    echo '<pre>';
        var_dump($var);
    echo '</pre>';
}