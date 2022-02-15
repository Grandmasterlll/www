<?php

header("Content-Type: text/html; charset=UTF-8");
session_start();



//
////////////////////////////////////
//           connect
////////////////////////////////////
//
$user='root';
$pass='2V5xK@t!';

try {
$connect = new PDO('mysql:host=mysql;dbname=site', $user, $pass);
}
catch(PDOException $e){
echo 'Подключение не удалось: ' . $e->getMessage();
}
//
////////////////////////////////////
//     
////////////////////////////////////
//

// SELECT * FROM `check`

$query="INSERT INTO `check`(`id`, `id_equipment`, `check_data`, `check_kol`, `check_inf`, `kol`) 
        VALUES (:id, :id_equipment, :check_data, :check_kol, :check_inf, :kol)";



$params = [
    ':id' => null,
    ':id_equipment'=>$log,
     ':check_data'=>$log,
      ':check_kol'=>$log,
       ':check_inf'=>$log,
        ':kol'=>$log

];
/*
$stmt = $connect->prepare($query);
        $stmt->execute($params);

        $connect=null;
        $stmt=null;

$_SESSION['message'] = 'Регистрация прошла успешно!';
header('Location: ../login.php');
*/
//$qery="SELECT `id`, `name`, `type`, `number`, `additional_information` FROM `equipment` ";
//$result = $connect->prepare($qery);
//$result->execute();
