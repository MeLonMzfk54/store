<?php session_start();?>
     <body>
      <header class="header">
          <div class="container">
              <div class="header__inner">
                  <div class="header__left">
                      <h2 class="header__logo"><strong>MelonStore</strong></h2>
                  </div>
                  <div class="header__right">
                        <nav class="header__navbar">
                          <ul class="header__menu">
                              <li class="header__item"><a href="index.php" class="header__link">Главная</a></li>
                              <li class="header__item"><a href="#" class="header__link">Футболки</a></li>
                              <li class="header__item"><a href="#" class="header__link">Джинсы</a></li>
                              <li class="header__item header__icons">
                              <a class="header__link_icon" href="bascket.php"><i class="fa fa-shopping-cart"></i></a>
                              <a class="header__link_icon" href="cabinet.php"><i class="fa fa-user"></i><span class="header__user"><?php echo $_SESSION['username'] ?></span></a>
                              <a class="header__link_icon" href="choose.php"><i class="fa fa-user-plus"></i></a>
                              </li>
                          </ul>
                      </nav>
                  </div>
                  <div class="header__burger">
                      <span></span>
                  </div>
              </div>
          </div>
      </header>
     

