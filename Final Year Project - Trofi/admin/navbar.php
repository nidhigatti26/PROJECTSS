<!-- navbar -->
<nav class="navbar navbar-expand-lg" style="background-color: #fd4756;height: 5em; ">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img style="height: 9em; " alt="tropi" src="../images/logo20.png "></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php if($_SESSION['type']=='trofi'){ ?>
            <ul class="navbar-nav" style="margin-left: 45em;">
                <li class="nav-item">
                    <a class="nav-link active" style="color: #fff;margin-top: 0.4em;" aria-current="page" href="<?php echo $_SESSION['type'];?>.php">home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" style="color: #fff;margin-top: 0.4em;" aria-current="page" href="newrecipe.php">New Recipe</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #fff;margin-top: 0.4em;" href="new_restaurant.php">Add Restaurant</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #fff;margin-top: 0.4em;" href="add_admin.php">Add Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #fff;margin-top: 0.4em;" href="new_order.php">Orders</a>
                </li>
                <li style="margin-top: 0.5em;">
                    <a href="?logout=true" class="btn btn-outline-light my-2 my-sm-0" style="height:2.6em;margin-left: 1.5em;"   type="submit">Logout</a>
                </li>
            </ul>
                <?php } elseif ($_SESSION['type']=='trofi_chef'){ ?>
            <ul class="navbar-nav" style="margin-left: 66em;">
                    <li class="nav-item">
                        <a class="nav-link" style="color: #fff;margin-top: 0.4em;" href="trofi_chef.php">New Recipe</a>
                    </li>
                    <li style="margin-top: 0.5em;">
                        <a href="?logout=true" class="btn btn-outline-light my-2 my-sm-0" style="height:2.6em;margin-left: 1.5em;"   type="submit">Logout</a>
                    </li>
            </ul>
            <?php } elseif ($_SESSION['type']=='my_restaurant'){ ?>
                <ul class="navbar-nav" style="margin-left: 54em;">
                    <li class="nav-item">
                        <a class="nav-link active" style="color: #fff;margin-top: 0.4em;" aria-current="page" href="<?php echo $_SESSION['type'];?>.php">home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #fff;margin-top: 0.4em;" href="edit_profile.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #fff;margin-top: 0.4em;" href="add_food.php">Add New Food</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #fff;margin-top: 0.4em;" href="order.php">Orders</a>
                    </li>
                    <li style="margin-top: 0.5em;">
                        <a href="?logout=true" class="btn btn-outline-light my-2 my-sm-0" style="height:2.6em;margin-left: 1.5em;"   type="submit">Logout</a>
                    </li>
                </ul>
            <?php } ?>
        </div>
    </div>
</nav>
