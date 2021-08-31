<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <title>Home-Page</title>



    <!-- CSS BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">

    <!-- css -->
    <link rel="stylesheet" href="../import/style.css">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Martel+Sans:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <!-- for socialicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php
    include '../database/admindb.php';

    session_start();
    if(isset($_GET['logout'])){
        session_destroy();
        header("location:index.php");
    }

    if($_SESSION['type']!="my_restaurant"){
        if($_SESSION['type']!=null){
        header("location:".$_SESSION['type'].".php");
          }else{
            session_destroy();
            header("location:index.php");
        }
    }
    $pass_error = null;
    $cpass_error = null;

    if(isset($_POST['submit'])){
        $fileName = basename($_FILES["logo"]["name"]);
        $targetFilePath = "../images/" . $fileName;
        $path= "images/" . $fileName;
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["logo"]["tmp_name"], $targetFilePath);
        $logo = $path;

        $fileName1 = basename($_FILES["pic1"]["name"]);
        $targetFilePath1 = "../images/" . $fileName1;
        $path1= "images/" . $fileName1;
        $fileType1 = pathinfo($targetFilePath1,PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["pic1"]["tmp_name"], $targetFilePath1);
        $pic1 = $path1;

        $fileName2 = basename($_FILES["pic2"]["name"]);
        $targetFilePath2 = "../images/" . $fileName2;
        $path2= "images/" . $fileName2;
        $fileType2 = pathinfo($targetFilePath2,PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["pic2"]["tmp_name"], $targetFilePath2);
        $pic2 = $path2;

        $fileName3 = basename($_FILES["pic3"]["name"]);
        $targetFilePath3 = "../images/" . $fileName3;
        $path3= "images/" . $fileName3;
        $fileType3 = pathinfo($targetFilePath3,PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["pic3"]["tmp_name"], $targetFilePath3);
        $pic3 = $path3;

        $fileName4 = basename($_FILES["pic4"]["name"]);
        $targetFilePath4 = "../images/" . $fileName4;
        $path4= "images/" . $fileName4;
        $fileType4 = pathinfo($targetFilePath4,PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["pic4"]["tmp_name"], $targetFilePath4);
        $pic4 = $path4;

        $fileName5 = basename($_FILES["pic5"]["name"]);
        $targetFilePath5 = "../images/" . $fileName5;
        $path5= "images/" . $fileName5;
        $fileType5 = pathinfo($targetFilePath5,PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["pic5"]["tmp_name"], $targetFilePath5);
        $pic5 = $path5;

        $fileName6 = basename($_FILES["pic6"]["name"]);
        $targetFilePath6 = "../images/" . $fileName6;
        $path6= "images/" . $fileName6;
        $fileType6 = pathinfo($targetFilePath6,PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["pic6"]["tmp_name"], $targetFilePath6);
        $pic6 = $path6;


        $owner=$_SESSION['email'];
        $conn = mysqli_connect('localhost','root','','trofi') or die('unable to connect');
        $result_set = mysqli_query($conn,"UPDATE `restaurant` SET `logo`='$logo',`pic1`='$pic1',`pic2`='$pic2',`pic3`='$pic3',`pic4`='$pic4',`menu`='$pic5',`menu2`='$pic6' WHERE `owner`='$owner'");
        if($result_set){
            header("location:my_restaurant.php");
        }


    }
    ?>
</head>
<body>
<?php  include 'navbar.php';  ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="card mt-4">
                <div class="card-header">
                    <h4>Add Pictures for your Restuarant</h4>
                </div>
                <div class="card-body">
                    <form class="row g-3" action="" method="post" enctype="multipart/form-data">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Pic 1</label>
                                    <div>
                                        <input type="file" name="logo"  id="inputGroupFile02" required/>
                                    </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Pic 2</label>
                                <div>
                                    <input type="file" name="pic1" id="inputGroupFile02" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>pic 3</label>
                                <div>
                                    <input type="file" name="pic2" id="inputGroupFile02" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>pic 4</label>
                                <div>
                                    <input type="file" name="pic3"  id="inputGroupFile02" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>pic 5</label>
                                <div>
                                    <input type="file" name="pic4" id="inputGroupFile02" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-10">
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label>Menu</label>
                                <div>
                                    <input type="file" name="pic5" id="inputGroupFile02" required/>
                                </div>
                                
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <div class="form-group">
                                <label>Menu2</label>
                                <div>
                                    <input type="file" name="pic6" id="inputGroupFile02" required/>
                                </div>
                                
                            </div>
                        </div>


                        <div class="col-2">
                            <button type="submit" name="submit" class="btn btn-primary mt-2 btn-block">Save changes</button>
                        </div>

                       




                    </form>
                </div>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
</div>


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

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
    $(document).ready( function () {
        $('#table_id1').DataTable();
    } );
</script>

<script>
    function confirmSubmit()
    {
        var agree=confirm("Are you sure you wish to continue?");
        if (agree)
            return true ;
        else
            return false ;
    }
</script>
</body>
</html>
