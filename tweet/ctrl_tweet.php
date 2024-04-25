<?php
session_start();
//controleur tweet
class Tweet extends User {
    
    public function createTweet(){
        if ($this->content != NULL){
            $id = $_SESSION['id'];
            $req = "INSERT INTO tweet(id_user,content) VALUE ('$id','$this->content')";
            $result = $this->connect_to_db()->prepare($req);
            $result->execute();

            $this->content = NULL;

            header("Location: vue_aff_tweet.php");
        }
    }

    public function defineLog() {
        $_SESSION['username'] = $this->username;
        $_SESSION['password'] = $this->password;
    }

    public function recupLog() {
        $this->username = $_SESSION['username'];
        $this->password = $_SESSION['password'];
    }
    
    public function displayTweet(){
        
        $req = "SELECT tweet.content,user.at_user_name,tweet.time FROM user JOIN tweet ON tweet.id_user = user.id";
        $result = $this->connect_to_db()->prepare($req);
        $result->execute();

        $result = $this->affFull();
        // echo $_SESSION['username'];
        $validUser = false;
        $validPwd = false;
        // $_SESSION['username'] = $this->username;
        // $_SESSION['password'] = $this->password;
        //print_r($result);
        foreach ($result as $array) {
            //print_r($array);
            foreach ($array as $key => $value) {
                //echo $key . " : " . $value . "<br>";
                if ($key === "username" && $value === "$this->username") {
                    //echo $key . " : " . $value . "<br>";
                    $validUser = true;

                }
                if ($key === "password" && $value === "$this->password") {
                    //echo $key . " : " . $value . "<br>";
                    $validPwd = true;
                }
            }
        }
        if ($validUser && $validPwd) {
            $req = "SELECT * FROM user JOIN tweet ON tweet.id_user = user.id ORDER BY tweet.id desc";
            $result = $this->connect_to_db()->prepare($req);
            $result->execute();
    
            foreach ($result as $a){ ?>
                <article>
                    <a href="../profil/vue_profil_membre.php?username=<?=$a["id_user"];?>"><?=$a["at_user_name"];?></a>
                    <p><?= $a["content"];?></p>
                    <h6><?= $a["time"];?></h6>
                </article><?php
            }
            return true;
        } else {
            return false;
        }
    }

    public function displayHashtag(){
        
        $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        // echo substr("$actual_link",44);
        $hashtag = substr("$actual_link",44);

        $req = "SELECT tweet.content, user.at_user_name FROM user JOIN tweet ON tweet.id_user = user.id WHERE tweet.content LIKE '%#$hashtag%'";
        $result = $this->connect_to_db()->prepare($req);
        $result->execute();

        foreach ($result as $a){ ?>
            <article>
                <p >nom: <?= $a["at_user_name"];?></p> 
                <p>tweet: <?= $a["content"];?></p> 
            </article><?php
        }
    }

    public function response(){

        if ($this->content != NULL){
            $req = "INSERT INTO `tweet` VALUES (1,1,NULL,'2024-02-21 10:42:31','SALUT VOICI UN TWEET DE SYPHAX',NULL),(2,2,1,'2024-02-21 10:42:53','bon tweet ça',NULL),(3,1,2,'2024-02-21 10:43:17','merci',NULL)";
            $result = $this->connect_to_db()->prepare($req);
            $result->execute();

            $this->content = NULL;

            header("Location: vue_aff_tweet.php");
        }
    }
}
