<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Пользователи</title>
        <!-- Только CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>
    <body background="https://sun9-63.userapi.com/impg/nfh57bHnSC7a9bGv3esO4GNIJGqiW9DPpIMUxA/zkDyovS5qVU.jpg?size=1600x1200&quality=96&sign=b8de568cd234b2e6bbef2e34ab479f77&type=album" style="font-family:Comic Sans MS, Verdana, sans-serif" >        
        <h2 align="center"> войти</h2>    
        <form align="center" action="avtorisation.php" method="post">
            <p>Имя</p>
            <input type="text" name="name">
            <p>Фамилия</p>
            <input type="text" name="surname">
            <p>Пароль</p>
            <input type="text" name="password">
            <button type="submit" >войти</button>
        </form>
        <div align="center"><a  href="index.php"> зарегистрироваться </a></div>        
    </body>
</html>