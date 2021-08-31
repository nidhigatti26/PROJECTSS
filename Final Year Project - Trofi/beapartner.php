<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <title>Be a Partner</title>

    <?php 
     
     include 'database/db.php';
     if(isset($_POST['submit1']))
     {

     $f_name = $_POST['f_name'];
     $l_name = $_POST['l_name'];
     $email   = $_POST['email'];
     $c_name = $_POST['c_name'];
     $c_website = $_POST['c_website'];
     $net_worth = $_POST['net_worth'];
     $phone = $_POST['phone'];
     $investment = $_POST['investment'];
     $contry = $_POST['contry'];
     $state = $_POST['state'];
     $city = $_POST['city'];



     submit1($f_name,$l_name,$email,$c_name,$c_website,$net_worth,$phone,$investment,$contry,$state,$city);


     }
     ?>


    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Martel+Sans:wght@300;400&display=swap" rel="stylesheet">
<!-- CSS BOOTSTRAP -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- css -->
<link rel="stylesheet" href="import/style.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- for socialicons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body >

<!-- Navbar -->
<?php include 'import/navbar.php'; ?>
<!-- be a dasher -->
<div class="container">
    <div class="row py-5 align-items">
      <!-- For Demo Purpose -->
      <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
        <img src="images/beapartner.jpg" style="width: 37em;height: 30em;margin-left: 1em;margin-top: 4em;" alt="" class="img-fluid mb-3 d-none d-md-block">
        
     
      </div>
  
      <!-- Registeration Form -->
      <div class="col-md-7 col-lg-6 ml-auto">
      <form action="" method="POST">

          <div class="row">
  
            <!-- First Name -->
            <div class="input-group col-lg-6 mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-user text-muted"></i>
                </span>
              </div>
              <input id="firstName" type="text" name="f_name" placeholder="First Name" class="form-control bg-white border-left-0 border-md" required>
            </div>
  
            <!-- Last Name -->
            <div class="input-group col-lg-6 mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-user text-muted"></i>
                </span>
              </div>
              <input id="lastName" type="text" name="l_name" placeholder="Last Name" class="form-control bg-white border-left-0 border-md" required>
            </div>
  
            <!-- Email Address -->
            <div class="input-group col-lg-12 mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-envelope text-muted"></i>
                </span>
              </div>
              <input id="email" type="email" name="email" placeholder="Email Address" class="form-control bg-white border-left-0 border-md" required>
            </div>

              <!-- Company Name -->
  <div class="input-group col-lg-6 mb-4">
    <div class="input-group-prepend">
      <span class="input-group-text bg-white px-4 border-md border-right-0">
        <i class="fa fa-user text-muted"></i>
      </span>
    </div>
    <input  type="text" name="c_name" placeholder="Company Name " class="form-control bg-white border-left-0 border-md" required>
  </div>

  <!-- Company website -->
  <div class="input-group col-lg-6 mb-4">
    <div class="input-group-prepend">
      <span class="input-group-text bg-white px-4 border-md border-right-0">
        <i class="fa fa-user text-muted"></i>
      </span>
    </div>
    <input type="text" name="c_website" placeholder="Company Website" class="form-control bg-white border-left-0 border-md" required>
  </div>          


            <!-- Net-Worth -->
            <div class="input-group col-lg-12 mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-envelope text-muted"></i>
                </span>
              </div>
              <input type="text" name="net_worth" placeholder="Net-Worth" class="form-control bg-white border-left-0 border-md" required>
            </div>
  
            <!-- Phone Number -->
            <div class="input-group col-lg-12 mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-phone-square text-muted"></i>
                </span>
              </div>
              <select id="countryCode" name="phone1" style="max-width: 80px" class="custom-select form-control bg-white border-left-0 border-md h-100 font-weight-bold text-muted">
                <option value="91">+91</option>
               
              </select>
              <input id="phoneNumber" type="tel" name="phone" placeholder="Phone Number" class="form-control bg-white border-md border-left-0 pl-3" required>
            </div>.
  
            <!-- Job -->
            <div class="input-group col-lg-12 mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-black-tie text-muted"></i>
                </span>
              </div>
              <select style="height: 3.5em;"  name="investment" class="form-control custom-select bg-white border-left-0 border-md" required>
                <option value="">Cash Available For Investment</option>
                <option value="40Lakhs - 50Lakhs">40Lakhs - 50Lakhs</option>
                <option value="50Lakhs - 60Lakhs">50Lakhs - 60Lakhs</option>
                <option value="70Lakhs - 80Lakhs">70Lakhs - 80Lakhs</option>
                <option value="90Lakhs - 1 Crore">90Lakhs - 1 Crore</option>
              </select>
            </div>  
            
            <!-- Location -->
            <h4 class="ml-3" >Location Of Interest</h4>

             <!-- country -->
             <div class="input-group col-lg-12 mb-4 mt-3">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-envelope text-muted"></i>
                </span>
              </div>
              <input type="text" name="contry" placeholder="Country" class="form-control bg-white border-left-0 border-md" required>
            </div>

  <!-- State -->
  <div class="input-group col-lg-6 mb-4">
    <div class="input-group-prepend">
      <span class="input-group-text bg-white px-4 border-md border-right-0">
        <i class="fa fa-user text-muted"></i>
      </span>
    </div>
    <input  type="text" name="state" placeholder="State" class="form-control bg-white border-left-0 border-md" required>
  </div>

  <!-- City -->
  <div class="input-group col-lg-6 mb-4">
    <div class="input-group-prepend">
      <span class="input-group-text bg-white px-4 border-md border-right-0">
        <i class="fa fa-user text-muted"></i>
      </span>
    </div>
    <input type="text" name="city" placeholder="City" class="form-control bg-white border-left-0 border-md" required>
  </div>          

            <!-- Submit Button -->
            <div class="form-group col-lg-12 mx-auto mb-0">
            <button  style="background-color:#FD4756;width:33.5em;margin-left:0.3em;height:2.9em;color:white;border-color:#fd4756;" name="submit1">Join us</button>

              

              </a>
            </div>
  
       
  
           
  
            
  
          </div>
        </form>
      </div>
    </div>
  </div>
  
  

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
<script>
    // For Demo Purpose [Changing input group text on focus]
$(function () {
  $("input, select").on("focus", function () {
    $(this).parent().find(".input-group-text").css("border-color", "#80bdff");
  });
  $("input, select").on("blur", function () {
    $(this).parent().find(".input-group-text").css("border-color", "#ced4da");
  });
});
</script>

<script>
$(document).ready(function(){
  $('.toast').toast('show');
});
</script>


</body>
</html>