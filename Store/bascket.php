<?php session_start(); ?>
<?php  require_once 'includes/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1">
    <title>Корзина</title>
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
        
        <section class="bascket">
            <div class="bascket__container">
                <div class="bascket__inner">
                   <?php if(isset($_SESSION['username'])){  ?>
                    <h1 class="bascket__title">Ваш список покупок</h1>
                    <div class="bascket__name">Корзина:</div>
                   <?php 
                $login = $_SESSION["username"];
    $sql = "SELECT * FROM basket where login = '$login'";
    $result = mysqli_query($conn,$sql);
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $counter = 1;
    $sum = 0;
                        
        foreach($products as $product){
            $sum += $product["cost"];
                    ?>
                    <div class="bascket__block">
                        <div class="bascket__item">
                           <div class="bascket__number"><?php echo $counter ?>.</div>
                            <div class="bascket__product"><?php echo $product['title']; ?></div>
                            <div class="bascket__cost"><span class="bascket__price"><?php echo $product['cost']; ?></span> рублей</div><span class="bascket__value"><span class="bascket__minus"><i class="fa fa-minus" aria-hidden="true"></i></span><span class="bascket__count">1</span><span class="bascket__plus"><i class="fa fa-plus" aria-hidden="true"></i></span></span>
                            <div class="bascket__delete_txt">Удалено из корзины!</div>
                            <button title="Удалить из корзины" id="<?php echo $product['idKid'] ?>" class="bascket__del"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <?php $counter++; } ?>
                     <div class="bascket__result">Итого: <span class="bascket__result_sum"><?php echo $sum ?></span> руб.</div>
                     <div class="bascket__pay"><a href="#safwqf">Оплатить</a></div>
                     <?php } else {?>
                     
                     <div class="bascket__title">Для начала авторизируйтесь!</div>
                     <div class="bascket__button"><a href="choose.php">Авторизация</a></div>
                     
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
<!-- Calculate.js -->
<script type="text/javascript" src="js/calculate.js"></script>
<!--DeleteFromBascket.js-->
<script type="text/javascript" src="js/delBascket.js"></script>
</body>
</html>