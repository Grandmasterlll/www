<?php 
    session_start();
    require_once 'connect.php';
   // $_SESSION['messageadd'] = 'Не верный логин или пароль';
    //header('Location: ../login.php');

  /* params 
    =
    name
    type

    number
    date_arrival_equipment

    date_equipment_installation
    equipment_service_life

    date_service
    preliminary_date_de-registration

    destiny
    responsible_person

    installation_location
    additional_information

    photo
    =
    */

    $name = $_POST['name'];
    $type = $_POST['type'];
    $number = $_POST['number'];
    $date_arrival_equipment = $_POST['date_arrival_equipment'];
    $date_equipment_installation = $_POST['date_equipment_installation'];
    $equipment_service_life = $_POST['equipment_service_life'];
    $date_service = $_POST['date_service'];
    $preliminary_date_de_registration = $_POST['preliminary_date_de-registration'];
    $destiny = $_POST['destiny'];
    $responsible_person = $_POST['responsible_person'];
    $installation_location = $_POST['installation_location'];
    $additional_information = $_POST['additional_information'];
    //$photo = $_POST['photo'];
    

    $path = 'uploadso/' . time() . $_FILES['photo']['name'];
    if (!move_uploaded_file($_FILES['photo']['tmp_name'], '../' . $path)) {
        $_SESSION['messageadd'] = 'Ошибка при загрузке photo';
        header('Location: ../regoboryd.php');
    }

$query="INSERT INTO `equipment`(`id`, `name`, `type`, `number`, `date_arrival_equipment`, `date_equipment_installation`, `equipment_service_life`, `date_service` , `preliminary_date_de_registration` , `destiny` , `responsible_person` , `installation_location` , `additional_information`,`date_de_registration`,`photo`) 
VALUES (:id,:name,:type,:number,:date_arrival_equipment, :date_equipment_installation,:equipment_service_life,:date_service,:preliminary_date_de_registration,:destiny,:responsible_person,:installation_location,:additional_information,:date_de_registration,:photo)";

$params = [
    ':id' => null,
    ':name'=>$name,
    ':type'=>$type,
    ':number'=>$number,
    ':date_arrival_equipment'=>$date_arrival_equipment,
    ':date_equipment_installation'=>$date_equipment_installation,
    ':equipment_service_life'=>$equipment_service_life,
    ':date_service'=>$date_service,
    ':preliminary_date_de_registration'=>$preliminary_date_de_registration,
    ':destiny'=>$destiny,
    ':responsible_person'=>$responsible_person,
    ':installation_location'=>$installation_location,
    ':additional_information'=>$additional_information,
    ':date_de_registration'=>null,
    ':photo'=>$path

];

    $cnt = $connect->prepare($query);
    $cnt->execute($params);
    $connect=null;
    $cnt=null;

         $_SESSION['messageadd'] = 'Регистрация оборудования прошла успешно! ';
            header('Location: ../regoboryd.php');
    
   







  

       
     




?>