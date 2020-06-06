<?php require_once 'includes/db.php';?>
<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1">
    <title>Авторизация</title>
      <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<!--  Montserrat-->
 <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="wrapper">
                        <?php require_once("header.php");?>   
                           <?php
                    if(isset($_POST["sSub"])){
//                           $conn = mysqli_connect("localhost","mysql","mysql") or die ("Нет соединения: ".mysqli_error());
//                            mysqli_select_db($conn,"store");
                            $username = $_POST["sName"];
                            $pas = md5(md5($_POST["sPass"])."321421451235r214");
    
                            $query = "SELECT * FROM users WHERE login = '$username' and password='$pas'";
                            $result = mysqli_query($conn,$query) or die (mysqli_error($conn));
                            $count = mysqli_num_rows($result);
                    if($count == 1){
                        $_SESSION["username"] = $username;
                    }else{
                        $hello = "Неверный логин или пароль";
                    }
                    }
         if(isset($_SESSION['username'])){
                        $username = $_SESSION['username'];
                        $hello =  "Вы вошли как ". $username;
                        $exit = "Выйти";
                    } 
                    ?>
        <section class="choose">
            <div class="container">
                <div class="choose__inner">
                    <div class="sign">
                        <div class="sign__inner">
                            <div class="sign__title">Авторизация</div>
                            <form action="choose.php" class="sign__form" id="sign__form-id" method="post">
                                <input type="text" placeholder="Введите ваш логин" name="sName" class="sign__input sign__name">
                                <input type="password" placeholder="Введите ваш пароль" name="sPass" class="sign__input sign__pass">
                                <input type="submit" value="войти" name="sSub" class="sign__submit">
                            </form>
                            <div class="sign__question">Еще не зарегистрированы? <span class="sign__enter">Регистрация</span></div>
                        </div>
                        <div class="hello">
                        <div class="hello__text"><?php echo $hello ?></div>
                        <a class="hello__link" href="includes/logout.php"><?php echo $exit ?></a>
                        </div>
                    </div>
                    
                    <div class="registration">
                        <div class="sign__inner">
                            <div class="sign__title">Регистрация</div>
                            <form  class="sign__form" id="registration__form-id">
                                <input type="text" placeholder="Введите ваш логин" name="rName" class="sign__input reg__name">
                                <input type="password" placeholder="Введите ваш пароль" name="rPass" class="sign__input reg__pass">
                                <input type="password" placeholder="Подтвердите пароль" name="rPass2" class="sign__input reg__pass2">
                                <input type="mail" placeholder="Введите вашу почту" name="rMail" class="sign__input reg__mail">
                                <input type="submit" value="регистрация" name="rSub" class="sign__submit">
                            </form>
                            <div class="sign__question">Уже зарегистрированы?<span class="registration__enter">Войти</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
           <div class="overlay">
        <div class="overlay__popup">
           <div class="overlay__close"></div>
            <h2 class="overlay__title">Вы зарегистрированы!</h2>
        </div>
    </div>
        <?php require_once("footer.php")?>
    </div>
     
     
     
      <!-- jQuery -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <!-- JS -->
  <script type="text/javascript" src="js/script.js"></script> 
<!-- reg-sign.js -->
<script type="text/javascript" src="js/reg-sign.js"></script>
</body>
</html>