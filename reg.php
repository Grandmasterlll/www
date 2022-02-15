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
    
        
        <!-- Форма регистрации 
    
    -->

    <form action="inc/reg.php" method="post" enctype="multipart/form-data">
        <label>log</label>
        <input type="text" name="log" >
        <label>name</label>
        <input type="text" name="name" >
        <label>surname</label>
        <input type="text" name="surname" >
        <label>post</label>
        <input type="text" name="post" >
        <label>Изображение профиля</label>
        <input type="file" name="avatar">
        <label>pas</label>
        <input type="password" name="pas" >
        <label>re pas</label>
        <input type="password" name="repas" >
        <button type="submit">Войти</button>
        <p>
            У вас уже есть аккаунт? - <a href="login.php">авторизируйтесь</a>!
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