
<nav class="navbar navbar-expand-lg " style="background-color: #fd4756;height: 5em; " >
    <div class="nav -content">

        <a   class="navbar-brand"  href="index.php">

            <img style="height: 9em; " alt="tropi" src="images/logo20.png "></a>
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav" style="margin-left: 50em;">

                <li class="nav-item active">
                    <img src="images/order.svg" style="width: 2.5em; height: 2.5em;margin-top: 0.3em;"  alt="">
                </li>

                <li class="nav-item active"  >
                    <a class="nav-link" style="color: #fff;margin-top: 0.4em;" href="order_food.php">Order Food <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active">
                    <img src="images/blog1.svg" style="width: 1.7em; margin-left: 0.5em; height:
          3em;margin-top: 0.3em ;"  alt="">
                </li>


                <li class="nav-item active">
                    <a class="nav-link" style="color: #fff;margin-top: 0.3em;" href="addrecipe.php">Add Recipes</a>
                </li>
                <?php  if(!isset($_SESSION["email"])){ ?>
                    <li style="margin-top: 0.5em;">
                        <a href="login.php" class="btn btn-outline-light  my-sm-0"
                           style="height:2.6em;margin-left: 1.5em; "   type="submit">Sign in</a>
                    </li>
                    <li style="margin-top: 0.5em;">
                        <a href="registeration.php" class="btn btn-outline-light my-2 my-sm-0"
                           style="height:2.6em;margin-left: 1.5em;"   type="submit">Sign up</a>
                    </li>
                <?php } else { ?>
                    <li class="dropdown" style="margin-top: 0.5em;">
                        <a class="btn btn-outline-light my-2 my-sm-0" style="height:2.6em;margin-left: 1.5em;" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Profile
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="myrecipe.php">My Recipe</a>
                            <a class="dropdown-item" href="myingredientorder.php">My Orders</a>
                            <a class="dropdown-item" href="myfoodorder.php">My Food Orders</a>

                        </div>
                    </li>
                    <li style="margin-top: 0.5em;">
                        <a href="?logout=true" class="btn btn-outline-light my-2 my-sm-0"
                           style="height:2.6em;margin-left: 1.5em;"   type="submit">Logout</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>