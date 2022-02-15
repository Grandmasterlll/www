<?php
header("Content-Type: text/html; charset=UTF-8");
session_start();

if ($_SESSION['user']) {
    header('Location: index.php');
}

?>

<html>
<head>
	<title>Вход</title>
    <link rel="stylesheet" href="assets/css/mains.css">
</head>
<body>
    
        
            <form action="inc/login.php" method="post" enctype="multipart/form-data">
                <label>Логин</label>
                <input type="text" name="login" placeholder="Введите свой логин">
                <label>Пароль</label>
                <input type="password" name="password" placeholder="Введите пароль">
                <button type="submit">Войти</button>
                <br>
                <p>
                У вас нет аккаунта? - <a href="reg.php">зарегистрируйтесь</a>!
                 </p>
                <?php
                    if ($_SESSION['message']) {
                        echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                    }
                    unset($_SESSION['message']);
                ?>
    
            </form>
        
    
</body>
</html>





