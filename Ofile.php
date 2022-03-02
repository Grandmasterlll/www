<?php
header("Content-Type: text/html; charset=UTF-8");
session_start();
//require_once 'connect.php';

//
////////////////////////////////////
//     connect
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


if (!$_SESSION['user']) {
    header('Location: login.php');
}


 //$scr=array_column($_SESSION['user'],'avatar'); 
 //$array=$_SESSION['user'];
 $kol_=array_column($_SESSION['user'], 'kol');
 $post_=array_column($_SESSION['user'], 'post');
 $avatar_=array_column($_SESSION['user'], 'avatar');
 $name_=array_column($_SESSION['user'], 'name');
 $surname_=array_column($_SESSION['user'], 'surname');
 $scr=$avatar_[0];
 $name=$name_[0];
 $surname=$surname_[0];
 $post=$post_[0];
 $kol=$kol_[0];
 if($kol===null){
     $kol=0;
 }


 
 
 $today = date("Y-m-d H:i:s");


 ?>


<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Отчеты</title>
  
  <!-- <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=PT+Sans+Caption"> -->
  <link rel="stylesheet"  href="./assets/css/style2.css">
  <link rel="stylesheet"  href="./assets/css/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
 
 
</head>
<body>


<!-- 
верхняя  header 
 -->
	<header>
   

<nav class="top-menu" >
  
<ul class="cf">
        <li><a href="index.php">Главное меню</a></li>
        <li><a class="dropdown" href="#">Функции</a>
            <ul>
                <li><a href="regoboryd.php">Регистрация оборудования</a></li>
                <li><a href="function2.php">Проверка оборудования</a></li>
                <li><a href="Ofile.php">Отчеты \ пометки </a></li>
               <!--<li><a href="#">Отчеты \ пометки </a></li> -->
            </ul>
            </li>
        <li><a href="exit.php">выход</a></li>
    </ul>
     


   

</nav>

  </header>
 
<section>
    <!--
    <style>
        .container2{

        }
        .sc {
 display: flex; 
}

.sc  {
  background-color: #f5f5f5;
  padding: 20px;
  max-width: 100%;
  margin: 0 auto;
 
}

.bv{
    background-color: #bdbdbd;
  padding: 10px;
  width: 100%;
  height: 112%;
  /* float: left; */
  

}

    </style>
-->
<style>
    .scs  {
 /* background-color: #f5f5f5;
  padding: 20px;
  max-width: 100%;
  margin: 0 auto;
  */
  float: right;
  align: right;
 
}
</style>
    <hr>
    <div class="sc">
        <center>
<h1> Отчеты  <!--   mesage add    -->
   
      </h1>
</center>




</div>


    <hr>
 
      <div class="container2">
    <div class="bv">

    <table class="table">
	<thead>
		<tr>
			<th> №</th>
			<th>id оборудования</th>
			<th>Дата</th>
            <th>kol</th>
			<th>Дополнительная информация</th>

		</tr>
	</thead>
	<tbody>
    
            <?php 

             $qery="SELECT `id`, `id_equipment`, `check_data`, `check_kol`, `check_inf` FROM `check` ";
             $result = $connect->prepare($qery);
             $result->execute();
             
             if($result->rowCount() > 0){
                while($res = $result->fetch(PDO::FETCH_BOTH)){
                    $arr[]= $res['id'];

                    echo ' <tr> <td>'.$res['id'].'</td>
                    <td>'.$res['id_equipment'].'</td>
                    <td>'.$res['check_data'].'</td>
                    <td>'.$res['check_kol'].'</td>
                    <td>'.$res['check_inf'].'</td>
                    </tr>'
                    ;
                        
                }

            
             }
            ?>

	

	</tbody>
</table>
   

    
    </div>

    
</div>

</section>

<footer>
  <div class="container">
  	<div class="footer-col">
<div class="social-bar-wrap">
        <a title="Facebook" href="" target="_blank"><i class="fa fa-facebook"></i></a>
        <a title="Twitter" href="" target="_blank"><i class="fa fa-twitter"></i></a>
        <a title="Instagram" href="" target="_blank"><i class="fa fa-instagram"></i></a>
      </div> 
  </div>
    <div class="footer-col">
     the project was made <br> by Valentin Drozdovich © 2022 
    </div>
  </div>
</footer>



<script>
$('.nav-toggle').on('click', function(){
$('#menu').toggleClass('active');
});
</script>




</body>
</html>