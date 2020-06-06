<?php require_once 'db.php';?>
<?php 
//    $conn = mysqli_connect("localhost","mysql","mysql") or die ("Нет соединения: ".mysqli_error());
//    mysqli_select_db($conn,"store");
              $login = $_POST["rName"];        
              $pas = md5(md5($_POST["rPass"])."321421451235r214");
              $mail = $_POST["rMail"];
$query = "INSERT INTO users (login,email,password) VALUES ('$login','$mail','$pas')";
mysqli_query($conn,$query);

?>