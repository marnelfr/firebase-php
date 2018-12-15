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
            $serviceAccount = ServiceAccount::fromJsonFile(dirname(__DIR__) . '/app/config/test-b390c-a5cf2394a813.json');
            $firebase = (new Factory())->withServiceAccount($serviceAccount)->create();
            $this->db = $firebase->getDatabase();
        }
        return $this->db;
    }

    public function addPost($data) {
        if($data['pseudo'] !== ''){
            $data['createdAt'] = new DateTime();
            $this->getDatabase()
                 ->getReference('post')
                 ->push($data);

            $this->getDatabase()
                ->getReference('uses')
                ->push($data['pseudo']);
        }
    }

    public function userPosts($r) {
        $datum = $this->getDatabase()
            ->getReference('users')
            ->orderByKey()
            ->equalTo($r)
            ->getValue();

        $username = end($datum);

        $posts = $this->getDatabase()
                      ->getReference('post')
                      ->orderByChild('pseudo')
                      ->equalTo($username)
                      ->getValue();

        return [
            'user' => $username,
            'posts' => $posts
        ];
    }

    public function usersList() {
        $r = $this->getDatabase()
            ->getReference('users')
            ->getValue();
        return $r;
    }

    public function getPost($key) {
        return $this->getDatabase()
            ->getReference('post')
            ->orderByKey()
            ->equalTo($key)
            ->getValue();
    }

    public function editPost($key, $data) {
        $this->getDatabase()->getReference('post')
            ->update([
                $key => $data
            ]);
        return $this->getPost($key);
    }

    public function removePost($key) {
        return $this->getDatabase()
            ->getReference('post')
            ->set([
                $key => null
            ]);
    }


}

function dump($var) {
    echo '<pre>';
        var_dump($var);
    echo '</pre>';
}