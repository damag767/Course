<?php
    require_once 'bd.php';
    /*$name = $_POST['name'];
    $surname = $_POST['surname'];*/
    $comment = $_POST['comment'];        

    $sql = "INSERT INTO `ochered` (`comments`) VALUES ('$comment')";

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
    
    mysqli_close($connect);

    if($success) {
      header("Location: str+.php");  /*?name=$name&surname=$surname*/
    }
    else if($error_code==$ER_DUP_ENTRY){
      header("Location: index.php?error=$ER_DUP_ENTRY");
    }
    else {
      header('Location: index.php?error=unknown');
    }    
?>   
