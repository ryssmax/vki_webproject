<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Главная</title>
        <link href="/template/css/bootstrap.min.css" rel="stylesheet">
        <link href="/template/css/font-awesome.min.css" rel="stylesheet">
        <link href="/template/css/prettyPhoto.css" rel="stylesheet">
        <link href="/template/css/price-range.css" rel="stylesheet">
        <link href="/template/css/animate.css" rel="stylesheet">
        <link href="/template/css/main.css" rel="stylesheet">
        <link href="/template/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="/template/css/slider.css">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>

        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="/template/images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/template/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/template/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/template/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/template/images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->

  <!-- slide start -->
<div class="demo-cont">
  <!-- slider start -->
  <div class="fnc-slider example-slider">
    <div class="fnc-slider__slides">
      <!-- slide start -->
      <div class="fnc-slide m--blend-green m--active-slide">
        <div class="fnc-slide__inner">
          <div class="fnc-slide__mask">
            <div class="fnc-slide__mask-inner"></div>
          </div>
          <div class="fnc-slide__content">
            <h2 class="fnc-slide__heading">
              <div class="fnc-slide__heading-line">
                <span>Whatch</span>
              </div>
              <div class="fnc-slide__heading-line">
                <span>Dogs 2</span>
              </div>
            </h2>
            <button type="button" class="fnc-slide__action-btn">
              Menu
              <span data-text="Menu">Menu</span>
            </button>
          </div>
        </div>
      </div>
      <!-- slide end -->
      <!-- slide start -->
      <div class="fnc-slide m--blend-dark">
        <div class="fnc-slide__inner">
          <div class="fnc-slide__mask">
            <div class="fnc-slide__mask-inner"></div>
          </div>
          <div class="fnc-slide__content">
            <h2 class="fnc-slide__heading">
              <div class="fnc-slide__heading-line">
                <span>The</span>
              </div>
              <div class="fnc-slide__heading-line">
                <span>Crew 2</span>
              </div>
            </h2>
            <button type="button" class="fnc-slide__action-btn">
              Menu
              <span data-text="Menu">Menu</span>
            </button>
          </div>
        </div>
      </div>
      <!-- slide end -->
      <!-- slide start -->
      <div class="fnc-slide m--blend-red">
        <div class="fnc-slide__inner">
          <div class="fnc-slide__mask">
            <div class="fnc-slide__mask-inner"></div>
          </div>
          <div class="fnc-slide__content">
            <h2 class="fnc-slide__heading">
              <div class="fnc-slide__heading-line">
                <span>The Last</span>
              </div>
              <div class="fnc-slide__heading-line">
                <span>Of Us 2</span>
              </div>
            </h2>
            <button type="button" class="fnc-slide__action-btn">
              Menu
              <span data-text="Menu">Menu</span>
            </button>
          </div>
        </div>
      </div>
      <!-- slide end -->

      <div class="fnc-slide m--blend-blue">
        <div class="fnc-slide__inner">
          <div class="fnc-slide__mask">
            <div class="fnc-slide__mask-inner"></div>
          </div>
          <div class="fnc-slide__content">
            <h2 class="fnc-slide__heading">
              <div class="fnc-slide__heading-line">
                <span>The</span>
              </div>
              <div class="fnc-slide__heading-line">
                <span>Division 2</span>
              </div>
            </h2>
            <button type="button" class="fnc-slide__action-btn">
              Menu
              <span data-text="Menu">Menu</span>

            </button>
          </div>
        </div>
      </div>



    </div>
    <nav class="fnc-nav">
      <div class="fnc-nav__bgs">
        <div class="fnc-nav__bg m--navbg-green m--active-nav-bg"></div>
        <div class="fnc-nav__bg m--navbg-dark"></div>
        <div class="fnc-nav__bg m--navbg-red"></div>
        <div class="fnc-nav__bg m--navbg-blue"></div>
      </div>
      <div class="fnc-nav__controls">
        <button class="fnc-nav__control">
          Whatch Dogs 2
          <span class="fnc-nav__control-progress"></span>
        </button>
        <button class="fnc-nav__control">
          The Crew 2
          <span class="fnc-nav__control-progress"></span>
        </button>
        <button class="fnc-nav__control">
          The Last Of Us 2
          <span class="fnc-nav__control-progress"></span>
        </button>
        <button class="fnc-nav__control">
          The Division 2
          <span class="fnc-nav__control-progress"></span>
        </button>
      </div>
    </nav>
  </div>

  <div class="demo-cont__credits">

                  <div class="header-middle"><!--header-middle-->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="logo ">
                                    <a href="/"><img src="/template/images/home/logo.png" alt="" /></a>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="shop-menu ">
                                    <ul class="nav navbar-nav">
                                        <li><a href="/cart">
                                                <i class="fa fa-shopping-cart"></i> <h6>Корзина </h6>
                                                (<span id="cart-count"><?php echo Cart::countItems(); ?></span>)
                                            </a>
                                        </li>
                                        <?php if (User::isGuest()): ?>                                        
                                            <li><a href="/user/login/"><i class="fa fa-lock"></i><h6> Вход</h6></a></li>
                                        <?php else: ?>
                                            <li><a href="/cabinet/"><i class="fa fa-user"></i> <h6>Аккаунт</h6></a></li>
                                            <li><a href="/user/logout/"><i class="fa fa-unlock"></i><h6> Выход</h6></a></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/header-middle-->
           
                    <div class="container">

                                <div class="mainmenu pull-left">
                                    <ul class="">
                                        <li><a href="/"><h6>Главная</h6></a></li>
                                        <li><a href="/catalog/"><h6>Каталог</h6></a></li>
                                        
                                    <!--    <li><a href="/about/">О магазине</a></li> -->

                                        <li><a href="/contacts/"><h6>Контакты</h6></a></li>

                                                                                <li><a href="/cart">
                                                <h6><i class="fa fa-shopping-cart " aria-hidden="true"> </i> Корзина 
                                                (<span id="cart-count"><?php echo Cart::countItems(); ?></span>)
                                            </h6></a>
                                        </li>
                                        <?php if (User::isGuest()): ?>                                        
                                            <li><a href="/user/login/"><h6><i class="fa fa-lock" aria-hidden="true"></i> Вход </h6></a></li>
                                        <?php else: ?>
                                            <li><a href="/cabinet/"><h6><i class="fa fa-user " aria-hidden="true"></i> Аккаунт </h6></a></li>
                                            <li><a href="/user/logout/"><h6><i class="fa fa-unlock " aria-hidden="true"></i> Выход</h6></a></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
            
               
                </div><!--/header-bottom-->
  </div>  

</div>

<!-- slider end -->

            </header><!--/header-->