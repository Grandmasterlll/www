<?php
header("Content-Type: text/html; charset=UTF-8");
session_start();
/*
---------------------------------------  []
оборудования

*/


$user='root';
$pass='2V5xK@t!';

try {
$connect = new PDO('mysql:host=mysql;dbname=site', $user, $pass);



}
catch(PDOException $e){
echo 'Подключение не удалось: ' . $e->getMessage();

}
?>



<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Оборудование</title>
  
  <!-- <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=PT+Sans+Caption"> -->
  <!-- <link rel="stylesheet"  href="./assets/css/style2.css"> -->
  <link rel="stylesheet"  href="./assets/css/style3.css">
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
                <li><a href="O_file.php">пометки </a></li>
                <li><a href="equipment_overview.php">Оборудование</a></li>
                <li><a href="reports.php">Отчеты  </a></li>
               <!--<li><a href="#">Отчеты \ пометки </a></li> -->
            </ul>
            </li>
        <li><a href="exit.php">выход</a></li>
    </ul>
     


   

</nav>

  </header>
  <div class="wrapper">   <!---------------------   wrapper   --------------------->
  <div class="content">   <!---------------------   content   --------------------->
<section>

    
<div class="container">



  <style>
    .strblok {
    
    /* */
    background: #f5f5f5;
    width: 100%;
    height: 80%;
    margin: 0 auto;
    padding: 30px;
    /* Поля */
    /* Цвет фона */
    /*border: 2px solid #E81E25;
     Параметры рамки */
}
  </style>
        <!--
        <div class="strblok">
          <a >
            <img class="imgAvatar" src="<?=$scr?>"  width= "40%" height= "45%"; > <br>
                Имя <?=$name?><br>
                Фамилия <?=$surname?><br>
                Должность <?=$post?><br>
                Проведено проверок <?=$kol?>
          </a>
        </div>
        -->

        <!-- ------------------------------------------------------------------------- -->

        <!-- ------------------------------------------------------------------------- -->
        <?php
        $qery="SELECT `id`,
         `name`, `type`, 
         `number`, `date_arrival_equipment`, 
         `date_equipment_installation`,
          `equipment_service_life`, `date_service`,
           `preliminary_date_de_registration`,
            `destiny`, `responsible_person`,
             `installation_location`, `additional_information`,
              `date_de_registration`, `photo` FROM `equipment` ";
             $result = $connect->prepare($qery);
             $result->execute();
             
             if($result->rowCount() > 0){
                while($res = $result->fetch(PDO::FETCH_BOTH)){
                    $arr[]= $res['id'];

                    echo ' 
                    <div class="strblok">
                    Оборудование : '.$res['name'].' number : '.$res['number'].' 
                    <hr>
                     <a >
                      <img class="imgAvatar" src="'.$res['photo'].'"  width= "40%" height= "45%"; > <br>
                      id : '.$res['id'].'<br>
                      Имя : '.$res['name'].' <br>
                      type : '.$res['type'].' <br>
                      number : '.$res['number'].' <br>
                      date_arrival_equipment : '.$res['date_arrival_equipment'].' <br>
                      date_equipment_installation : '.$res['date_equipment_installation'].' <br>
                      equipment_service_life : '.$res['equipment_service_life'].' <br>
                      destiny : '.$res['destiny'].' <br>
                      responsible_person : '.$res['responsible_person'].' <br>
                      installation_location : '.$res['installation_location'].' <br>
                      additional_information : '.$res['additional_information'].' <br>
                      </a>
                      <hr>
                   </div>
                    '
                    ;
                        
                }

            
             }
             ?>
             <!-- ------------------------------------------------------------------------- -->

             <!-- ------------------------------------------------------------------------- -->
    
</div>

</section>

</div>   <!---------------------   content   --------------------->


<div class="footer">  <!---------------------   footer   --------------------->

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

</div> <!---------------------   footer   --------------------->

</div><!--  --------------------  wrapper   ------------------------  -->

<script>
$('.nav-toggle').on('click', function(){
$('#menu').toggleClass('active');
});
</script>




</body>
</html>