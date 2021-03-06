<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1">
    <title>Store</title>
      <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<!--  Montserrat-->
 <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <div class="wrapper">
        <?php require_once("header.php")?>
        <section class="products">
            <div class="container">
                <div class="products__inner">
                    <h1 class="products__title">Все товары</h1>
                     <h2 class="products__subtitle">Футболки</h2> 
                        <hr>
                    <?php
                        require_once "includes/functions.php";
                        $products = getProducts();
                    ?>
                    <div class="products__block products__shirt">
                        <?php
                            foreach($products as $product){
                                if($product["category"] == "Футболки"){     
                        ?>
                        <div class="products__item">
                            <div class="products__image"><img src="<?php echo $product['img'];?>" alt="Футболка"></div>
                            <div class="products__desc">
                                   <h4 class="products__name"><?php echo $product['title'];?></h4>
                                   <div class="products__text"><?php echo $product['content'];?></div>
                                   <div class="products__price">
                                   <?php if(isset($_SESSION["username"])){?>
                                    <button title="Добавить в корзину" id="<?php echo $product['kid']; ?>" class="products__link"><i class="fa fa-shopping-basket"></i></button>    
                                    <button id="<?php echo $product['lid']; ?>" title="Добавить в список пожеланий" data-id="<?php echo $product['lid'];?>" class="products__link_heart"><i class="fa fa-heart"></i></button>
                                       <?php } ?>
                                       <strong class="products__cost"><?php echo $product['cost'];?> <span>руб.</span></strong>
                                   </div>
                            </div>
                        </div>
                        <?php } else if($product["category"] == "Джинсы") { ?>
                    </div>
                    <h2 class="products__subtitle products__subtitle_j">Джинсы</h2> 
                    <hr>
                    <div class="products__block products__jeans">
                        <div class="products__item">
                            <div class="products__image"><img src="<?php echo $product['img'];?>" alt="Футболка"></div>
                            <div class="products__desc">
                                   <h4 class="products__name"><?php echo $product['title'];?></h4>
                                   <div class="products__text"><?php echo $product['content'];?></div>
                                   <div class="products__price">
                                   <?php if(isset($_SESSION["username"])){?>
                                    <button id="<?php echo $product['kid']; ?>" title="Добавить в корзину" class="products__link"><i class="fa fa-shopping-basket"></i></button>
                                    <button id="<?php echo $product['lid']; ?>" title="Добавить в список пожеланий"  data-id="<?php echo $product['lid'];?>" class=" products__link_heart"><i class="fa fa-heart"></i></button>
                                      <?php } ?>
                                       <strong class="products__cost"><?php echo $product['cost'];?>  <span>руб.</span></strong>
                                   </div>
                            </div>
                        </div>
                         <?php }} ?>
                    </div>
                </div>
            </div>
        </section>
          <?php require_once "footer.php" ?>
   </div>
      <!-- jQuery -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <!-- JS -->
  <script type="text/javascript" src="js/script.js"></script> 
<!--  wishes.js-->
<script src="js/wishes.js"></script>
<!--Bascket.js-->
<script src="js/bascket.js"></script>
</body>
</html>