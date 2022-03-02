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

$query="INSERT INTO `check`(`id`, `id_equipment`, `check_data`, `check_kol`, `check_inf`) 
        VALUES (:id, :id_equipment, :check_data, :check_kol, :check_inf)";

$id_equipment = $_POST['chek'];
$check_inf = $_POST['chekt'];
$check_kol=$_SESSION['kol'];
$check_data=$_SESSION['check_data'];

$params = [
        ':id' => null,
        ':id_equipment'=>$id_equipment,
        ':check_data'=>$check_data,
        ':check_kol'=>$check_kol,
        ':check_inf'=>$check_inf
];

$stmt = $connect->prepare($query);
$stmt->execute($params);
$connect=null;
$stmt=null;
$_SESSION['messageadd'] = 'проверка прошла успешно! id = '.$id_equipment;

header('Location: ../action_mess.php');
//header('Location: ../function2.php');

/*
*/
//$qery="SELECT `id`, `name`, `type`, `number`, `additional_information` FROM `equipment` ";
//$result = $connect->prepare($qery);
//$result->execute();
