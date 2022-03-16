<?php
header("Content-Type: text/html; charset=UTF-8");
session_start();
/*
---------------------------------------  []
оборудования

*/
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
                <li><a href="O_file.php">Отчеты \ пометки </a></li>
                <li><a href="equipment_overview.php">Оборудование</a></li>
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