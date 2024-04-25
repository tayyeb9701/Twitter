<?php

//session_start();
class MyDataBase {
    
    public $mail;
    public $new_mail;
    public $password;
    public $new_password;
    public $username;
    public $new_username;
    public $profilePicture;
    public $new_profilePicture;
    public $bio;
    public $new_bio;
    public $banner;
    public $new_banner;
    public $private;
    public $new_private;
    public $city;
    public $new_city;
    public $campus;
    public $new_campus;
    public $AtUsername;
    public $tweet;
    public $birthdate;
    public $genre;
    public $pseudo;
    public $author;
    public $content;
    public $isInsert;
    public $recherche;

    public $serv;
    public $user;
    public $userpwd;
    public $db_name;
    public $charset;


    public function __construct() {
        if (isset($_POST['mail'])) {
            $this->mail = $_POST['mail'];
        }
        if (isset($_POST['new_mail'])) {
            $this->new_mail = $_POST['new_mail'];
        }
        if (isset($_POST['password'])) {
            $this->password = hash('ripemd160', 'vive le projet tweet_academy' . $_POST['password']);
            $_SESSION['password'] = hash('ripemd160', 'vive le projet tweet_academy' . $_POST['password']);
        }
        if (isset($_POST['new_password'])) {
            $this->new_password = hash('ripemd160', 'vive le projet tweet_academy' . $_POST['new_password']);
        }
        if (isset($_POST['username'])) {
            $this->username = $_POST['username'];
            $_SESSION['username'] = $_POST['username'];
        }
        if (isset($_POST['new_username'])) {
            $this->new_username = $_POST['new_username'];
        }
        if (isset($_POST['profilePicture'])) {
            $this->profilePicture = $_POST['profilePicture'];
        }
        if (isset($_POST['new_profilePicture'])) {
            $this->new_profilePicture = $_POST['new_profilePicture'];
        }
        if (isset($_POST['bio'])) {
            $this->bio = $_POST['bio'];
        }
        if (isset($_POST['new_bio'])) {
            $this->new_bio = $_POST['new_bio'];
        }
        if (isset($_POST['banner'])) {
            $this->banner = $_POST['banner'];
        }
        if (isset($_POST['new_banner'])) {
            $this->new_banner = $_POST['new_banner'];
        }
        if (isset($_POST['private'])) {
            $this->private = $_POST['private'];
        }
        if (isset($_POST['new_private'])) {
            $this->new_private = $_POST['new_private'];
        }
        if (isset($_POST['city'])) {
            $this->city = $_POST['city'];
        }
        if (isset($_POST['new_city'])) {
            $this->new_city = $_POST['new_city'];
        }
        if (isset($_POST['campus'])) {
            $this->campus = $_POST['campus'];
        }
        if (isset($_POST['new_campus'])) {
            $this->new_campus = $_POST['new_campus'];
        }
        if (isset($_POST['AtUsername'])) {
            $this->AtUsername = $_POST['AtUsername'];
        }
        if (isset($_POST['tweet'])) {
            $this->tweet = $_POST['tweet'];
        }
        if (isset($_POST['birthdate'])) {
            $this->birthdate = $_POST['birthdate'];
        }
        if (isset($_POST['genre'])) {
            $this->genre = $_POST['genre'];
        }
        if (isset($_POST['pseudo'])) {
            $this->city = $_POST['pseudo'];
        }
        if (isset($_POST['author'])) {
            $this->author = $_POST['author'];
        }
        if (isset($_POST['content'])) {
            
            if(isset($_POST['content'])){
                $monhashtag = $_POST['content'];
                    
                preg_match_all("/#[^\s]*/i", $monhashtag , $trouver);
    
                $hashtag = preg_replace('#\#([a-z0-9_-]+)#i', '<a href="/tweet/vue_search.php/$1" >#$1</a>', $monhashtag);
                    
                $this->content = $hashtag;
            }
        }
        if (isset($_POST['recherche'])) {
            $this->recherche = $_POST['recherche'];
        }
    }
    
    protected function connect_to_db() {
        $this->serv = "localhost";
        $this->user = 'lacharrogne';
        $this->userpwd = 'Asce0610';
        $this->db_name = 'twitter';
        $this->charset = 'utf8mb4';

        try {
            $dsname = "mysql:host=".$this->serv.";dbname=".$this->db_name.";charset=".$this->charset;
            $pdo = new PDO($dsname, $this->user, $this->userpwd, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
            // $pdo->setAttribute(
            //     PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION
            // );
            return $pdo;
        } catch (PDOException $e) {
            $error = $e->getMessage();
            echo $error;
        }
    }
}
?>