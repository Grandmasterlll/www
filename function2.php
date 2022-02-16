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
  <title>Проверка оборудования</title>
  
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
<h1> Проверка оборудования  <!--   mesage add    -->
    <?php
            if ($_SESSION['messageadd']) {
                echo '<p class="msg"> ' . $_SESSION['messageadd'] . ' </p>';
            }
            unset($_SESSION['messageadd']);
        ?>  
      </h1>
</center>
<div class="scs" style="width:1000px ;">
    <p align="right" >
        
<?php echo $today?>
        
        </p>
        </div>



</div>


    <hr>
 
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
                    <br>
                    
                    
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