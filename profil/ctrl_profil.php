<?php

// controleur
// vérifie username et mdp, affiche toutes les infos du profil si elles existent
// modifie les infos du profil avec une vérification de la donnée qui veut être changée

//session_start();
class ViewUser extends User {

    public function showProfil() {
        //echo $_SESSION['username'];
        //echo $_SESSION['password'];
        //$concat = $this->editProfil();
        //echo  "CONCAT : " . $concat . "<br>";
        $result = $this->getUser();
        $validUser = false;
        $validPwd = false;
        //print_r($result);
        //echo "SESSION : " . $_SESSION['username'] . "<br>";
        foreach ($result as $array) {
            //print_r($array);
            foreach ($array as $key => $value) {
                //echo $key . " : " . $value . "<br>";
                if ($key === "username" && $value === $_SESSION['username']) {
                    //echo "key : " . $key . " : " . $value . "<br>";
                    $validUser = true;

                }
                if ($key === "password" && $value === $_SESSION['password']) {
                    //echo "key : " . $key . " : " . $value . "<br>";
                    $validPwd = true;
                }
            }
        }
        if ($validUser && $validPwd) {
            //echo "<br> HEYYY <br>";
            $username_session = $_SESSION['username'];
            $password_session = $_SESSION['password'];
            $profil = "SELECT * FROM user WHERE username = '$username_session' AND password = '$password_session'";
            $echoProfil = $this->connect_to_db()->prepare($profil);
            $echoProfil->execute();
            $result_search = $echoProfil->fetchAll();
            // print_r($result_search);
            foreach ($result_search as $array) {
                foreach ($array as $key => $value) {
                    //echo $key . " : " . $value . "<br>";
                    if ($key === "id") {
                        $_SESSION['id'] = $value;
                    }
                    if ($key === "username" && $value != "") {
                        echo "Username : " . $value . "<br><hr>";
                    }
                    if ($key === "at_user_name" && $value != "") {
                        echo "Arobase : " . $value . "<br><hr>";
                    }
                    if ($key === "profile_picture" && $value != "") {
                        echo "Profil picture : " . $value . "<br><hr>";
                    }
                    if ($key === "bio" && $value != "") {
                        echo "Bio : " . $value . "<br><hr>";
                    }
                    if ($key === "banner" && $value != "") {
                        echo "Banner : " . $value . "<br><hr>";
                    }
                    if ($key === "mail" && $value != "") {
                        echo "Mail : " . $value . "<br><hr>";
                    }
                    if ($key === "birthdate" && $value != "") {
                        echo "Birthdate : " . $value . "<br><hr>";
                    }
                    if ($key === "private" && $value === "1") {
                        echo "private account";
                    }
                    if ($key === "creation_time" && $value != "") {
                        echo "Account creation date : " . $value . "<br><hr>";
                    }
                    if ($key === "city" && $value != "") {
                        echo "City : " . $value . "<br><hr>";
                    }
                    if ($key === "campus" && $value != "") {
                        echo "Campus : " . $value . "<br>";
                    }
                }
            }
            // echo $_SESSION['username'] . "<br>";
            // echo $_SESSION['id'];
        } else {
            //echo "reconnect !";
            header("Location: reconnect.html");
        }
    }

    public function editProfil() {
        $result = $this->getUser();
        //tentative de recup la session après le submit
        //echo "SESSION : " . $_SESSION['username'];
        // $user_session = $_SESSION['username'];
        // $pwd_session = $_SESSION['password'];
        // $concat = $user_session . "-" . $pwd_session;
        $validUser = false;
        $validPp = false;
        $validBio = false;
        $validBanner = false;
        $validMail = false;
        $validPwd = false;
        $validPrivate = false;
        $validCity = false;
        $validCampus = false;

        //print_r($result);
        foreach ($result as $array) {
            //print_r($array);
            foreach ($array as $key => $value) {
                //echo $key . " : " . $value . "<br>";
                if ($key === "username" && $value === "$this->username") {
                    //echo $key . " : " . $value . "<br>";
                    $validUser = true;
                }
                if ($key === "city" && $value === "$this->city") {
                    //echo $key . " : " . $value . "<br>";
                    $validCity = true;
                }
                if ($key === "profile_picture" && $value === "$this->profilePicture") {
                    //echo $key . " : " . $value . "<br>";
                    $validPp = true;
                }
                if ($key === "bio" && $value === "$this->bio") {
                    //echo $key . " : " . $value . "<br>";
                    $validBio = true;
                }
                if ($key === "banner" && $value === "$this->banner") {
                    //echo $key . " : " . $value . "<br>";
                    $validBanner = true;
                }
                if ($key === "mail" && $value === "$this->mail") {
                    //echo $key . " : " . $value . "<br>";
                    $validMail = true;
                }
                //$password = hash('ripemd160', 'vive le projet tweet_academy' . $this->password);
                if ($key === "password" && $value === "$this->password") {
                    echo $key . " : " . $value . "<br>";
                    $validPwd = true;
                }
                if ($key === "private" && $value === "$this->private") {
                    //echo $key . " : " . $value . "<br>";
                    $validPrivate = true;
                }
                if ($key === "campus" && $value === "$this->campus") {
                    //echo $key . " : " . $value . "<br>";
                    $validCampus = true;
                }
            }
        }
        if ($validUser) {
            $sql_username = "UPDATE user SET username = '$this->new_username' WHERE username = '$this->username'";
            $update_username = $this->connect_to_db()->prepare($sql_username);
            $update_username->execute();
            echo "username correctly changed <br>";
        } elseif ("$this->username" != "") {
            echo "username incorrect <br>";
        }
        if ($validPp && "$this->new_profilePicture" != "") {
            $sql_pp = "UPDATE user SET profile_picture = '$this->new_profilePicture' WHERE profile_picture = '$this->profilePicture'";
            $update_pp = $this->connect_to_db()->prepare($sql_pp);
            $update_pp->execute();
            echo "profile picture correctly changed <br>";
        } elseif ("$this->profilePicture" != "") {
            echo "profile picture incorrect <br>";
        }
        if ($validBio && "$this->new_bio" != "") {
            $sql_bio = "UPDATE user SET bio = '$this->new_bio' WHERE bio = '$this->bio'";
            $update_bio = $this->connect_to_db()->prepare($sql_bio);
            $update_bio->execute();
            echo "bio correctly changed <br>";
        } elseif ("$this->bio" != "") {
            echo "bio incorrect <br>";
        }
        if ($validBanner && "$this->new_banner" != "") {
            $sql_banner = "UPDATE user SET banner = '$this->new_banner' WHERE banner = '$this->banner'";
            $update_banner = $this->connect_to_db()->prepare($sql_banner);
            $update_banner->execute();
            echo "banner correctly changed <br>";
        } elseif ("$this->banner" != "") {
            echo "banner incorrect <br>";
        }
        if ($validMail) {
            $sql_mail = "UPDATE user SET mail = '$this->new_mail' WHERE mail = '$this->mail'";
            $update_mail = $this->connect_to_db()->prepare($sql_mail);
            $update_mail->execute();
            echo "mail correctly changed <br>";
        } elseif ("$this->mail" != "") {
            echo "mail incorrect <br>";
        }
        if ($validPwd) {
            $new_password =$this->new_password;
            $password = $this->password;
            $sql_password = "UPDATE user SET password = '$new_password' WHERE password = '$password'";
            $update_password = $this->connect_to_db()->prepare($sql_password);
            $update_password->execute();
            echo "password correctly changed <br>";
            echo "PASSWORD : " . $password;
        } elseif ("$this->password" != "" && "$this->password" != "0173299cf22679b261945e5bebb92b288a05f4af") {
            echo "THIS PASSWORD : " . $this->password;
            echo "password incorrect !!! <br>";
        }
        if ($validPrivate) {
            $sql_private = "UPDATE user SET private = '$this->new_private' WHERE private = '$this->private'";
            $update_private = $this->connect_to_db()->prepare($sql_private);
            $update_private->execute();
            echo "private correctly changed <br>";
        }
        if ($validCampus && "$this->new_campus" != "") {
            $sql_campus = "UPDATE user SET campus = '$this->new_campus' WHERE campus = '$this->campus'";
            $update_campus = $this->connect_to_db()->prepare($sql_campus);
            $update_campus->execute();
            echo "campus correctly changed <br>";
        } elseif ("$this->campus" != "") {
            echo "campus incorrect <br>";
        }
        if ($validCity) {
            $sql_city = "UPDATE user SET city = '$this->new_city' WHERE city = '$this->city'";
            $update_city = $this->connect_to_db()->prepare($sql_city);
            $update_city->execute();
            echo "city correctly changed <br>";
        } elseif ("$this->city" != "") {
            echo "city incorrect <br>";
        }
        // $_SESSION['username'] = $user_session;
        // $_SESSION['password'] = $pwd_session;
    }
}



?>