
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    include '../dbh.php';
    
    class Image extends MyDataBase {
    
        public function insertImage() {
            if(isset($_FILES['file'])){
                $tmpName = $_FILES['file']['tmp_name'];
                $name = $_FILES['file']['name'];
                $size = $_FILES['file']['size'];
                $error = $_FILES['file']['error'];
                //echo "name : " . $name;
                //echo "size : " . $size;
            
                $tabExtension = explode('.', $name);
                $extension = strtolower(end($tabExtension));
            
                $extensions = ['jpg', 'png', 'jpeg', 'gif'];
                $maxSize = 1000000;
            
                if(in_array($extension, $extensions) && $size <= $maxSize && $error == 0){
            
                    $uniqueName = uniqid('', true);
                    $file = $uniqueName.".".$extension;
                    //echo "tmp name : " . $tmpName;
                    move_uploaded_file($tmpName, './upload/'.$file);
                    $url = "http://$_SERVER[HTTP_HOST]" . "/change_pp/upload/" . $file;
                    //echo "SESSION : " . $_SESSION['username'];
                    $username_session = $_SESSION['username'];
    
                    $req_update = "UPDATE user SET profile_picture = '$url' WHERE username = '$username_session';";
                    $update = $this->connect_to_db()->prepare($req_update);
                    $update->execute();
    
                    echo "<br> image upload <br>";
                    echo "<img src='$url' style='width: 100px; height: 70px;'>";
                }
                else{
                    echo "<br> error : image can't be upload <br>";
                }
            }
        }
    
        public function showImage() {
            // $profil = "SELECT * FROM user WHERE username = '$this->username' AND password = '$this->password'";
            // $echoProfil = $this->connect_to_db()->prepare($profil);
            // $echoProfil->execute();
            // $result_search = $echoProfil->fetchAll();
            //$url = $this->insertImage();
            //echo $url;
            //echo "<img src='$url' style='width: 300px; height: 200px;'>";
            $req = "SELECT profile_picture FROM user";
            $echoReq = $this->connect_to_db()->prepare($req);
            $echoReq->execute();
            $result = $echoReq->fetchAll();
            var_dump($result);
            echo "<br> done";
            // while($data = $req->fetch()){  
            //     echo "<img src='../upload/".$data['profile_picture']."' width='300px' ><br>";
            // }
        }
    
        
    }
    
    ?>
    
</body>
</html>
<?php