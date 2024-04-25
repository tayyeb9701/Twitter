<?php

//controleur inscription

class ViewUser extends User {

    public function createUser(){
        $req = "INSERT INTO user (username, at_user_name, profile_picture, bio, banner, mail, password, birthdate, city, campus) VALUES ('$this->username', '$this->AtUsername', '', '', '', '$this->mail', '$this->password', '$this->birthdate', '$this->city', '')";
        $result = $this->connect_to_db()->prepare($req);
        $result->execute();
        header("location: ../index.php");
    }
}
?>