<?php

    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = md5($_POST['password']);
    $query="SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'";

    //$check_user = mysqli_query($connect, $sqll);
    $stmt = $connect->prepare( $query);
    $stmt->execute();

    ///////////////////////////////////
    $value = $stmt->fetch(PDO::FETCH_COLUMN);
    //mysqli_num_rows($check_user)
    if ($value > 0) {
       // echo"=====================";
      // $q="SELECT * FROM `users` ";
      // $sql=$connect->prepare($q);
       //$sql->execute();
      // $array = $sql->fetchAll(PDO::FETCH_ASSOC);
      $stmt->execute();
      $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
      $connect=null;
        $stmt=null;
/*
       echo "<pre>";
       print_r($user);
       echo "</pre>";


   // /*$df=array_column($user,'id');
    //
    /*
       $ob_arr = array(
        'id' => $user['id']
        
    
    );
    */
   // echo "==================<br>";
    //echo "<pre>";
    //print_r($ob_arr);
   /// print_r(array_column($user, 'name'));
    $_SESSION['user'] = $user ;
    $user=null;
   // echo "</pre>";
    //echo $ob_arr;
   // echo "<br>==================<br>";
   // print($df);
    

/*
"name" => $user['name'],
        "surname" => $user['surname'],
        "avatar" => $user['avatar'],
        "post" => $user['post'],
        "kol" => $user['kol']

        $user = mysqli_fetch_assoc($check_user);
        $ob_arr = array(
            "id" => $user['id'],
            "name" => $user['name'],
            "surname" => $user['surname'],
            "avatar" => $user['avatar'],
            "post" => $user['post'],
            "kol" => $user['kol']
        
        );

        $_SESSION['user'] = $ob_arr ;
*/
        header('Location: ../reg.php');

    } else {
        $_SESSION['message'] = 'Не верный логин или пароль';
        header('Location: ../login.php');
    }
    ?>

<pre>
    <?php/*
    print_r($check_user);
    print_r($user);*/
    ?>


</pre>

