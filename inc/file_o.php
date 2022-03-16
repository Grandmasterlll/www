<?php 
session_start();

$today = date("Y-m-d");

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

$fd = fopen("../file_report/".$today.".txt", 'w') or die("не удалось создать файл");

//$str = "eee dxfgf dergdxhj nma";

$qery="SELECT `id`, `id_equipment`, `check_data`, `check_kol`, `check_inf` FROM `check`";
$result = $connect->prepare($qery);
             $result->execute();

             if($result->rowCount() > 0){
                while($res = $result->fetch(PDO::FETCH_BOTH)){
                    $arr[]= $res['id'];

                    $str=" 
                    _____________________________________________
                    № ".$res['id']."
                    _____________________________________________
                    id : [".$res['id']."]
                    id_equipment : [".$res['id_equipment']."]  
                    check_data : [".$res['check_data']."] 
                    check_kol : [".$res['check_kol']."] 
                    check_inf : [".$res['check_inf']."]

                    _____________________________________________
                    
                    ";

                    fwrite($fd, $str);
                }
            }


fclose($fd);


header('Location: ../reports.php');  

?>