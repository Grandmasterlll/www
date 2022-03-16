<?php
session_start();
try {
  $connect = new PDO('mysql:host=mysql;dbname=site', $user, $pass);
  }
  catch(PDOException $e){
  echo 'Подключение не удалось: ' . $e->getMessage();
  }
$kol=1;
$id_=array_column($_SESSION['user'], 'id');
$kol=$_SESSION['add_unit'];
$sqlm = "UPDATE users SET kol = :uukol WHERE id = :uuid";
$stmtm = $connect->prepare($sqlm);
$stmtm->bindValue(":uuid",  $id_);
$stmtm->bindValue(":uukol", $kol);   
$stmtm->execute();
  header('Location: ../function2.php');  
?>