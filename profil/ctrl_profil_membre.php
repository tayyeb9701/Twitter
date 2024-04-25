<?php
class Membre extends MyDataBase
{
    public function profil_membre()
    {
            $name = $_GET['username'];
            $req = "SELECT * FROM user WHERE id = $name ";
            $result = $this->connect_to_db()->prepare($req);
            $result->execute();
            $row=$result->fetchAll(PDO::FETCH_ASSOC);

            foreach ($row as $a) 
            {
                echo "<br>";
                echo "Username : " . $a['username'] . "<br>";
                echo "@ : " . $a['at_user_name'] . "<br>";
                echo "Email : " . $a['mail'] . "<br>";      
                echo "City : " . $a['city'] . "<br>";
                echo "Bio : " . $a['bio'] . "<br>";
                echo "<br>";
            }
    }

    public function suivre()
    {
        $name = $_GET['username'];
        $id = $_SESSION['id'];
        $sql = "INSERT INTO follow (id_user, id_follow, time) VALUES ($id,$name,curtime())";
        $result = $this->connect_to_db()->prepare($sql);
        $result->execute();
    }
    
}

?>