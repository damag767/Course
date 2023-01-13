<?php session_start();
    require_once 'bd.php';

    $ochered = mysqli_query($connect,"SELECT * FROM `ochered` ORDER BY id");
    $ochered = mysqli_fetch_all($ochered);    

    /*if (isset($_GET['name']) && isset($_GET['surname'])){
        $_SESSION["name"] = $_GET['name'];
        $_SESSION["surname"] = $_GET['surname'];
    }*/
    /*echo $_SESSION["name"];
    echo $_SESSION["surname"];
    echo $_SESSION["role"];*/
    
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $sql= "DELETE FROM `ochered` WHERE `id` = $id";
        mysqli_query($connect,$sql);
        header("Location: str+.php");
    }    
?>
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
    <body background="https://sun9-63.userapi.com/impg/nfh57bHnSC7a9bGv3esO4GNIJGqiW9DPpIMUxA/zkDyovS5qVU.jpg?size=1600x1200&quality=96&sign=b8de568cd234b2e6bbef2e34ab479f77&type=album" style="font-family:Comic Sans MS, Verdana, sans-serif">
        <h2>Добро пожаловать  <?php echo $_SESSION["name"], ' ', $_SESSION["surname"] ?></h2>
        <table> 
            <tr>
                <th>id</th>
                <th>Комментарий</th>                
            </tr>
            <?php                
                if($_SESSION["role"]!=null){
                    foreach($ochered as $item) {                        
                        ?>
                        <form align="center" action="str+.php" method="post">
                            <tr>
                                <td><?= $item[0] ?></td>
                                <input type = "text" name = "id" value = "<?=$item[0]?>" hidden />
                                <td><?= $item[1] ?></td>
                                <td><button type="submit" onclick=header("Location: str+.php")>Удалить</button></td>
                            </tr>
                        </form>
                        <?php
                    }
                }
                else{
                    foreach($ochered as $item) {
                        ?>
                            <tr>
                                <td><?= $item[0] ?></td>
                                <td><?= $item[1] ?></td>
                            </tr>
                        <?php
                    }
                }               
            ?>                  
        </table>
        <strong><center><p><font size="6" color="black" face="Comic Sans MS">Добавить запрос</font></p></center></strong>    
        <form align="center" action="create+.php" method="post">            
            <center><p><font size="5" color="black" face="Comic Sans MS">Комментарий</font></p></center>
            <input type="text" name="comment">
            <button type="submit" >Добавить</button>
        </form>
        <div align="center"><a href="index.php"> выйти </a></div>
    <style>
   a { 
    text-decoration: none; /* Отменяем подчеркивание у ссылки */
   } 
  </style> 
    </body>
</html>