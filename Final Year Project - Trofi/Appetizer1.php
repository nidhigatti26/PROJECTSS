<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <title>Home-Page</title>
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Martel+Sans:wght@300;400&display=swap" rel="stylesheet">
    <a href="https://icons8.com/icon/114329/share-3"></a>
<!-- CSS BOOTSTRAP -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- css -->
<link rel="stylesheet" href="import/appetizerstyle.css">
<!-- <link rel="stylesheet" href="import/style.css"> -->

<!-- for socialicons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>


<!-- Navbar -->
<?php include 'import/navbar.php'; ?>

<!-- navbar -->
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

<!--Recipe 1 -->
<div class="container py-3 mt-4">
  
  <!-- Card Start -->
  <div class="card">
    <div class="row ">

      <div class="col-md-7 px-3">
        <div class="card-block px-6">
          <h4 class="card-title">Baked Spring Roll </h4>
          <p class="card-text">
            An exciting blend of vegetables and spices is sealed inside wrappers, then baked until crisp. Delicious and crunchy without deep frying! I’ll keep it short today. I’d like to think that all or almost all of you already know how to make spring rolls. They are one of my fave finger foods and ever since I’ve come across the oven-baked version, I’ve nominated them as my no1 Savoury Stuff, way better than deep fried street food and packaged crisps/ chips.
          </p>
          <p class="card-text"><strong>-Username</strong></p>
          <br>
          <a href="#" class="mt-auto btn btn-primary  ">Watch video</a>
          <a href="#" class="mt-auto btn btn-primary  ">Shop ingridents</a>
          <a href="#"><img src="https://img.icons8.com/material/24/000000/share.png"/></a>
        </div>
      </div>
      <!-- Carousel start -->
      <div class="col-md-5">
        <div id="CarouselTest" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#CarouselTest" data-slide-to="0" class="active"></li>
            <li data-target="#CarouselTest" data-slide-to="1"></li>
            <li data-target="#CarouselTest" data-slide-to="2"></li>

          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block" src="images/CapsicumToast1.jpg" alt="" style="width:350px;height:230px;" >
            </div>
            <div class="carousel-item">
              <img class="d-block" src="https://picsum.photos/450/300?image=855" alt="">
            </div>
            <div class="carousel-item">
              <img class="d-block" src="https://picsum.photos/450/300?image=355" alt="">
            </div>
            <a class="carousel-control-prev" href="#CarouselTest" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
            <a class="carousel-control-next" href="#CarouselTest" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
          </div>
        </div>
      </div>
      <!-- End of carousel -->
    </div>
  </div>
  <!-- End of card -->

</div>

<h2 style="text-align: center; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
    <strong>RECIPE</strong>
</h2>

<div class="container">
    <div class="row">
        <div class="col-5">
            <table class="table" style="width:34em; background-color: #FEC24A;">
                <thead class="thead-dark">
                  <tr>
                   
                    <th scope="col">INGREDIENTS</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                      
                      <td>Mushrooms, dried</td>
                    </tr>
                    <tr>
                        <td>Rice vermicelli</td>
                    </tr>
                    <tr>
                        <td>scallions, spring or green onions</td>
                    </tr>
                    <tr>
                        <td>garlic</td>
                    </tr>
                    <tr>
                        <td>carrot</td>
                    </tr>
                    <tr>
                        <td>cabbage</td>
                    </tr>
                    <tr>
                        <td>sweet red bell peppers</td>
                    </tr>
                    <tr>
                        <td>soy sauce, tamari</td>
                    </tr>
                    <tr>
                        <td>vinegar</td>
                    </tr>
                    <tr>
                        <td>Red hot pepper sauce</td>
                    </tr>
                    <tr>
                        <td>black pepper</td>
                    </tr>   
                    <tr>
                        <td>salt</td>
                    </tr>
                    <tr>
                        <td>cornstarch</td>
                    </tr>     
                    <tr>
                        <td>spring roll wrappers</td>
                    </tr>                  
                </tbody>
            </table>
        </div>
        <div class="col-5">
            <table class="table" style="width:34em; margin-left: 5.7em;background-color: #FEC24A;">
                <thead class="thead-dark">
                  <tr>
                    
                    <th scope="col">QUANTITY</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>6 each</td>
                    </tr> 
                    <tr>
                        <td>60 gms</td>
                    </tr> 
                    <tr>
                        <td>3 each</td>
                    </tr> 
                    <tr>
                        <td>2 cloves</td>
                    </tr> 
                    <tr>
                        <td>1 large</td>
                    </tr> 
                    <tr>
                        <td>1 1/2 cup</td>
                    </tr> 
                    <tr>
                        <td>1/2 cup </td>
                    </tr> 
                    <tr>
                        <td>1 tbl spoon</td>
                    </tr> 
                    <tr>
                        <td>1</td>
                    </tr> 
                    <tr>
                        <td>1</td>
                    </tr> 
                    <tr>
                        <td>1</td>
                    </tr> 
                    <tr>
                        <td>1</td>
                    </tr> 
                    <tr>
                        <td>2 tea-spoons</td>
                    </tr> 
                    <tr>
                        <td>12 each</td>
                    </tr> 
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="container mt-3">
    <div class="row">
        <div class="col-0">
         
        </div>
        <div class="col-2 ">
            <div class="card-header " style="background-color: #343A40; color: #fff; width: 70em; margin-right: 8em;text-align: center;">
                DIRECTIONS OF COOKING
            </div>
            <div class="card-body" style="width: 70em;background-color: #FEC24A;">
                <p >
                    Place mushrooms and noodles in a small heatproof bowl. Cover with boiling water. Soak for 5–7 minutes or until softened. Drain. Remove stems and chop finely. Place noodles in a large bowl and cut into 3cm lengths.
    
    Lightly spray a large wok with oil and heat over medium-high heat. Add green chilli, garlic, carrot, capsisum and cabbage. Stir-fry for 5–7 minutes or until softened. Add noodles, mushrooms and soy sauce. Stir-fry for 1 min or until heated. Then add vinegar, salt, pepper, green chilli Transfer to a bowl, then set aside to cool.
    
    Preheat oven to 190°C or 170°C fan-forced. Line a baking tray with baking paper. Lightly spray with oil. Combine cornflour with 1 tablespoon cold water in a small bowl. Place 1 wrapper on a board with a corner pointing towards you. Brush edges with cornflour mixture and keep remaining wrappers covered with damp tea towel.
    
    Spoon ¼ cup vegetable mixture into corner of wrapper. Fold corner over filling then roll up from corner to corner, folding edges in to enclose filling. Place on prepared tray. Repeat with remaining wrappers. Lightly spray with oil.
    
    Bake for 15–20 minutes. Serve with sweet and sour sauce or Ketchup.
    
    Note-
    
    You can add any vegetable of your choice. if you like onion you can add in it. first sauté onion dan add all vegetables in it.
                </p>
            </div>
        </div>
        <div class="col-0">
            
        </div>
    </div>
</div>




 
 <br>
<br>
 



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
  