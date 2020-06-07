<?php mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); require_once 'includes/db.php';?>
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
               <?php if(isset($_SESSION["username"])){?>
                <div class="cabinet__inner">
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
                     <div class="products__block">
                    <?php } ?>
                    <?php if(isset($_SESSION['username'])){ 
                    $login = $_SESSION['username'];
                                $sql = "SELECT * FROM wishes where login = '$login'";
                                    $result = mysqli_query($conn,$sql);
                $wishes = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach($wishes as $wish){
                    ?>      <div class="cabinet__item">
                               <div class="products__item">
                                   <div class="products__image"><img src="<?php echo $wish['image'] ?>" alt="Футболка"></div>
                                   <div class="products__desc">
                                       <h4 class="products__name"><?php echo $wish['title'] ?></h4>
                                       <div class="products__price">
                                           <button title="Удалить из списка пожеланий" id="<?php echo $wish["idLid"]?>" class=" products__link_delete"><i class="fa fa-times"></i></button>
                                           <strong class="products__cost"><?php echo $wish['cost'] ?><span>руб.</span></strong>
                                       </div>
                                   </div>
                               </div>
                               </div>
                           <?php }?>
                            </div>
                    </div>
                    <?php } else{ ?>
                    <h1 class="cabinet__title">Вы не вошли в аккаунт</h1>
                    <div class="cabinet__logout"><a href="choose.php" class="cabinet__link">Вход</a></div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <?php require_once("footer.php")?>
        </div>
              <!-- jQuery -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <!-- JS -->
  <script type="text/javascript" src="js/script.js"></script> 
<!-- DeleteWishes.js -->
<script type="text/javascript" src="js/delete.js"></script>
<!--check.js-->
<script type="text/javascript" src="js/check.js"></script>
</body>
</html>