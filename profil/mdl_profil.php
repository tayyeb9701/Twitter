<?php

// modèle
include '../dbh.php';

class User extends MyDataBase {

    public function getUser() {
        $sql = "SELECT * FROM user;";
        $result = $this->connect_to_db()->prepare($sql);
        $result->execute();
        $row = $result->fetchAll();
        // print_r($row);
        foreach($row as $rows) {
            $datas[] = $rows;
        }
        return $datas;
    }
}