<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <title>Add Recipe</title>

    <?php

    include 'database/db.php';

    session_start();
    if(!isset($_SESSION["email"])){
        header("location:login.php");
    }
    if (isset($_GET['logout'])) {
        session_destroy();
        header("location:index.php");
    }
    if(isset($_POST['upload'])){

        $name = $_POST['recipename'];
        $youtube = $_POST['url'];
        $cate = $_POST['cate'];
        $info = $_POST['info'];
        $price = $_POST['price'];
        $direction = $_POST['direction'];

        $fileName = basename($_FILES["img"]["name"]);
        $targetFilePath = "images/" . $fileName;
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
        if($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif" && $fileType != "jfif")
        {
            $file_error ="Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        }
        else
        {
            move_uploaded_file($_FILES["img"]["tmp_name"], $targetFilePath);
        }
        $img = $targetFilePath;

        $fileName1 = basename($_FILES["pic2"]["name"]);
        $targetFilePath1 = "images/" . $fileName1;
        $fileType1 = pathinfo($targetFilePath1,PATHINFO_EXTENSION);
        if($fileType1 != "jpg" && $fileType1 != "png" && $fileType1 != "jpeg" && $fileType1 != "gif" && $fileType1 != "jfif")
        {
            $file_error1 ="Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        }
        else
        {
            move_uploaded_file($_FILES["pic2"]["tmp_name"], $targetFilePath1);
        }
        $pic2 = $targetFilePath1;

        $fileName2 = basename($_FILES["pic3"]["name"]);
        $targetFilePath2 = "images/" . $fileName2;
        $fileType2 = pathinfo($targetFilePath2,PATHINFO_EXTENSION);
        if($fileType2 != "jpg" && $fileType2 != "png" && $fileType2 != "jpeg" && $fileType2 != "gif" && $fileType2 != "jfif")
        {
            $file_error2 ="Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        }
        else
        {
            move_uploaded_file($_FILES["pic3"]["tmp_name"], $targetFilePath1);
        }
        $pic3 = $targetFilePath2;


//        echo $name,$youtube,$cate,$info,$direction,$img;
        upload_recipe($name,$youtube,$cate,$info,$direction,$img,$price,$pic2,$pic3);

    }



    ?>

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Martel+Sans:wght@300;400&display=swap" rel="stylesheet">
    <a href="https://icons8.com/icon/114329/share-3"></a>
    <!-- CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="import/regi.css">

    <!-- for socialicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .app{
            height: 830px !important
        }
    </style>
</head>
<body>

<div class="app" style="margin-top: 4em;height: 40em;background-color:#FD4756;">

    <div class="bg s" style="background-color:#FD4756;"></div>

    <form action="" method="POST" enctype="multipart/form-data">
        <div class="row" style="margin-bottom: -4em;">
            <div class="col-5" style="margin-top: -4em;">
                <a href="index.php"><img src="images/logo20.png" style="height: 12em; width: 8em;" alt=""></a>
            </div>
            <div class="col-6" style="margin-top: -1em;" >
                <p style="font-weight: bolder;color:white;font-family: 'Courgette', cursive; margin-top: 20px;font-size: 22px;text-decoration: underline;">
                    Add New Recipe
                    <br>
                </p>
            </div>
        </div>
        <!-- <p style="font-weight: bolder;color:white;font-size: larger;font-family: Comic Sans MS, Comic Sans, cursive;">
           Register Yourself!
        </p> -->
        <div class="inputs" style="margin-top: 0.5em;">
            <div class="row">
                                <div class="col-12">
                                    <input type="text" name="recipename" placeholder="Name" >
                                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="text" name="url" placeholder="Youtube video url">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="text" name="price" placeholder="Price">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <select class="form-control" name="cate" id="exampleFormControlSelect1">
                            <option>Select categories</option>
                            <?php viewcategorie(); ?>
                        </select>
                    </div>
                </div>
            </div>
            <lable><h5>Upload 3 images of the finished recipe</h5></lable>
                <div class="mb-3">
                    <input class="form-control" type="file" name="img" id="formFile">
                    <span class="text-dark"><?php if (isset($file_error)) echo $file_error; ?></span>
                </div>
            <div class="mb-3">
                <input class="form-control" type="file" name="pic2" id="formFile">
                <span class="text-dark"><?php if (isset($file_error)) echo $file_error; ?></span>
            </div>
            <div class="mb-3">
                <input class="form-control" type="file" name="pic3" id="formFile">
                <span class="text-dark"><?php if (isset($file_error)) echo $file_error; ?></span>
            </div>
            <div class="row">
                <div class="col-12">
                    <textarea name="info" class="form-control" placeholder="Info on the Recipe"></textarea>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12">
                    <textarea name="direction" class="form-control" placeholder="Direction"></textarea>
                </div>
            </div>

        </div>

        <button name="upload" class="mt-2">Add</button>
    </form>



</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>