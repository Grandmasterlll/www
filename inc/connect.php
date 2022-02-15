<?php

   // $connect = mysqli_connect('localhost:3306', 'root', '2V5xK@t!', 'site');

 
    $user='root';
    $pass='2V5xK@t!';

try {
    $connect = new PDO('mysql:host=mysql;dbname=site', $user, $pass);
    
    

}
catch(PDOException $e){
    echo 'Подключение не удалось: ' . $e->getMessage();

}


?>