<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <title>Login</title>

    <?php
    include '../database/admindb.php';
    if(isset($_POST['login']))
    {
        $email=$_POST['email'];
        $password=$_POST['password'];
        login($email,$password);
    }
    ?>

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Martel+Sans:wght@300;400&display=swap" rel="stylesheet">
    <a href="https://icons8.com/icon/114329/share-3"></a>
    <!-- CSS BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="../import/login.css">
    <!-- for socialicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<div class="app" style="margin-top: 5em;">

    <div class="bg"></div>

    <form action="" method="POST">
        <header>
            <a href="index.php"><img src="../images/logo20.png"></a>
        </header>

        <div class="inputs">
            <input type="text" name="email" placeholder="email">
            <input type="password" name="password" placeholder="password">

            <p class="light" style="margin-right: 5em;"><a href="#">Forgot password?</a></p>
        </div>
        <button class="mt-4" name="login" >Login</button>
    </form>

    <footer>

        <p>Don't have an account? <a href="registeration.php">Sign Up</a></p>
    </footer>


</div>



</body>
</html>