<?php
class recherche extends MyDataBase{

    public function rechercher(){

        $sql = "SELECT * FROM user  WHERE username LIKE '%$this->recherche%' ";
        $result = $this->connect_to_db()->prepare($sql);
        $result->execute();
        $row=$result->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($row as $rows){
            echo "<br>";
            echo "Username : " . $rows['username']  . "<br>";            
            echo "@ : " . $rows['at_user_name'] . "<br>";
            echo "City : " . $rows['city'] . "<br>";
            echo "Bio : " . $rows['bio'] . "<br>";
            echo "<br>";
        }
    }
}
?>