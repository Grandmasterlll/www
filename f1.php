<?php

require('f2.php');

function gl_function(){

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

//  ---  equipment 

$qery="SELECT `id`, `name`, `type`, `number`, `date_arrival_equipment`, `date_equipment_installation`, `equipment_service_life`, `date_service`, `preliminary_date_de_registration`, `destiny`, `responsible_person`, `installation_location`, `additional_information`, `date_de_registration`, `photo` FROM `equipment`";
$result = $connect->prepare($qery);
$result->execute();


if($result->rowCount() > 0){
    while($res = $result->fetch(PDO::FETCH_BOTH)){
      $idz=$res['id'];
      echo '  
      <div class="strblok1">
          <hr>    
            <br>
              <h1>
                <center>
                        Отчет № '.$res['id'].'
                </center>
              </h1>
              <br>
          <hr>
          <br>
                <h2> Оборудование : '.$res['name'].' <br> number : '.$res['number'].'  </h2>
                        
                        <hr>
                         <a >
                          <img class="imgAvatar" src="'.$res['photo'].'"  width= "40%" height= "45%"; > <br><br>
                          <h3>Описание борудование</h3> 
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
          <br>
          <h2> Проверки обрудования </h2>
          <hr>
          <br>
          '.chek_ress($res['id']).'
          <br>
          <br>
          <hr>
          <br>
      </div>
      <br>
      ';
    }
  
  }


}


?>