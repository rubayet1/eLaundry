<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color nav1">
  <p class="navbar-brand navlogo "  href="#"><span style="color:#E0FFFF;">eLaundry</span></p>
  <div class="collapse navbar-collapse" id="navbarNav">
   <ul class="navbar-nav">
     <li class="nav-item  ">
       <a class="nav-link navgap " style="font-size: 20px;" href="display.php"> <span style="color:black;">Home</span>  </a>

     </li>
     <li class="nav-item">
       <a class="nav-link navgap" style="font-size: 20px;"  href="service1.php"><span style="color:black;">Services</span>  </a>
     </li>
     <li class="nav-item">
       <a class="nav-link navgap" style="font-size: 20px;"  href="pricing.php"><span style="color:black;">Price List</span>  </a>
     </li>
     <li class="nav-item">
       <a class="nav-link navgap" style="font-size: 20px;"  href="packages.php"><span style="color:black;">Packages</span>  </a>
     </li>

   </ul>
 </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarSupportedContent-4">
    <ul class="navbar-nav ml-auto navside">
      <form  action="" method="post">


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user "></i> Profile </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
          <button class="dropdown-item" name="myaccount" >My account</button>
          <button class="dropdown-item" name="logout" >Log out</button>

          <?php

            if(isset($_POST['logout']))
            {
              session_destroy(); //destroy the session
              header("location: index.php"); //to redirect back to "index.php" after logging out
              exit();
            }
            if(isset($_POST['myaccount']))
            {
               //destroy the session
              header("location: myaccount.php"); //to redirect back to "index.php" after logging out

            }
           ?>
</form>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar  -->
  </body>
</html>
