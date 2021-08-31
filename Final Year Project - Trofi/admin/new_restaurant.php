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
    if($_SESSION['type']!="trofi"){
        if($_SESSION['type']!=null){
        header("location:".$_SESSION['type'].".php");
                }else{
            session_destroy();
            header("location:index.php");
        }
    }
    if(isset($_POST['submit'])){
$name= $_POST['name'];
$category= $_POST['category'];
$from= $_POST['from'];
$to= $_POST['to'];
$location= $_POST['location'];
$discription= $_POST['discription'];
$owner=$_POST['owner'];
        $fileName = basename($_FILES["img"]["name"]);
        $targetFilePath = "../images/" . $fileName;
        $path = "images/" . $fileName;
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
        if($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif")
        {
            $file_error ="Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        }
        else
        {
            move_uploaded_file($_FILES["img"]["tmp_name"], $targetFilePath);
        }
        $logo = $path;

         new_res($name,$category,$from,$to,$location,$discription,$logo,$owner);


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
                    <h4>Add New Restaurant</h4>
                </div>
                <div class="card-body">
                    <form class="row g-3" action="" method="post" enctype="multipart/form-data">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="inputEmail4" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Cuisines Available</label>
                            <input type="text" name="category" class="form-control" id="inputPassword4" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Open</label>
                            <input type="time" name="from" class="form-control" id="inputCity" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Close</label>
                            <input type="time" name="to" class="form-control" id="inputCity" required >
                        </div>
                        <div class="col-6">
                            <label for="inputAddress" class="form-label">Address</label>
                            <textarea type="text" name="location" class="form-control" id="inputAddress" placeholder="1234 Main St" required></textarea>
                        </div>
                        <div class="col-6">
                            <label for="inputAddress" class="form-label">Description</label>
                            <textarea type="text" name="discription" class="form-control" id="inputAddress" placeholder="Description" required></textarea>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Logo</label>
                                <div class="custom-file">
                                    <input type="file" name="img"  onchange="readURL(this);" class="custom-file-input" id="inputGroupFile02" required/>
                                    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                </div>
                                <span class="text-danger"><?php if (isset($file_error)) echo $file_error; ?></span>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Owner Email</label>
                            <input type="email" name="owner" class="form-control" id="inputAddress" required>
                        </div>
                        <div class="col-10">
                        </div>
                        <div class="col-2">
                            <button type="submit" name="submit" class="btn btn-primary mt-2 btn-block">Sign in</button>
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
    $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    });
</script>
</body>
</html>
