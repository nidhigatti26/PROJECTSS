<?php
function login($email,$password)
{
    $conn = mysqli_connect('localhost','root','','trofi') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `admin` WHERE `email`='$email' and `pass`='$password' and `status`='admin'");

    session_start();

    if(mysqli_num_rows($result_set)==1)
    {
        while($row = mysqli_fetch_array($result_set))
        {
            $_SESSION['id']=$row[0];
            $_SESSION['name']=$row[1];
            $_SESSION['email'] = $row[2];
            $_SESSION['type'] = $row[4];
        }
        header("location:".$_SESSION['type'].".php");
    }else {
        echo "<script> alert('Login Unsuccessful')</script>";
    }
}

function viewrecipe(){
    $conn = mysqli_connect('localhost','root','','trofi') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `recipe` WHERE  `status` = 'approved'");
    if(mysqli_num_rows($result_set)>=1) {
        while ($row = mysqli_fetch_array($result_set)) {
            ?>
            <tr>
<td><a href="view.php?id=<?php echo $row[0];?>" class="btn btn-primary"><?php echo $row[1];?>  -<img
                                src="../import/send.svg" width="20px" alt=""></a></td>
                <td><?php echo $row[4];?></td>
                <td><?php echo $row[6];?></td>
                <td><a href="<?php echo $row[7];?>" target="_blank" class="text-success"><img src="../import/youtube%20(1).svg" width="40px" alt=""></a></td>
                <td><?php echo $row[11];?></td>
                <td><?php echo $row[10];?></td>
                <td><a href="?rec_delete=<?php echo $row['0'];?>" onClick='return confirmSubmit()' class="text-danger"><img src="../import/trash%20(1).svg" width="40px" alt=""></a></td>
            </tr>
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
                <tr>
                    <td><a href="resturant.php?res=<?php echo $row[0];?>" class="btn btn-primary"><?php echo $row[1];?>  -<img
                                    src="../import/send.svg" width="20px" alt=""></a></td>
                    <td><?php echo $row[2];?></td>
                    <td><?php echo $row[3];?></td>
                    <td><?php echo $row[4];?><img src="../import/left-and-right-arrows.svg" width="20px" alt=""><?php echo $row[5]?></td>
                    <td><?php echo $row[8];?></td>
                    <td><a href="?res_delete=<?php echo $row['0'];?>" onClick='return confirmSubmit()' class="text-danger"><img src="../import/trash%20(1).svg" width="40px" alt=""></a></td>
                </tr>
            <?php
        }
    }
}

function newrecipe(){
    $conn = mysqli_connect('localhost','root','','trofi') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `recipe` WHERE  `status` = 'pending'");
    if(mysqli_num_rows($result_set)>=1) {
        while ($row = mysqli_fetch_array($result_set)) {
            ?>
            <tr>
                <td><a href="view.php?id=<?php echo $row[0];?>" class="btn btn-primary"><?php echo $row[1];?>  -<img
                                src="../import/send.svg" width="20px" alt=""></a></td>
                <td><?php echo $row[4];?></td>
                <td><?php echo $row[6];?></td>
                <td><a href="<?php echo $row[7];?>" target="_blank" class="text-success"><img src="../import/youtube%20(1).svg" width="40px" alt=""></a></td>
                <td><?php echo $row[11];?></td>
                <td><?php echo $row[10];?></td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle text-gray" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="../import/slider-tool.svg" width="20px" alt="">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" onClick='return confirmSubmit()' href="?accept=<?php echo $row[0];?>">Approve</a></li>
                            <li><a class="dropdown-item" onClick='return confirmSubmit()' href="?reject=<?php echo $row[0];?>">Reject</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <?php
        }
    }
}

function ingredientorder(){
    $conn = mysqli_connect('localhost','root','','trofi') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `ingredient_order` ORDER BY `id` DESC");
    if(mysqli_num_rows($result_set)>=1) {
        while ($row = mysqli_fetch_array($result_set)) {
            ?>
            <tr>
                <?php
                $result = mysqli_query($conn,"SELECT * FROM `recipe` WHERE `id` = '$row[1]'");
                if(mysqli_num_rows($result)>=1) {
                    while ($row1 = mysqli_fetch_array($result)) {
                        ?>
                        <td><a href="view_ingrediants.php?id=<?php echo $row[1];?>&qty=<?php echo $row[4];?>" class="btn btn-primary"><?php echo $row1[1];?> -<img
                                        src="../import/send.svg" width="20px" alt=""></a></td>
                        <?php
                    }
                }
                ?>
                <td><?php echo $row[4];?></td>
                <td><?php echo $row[5];?></td>
                <td><?php echo $row[3];?></td>
                <td><?php echo $row[7];?></td>
                <td><?php echo $row[6];?></td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle text-gray" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="../import/slider-tool.svg" width="20px" alt="">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="?packed1=<?php echo $row[0];?>">Packed And Ready to ship</a></li>
                            <li><a class="dropdown-item" href="?shiped1=<?php echo $row[0];?>">Order is on its way</a></li>
                            <li><a class="dropdown-item" href="?delivered1=<?php echo $row[0];?>">Delivary successful</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <?php
        }
    }
}

function del_rec($id){
    $conn = mysqli_connect('localhost','root','','trofi') or die('unable to connect');
  //  $result_set = mysqli_query($conn,"DELETE FROM `recipe` WHERE `id`='$id'");
    $result_set = true;
    if($result_set){
        echo "<script> alert('Deleted Successfully')</script>";
    }else {
        echo "<script> alert('Try Again')</script>";
    }
}

function del_res($id){
    $conn = mysqli_connect('localhost','root','','trofi') or die('unable to connect');
  //  $result_set = mysqli_query($conn,"DELETE FROM `restaurant` WHERE `id`='$id'");
    $result_set= true;
    if($result_set){
        echo "<script> alert('Deleted Successfully')</script>";
    }else {
        echo "<script> alert('Try Again')</script>";
    }
}

function rec_approve($id){
    $conn = mysqli_connect('localhost','root','','trofi') or die('unable to connect');
      $result_set = mysqli_query($conn,"UPDATE `recipe` SET `status`='approved' WHERE  `id`='$id'");
    $result_set= true;
    if($result_set){
        echo "<script> alert('Recipe Approved')</script>";
    }else {
        echo "<script> alert('Try Again')</script>";
    }
}

function rec_reject($id){
    $conn = mysqli_connect('localhost','root','','trofi') or die('unable to connect');
      $result_set = mysqli_query($conn,"UPDATE `recipe` SET `status`='rejected' WHERE  `id`='$id'");
    $result_set= true;
    if($result_set){
        echo "<script> alert('Recipe Rejected')</script>";
    }else {
        echo "<script> alert('Try Again')</script>";
    }
}

function new_res($name,$category,$from,$to,$location,$discription,$logo,$owner){
    $conn = mysqli_connect('localhost','root','','trofi') or die('unable to connect');
    $result = mysqli_query($conn,"INSERT INTO `restaurant`(`name`, `category`, `location`, `from`, `to`, `discription`, `logo`,`owner`) VALUES ('$name','$category','$location','$from','$to','$discription','$logo','$owner')");

    if($result){
        header("location:new_restaurant.php");
    }else{
        echo "<script> alert('unable to register new restaurant')</script>";
    }
}

function add_admin($name,$email,$pass,$type,$status){

    $conn = mysqli_connect('localhost','root','','trofi') or die('unable to connect');
    $result = mysqli_query($conn,"INSERT INTO `admin`(`name`, `email`, `pass`, `type`, `status`) VALUES ('$name','$email','$pass','$type','$status')");

    if($result){
        header("location:add_admin.php");
    }else{
        echo "<script> alert('Try again')</script>";
    }
}

function viewadmin(){
    $conn = mysqli_connect('localhost','root','','trofi') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `admin`");
    if(mysqli_num_rows($result_set)>=1) {
        while ($row = mysqli_fetch_array($result_set)) {
            ?>
            <tr>
                <td><?php echo $row[1];?></td>
                <td><?php echo $row[2];?></td>
                <td><?php echo $row[4];?></td>
                <td><?php echo $row[5];?></td>
                <td><?php echo $row[6];?></td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle text-gray" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="../import/slider-tool.svg" width="20px" alt="">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <?php if($row[5]=="admin") {?>
                            <li><a class="dropdown-item" onClick='return confirmSubmit()' href="?demote=<?php echo $row[0];?>">Demote</a></li>
                            <?php }else{ ?>
                            <li><a class="dropdown-item" onClick='return confirmSubmit()' href="?promote=<?php echo $row[0];?>">Promote</a></li>
                            <?php } ?>
                            <li><a class="dropdown-item" onClick='return confirmSubmit()' href="?delete=<?php echo $row[0];?>">Delete</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
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
                                        <img class="d-block" src="../<?php echo $row[8];?>" alt="" style="width:100%;height:100%;" >
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
                            <a class="lightbox" href="../<?php echo $row[7];?>" >
                                <img src="../<?php echo $row[7];?>" alt="Traffic" style="width:41em;height:20.1em;">
                            </a>

                        </div>
                        <div class="col col-md-2" style="height:10.2em;margin-left:-0.1em;width:10em">
                            <a class="lightbox" href="../<?php echo $row[8];?>">
                                <img src="../<?php echo $row[8];?>" alt="Coast" style="height:10em;width:10em">
                            </a>
                        </div>
                        <div class="col col-md-2" style="height:10.2em;width:10em">
                            <a class="lightbox" href="../<?php echo $row[9];?>">
                                <img src="../<?php echo $row[9];?>" alt="Coast" style="height:10em;margin-left:-0.1em;;width:10em">
                            </a>
                            <div class="row">
                                <div class="col-11" style="height:10.2em;width:10em; margin-left: -9.5em;">
                                    <a class="lightbox" href="../<?php echo $row[10];?>">
                                        <img src="../<?php echo $row[10];?>" alt="Coast" style="height:10em;width:10em">
                                    </a>
                                </div>
                                <div class="col-10" style="height:10.2em;width:10em; margin-left: -0.7em;">
                                    <a class="lightbox" href="../<?php echo $row[11];?>">
                                        <img src="../<?php echo $row[11];?>" alt="Coast" style="height:10em;width:10em">
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

            <div class="container" style="margin-top: -10em;padding-left: 5em;">
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
                                        <a class="lightbox" href="../images/restuarant/5spicemenu1.png" >
                                            <a class="lightbox" href="../images/restuarant/5spicemenu2.png" >
                                                <img src="../images/restuarant/5spicemenu1.png" alt="Traffic" style="width:15em;height:15em;">
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
                                                <img src="../<?php echo $row1[5];?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                                            </div>

                                            <div class="food-menu-desc">
                                                <h4><?php echo $row1[2];?></h4> 
                                                <p class="food-price">Rs: <?php echo $row1[3];?></p>
                                    
                                                <p class="food-detail">
                                                    <?php echo $row1[4];?>
                                                </p>
                                                <br>

                                                <a href="?delete=<?php echo $row1[0];?>" class="btn btn-primary">Delete</a>
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
                                        <a class="lightbox" href="images/restuarant/5spicemenu1.png" >
                                            <a class="lightbox" href="images/restuarant/5spicemenu2.png" >
                                                <img src="images/restuarant/5spicemenu1.png" alt="Traffic" style="width:15em;height:15em;">
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

function  view_my_res($res){
    $conn = mysqli_connect('localhost','root','','trofi') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `restaurant` WHERE `owner`='$res'");
    if(mysqli_num_rows($result_set)>=1) {
        while ($row = mysqli_fetch_array($result_set)) {
            $_SESSION['res_id']=$row['0'];
            ?>
            <!-- gallery -->
            <div class="container gallery-container">


                <div class="tz-gallery">

                    <div class="row" >


                        <div class="col col-md-8" style="width:40em;height: 20.1em;">
                            <a class="lightbox" href="../<?php echo $row[7];?>" >
                                <img src="../<?php echo $row[7];?>" alt="Traffic" style="width:41em;height:20.1em;">
                            </a>

                        </div>
                        <div class="col col-md-2" style="height:10.2em;margin-left:-0.1em;width:10em">
                            <a class="lightbox" href="../<?php echo $row[8];?>">
                                <img src="../<?php echo $row[8];?>" alt="Coast" style="height:10em;width:10em">
                            </a>
                        </div>
                        <div class="col col-md-2" style="height:10.2em;width:10em">
                            <a class="lightbox" href="../<?php echo $row[9];?>">
                                <img src="../<?php echo $row[9];?>" alt="Coast" style="height:10em;margin-left:-0.1em;;width:10em">
                            </a>
                            <div class="row">
                                <div class="col-11" style="height:10.2em;width:10em; margin-left: -9.5em;">
                                    <a class="lightbox" href="../<?php echo $row[10];?>">
                                        <img src="../<?php echo $row[10];?>" alt="Coast" style="height:10em;width:10em">
                                    </a>
                                </div>
                                <div class="col-10" style="height:10.2em;width:10em; margin-left: -0.7em;">
                                    <a class="lightbox" href="../<?php echo $row[11];?>">
                                        <img src="../<?php echo $row[11];?>" alt="Coast" style="height:10em;width:10em">
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

            <div class="container" style="margin-top: -10em;padding-left: 5em;">
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
                                        <a class="lightbox" href="../<?php echo $row[15];?>" >
                                            <a class="lightbox" href="../<?php echo $row[14];?>" >
                                            <img src="../<?php echo $row[14];?>" alt="Traffic" style="width:15em;height:15em;">
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
                                $result = mysqli_query($conn,"SELECT * FROM `food` WHERE `rest_id` = '$row[0]'");
                                if(mysqli_num_rows($result)>=1) {
                                    while ($row1 = mysqli_fetch_array($result)) {
                                        ?>
                                        <div class="food-menu-box" >
                                            <div class="food-menu-img">
                                                <img src="../<?php echo $row1[5];?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                                            </div>

                                            <div class="food-menu-desc">
                                                <h4><?php echo $row1[2];?></h4>
                                                <p class="food-price">Rs: <?php echo $row1[3];?></p>
                                                <p class="food-detail">
                                                    <?php echo $row1[4];?>
                                                </p>
                                                <br>
                                                <a href="?delete=<?php echo $row1[0];?>" class="btn btn-primary">Delete</a>
                                                
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
                                    <a class="lightbox" href="../<?php echo $row[15];?>" >
                                            <a class="lightbox" href="../<?php echo $row[14];?>" >
                                            <img src="../<?php echo $row[14];?>" alt="Traffic" style="width:15em;height:15em;">
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

function add_food($name,$price,$disc,$image){
    $id=$_SESSION['res_id'];
    $conn = mysqli_connect('localhost','root','','trofi') or die('unable to connect');
    $result = mysqli_query($conn,"INSERT INTO `food`(`rest_id`,`name`, `price`, `disc`, `image`) VALUES ('$id','$name','$price','$disc','$image')");
    if($result){
        header("location:add_food.php");
    }else{
        echo "<script> alert('Try again')</script>";
    }
}
function food_order(){
    $conn = mysqli_connect('localhost','root','','trofi') or die('unable to connect');
    $id=$_SESSION['res_id'];
    $result_set = mysqli_query($conn,"SELECT * FROM `food_order` where `res_id`='$id' ORDER BY `id` DESC");
    if(mysqli_num_rows($result_set)>=1) {
        while ($row = mysqli_fetch_array($result_set)) {
            ?>
            <tr>
                <?php
                $result = mysqli_query($conn,"SELECT * FROM `food` WHERE `id` = '$row[2]'");
                if(mysqli_num_rows($result)>=1) {
                    while ($row1 = mysqli_fetch_array($result)) {
                        ?>
                        <td><?php echo $row1[2];?></td>
                        <?php
                    }
                }
                ?>
                <?php
                $result = mysqli_query($conn,"SELECT * FROM `register` WHERE `id`= '$row[3]'");
                if(mysqli_num_rows($result)>=1) {
                    while ($row1 = mysqli_fetch_array($result)) {
                        ?>
                        <td><?php echo $row1[3];?></td>
                        <?php
                    }
                }
                ?>
                <td><?php echo $row[4];?></td>
                <td><?php echo $row[5];?></td>
                <td><?php echo $row[6];?></td>
                <td><?php echo $row[8];?></td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle text-gray" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="../import/slider-tool.svg" width="20px" alt="">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="?packed=<?php echo $row[0];?>">Packed And Ready to ship</a></li>
                            <li><a class="dropdown-item" href="?shiped=<?php echo $row[0];?>">Order is on its way</a></li>
                            <li><a class="dropdown-item" href="?delivered=<?php echo $row[0];?>">Delivary successful</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <?php
        }
    }
}
function view_ingrediants($id,$qty){
    $conn = mysqli_connect('localhost','root','','trofi') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `recipe` WHERE `id`='$id'");
    if(mysqli_num_rows($result_set)>=1) {
        while ($row = mysqli_fetch_array($result_set)) {
            ?>
            <h2 class="mt-4" style="text-align: center; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
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
                                <th scope="col">ORDER QUANTITY</th>
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
                                        <th><?php echo $qty?></th>
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
            <?php
        }
    }
}