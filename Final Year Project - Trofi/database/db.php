<?php 
//register database connection

function register($fname,$lname,$uname,$phoneno,$email,$password,$cpassword,$address)
  {

    $conn = mysqli_connect('localhost','root','','trofi') or die('unable to connect');
    $result = mysqli_query($conn,"INSERT INTO `register`(`fname`, `lname`, `uname`, `phoneno`,`email`, `password`, `cpassword`,`address`) VALUES ('$fname','$lname','$uname', '$phoneno','$email','$password','$cpassword','$address')");

    if($result){
        header("location:login.php");
    }else{
        echo "<script> alert('unable to register')</script>";
    }

  }
  function submit($f_name,$l_name,$email,$phone,$location,$time_slot)
  {

    $conn = mysqli_connect('localhost','root','','trofi') or die('unable to connect');
    $result = mysqli_query($conn," INSERT INTO `dasher`(`f_name`, `l_name`,`email`, `phone`, `location`,`time_slot`) VALUES ('$f_name','$l_name','$email', '$phone','$location','$time_slot')
    ");
    if($result){

?>
<div aria-live="polite" aria-atomic="true" style="position: absolute;">
  <!-- Position it -->
  <div style="position: absolute; width:40em;top:5em; left: 38em;height:1em;">

    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="4000"  >
      <div class="toast-header " style="background-color:#FEC24A">
        
        <strong class="mr-auto">Thank you for joining us !</strong>
        
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="toast-body">
   Wait for us to conatact you.
      </div>
    </div>
  </div>
</div>
<?php
        
    }else{
        echo "<script> alert('Unable to Submit Details')</script>";
    }

  }

  function submit1($f_name,$l_name,$email,$c_name,$c_website,$net_worth,$phone,$investment,$contry,$state,$city)
  {

    $conn = mysqli_connect('localhost','root','','trofi') or die('unable to connect');
    $result = mysqli_query($conn," INSERT INTO `partner`(`f_name`, `l_name`,`email`, `c_name`, `c_website`,`net_worth`,`phone`, `investment`,`contry`, `state`, `city`) VALUES ('$f_name','$l_name','$email', '$c_name','$c_website','$net_worth','$phone','$investment','$contry','$state','$city')");
    if($result){

        ?>
        <div aria-live="polite" aria-atomic="true" style="position: absolute;">
          <!-- Position it -->
          <div style="position: absolute; width:40em;top:5em; left: 32em;height:1em;">
        
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="4000"  >
              <div class="toast-header " style="background-color:#FEC24A">
                
                <strong class="mr-auto">Thank you for joining us !</strong>
                
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="toast-body">
           Wait for us to conatact you.
              </div>
            </div>
          </div>
        </div>
        <?php
                
            }else{
                echo "<script> alert('Unable to Submit Details')</script>";
            }

  }
  function submit2($f_name,$l_name,$email,$field,$knowledge,$experience,$phone)
  {

    $conn = mysqli_connect('localhost','root','','trofi') or die('unable to connect');
    $result = mysqli_query($conn," INSERT INTO `job`(`f_name`, `l_name`,`email`, `field`, `knowledge`,`experience`,`phone`) VALUES ('$f_name','$l_name','$email', '$field','$knowledge','$experience','$phone')
    ");
    

    if($result){

        ?>
        <div aria-live="polite" aria-atomic="true" style="position: absolute;">
          <!-- Position it -->
          <div style="position: absolute; width:40em;top:5em; left: 38em;height:1em;">
        
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="4000"  >
              <div class="toast-header " style="background-color:#FEC24A">
                
                <strong class="mr-auto">Thank you for joining us !</strong>
                
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="toast-body">
           Wait for us to conatact you.
              </div>
            </div>
          </div>
        </div>
        <?php
                
            }else{
                echo "<script> alert('Unable to Submit Details')</script>";
            }


  }

function login($email,$password)
{
    $conn = mysqli_connect('localhost','root','','trofi') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM register WHERE email='$email' and password='$password'");

    if(mysqli_num_rows($result_set)==1)
    {
        session_start();
        while($row = mysqli_fetch_array($result_set))
        {
            $_SESSION['id']=$row[0];
            $_SESSION['uname']=$row[3];
            $_SESSION["email"] = $row[5];
            $_SESSION['address'] = $row[9];
        }
        header("location:index.php");
    }else {
        echo "<script> alert('Login Unsuccessful')</script>";
    }
}

function viewcategories(){
    $conn = mysqli_connect('localhost','root','','trofi') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `categories`");

    if(mysqli_num_rows($result_set)>=1) {
        while ($row = mysqli_fetch_array($result_set)) {
?>
            <a class="nav-item nav-link cat" href="?type=<?php echo $row[1];?>" style="margin-left: 3em;font-family: 'Courgette', cursive;font-size: 22px;"><?php echo $row[1];?></a>
<?php
        }
    }
}

function viewrecipe($type){
    $conn = mysqli_connect('localhost','root','','trofi') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `recipe` WHERE `categories`='$type' AND `status` != 'pending'");
    if(mysqli_num_rows($result_set)>=1) {
        while ($row = mysqli_fetch_array($result_set)) {
            ?>
            <div class="col-md-4">
                <div class="card mb-2">
                    <img class="card-img-top" src="<?php echo $row[8];?>"
                         alt="Card image cap" style="width:350px;height:230px;" >
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $row[1];?></h4>
                        <p class="card-text"><?php echo substr_replace($row[2], "...", 100);?>.</p>
                        <a href="view.php?id=<?php echo $row[0];?>" class="btn btn-primary">View Recipe</a>
                    </div>
                </div>
            </div>
            <?php
        }
    }
}

function viewrecipedetail($id){
    $conn = mysqli_connect('localhost','root','','trofi') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `recipe` WHERE `id`='$id'");
    if(mysqli_num_rows($result_set)>=1) {
        while ($row = mysqli_fetch_array($result_set)) {
    ?>
    <div class="container py-3 mt-4">

        <!-- Card Start -->
        <div class="card">
            <div class="row ">

                <div class="col-md-7 px-3">
                    <div class="card-block px-6">
                        <h4 class="card-title"><?php echo $row[1];?></h4>
                        <p class="card-text">
                            <?php echo $row[2];?>
                        </p>
                        <p class="card-text"><strong>-<?php echo $row[6];?></strong></p>
                        <br>
                        <a href="<?php echo $row[7];?>" target="_blank" class="mt-auto btn btn-primary  ">Watch video</a>
                        <a href="order_ingredient.php?rec_id=<?php echo $row[0];?>" class="mt-auto btn btn-primary  ">Shop ingridents</a>
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
                                <img class="d-block" src="<?php echo $row[8];?>" alt="" style="width:460px;height:260px;" >
                            </div>
                            <div class="carousel-item">
                                <img class="d-block" src="<?php echo $row[12];?>" alt="" style="width:460px;height:260px;">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block" src="<?php echo $row[13];?>" alt="" style="width:460px;height:260px;">
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
            <div class="col-10">
                <table class="table" style="width:70em; background-color: #FEC24A;">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">INGREDIENTS</th>
                        <th scope="col">QUANTITY</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
            $results_set = mysqli_query($conn,"SELECT * FROM `ingredients` WHERE `recipe_id`='$id'");
            if(mysqli_num_rows($results_set)>=1) {
                while ($rows = mysqli_fetch_array($results_set)) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $rows[2];?></th>
                        <td><?php echo $rows[3];?></td>
                    </tr>
                    <?php
                    }
                }

                      ?>
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
                        <?php echo $row[3];?>
                    </p>
                </div>
            </div>
            <div class="col-0">

            </div>
        </div>
    </div>
    <?php
        }
    }
}
function viewcategorie(){
    $conn = mysqli_connect('localhost','root','','trofi') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `categories`");

    if(mysqli_num_rows($result_set)>=1) {
        while ($row = mysqli_fetch_array($result_set)) {
            ?>
            <option value="<?php echo $row[1];?>"><?php echo $row[1];?></option>
            <?php
        }
    }
}

function upload_recipe($name,$youtube,$cate,$info,$direction,$img,$price,$pic2,$pic3){
   $id = $_SESSION['id'];
   $uname = $_SESSION['uname'];
    $conn = mysqli_connect('localhost','root','','trofi') or die('unable to connect');
    $result_set = mysqli_query($conn,"INSERT INTO `recipe`(`name`, `info`, `direction`, `categories`, `user_id`, `username`, `youtube`, `pic1`,`price`,`pic2`,`pic3`) VALUES ('$name','$info','$direction','$cate','$id','$uname','$youtube','$img','$price','$pic2','$pic3')");
if($result_set){
    $l_id = $conn->insert_id;
    $_SESSION['l_id'] = $l_id;
    header("location:addingredients.php?id=$l_id");
}
    $last_id = $conn->insert_id;
}

function viewmyrecipe($id){
    $conn = mysqli_connect('localhost','root','','trofi') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `recipe` WHERE `user_id` = '$id'");
    if(mysqli_num_rows($result_set)>=1) {
        while ($row = mysqli_fetch_array($result_set)) {
            ?>
            <div class="col-md-4">
                <div class="card mb-2">
                    <img class="card-img-top" src="<?php echo $row[8];?>"
                         alt="Card image cap" style="width:350px;height:230px;" >
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $row[1];?></h4>
                        <p class="card-text"><?php echo substr_replace($row[2], "...", 100);?>.</p>
                        <a href="view.php?id=<?php echo $row[0];?>" class="btn btn-primary">View Recipe</a>
                    </div>
                </div>
            </div>
            <?php
        }
    }
}
function viewsearchrestaurant($search){
    $conn = mysqli_connect('localhost','root','','trofi') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `restaurant` WHERE name LIKE '%$search%' OR category LIKE '%$search%'");
    if(mysqli_num_rows($result_set)>=1) {
        while ($row = mysqli_fetch_array($result_set)) {
            ?>
                <div class="col-4">
                        <div class="box1"  >
                            <a href="resturant_1.php?res=<?php echo $row[0];?>">
                                <img src="<?php echo $row[7];?>" alt="" style="width:20.5em;height:12.5em;">
                                <div class="card-body">
                                    <h5 class="card-title" style="text-shadow: 0px 3px 3px rgba(0, 0, 0, 0.253); text-align: center;" ><?php echo $row[1];?></h5>
                                    <p class="card-text" style="color: black !important;"><?php echo $row[6];?></p>
                                </div>
                            </a>
                        </div>
                        <!-- closing anchor tag -->
                    </div>
            <?php
        }
    }
}
function viewrestaurant(){
    $conn = mysqli_connect('localhost','root','','trofi') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `restaurant`");
    if(mysqli_num_rows($result_set)>=1) {
        while ($row = mysqli_fetch_array($result_set)) {
            ?>
            <div class="col-4">
                <div class="box1"  >
                    <a href="resturant_1.php?res=<?php echo $row[0];?>">
                        <img src="<?php echo $row[7];?>" alt="" style="width:20.5em;height:12.5em;">
                        <div class="card-body">
                            <h5 class="card-title" style="text-shadow: 0px 3px 3px rgba(0, 0, 0, 0.253); text-align: center;" ><?php echo $row[1];?></h5>
                            <p class="card-text" style="color: black !important;"><?php echo $row[6];?></p>
                        </div>
                    </a>
                </div>
                <!-- closing anchor tag -->
            </div>
            <?php
        }
    }
}
function findfood($search){
    $conn = mysqli_connect('localhost','root','','trofi') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `food` WHERE `name` LIKE '%$search%' OR `disc` LIKE '%$search%'");
    if(mysqli_num_rows($result_set)>=1) {
        while ($row = mysqli_fetch_array($result_set)) {
            ?>
                <div class="food-menu-box col-4 box1" >
                    <div class="food-menu-img">
                        <img src="<?php echo $row[5];?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                    </div>

                    <div class="food-menu-desc">
                        <h4><?php echo $row[2];?></h4>
                        <p class="food-price">Rs:<?php echo $row[3];?></p>
                    

                        <p class="food-detail">
                            <?php echo $row[4];?>
                        </p>
                        <br>

                        <a href="#" class="btn btn-primary">Order Now</a>
                    </div>
                </div>
            <?php
        }
    }
}
function  viewres($res){
    $conn = mysqli_connect('localhost','root','','trofi') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `restaurant` WHERE `id`='$res'");
    if(mysqli_num_rows($result_set)>=1) {
        while ($row = mysqli_fetch_array($result_set)) {
            ?>
                <!-- gallery -->
                <div class="container gallery-container">


                    <div class="tz-gallery">

                        <div class="row" >


                            <div class="col col-md-8" style="width:40em;height: 20.1em;">
                                <a class="lightbox" href="<?php echo $row[7];?>" >
                                    <img src="<?php echo $row[7];?>" alt="Traffic" style="width:41em;height:20.1em;">
                                </a>

                            </div>
                            <div class="col col-md-2" style="height:10.2em;margin-left:-0.1em;width:10em">
                                <a class="lightbox" href="<?php echo $row[8];?>">
                                    <img src="<?php echo $row[8];?>" alt="Coast" style="height:10em;width:10em">
                                </a>
                            </div>
                            <div class="col col-md-2" style="height:10.2em;width:10em">
                                <a class="lightbox" href="<?php echo $row[9];?>">
                                    <img src="<?php echo $row[9];?>" alt="Coast" style="height:10em;margin-left:-0.1em;;width:10em">
                                </a>
                                <div class="row">
                                    <div class="col-11" style="height:10.2em;width:10em; margin-left: -9.5em;">
                                        <a class="lightbox" href="<?php echo $row[10];?>">
                                            <img src="<?php echo $row[10];?>" alt="Coast" style="height:10em;width:10em">
                                        </a>
                                    </div>
                                    <div class="col-10" style="height:10.2em;width:10em; margin-left: -0.7em;">
                                        <a class="lightbox" href="<?php echo $row[11];?>">
                                            <img src="<?php echo $row[11];?>" alt="Coast" style="height:10em;width:10em">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>



                    <h1 style="color: black; margin-left: 0.8em; margin-top: -0.5em;"><?php echo $row[1];?></h1>
                    <p style="margin-top: -0.5em; margin-left: 1.9em;"><?php echo $row[2];?></p>
                    <p style="margin-top: -0.5em; margin-left: 1.9em;font-family: Okra,Helvetica,sans-serif;"> <?php echo $row[3];?></p>
                    <p  style="margin-top: -1em; margin-left: 1.9em;font-family: Okra,Helvetica,sans-serif;color:#fd4756"> Open now -
                        <a style="color:#999696;font-family: Okra,Helvetica,sans-serif;margin-left: 7px;">  <?php echo $row[4];?> – <?php echo $row[5];?> (Today)</a></p>





                </div>

            <div class="container" style="margin-top: -13em;padding-left: 5em;">
                        <ul class="nav nav-tabs" id="myTab" role="tablist" style="margin-right: 41em;">
                            <li class="nav-item" style="padding-right: 2em;  display: inline;">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Overview</a>
                            </li>
                            <li class="nav-item" style="padding-right: 2em;  display: inline;">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Order Food</a>
                            </li>
                            <li class="nav-item" style="padding-right: 2em;  display: inline;">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Menu</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="container gallery-container" style="margin-left: -4em;">
                                    <div class="tz-gallery">
                                        <p style="font-weight: lighter;color:#999696;font-family: sans-serif;font-size: 24px ;margin-left: -0.5em;margin-top: 2px">Menu</p>
                                        <div class="row" >
                                            <div class="col col-md-3" style="width:8em;height:15.3em;">
                                                
                                         <a class="lightbox" href="<?php echo $row[15];?>" >
                                            <a class="lightbox" href="<?php echo $row[14];?>" >
                                            <img src="<?php echo $row[14];?>" alt="Traffic" style="width:15em;height:15em;">
                                                    
                                                        <p style="font-family: sans-serif;color: black;">Food Menu</p>
                                                        <p style="color:#999696;font-size:small;margin-top:-1rem;">(2 Pages)</p>
                                                    </a>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- average cost -->
                                    <p style="font-weight: lighter;color:#999696;font-family: sans-serif;font-size: 24px ;margin-left: 24px;margin-top: 1em;">Average Cost</p>
                                    <p style="font-weight:lighter;color:black;font-family: sans-serif;font-size: 17px ;margin-left: 24px;margin-top: -1em;">
                                        <?php echo $row[6];?>
                                    </p>
                                    <p style="font-weight:lighter;color:black;font-family: sans-serif;font-size: 24px ;margin-left: 24px;margin-top: 1em;">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"  color="red" height="18"     fill="currentColor" class="bi bi-patch-check-fill" viewbox= "0 0 16 16">
                                            <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                                        </svg>
                                        Delivery Available

                                    </p>

                   
                                    <div class="container mt-2" style="margin-bottom: 90px;">
                                <h1 style="font-weight: lighter;color:#999696;font-family: sans-serif;font-size: 18px ;margin-left:10px;margin-top: 1.5em;">OUR SPONSORS</h1>
                                <div class="row" style="margin-left:5px;">
                                    <div class="col-md-3 col-sm-6 item" >
                                        <div class="card item-card card-block">
                                            <img src="https://cdn-a.william-reed.com/var/wrbm_gb_food_pharma/storage/images/7/5/2/5/5985257-1-eng-GB/Nestle-holds-on-to-top-spot-in-Rabobank-s-global-dairy-top-20_wrbm_large.jpg" style="  height:150px;
                      width:100%;" alt="Photo of sunset">
                                            <h5 class="card-title  mt-3 mb-3">Nestle</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 item">
                                        <div class="card item-card card-block">
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/Kwality_Walls_logo.svg/1200px-Kwality_Walls_logo.svg.png" style="  height:150px;
                      width:100%;" alt="Photo of sunset">
                                            <h5 class="card-title  mt-3 mb-3">Kwality Walls</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 item">
                                        <div class="card item-card card-block">
                                            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/4/41/Amul_official_logo.svg/1200px-Amul_official_logo.svg.png" style="  height:150px;
                      width:100%;" alt="Photo of sunset">
                                            <h5 class="card-title  mt-3 mb-3">Amul</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 item">
                                        <div class="card item-card card-block">
                                            <img src="https://i.pinimg.com/originals/a3/a8/e2/a3a8e28b7bb81b1a00a2d3317c389ca0.jpg" style="  height:150px;
                      width:100%;" alt="Photo of sunset">
                                            <h5 class="card-title  mt-3 mb-3">Everest</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <section class="food-menu">
                                    <div class="container" >
                                        <h1 style="text-align:center;color: #fd4756;margin-top: 2px;">Food item's</h1>
                                        <?php
            $result = mysqli_query($conn,"SELECT * FROM `food` WHERE `rest_id` = '$res'");
            if(mysqli_num_rows($result)>=1) {
                while ($row1 = mysqli_fetch_array($result)) {
                    ?>
                                        <div class="food-menu-box" >
                                            <div class="food-menu-img">
                                                <img src="<?php echo $row1[5];?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                                            </div>

                                            <div class="food-menu-desc">
                                                <h4><?php echo $row1[2];?></h4>
                                                <p class="food-price">Rs: <?php echo $row1[3];?></p>
                                                <p class="food-detail">
                                                    <?php echo $row1[4];?>
                                                </p>
                                                <br>

                                                <a href="order.php?food_id=<?php echo $row1[0];?>" class="btn btn-primary">Order Now</a>
                                            </div>
                                        </div>
                                        <?php
                }
            }
                                        ?>
                                        <div class="clearfix"></div>



                                    </div>

                                </section>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="container gallery-container" style="margin-left: -4em;">
                                    <div class="tz-gallery">
                                        <p style="font-weight: lighter;color:#999696;font-family: sans-serif;font-size: 24px ;margin-left: -0.5em;margin-top: 2px">Menu</p>
                                        <div class="row" >
                                            <div class="col col-md-3" style="width:8em;height:15.3em;">
                                            <a class="lightbox" href="<?php echo $row[15];?>" >
                                            <a class="lightbox" href="<?php echo $row[14];?>" >
                                            <img src="<?php echo $row[14];?>" alt="Traffic" style="width:15em;height:15em;">
                                                        <p style="font-family: sans-serif;color: black;">Food Menu</p>
                                                        <p style="color:#999696;font-size:small;margin-top:-1rem;">(2 Pages)</p>
                                                    </a>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
            <?php
        }
    }

}
function order_food($id){
    $conn = mysqli_connect('localhost','root','','trofi') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `food` WHERE `id` = '$id'");
    if(mysqli_num_rows($result_set)>=1) {
        while ($row = mysqli_fetch_array($result_set)) {
            ?>
    <div class="food-menu-box" >
        <div class="food-menu-img">
            <img src="<?php echo $row[5];?>" alt="Chicke Hawain Pizza" width="100px">
        </div>

        <div class="food-menu-desc">
            <h4><?php echo $row[2];?></h4>
            <p class="food-price">Rs.<?php echo $row[3];?></p>
            <p class="food-detail">
                <?php echo $row[4];?>
            </p>
            <br>
            <form action="" method="post">
                <input type="text" name="res_id" value="<?php echo $row[1];?>" hidden>
                <input type="text" name="pro_id" value="<?php echo $row[0];?>" hidden>
                <input type="number" name="price" id="first"  value="<?php echo $row[3];?>" class="form-control" hidden>
                <div class="form-group">
                    <label>Qty</label>
                    <input type="number" name="qty" id="second" class="form-control">
                </div>
                <div class="form-group">
                    <h5 id="result"></h5><button name="order"  class="btn btn-primary">Order Now</button>
                </div>
            </form>
        </div>
    </div>
<?php
        }
    }
}
function order($pro_id,$price,$qty,$res_id){
    $total = $price*$qty;
    $user_id=$_SESSION['id'];
    $address = $_SESSION['address'];
    $conn = mysqli_connect('localhost','root','','trofi') or die('unable to connect');
    $result_set = mysqli_query($conn,"INSERT INTO `food_order`(`res_id`, `pro_id`, `user_id`, `del_address`, `qty`, `total`) VALUES ('$res_id','$pro_id','$user_id','$address','$qty','$total')");
    if($result_set){
        header("location:myfoodorder.php");
    }else{
        echo "<script> alert('Order Failed,Try Again')</script>";
    }
}
function viewmyfoodorder(){
    $user_id=$_SESSION['id'];
    $conn = mysqli_connect('localhost','root','','trofi') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `food_order` WHERE `user_id`='$user_id' ORDER BY `id` DESC");
    if(mysqli_num_rows($result_set)>=1) {
        while ($row = mysqli_fetch_array($result_set)) {
            ?>
                <tr>
                    <?php
                        $result = mysqli_query($conn,"SELECT * FROM `restaurant` WHERE `id` = '$row[1]'");
                        if(mysqli_num_rows($result)>=1) {
                            while ($row1 = mysqli_fetch_array($result)) {
                                ?>
                                <td><?php echo $row1[1];?></td>
                                <?php
                            }
                        }else{
                                ?>
                                <td>This restaurant has been removed</td>
                                <?php
                        }
                    ?>
                    <?php
                        $result1 = mysqli_query($conn,"SELECT * FROM `food` WHERE `id` = '$row[2]'");
                        if(mysqli_num_rows($result1)>=1) {
                            while ($row2 = mysqli_fetch_array($result1)) {
                                ?>
                                <td><?php echo $row2[2];?></td>
                                <?php
                            }
                        }
                    ?>
                    <td><?php echo $row[5];?></td>
                    <td><?php echo $row[6];?></td>
                    <td><?php echo $row[4];?></td>
                    <td><?php echo $row[8];?></td>
                    <td><?php echo $row[7];?></td>
                    <?php if($row[8]!="Order delivered") {?>
                    <td><a href="?cancel=<?php echo $row[0];?>" class="btn btn-danger btn-sm">Cancel</a></td>
                    <?php } else {?>
                        <td></td>
                    <?php } ?>
                </tr>
            <?php
        }
    }
}
function order_rec($id){
    $conn = mysqli_connect('localhost','root','','trofi') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `recipe` WHERE `id` = '$id'");
    if(mysqli_num_rows($result_set)>=1) {
        while ($row = mysqli_fetch_array($result_set)) {
            ?>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <img src="<?php echo $row[8];?>" alt="Chicke Hawain Pizza" style="width: 250px;" class="img-responsive img-curve">
                            </div>
                            <div class="col-8">
                                <h4><?php echo $row[1];?></h4>
                                <h6 class="food-price">Rs.<?php echo $row[11];?></h6>
                                <h6 class="food-detail">
                                    <?php echo $row[4];?> Ingredients
                                </h6>
                                <br>
                                <form action="" method="post">
                                    <input type="text" name="rec_id" value="<?php echo $row[0];?>" hidden>
                                    <input type="number" name="price" id="first" id="third" value="<?php echo $row[11];?>" class="form-control" hidden>
                                    <div class="form-group">
                                        <h5>For how many people are you cooking for ?</h5>
                                        <input type="number" name="qty" id="second" class="form-control">
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <h2 style="text-align: center; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
                            <strong>Ingredients to your ordered Recipe</strong>
                        </h2>

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-10">
                                    <table class="table" style="width:55em; background-color: #FEC24A;">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">INGREDIENTS</th>
                                            <th scope="col" id="qty">QUANTITY</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php

                                            $results_set = mysqli_query($conn,"SELECT * FROM `ingredients` WHERE `recipe_id`='$id'");
                                            if(mysqli_num_rows($results_set)>=1) {
                                                while ($rows = mysqli_fetch_array($results_set)) {
                                                    ?>
                                                    <tr>
                                                        <th scope="row"><?php echo $rows[2];?></th>
                                                        <td><?php echo $rows[3];?> </td>
                                                    </tr>
                                                    <?php
                                                }
                                            }
                                        ?>
                                        </tbody>
                                        <tfoot  class="thead-dark">
                                            <tr>
                                                <th>Total</th>
                                                <th id="result"></th>
                                            </tr>
                                        </tfoot>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card footer">
                        <div class="form-group mt-2 mr-4 text-right">
                            <button name="order"  class="btn btn-primary">Order Now</button>
                        </div>
                    </form>
                    </div>
                </div>

            <?php
        }
    }
}
function  order_ingredient($price,$qty,$rec_id){
    $total = $price*$qty;
    $user_id=$_SESSION['id'];
    $address = $_SESSION['address'];
    $conn = mysqli_connect('localhost','root','','trofi') or die('unable to connect');
    $result_set = mysqli_query($conn,"INSERT INTO `ingredient_order`(`rec_id`, `user_id`, `del_address`, `qty`, `total`) VALUES ('$rec_id','$user_id','$address','$qty','$total')");
    if($result_set){
        header("location:myingredientorder.php");
    }else{
        echo "<script> alert('Order Failed,Try Again')</script>";
    }
}
function viewmyingredientorder(){
    $user_id=$_SESSION['id'];
    $conn = mysqli_connect('localhost','root','','trofi') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `ingredient_order` WHERE `user_id`='$user_id'");
    if(mysqli_num_rows($result_set)>=1) {
        while ($row = mysqli_fetch_array($result_set)) {
            ?>
            <tr>
                <?php
                $result = mysqli_query($conn,"SELECT * FROM `recipe` WHERE `id` = '$row[1]'");
                if(mysqli_num_rows($result)>=1) {
                    while ($row1 = mysqli_fetch_array($result)) {
                        ?>
                        <td><?php echo $row1[1];?></td>
                        <?php
                    }
                }
                ?>
                <td><?php echo $row[4];?></td>
                <td><?php echo $row[5];?></td>
                <td><?php echo $row[3];?></td>
                <td><?php echo $row[7];?></td>
                <td><?php echo $row[6];?></td>
                <td><?php if($row[7]!='Order delivered'){ ?><a href="?cancel=<?php echo $row[0];?>" class="btn btn-danger btn-sm">Cancel</a><?php } ?></td>
            </tr>
            <?php
        }
    }
}
?>