<?php session_start();
    require_once 'bd.php';
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $password = $_POST['password'];    

    $sql = "INSERT INTO `users` (`name`, `surname`, `password`) VALUES ('$name', '$surname', '$password')";

    $success = mysqli_query($connect, $sql);
    $error_code = -1;
    
    if (!$success) {
      $error_code = mysqli_errno($connect);
      echo "Error: " . $sql . "<br>" . mysqli_error($connect);
      echo "<br/>";
      echo "Error code: ". $error_code;
      //echo('<pre>');
      //print_r ($connect);
      //echo('<pre>');
    }
    
    $sqly = "SELECT * FROM `users` WHERE `name` = '$name' AND `password` = '$password'";
    $check_user = mysqli_query($connect, $sqly);
    
    if(mysqli_num_rows($check_user) == 1){
      $users = mysqli_fetch_all($check_user);  
      foreach($users as $item){
        $_SESSION["name"]=$item[1];
        $_SESSION["surname"]=$item[2];
        $_SESSION["role"]=$item[4];            
      }
      header("Location: str+.php");
     
    }
    else {
      header('Location: index.php?error=unknown');
    }  

    mysqli_close($connect);

    /*if($success) {
      $_SESSION["name"]=$item[1];
      $_SESSION["surname"]=$item[2];
      $_SESSION["role"]=$item[4];
      header("Location: str+.php");
    }
    else if($error_code==$ER_DUP_ENTRY){
      header("Location: index.php?error=$ER_DUP_ENTRY");
    }
    else {
      header('Location: index.php?error=unknown');
    }*/    
?>   
