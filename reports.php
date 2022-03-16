<?php
header("Content-Type: text/html; charset=UTF-8");
session_start();

$today = date("Y-m-d");
/*
---------------------------------------  []
оборудования

*/
?>



<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Отчеты</title>
  
  <!-- <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=PT+Sans+Caption"> -->
  <!-- <link rel="stylesheet"  href="./assets/css/style2.css"> -->
  <link rel="stylesheet"  href="./assets/css/style3.css">
  <link rel="stylesheet"  href="./assets/css/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
 
 
</head>
<body>

<style>
.button_1646462101862 {
    display: inline-block !important;
    text-decoration: none !important;
    background-color: #eaeaea !important;
    color: #006089 !important;
    border: 3px solid #006089 !important;
    border-radius: 5px !important;
    font-size: 12px !important;
    padding: 15px 50px !important; 
    transition: all 0.8s ease !important;
}
.button_1646462101862:hover{
    text-decoration: none !important; 
    background-color: #006089 !important;
    color: #ffeded !important;
    border-color: #006089 !important;
}


    .strblok {
    
    /* */
    background: #f5f5f5;
    width: 80%;
    /* height: 80%; */
    height: auto;
    margin: 0 auto;
    padding: 30px;
    /* Поля */
    /* Цвет фона */
    /*border: 2px solid #E81E25;
     Параметры рамки */
  }

  .strblok1 {
    
    /* */
    background: #f5f5f5;
    width: 80%;
    /*
    height: 80%;
    */
    
    margin: 0 auto;
    padding: 30px;
    /* Поля */
    /* Цвет фона */
    /*border: 2px solid #E81E25;
     Параметры рамки */
  }
  
</style>

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
                <li><a href="O_file.php">Пометки </a></li>
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

<!-- --------------------------------------------------------------------------------  -->
<!-- --------------------------------------------------------------------------------  -->
<!-- --------------------------------------------------------------------------------  -->

<div class="strblok">
    <hr>    
    <br>
    <h2>
    Файл отчета за все время
    </h2>
    <br>
<form action="inc/file_o.php" method="post" enctype="multipart/form-data">
<input type="submit" class="button_1646462101862" value="Создать файл отчета за все время" />
</form>

<br>

    <p>
        <a class="button_1646462101862" href="file_report/<?=$today?>.txt" download>Скачать  файл отчета</a>
    
        <br>
        
        <br>
    <hr>
    <br>

    <!-- 
      test
    -->
    <style>
.slide p,
.slide [type="checkbox"]{
    display:none;
}
 
.slide [type="checkbox"]:checked ~ p {
    display:block;
}
      </style>

    <div class="slide">
      <button class="button_1646462101862">
    <label for="slide2" >
       посмотреть отчет в файле
</label>
</button>
        <input type="checkbox" id="slide2"/>
    <p class="content">
    <?php
    $fd = fopen("file_report/$today.txt", 'r') or die("не удалось открыть файл");
    while(!feof($fd))
    {
        $str = htmlentities(fgets($fd));
        print $str.'<br> <br>  <br>';
        
    }
    fclose($fd);
    ?>
    </p>
    </div>


    <!-- 
      text
    -->
  

</div>
    

<!-- --------------------------------------------------------------------------------  -->
<!-- --------------------------------------------------------------------------------  -->
<!-- --------------------------------------------------------------------------------  -->
<br>



<!-- --------------------------------------------------------------------------------  -->
<!-- --------------------------------------------------------------------------------  -->
<!-- --------------------------------------------------------------------------------  -->


<?php 
        
require('f1.php');

  
//echo "<br><h1>teZ</h1> ".chek_ress(5)."";

gl_function();

?>
<!-- --------------------------------------------------------------------------------  -->
<!-- --------------------------------------------------------------------------------  -->
<!-- --------------------------------------------------------------------------------  -->



<br>

<br>
<br>
<hr>
<br>
<br>
<hr>
<br>










<!-- --------------------------------------------------------------------------------  -->
<!-- --------------------------------------------------------------------------------  -->
<!-- --------------------------------------------------------------------------------  -->


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
<style>
  .topbutton {
width:100px;
border:2px solid #ccc;
background:#f7f7f7;
text-align:center;
padding:10px;
position:fixed;
bottom:50px;
right:50px;
cursor:pointer;
color:#333;
font-family:verdana;
font-size:12px;
border-radius: 5px;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
-khtml-border-radius: 5px;
}
</style>
<a href="#" title="Вернуться к началу" class="topbutton">^Наверх</a>

</div> <!---------------------   footer   --------------------->

</div><!--  --------------------  wrapper   ------------------------  -->

<script>
$('.nav-toggle').on('click', function(){
$('#menu').toggleClass('active');
});
</script>




</body>
</html>