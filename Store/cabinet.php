<?php require_once 'includes/db.php';?>
<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1">
    <title>Личный кабинет</title>
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
        <section class="cabinet">
            <div class="container">
                <div class="cabinet__inner">
                   <?php if(isset($_SESSION['username'])){ ?>
                    <h1 class="cabinet__title">Личный кабинет</h1>
                    <div class="cabinet__info">
                        <div class="cabinet__avatar"><img src="img/vLmJ5GrfGXw.jpg" alt="Аватар"><p>Потом допилю загрузку <br> аватарок, если надо, <br>а так пусть висит эта</p></div>
                        <div class="cabinet__desc">
                            <div class="cabinet__nick"><?php echo "Ваше имя - ".$_SESSION['username']; ?></div>
                            <div class="cabinet__logout"><a href="includes/logout.php" class="cabinet__link">Выйти</a></div>
                        </div>
                    </div>
                    <div class="cabinet__wishes">
                        <h2 class="cabinet__subtitle">Список пожеланий</h2>
                    </div>
                    <?php } else{ ?>
                    <h1 class="cabinet__title">Вы не вошли в аккаунт</h1>
                    <div class="cabinet__logout"><a href="choose.php" class="cabinet__link">Вход</a></div>
                    <?php }?>
                </div>
            </div>
        </section>
        <?php require_once("footer.php")?>
        </div>
              <!-- jQuery -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <!-- JS -->
  <script type="text/javascript" src="js/script.js"></script> 
</body>
</html>