<?php

session_start();

require_once ('CreateDb.php');
require_once ('component.php');

// create instance of Createdb class
$database = new CreateDb(dbname:"Productnewdb", tablename:"Productnewtb");

if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'web.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
      
    }
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charest="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	     <meta http-equiv="X-UA-Compatible" content="ie=edge">
       
         <!--------Box icon-------->
         <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

          <!--------Google Fonts-------->
          <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet" />

          <!--------Custom Stylesheet-------->
          <link rel="stylesheet" type="text/css" href="Web.css">
	    
	   <!-- Font Awesome -->
      	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
	    
	 <!-- Bootstrap CDN -->
   	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    	  
	   <!-----Footer---->
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
         
         <title>Pet City | Pet Shop</title>
	    <?php require_once ("header.php"); ?>
    </head>
    <body>
         <!-- Header -->
  <header id="home" class="header">
  
         <!--------Hero-------->
         <img src="Images/Image 1.png" width="100%" class="hero-img" alt="pets"/>
        </header>

        <section class="banner" id="banner">
            <div class="col">
                <h1>Shop For Your Best Friends!</h1>
                <p>For all your pet needs and feeds from premium pet food, pet treats, vitamin and supplements to pet, toys, collars,feeding bowls, beds at an affordable price. </p>
	 		<a href="#featured-products" class="btn">Shop Now</a>
            </div>            
         </section> 
        

         <!--------Categories-------->
         <section class="categories">
             <h1>Categories</h1>
             <div class="row ">
             
                <div class="categories-col">
                     <img src="Images/Image 3.jpg" width="100%">
                     <div class="layer">
                         <h3><a href="Dog.html">Dog</a></h3>
                     </div>
                 </div>
                 <div class="categories-col">
                    <img src="Images/Image 4.jpg" width="100%">
                    <div class="layer">
                        <h3><a href="Cat.html">Cat</a></h3>
                    </div>
                </div>
                <div class="categories-col">
                    <img src="Images/Image 5.jpg" width="100%">
                    <div class="layer">
                        <h3><a href="Bird.html">Bird</a></h3>
                    </div>
                </div>
                <div class="categories-col">
                    <img src="Images/Image 6.jpg" width="100%">
                    <div class="layer">
                        <h3><a href="Fish.html">Fish</a></h3>
                    </div>
                </div>
                <div class="categories-col">
                    <img src="Images/Image 7.jpg" width="100%">
                    <div class="layer">
                        <h3><a href="Small Animals.html">Small Animals</a></h3>
                    </div>
                </div>
             </div>
             </div>          
         </section>

        <!--------Featured Products-------->
        <section class="section featured">
            <div class="title">
                <h1 id="featured-products">Featured Products</h1>
            </div>
		<div class="container">
        <div class="row text-center py-5">
            <?php
            $result=$database->getData();
            while($row=mysqli_fetch_assoc($result)){
                component($row['product_name'],$row['product_price'],$row['product_image'],$row['id']);
            }
           
            ?>
        </div>
</div>
</section>
        <!-------offer------>
        <div class="offer">
            <div class="small-container">
                <div class="row">
                    <div class="col-3">
                        <img src="Images/Image 16.jpg" width="80%" class="offer-img" >
                    </div>
                    <div class="col-3">
                        <p>Exclusively Available on Pet shop</p>
                        <h1>Pet Bed</h1>
                        <small>Elevated Pet Bed-Portable Raised Bed Non-Slip</small>
                        <a href="Dog.html #dog-bed" class="btn">Buy Now</a>
                    </div>
                    
                </div>
            </div>
        </div>

        <!-- Brands -->
    <section class="section">
        <div class="brands-center container">
          <div class="brand">
            <img src="Images/Image 17.png" width="100%" alt="" />
          </div>
          <div class="brand">
            <img src="Images/Image 18.png" width="100%" alt="" />
          </div>
          <div class="brand">
            <img src="Images/Image 19.png" width="100%" alt="" />
          </div>
          <div class="brand">
            <img src="Images/Image 20.jpg" width="100%"  alt="" />
          </div>
          <div class="brand">
            <img src="Images/Image 21.jpg" width="100%" alt="" />
          </div>
          <div class="brand">
            <img src="Images/Image 22.jpg" width="100%" alt="" />
          </div>
        </div>
      </section>
    </main>

  <!-------Footer------->
    <footer class="footer">
        <div class="footer-content">
        <h3>Pet City</h3>
        <p>Bound by an organizational culture - one that fosters respect and compassion to all animals and their human caretakers - PetCity sets itself apart from other many services in the country by treating your companion animals with the kind of care, love and kindness we show towards our own fur babies.</p>
        
        <ul class="socials">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        </ul>
        </div>
        <div class="footer-bottom">
        <p>All Right reserved by &copy;petcity 2021</p>
        </div>
        </footer>
    <!-- End Footer -->

         <!--------GSAP-------->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>


          <!--------Custom Script-------->
          <script language="javascript" type="text/javascript" src="Web.js"></script>
          <script language="javascript" type="text/javascript" src="Cart1.js"></script>
	
	 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    </html>

