<?php

function chek_ress($id){

    ////////////////////////////////////////////////////////
$user='root';
$pass='2V5xK@t!';
try {
$connect = new PDO('mysql:host=mysql;dbname=site', $user, $pass);
}
catch(PDOException $e){
echo 'Подключение не удалось: ' . $e->getMessage();
}
////////////////////////////////////////////////////////

//  ---  check 

$qery_check="SELECT `id`, `id_equipment`, `check_data`, `check_kol`, `check_inf` FROM `check`";
$result_check = $connect->prepare($qery_check);
$result_check->execute();

    if($result_check->rowCount() > 0){
      while($res_check = $result_check->fetch(PDO::FETCH_BOTH)){
        if(($id) == ( $res_check['id_equipment'])){
          $string_rec .= '  <br> id :' .$res_check['id_equipment']. 
          ' check_data : '.$res_check['check_data']. 
          ' check_kol : '.$res_check['check_kol']. 
          ' check_inf : '.$res_check['check_inf']. 
          '  <br> ';
        }
      }
     }
     return $string_rec;
  }
  ?>