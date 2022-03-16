<?php
header("Content-Type: text/html; charset=UTF-8");
session_start();

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


 //$scr=  =array_column($scr,'0')


?>


<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Регистрация оборудования</title>
  
  <!-- <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=PT+Sans+Caption"> -->
  <link rel="stylesheet"  href="./assets/css/style3.css">
  <link rel="stylesheet"  href="assets/css/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
  
</head>
<body>


<!-- 
верхняя  header 
 -->
	<header>
   

<nav class="top-menu" >
   <style>
nav ul {
    background: #ddd;
    font-size: 0;
    list-style: none;
    margin: 0;
    padding: 0;
    text-align: center;
    width: 100%;
}
nav li {
    display: inline-block;
    margin: 0;
    padding: 0;
    position: relative;
    min-width: 33%;
}
nav a {
    background: #ddd;
    color: #444;
    display: block;
    font: bold 16px/50px sans-serif;
    padding: 0 25px;
    text-align: center;
    text-decoration: none;
    -webkit-transition: all .25s ease;
       -moz-transition: all .25s ease;
        -ms-transition: all .25s ease;
         -o-transition: all .25s ease;
            transition: all .25s ease;
}
nav .dropdown:after {
    content: ' \25bc';
}
nav li:hover a {
    background: #ccc;
}
nav li ul {
    left: 0;
    opacity: 0;
    position: absolute;
    top: 35px;
    visibility: hidden;
    z-index: 1;
    -webkit-transition: all .25s ease;
       -moz-transition: all .25s ease;
        -ms-transition: all .25s ease;
         -o-transition: all .25s ease;
            transition: all .25s ease;
}
nav li:hover ul {
    opacity: 1;
    top: 50px;
    visibility: visible;
}
nav li ul li {
    width: 100%;
}
nav li ul a:hover {
    background: #bbb;
}

   </style>
<ul class="cf">
        <li><a href="index.php">Главное меню</a></li>
        <li><a class="dropdown" href="#">Функции</a>
            <ul>
                <li><a href="regoboryd.php">Регистрация оборудования</a></li>
                <li><a href="function2.php">Проверка оборудования</a></li>
                <li><a href="O_file.php">Пометки </a></li>
                <li><a href="equipment_overview.php">Оборудование</a></li>
                <li><a href="reports.php">Отчеты  </a></li>
            </ul>
            </li>
        <li><a href="exit.php">выход</a></li>
    </ul>
       <!--
<ul class="navigation"> 
   <!-- Описание ссылок в меню и сами ссылки. </div> <div class="blockmenu">  <div class="blockmenu">-->
       <!--
   <li><a href="https://www.internet-technologies.ru/news" target="_blank">111</a></li>
   <li><a href="https://www.internet-technologies.ru/articles" target="_blank">222</a></li>
   <li><a href="https://www.internet-technologies.ru/templates/" target="_blank">333</a></li>
   <li><a href="https://www.internet-technologies.ru/books" target="_blank">444</a></li>
   <li><a href="https://www.internet-technologies.ru/scripts" target="_blank">555</a></li>
</ul>
-->


   

</nav>

  </header>
  <!--
  <aside class="cc">
    <img class="imgAvatar" src="<?=$scr?>"  width= "100" height= "100"; >
    </a>
    <div class="cv">
        <a >
       Имя <?=$name?><br>
       Фамилия <?=$surname?><br>
       Должность <?=$post?><br>
       Проведенно проверрок <?=$kol?>
        </a>
        

    </div>
      
    </aside>
-->

    <div class="wrapper">   <!---------------------   wrapper   --------------------->
	    <div class="content">   <!---------------------   content   --------------------->

<section>
    <style>
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
  padding: 40px;
  width: 100%;
  height: 112%;
  

}

    </style>
    <hr>
    <div class="sc">
        <center>
<h1> Регистрация оборудования  <!--   mesage add    -->
     
      </h1>
</center>

</div>
    <hr>
    <style>
        input {
	width: 300px;
	font-size: 13px;
	padding: 6px 0 4px 10px;
	border: 1px solid #cecece;
	background: #F6F6f6;
	border-radius: 8px;
}
input {
	padding-bottom: 5px\0;
}
.class1{
    padding: 6px 0 6px 6px ;
   
    margin-right: 1px;
    font-family: Verdana, Arial, Helvetica, sans-serif; /* Указание типа шрифта. */
font-size: 17px; /* Размер текста в ссылках. */


}
textarea {
	/* = Убираем скролл */
	overflow: auto;

	/* = Убираем увеличение */
	resize: none;
	width: 850px;
	height: 120px;

	/* = Добавим фон, рамку, отступ*/
	background: #f6f6f6;
	border: 1px solid #cecece;
	border-radius: 8px 0 0 0;
	padding: 8px 0 8px 10px;
}
.submit {
	cursor: pointer;
	border: 1px solid #cecece;
	background: #f6f6f6;
	box-shadow: inset 0px 20px 20px #ffffff;
	border-radius: 8px;
	padding: 8px 14px;
	width: 120px;
}
.submit:hover {
	box-shadow: inset 0px -20px 20px #ffffff;
}
.submit:active {
	margin-top: 1px;
	margin-bottom: -1px;
	zoom: 1;
}
    </style>
      <div class="container">
    <div class="bv">
        <form action="inc/addobo.php" method="post" enctype="multipart/form-data">
            
        <label class="class1">Название оборудования:  </label><br>

        <input type="text" id="name" name="name" value="Название оборудования" /><br>
        <label class="class1">Тип оборудования:  </label><br>

        <input type="text" id="type" name="type" value="Тип оборудования" /><br>
        <label class="class1">Серийный номер оборудования:  </label><br>

        <input type="text" id="number" name="number" value="Серийный номер оборудования" /><br>
        <label class="class1">Дата прибытия оборудования:  </label><br>

        <input type="datetime-local" id="date_arrival_equipment" name="date_arrival_equipment" value="" /><br>
        <label class="class1">Дата монтажа оборудования:  </label><br>

        <input type="datetime-local" id="date_equipment_installation" name="date_equipment_installation" value="" /><br>
        <label class="class1">Срок службы оборудования:  </label><br>

        <input type="text" id="equipment_service_life" name="equipment_service_life" value="Срок службы оборудования" /><br>

        <label class="class1">Предварительная дата обслуживания оборудования:  </label><br>

        <input type="datetime-local" id="date_service" name="date_service" value="" /><br>
        <label class="class1">Предварительная дата снятия с учета :  </label><br>

        <input type="datetime-local" id="preliminary_date_de-registration" name="preliminary_date_de-registration" value="" /><br>
        <label class="class1">Предназначение оборудования:  </label><br>

        <input type="text" id="destiny" name="destiny" value="" /><br>
        <label class="class1">Ответственное лицо:  </label><br>

        <input type="text" id="responsible_person" name="responsible_person" value="" /><br>
        <label class="class1">Место монтажа оборудования:  </label><br>

        <input type="text" id="installation_location" name="installation_location" value="" /><br>

        <label class="class1">Фото оборудования:  </label><br>
        <input type="file" id="photo" name="photo"><br>

        <label class="class1">Дополнительная информация:  </label><br>

        <textarea  id="additional_information" name="additional_information"></textarea>
        <br>
        <br>
        <input type="submit" class="submit" value="Отправить" />

        </form>
    </div>




        <!-- 
    <img class="imgAvatar" src="<?=$scr?>"  width= "40%" height= "45%"; >
    <div class="cvv">
        <a >
       Имя <?=$name?><br>
       Фамилия <?=$surname?><br>
       Должность <?=$post?><br>
       Проведено проверок <?=$kol?>
        </a>
        

    </div>
        .container{
     background-color: #f5f5f5;
  padding: 20px;
  width: 100%;
  height: 100%;
  
}
        <aside>
            <div class="widget">
                <h3 class="widget-title">Категории</h3>
                <ul class="widget-category-list">
                  <li><a href="">Дизайн</a> (2)</li>
                  <li><a href="">Вёрстка</a> (5)</li>
                  <li><a href="">Видео</a> (1)</li>
                </ul>
              </div>
            
            
            
        </aside>
        -->

       
    
           
           
        


    
    
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

</div>  <!---------------------   footer   --------------------->

</div>   <!---------------------   wrapper   --------------------->

<script>
$('.nav-toggle').on('click', function(){
$('#menu').toggleClass('active');
});
</script>




</body>
</html>


<!-- 


  <style type="text/css">

      .naviexit{
    list-style: none;

  }
      .naviexit li{
float: left; /* Выстраивание элементов списка в один ряд. */
margin-right: 1px; /* создание отступов для того, чтобы не сливались пункты меню. */
font-family: Verdana, Arial, Helvetica, sans-serif; /* Указание типа шрифта. */
font-size: 14px; /* Размер текста в ссылках. */
}
      .naviexit li a{
display: block; /* Изменение отображения на блочное для того чтобы иметь возможность задать внутренние отступы. */
padding: 5px 5px;  /* Внутри блочные отступы. */
background: #0db5b5; /* Цвет блоков меню. */
color: #3f3f3f; /* Цвет текста в блоках меню. */
text-decoration: none; /* Устранение подчёркивания ссылок. */
position: relative; /* Это необходимо при использовании Internet Explorer 6 для того, чтобы ссылка по всей своей площади была «кликабельной». */

}
     .naviexit li a:hover{
background: #92d3d3; /* Цвет блока при наведении курсора. */
color: #6b6b6b;  /* Цвет текста при наведении курсора. */
}
.cc{
    width: 350px;
    height: 90px;
    padding: 0px;

}
.cv{
    float: right;
    padding: 10px;
}
.top-menu{
    background-color: rgb(122, 122, 122);
    width: auto ;
    height: 70px;
}
.blockmenu{
    
    width: 350px;
    height: 100px;
    padding: 10px;
}

.cvv{
    float: right;
    padding: 10px;
}
.cvv {
 display: flex; 
}

.cvv  {
  background-color: #f5f5f5;
  padding: 20px;
  width: 45%;
  height: 20%;
  margin: 0 auto;
 
}

  </style>

-->