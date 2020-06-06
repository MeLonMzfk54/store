<?php require_once 'db.php';?>
<?php 
              $login = $_POST["rName"];        
              $pas = md5(md5($_POST["rPass"])."321421451235r214");
              $mail = $_POST["rMail"];
$query = "INSERT INTO users (login,email,password) VALUES ('$login','$mail','$pas')";
mysqli_query($conn,$query);

?>