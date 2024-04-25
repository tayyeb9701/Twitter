<?php

// modèle
include '../dbh.php';

class Message extends MyDataBase {

    public function getMessages() {
        $sql = "SELECT * FROM messages;";
        $result = $this->connect_to_db()->prepare($sql);
        $result->execute();
        $row = $result->fetchAll();
        //print_r($row);
        return $row;
    }
}