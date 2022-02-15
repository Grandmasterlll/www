<?php

    session_start();
    require_once 'connect.php';
    $log = $_POST['log'];
    $name = $_POST['name'];
    $post = $_POST['post'];
    $surname = $_POST['surname'];
    $password = $_POST['pas'];
    $password_confirm = $_POST['repas'];
    //avatar
   
    if ($password === $password_confirm) {

        $path = 'uploads/' . time() . $_FILES['avatar']['name'];
        if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
            $_SESSION['message'] = 'Ошибка при загрузке сообщения';
            header('Location: ../reg.php');
        }

        $password = md5($password);
       /* $sqll="INSERT INTO `users`(`id`, `log`, `pas`, `name`, `surname`, `avatar`, `post`, `kol`) 
        VALUES (null,$log,$password,$name,$surname, $path,$post,null)";
        */

        $query="INSERT INTO `users`(`id`, `login`, `password`, `name`, `surname`, `avatar`, `post`, `kol`) 
        VALUES (:id,:login,:password,:name,:surname, :avatar,:post,:kol)";
        /*
$query="SELECT * FROM `users` WHERE `login` = :login AND `password` = :password";
['login' => $login,
`password` => $password   
]
*/
        //$name = 'Новая категория';
        //$query = "INSERT INTO `categories` (`name`) VALUES (:name)";
        $params = [
            ':id' => null,
            ':login' =>  $log,
            ':password' => $password,
            ':name' =>  $name ,
            ':surname' => $surname,
            ':avatar' => $path ,
            ':post' => $post,
            ':kol' => null,
    
        ];
        $stmt = $connect->prepare($query);
        $stmt->execute($params);

        $connect=null;
        $stmt=null;

       // mysqli_query($connect, $sqll );


        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../login.php');


    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../reg.php');
    }
    /*
    catch(Exception $e){
        echo 'Выброшено исключение: ',  $e->getMessage(), "\n";

    }
    */
    