<?php  session_start();
require_once 'bd.php';

$name = $_POST['name'];
$surname = $_POST['surname'];
$password = $_POST['password'];
$sql = "SELECT * FROM `users` WHERE `name` = '$name' AND `password` = '$password'";
$check_user = mysqli_query($connect, $sql);
$error_code = -1;

if (!$check_user) {
  $error_code = mysqli_errno($connect);
  echo "Error: " . $sql . "<br>" . mysqli_error($connect);
  echo "<br/>";
  echo "Error code: ". $error_code;
  //echo('<pre>');
  //print_r ($check_user);
  //echo('<pre>');
  //echo "sss";
}

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

echo('<pre>');

?>