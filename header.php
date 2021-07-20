<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="Web.css">
</head>
<body>
    <header id="header">
     <nav style=" color: #fff;"  class="navbar navbar-expand-lg navbar-dark bg-info">
       
        <!-- Navigation -->
    <nav class="nav">
      <div class="navigation container">
        <a href="Home.html"><i class="fas fa-home"></i></a>
        <div class="logo">

          <h1>Pet Shop</h1>
        </div>

        <div class="menu">
          <div class="top-nav">
            <div class="logo">
              <h1>Pet Shop</h1>
            </div>
            <div class="close">
              <i class="bx bx-x"></i>
            </div>
          </div>
          <ul class="nav-list">
            <li class="nav-item">
              <a href="web.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="Dog.html" class="nav-link">Dog</a>
            </li>
            <li class="nav-item">
              <a href="Cat.html" class="nav-link">Cat</a>
            </li>
            <li class="nav-item">
              <a href="Bird.html" class="nav-link">Bird</a>
            </li>
            <li class="nav-item">
              <a href="Fish.html" class="nav-link">Fish</a>
            </li>
            <li class="nav-item">
                <a href="Small Animals.html" class="nav-link">Others</a>
              </li>
            <li class="nav-item">
              
            </li>
          </ul>

        </div>
           <div class="hamburger">
          <i class="bx bx-menu"></i>
        </div>
        <a href="web.php" class="navbar-brand">
           
        </a>
        <button class="navbar-toggler"
            type="button"
                data-toggle="collapse"
                data-target = "#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="auto"></div>
            <div class="navbar-nav">
                <a href="cart.php" class="nav-item nav-link active">
                    <h5 class="cart px-5">
                        <i class="fas fa-shopping-cart"></i> Cart
                         <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                        ?>
      </div>
    </nav>
           
        
                       
                    </h5>
                </a>
            </div>
        </div>

    </nav>

        
</header>
        
        
        
        </body>
      </html
