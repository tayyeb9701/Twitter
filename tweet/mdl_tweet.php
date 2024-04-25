<?php

include '../dbh.php';

class User extends MyDataBase {

    public function affFull() {
        $sql = "SELECT * FROM user";
        $result = $this->connect_to_db()->prepare($sql);
        $result->execute();
        $row = $result->fetchAll();
        foreach($row as $rows) {
            $datas[] = $rows;
        }
        return $datas;
    }
}