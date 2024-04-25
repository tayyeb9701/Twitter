<?php
// controleur
include_once 'mdl_chat.php';
class CtrlMessage extends Message {

    public function getTask() {
        $task = "list";
        if (array_key_exists("task", $_GET)) {
            $task = $_GET['task'];
        }

        if ($task === "write") {
            $this->insertMessage();
            if ($this->isInsert) {
                header("Location: chat.php");
                die();
            }
        } else {
            $this->showMessages();
        }
    }

    
    public function insertMessage() {
        if ($_POST['content'] === "") {
            echo "CONTENT EMPTY" . "<br>";
            return;
        }
        $sql_insert = "INSERT INTO messages(id_convo, id_user, content) VALUES('5', '7', '$this->content');";
        $query_insert = $this->connect_to_db()->prepare($sql_insert);
        $query_insert->execute();
        $this->isInsert = true;
        echo "sucess";
    }


    public function showMessages() {
        $sql_msgs = "SELECT * FROM messages";
        $query_msgs = $this->connect_to_db()->prepare($sql_msgs);
        $query_msgs->execute();
        $result_msgs = $query_msgs->fetchAll();
        //print_r($result_msgs);
        // $json = json_encode($result_msgs);
        // print_r(json_decode($json));
        //echo $this->content;
        echo json_encode($result_msgs);
    }
}


?>