<?php 
    require_once 'bd.php';

    $users = mysqli_query($connect,"SELECT * FROM `users` ORDER BY id");
    $users = mysqli_fetch_all($users);

    
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
    <style>
	body {
		
		color: #fff; /*Цвет текста на странице*/
		background-attachment: fixed; /* Фон страницы фиксируется */
		background-repeat: repeat-x; /* Изображение повторяется по горизонтали */
	}
   </style>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Пользователи</title>
        <!-- Только CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>
    <body style="font-family:Comic Sans MS, Verdana, sans-serif" background="https://sun9-63.userapi.com/impg/nfh57bHnSC7a9bGv3esO4GNIJGqiW9DPpIMUxA/zkDyovS5qVU.jpg?size=1600x1200&quality=96&sign=b8de568cd234b2e6bbef2e34ab479f77&type=album">
        <?php            
            if (isset($_GET['error']) && $_GET['error'] == $ER_DUP_ENTRY){
                echo '<p><font size="3" color="black" face="Comic Sans MS">Ошибка: Такой пользователь уже существует</font></p>';
            }
        ?>
        <strong><center><p><font size="6" color="black" face="Comic Sans MS">Регистрация</font></p></center></strong>    
        <form align="center" action="create.php" method="post">
            <center><p><font size="5" color="black" face="Comic Sans MS">Имя</font></p></center>
            <input type="text" name="name">
            <center><p><font size="5" color="black" face="Comic Sans MS">Фамилия</font></p></center>
            <input type="text" name="surname">
            <center><p><font size="5" color="black" face="Comic Sans MS">Пароль</font></p></center>
            <input type="text" name="password">
            <button type="submit" >Добавить</button>
        </form>
        <div align="center"><a href="vhod.php"> Авторизоваться </a></div>
        <title>Ссылки без подчеркивания</title>
        <style>
        a { 
            text-decoration: none; /* Отменяем подчеркивание у ссылки */
        } 
        </style>       
    </body>
</html>