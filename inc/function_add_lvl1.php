<?php


function checkadd_lvl1($id_equipment,$check_data,$check_kol,$check_inf){

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

$query="INSERT INTO `check`(`id`, `id_equipment`, `check_data`, `check_kol`, `check_inf`) 
        VALUES (:id, :id_equipment, :check_data, :check_kol, :check_inf)";


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



}


?>