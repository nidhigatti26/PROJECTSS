<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <title>Appetizer</title>
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Martel+Sans:wght@300;400&display=swap" rel="stylesheet">
    <a href="https://icons8.com/icon/114329/share-3"></a>
<!-- CSS BOOTSTRAP -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- css -->
<link rel="stylesheet" href="import/appetizerstyle.css">

<link rel="stylesheet" href="appetizer.scss">

<!-- for socialicons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php
    include 'database/db.php';

    session_start();
    if(isset($_GET['logout'])){
        session_destroy();
        header("location:index.php");
    }
    ?>
</head>
<body>



<!-- Navbar -->
<?php include 'import/navbar.php'; ?>

<!-- <nav class="navbar navbar-expand-lg " style="background-color: #fd4756;height: 5em; " >
  <div class="nav -content">
  <a class="navbar-brand" href="index.php">
  
  <img style="height: 9em; " alt="tropi" src="images/logo20.png "></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav" style="margin-left: 55em;">

        <li class="nav-item active">
          <img src="images/asking1.svg" style="width: 2.5em; height: 2.5em;margin-top: 0.3em;"  alt="">
        </li>

        <li class="nav-item active"  >
          <a class="nav-link" style="color: #fff;margin-top: 0.4em;" href="#">Help <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item active">
          <img src="images/blog1.svg" style="width: 1.7em; margin-left: 0.5em; height: 
          3em;margin-top: 0.3em ;"  alt="">
        </li>
        

        <li class="nav-item active">
          <a class="nav-link" style="color: #fff;margin-top: 0.3em;" href="#">Blog</a>
        </li>
        
        <li style="margin-top: 0.5em;">
          <button class="btn btn-outline-light  my-sm-0" 
          style="height:2.6em;margin-left: 1.5em; "   type="submit">Sign in</button>
        </li>
        <li style="margin-top: 0.5em;">
          <button class="btn btn-outline-light my-2 my-sm-0" 
          style="height:2.6em;margin-left: 1.5em;"   type="submit">Sign up</button>
        </li>
        
      </ul>
    </div>
  </div>
  </nav> -->

<!-- nav cat -->
<nav class="navbar navbar-expand-lg" style="background-color: #FEC24A;">
  <p class="navbar-brand cat ml-5 mt-3" href="#" style="font-size:xx-large;color:#FD4756;font-family: 'Courgette', cursive">Categories</p>
 
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ">
      <a class="nav-item nav-link active " href="#"> <span class="sr-only">(current)</span></a>
        <?php viewcategories(); ?>
<!--      <a class="nav-item nav-link cat" href="appetizer.php" style="margin-left: 3em;font-family: 'Courgette', cursive;font-size: 22px;">Appetizers</a>-->
<!--      <a class="nav-item nav-link cat ml-5"  href="maincourse.php" style="font-family: 'Courgette', cursive;font-size: 22px;">Main Course</a>-->
<!--      <a class="nav-item nav-link cat  ml-5" href="breakfast.php" style="font-family: 'Courgette', cursive;font-size: 22px;">Breakfast</a>-->
<!--      <a class="nav-item nav-link cat  ml-5" href="soups.php" style="font-family: 'Courgette', cursive;font-size: 22px;">Soups</a>-->
<!--      <a class="nav-item nav-link cat  ml-5" href="salad.php" style="font-family: 'Courgette', cursive;font-size: 22px;">Salad</a>-->
<!--      <a class="nav-item nav-link cat ml-5" href="dessert.php" style="font-family: 'Courgette', cursive;font-size: 22px;">Dessert</a>-->
<!--      <a class="nav-item nav-link cat ml-5" href="bevrages.php" style="font-family: 'Courgette', cursive;font-size: 22px;">Beverages</a>-->
    </div>
  </div>
</nav>



<!-- category -->

    <div class="main-container ">
    <div class="container my-4 ">
     
    <?php if(isset($_GET['type'])) {?>
     <?php if($_GET['type']=="Appetizers"){ ?>
        <p style="text-align: center;font-family: Comic Sans MS, Comic Sans, cursive;font-size: xxx-large;color: #FD4756; text-shadow: 0 4px 4px rgba(0, 0, 0, 0.336);">Appetizers</p>
     <?php } elseif ($_GET['type']=="Main_Course"){?>
        <p style="text-align: center;font-family: Comic Sans MS, Comic Sans, cursive;font-size: xxx-large;color: #FD4756; text-shadow: 0 4px 4px rgba(0, 0, 0, 0.336);">Main_Course</p>
     <?php } elseif ($_GET['type']=="Breakfast"){?>
        <p style="text-align: center;font-family: Comic Sans MS, Comic Sans, cursive;font-size: xxx-large;color: #FD4756; text-shadow: 0 4px 4px rgba(0, 0, 0, 0.336);">Breakfast</p>
     <?php } elseif ($_GET['type']=="Soups"){?>
         <p style="text-align: center;font-family: Comic Sans MS, Comic Sans, cursive;font-size: xxx-large;color: #FD4756; text-shadow: 0 4px 4px rgba(0, 0, 0, 0.336);">Soups</p>
     <?php } elseif ($_GET['type']=="Salad"){?>
        <p style="text-align: center;font-family: Comic Sans MS, Comic Sans, cursive;font-size: xxx-large;color: #FD4756; text-shadow: 0 4px 4px rgba(0, 0, 0, 0.336);">Salad</p>
     <?php } elseif ($_GET['type']=="Dessert"){?>
         <p style="text-align: center;font-family: Comic Sans MS, Comic Sans, cursive;font-size: xxx-large;color: #FD4756; text-shadow: 0 4px 4px rgba(0, 0, 0, 0.336);">Dessert</p>
     <?php } elseif ($_GET['type']=="Beverages"){?>
         <p style="text-align: center;font-family: Comic Sans MS, Comic Sans, cursive;font-size: xxx-large;color: #FD4756; text-shadow: 0 4px 4px rgba(0, 0, 0, 0.336);">Beverages</p>
     <?php }?>
        <?php }?>
      <hr class="my-4 ">
  
     
  
            <div class="row">
                <?php if(isset($_GET['type'])){
                    $type=$_GET['type'];
                    viewrecipe($type);
                } ?>
<!--              <div class="col-md-4">-->
<!--                <div class="card mb-2">-->
<!--                  <img class="card-img-top" src="images/CapsicumToast.jpg"-->
<!--                    alt="Card image cap" style="width:350px;height:230px;" >-->
<!--                  <div class="card-body">-->
<!--                    <h4 class="card-title">CapsicumToast</h4>-->
<!--                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the-->
<!--                      card's content.</p>-->
<!--                    <a href="Appetizer1.php" class="btn btn-primary">View Recipe</a>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->
<!--  -->
<!--              <div class="col-md-4 clearfix d-none d-md-block">-->
<!--                <div class="card mb-2">-->
<!--                  <img class="card-img-top" src="images/bakedspringroll1.jpg"-->
<!--                    alt="Card image cap" style="width:350px;height:230px;" >-->
<!--                  <div class="card-body">-->
<!--                    <h4 class="card-title">Baked Spring Roll</h4>-->
<!--                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the-->
<!--                      card's content.</p>-->
<!--                    <a class="btn btn-primary">View Recipe</a>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->
<!--  -->
<!--              <div class="col-md-4 clearfix d-none d-md-block">-->
<!--                <div class="card mb-2">-->
<!--                  <img class="card-img-top" src="images/cheesepuff.jpg " style="width:350px;height:230px;" -->
<!--                    alt="Card image cap">-->
<!--                  <div class="card-body">-->
<!--                    <h4 class="card-title">Cheese Puffs</h4>-->
<!--                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the-->
<!--                      card's content.</p>-->
<!--                    <a class="btn btn-primary">View Recipe</a>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->
            </div>
  
          </div>
          </div>
          
      

<!-- second slide -->
 
<!-- 

<div class="container my-4 ">
  <div class="row">
    <div class="col-md-4">
      <div class="card mb-2">
        <img class="card-img-top" src="images/CauliflowerSouffle2.jfif" style="width:350px;height:230px;" 
          alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Cauliflower Souffle</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          <a class="btn btn-primary">View Recipe</a>
        </div>
      </div>
    </div>

    <div class="col-md-4 clearfix d-none d-md-block">
      <div class="card mb-2">
        <img class="card-img-top" src="images/CheeseQuiche.jfif"  style="width:350px;height:230px;" 
          alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Five Cheese Quiche</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          <a class="btn btn-primary">View Recipe</a>
        </div>
      </div>
    </div>

    <div class="col-md-4 clearfix d-none d-md-block">
      <div class="card mb-2">
        <img class="card-img-top" src="images/peppernachos.jpg"  style="width:350px;height:230px;" 
          alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Pepper Nachos</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          <a class="btn btn-primary">View Recipe</a>
        </div>
      </div>
    </div>
  </div>
</div> -->

  <!-- fooooter -->


  <footer class="new_footer_area bg_color mt-5">
    <div class="new_footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 ">
                    <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Trofi</h3>
                        <p>Have a look at our recipes and have fun time by trying it at home.!</p>
                        <form action="#" class="f_subscribe_two mailchimp" method="post" novalidate="true" _lpchecked="1">
                            <p class="mchimp-errmessage" style="display: none;"></p>
                            <p class="mchimp-sucmessage" style="display: none;"></p>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">For you </h3>
                        <ul class="list-unstyled f_list">
                            <li></li>
                            <li><a href="appetizer.php?type=Appetizers">View-Recipe</a></li>
                            <li><a href="order_food.php">Order-Food</a></li>
  
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 ">
                    <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Details</h3>
                        <ul class="list-unstyled f_list">
                            <li><a href="aboutus.php">About us</a></li>                 
                            <li><a href="chef.php">Our Chef's</a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Team Solutions</h3>
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-instagram"></a>
                        <a href="#" class="fa fa-linkedin"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bg">
            <div class="footer_bg_one"></div>
            <div class="footer_bg_two"></div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-7">
                    <p class="mb-0 f_400">© Tropi All rights reserved.</p>
                </div>
  
            </div>
        </div>
    </div>
  </footer>









    <!-- JAVASCRIPT BOOTSTRAP -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script> 
 
    
</body>
</html>
