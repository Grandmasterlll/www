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


 
 ?>


<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Проверка оборудования</title>
  
  <!-- <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=PT+Sans+Caption"> -->
  <link rel="stylesheet"  href="./assets/css/style2.css">
  <link rel="stylesheet"  href="./assets/css/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
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
*/
  </style>
-->
</head>
<body>


<!-- 
верхняя  header 
 -->
	<header>
   

<nav class="top-menu" >
    <!--
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
   -->
<ul class="cf">
        <li><a href="index.php">Главное меню</a></li>
        <li><a class="dropdown" href="#">Функции</a>
            <ul>
                <li><a href="regoboryd.php">Регистрация оборудования</a></li>
                <li><a href="function2.php">Проверка оборудования</a></li>
                <li><a href="#">Отчеты \ пометки </a></li>
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
    <hr>
    <div class="sc">
        <center>
<h1> Проверка оборудования  <!--   mesage add    -->
    <?php
            if ($_SESSION['messageadd']) {
                echo '<p class="msg"> ' . $_SESSION['messageadd'] . ' </p>';
            }
            unset($_SESSION['messageadd']);
        ?>  
      </h1>
</center>

</div>
    <hr>
    <!--
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
.table {
	width: 100%;
	margin-bottom: 20px;
	border: 5px solid #fff;
	border-top: 5px solid #fff;
	border-bottom: 3px solid #fff;
	border-collapse: collapse; 
	outline: 3px solid #ffd300;
	font-size: 15px;
	background: #fff!important;
}
.table th {
	font-weight: bold;
	padding: 7px;
	background: #ffd300;
	border: none;
	text-align: left;
	font-size: 15px;
	border-top: 3px solid #fff;
	border-bottom: 3px solid #ffd300;
}
.table td {
	padding: 7px;
	border: none;
	border-top: 3px solid #fff;
	border-bottom: 3px solid #fff;
	font-size: 15px;
}
.table tbody tr:nth-child(even){
	background: #f8f8f8!important;
}
    </style>
    -->
      <div class="container2">
    <div class="bv">

    <!--   
        id - check 
    -->
    <style>
        .tvbox{
            width: 100%;
	margin-bottom: 20px;
	border: 5px solid #fff;
	border-top: 5px solid #fff;
	border-bottom: 3px solid #fff;
	border-collapse: collapse; 
	outline: 3px solid #ffd300;
	font-size: 15px;
	background: #fff!important;
        }
     
    </style>
    <div class="tvbox">
    <form action="inc/checkadd.php" method="post" enctype="multipart/form-data">
                         id <br> <input type="text" id="chek" name="chek" value="" />
                    <br>Возникшие ошибки \ дефекты
                    <br>
                    <textarea type="text" id="chek" name="chek" value="" ></textarea>
                    <br>
                    <br>
                    <input type="submit" class="submit" value="Отправить" />

                    </form>
    </div>

    <table class="table">
	<thead>
		<tr>
			<th> №</th>
			<th>Название оборудования</th>
			<th>Тип оборудования</th>
			<th>Серийный номер оборудования</th>
			<th>Дополнительная информация</th>
            <!--
            <th>Возникшие ошибки \ дефекты</th>
            <th>Отметка о проверке</th>
-->
            
            <!--
            <td><input type="submit" class="submit" value="Отправить" /></td>
            -->
		</tr>
	</thead>
	<tbody>
    
            <?php 
                /*
        404 - 406   <td><input type="text" id="chek'.$res['id'].'" name="chek'.$res['id'].'" value="" /></td>
        <form action="inc/checkadd.php" method="post" enctype="multipart/form-data">
                    <td><input type="text" id="chek" name="chek" value="" /></td>
                    <td><input type="text" id="chek" name="chek" value="" /></td>
                    <td><input type="submit" class="submit" value="Отправить" /></td>

                    </form>
                */
             $qery="SELECT `id`, `name`, `type`, `number`, `additional_information` FROM `equipment` ";
             $result = $connect->prepare($qery);
             $result->execute();
             
             if($result->rowCount() > 0){
                while($res = $result->fetch(PDO::FETCH_BOTH)){
                    $arr[]= $res['id'];

                    echo ' <tr> <td>'.$res['id'].'</td>
                    <td>'.$res['name'].'</td>
                    <td>'.$res['type'].'</td>
                    <td>'.$res['number'].'</td>
                    <td>'.$res['additional_information'].'</td>

                    
                    </tr>'
                    ;
                        
                }

            
             }
            ?>

	

	</tbody>
</table>
    </div>

<!--
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