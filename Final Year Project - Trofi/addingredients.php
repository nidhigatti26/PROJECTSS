<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <title>Add Recipe</title>
<!--    <link rel="stylesheet" href="import/add.css">-->
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Martel+Sans:wght@300;400&display=swap" rel="stylesheet">
    <a href="https://icons8.com/icon/114329/share-3"></a>
    <!-- CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- css -->

    <!-- for socialicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

    if (!isset($_SESSION['l_id'])) {
        header("location:index.php");
    }
    ?>

</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card" style="margin-top: 1em;height: 100em; background:#FD4756;">
                <div class="card-header">
                            <div class="row" style="margin-bottom: -4em;">
                                <div class="col-6 text-center" style="margin-top: -4em;">
                                    <a href="index.php"><img src="images/logo20.png" style="height: 12em; width: 8em;" alt=""></a>
                                </div>
                                <div class="col-6 text-center" style="margin-top: -1em;" >
                                    <p style="font-weight: bolder;color:white;font-family: 'Courgette', cursive; margin-top: 20px;font-size: 22px;text-decoration: underline;">
                                        Add Ingredients
                                        <br>
                                    </p>
                                </div>
                            </div>
                </div>
                <div class="card-body">
                    <form name="add_name" id="add_name">
                        <table class="table table-bordered table-hover" id="dynamic_field" style="border: unset;">
                            <tr style="border: unset;">
                                <td style="border: unset;"><input type="text" name="ingredient[]" placeholder="Enter Ingredient Name" class="form-control name_list" /></td>
                                <td style="border: unset;"><input type="text" name="qty[]" placeholder="Enter  Qty" class="form-control name_email"/></td>
                                <td style="border: unset;"><button type="button" name="add" id="add" class="btn btn-primary">Add More</button></td>
                            </tr>
                        </table>
                        <div class="d-grid gap-2">
                        <input type="submit" class="btn btn-warning" name="submit" id="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function(){

        var i = 1;

        $("#add").click(function(){
            i++;
            $('#dynamic_field').append('<tr id="row'+i+'" style="border: unset;"><td style="border: unset;"><input type="text" name="ingredient[]" placeholder="Enter Ingredient Name" class="form-control name_list"/></td><td style="border: unset;"><input type="text" name="qty[]" placeholder="Enter Qty" class="form-control name_email"/></td><td style="border: unset;"><button type="button" name="remove" id="'+i+'" class="btn btn-warning btn_remove">X Remove</button></td></tr>');
        });

        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').remove();
        });

        $("#submit").on('click',function(){
            var formdata = $("#add_name").serialize();
            $.ajax({
                url   :"upload.php",
                type  :"POST",
                data  :formdata,
                cache :false,
                success:function(result){
                    alert(result);
                    $("#add_name")[0].reset();
                }
            });
        });
    });
</script>

</body>
</html>