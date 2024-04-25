<?php
session_start();
class following extends MyDataBase{
    
    public function followings(){

        $id = $_SESSION['id'];
        $sql = "SELECT * FROM user INNER JOIN follow ON user.id = follow.id_user WHERE id_follow = $id;
        ";
        $result = $this->connect_to_db()->prepare($sql);
        $result->execute();
        $row=$result->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($row as $rows){
            echo $rows['username']  . "<br>";
            echo $rows['bio'] . "<br>";
            echo $rows['time']  . "<br>";
            echo "<br>";
        }
    }
}

?>