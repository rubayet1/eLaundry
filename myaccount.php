
<?php include('connection.php') ?>
<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

 <!-- jQuery library -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

 <!-- Popper JS -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

 <!-- Latest compiled JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">
 <link rel="stylesheet" href="index.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color nav1">
  <p class="navbar-brand navlogo " href="#">Navbar</p>
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
<!--/.card user  -->
<div class="card cardaccount" style="width: 18rem;">

  <div class="card-body">
    <h5 class="card-title" >Account</h5>
    <p class="card-text " id= "cart"><nav class="nav flex-column">
  <a class="nav-link active" href="#">Profile</a>
  <a class="nav-link" href="#">Order History</a>


</nav></p>

  </div>
</div>
<!--/.card user  -->
<?php
$unilog=$_SESSION["log"];


$sql = "SELECT * FROM user where username='$unilog'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc())
{
   $storepass= $row["email"];



}

 ?>
<!--/.AccountINformation  -->
<div class="card cardaccount1" style="width: 64rem;">

  <div class="card-body">
    <h5 class="card-title" >Account</h5>
    <p class="card-text " id= "cart"><nav class="nav flex-column">
      <form>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Full Name</label>
          <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
          <script type="text/javascript">
        document.getElementById("inputEmail4").setAttribute('value','<?php echo $storepass ?>');
       </script>
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Phone Number</label>
          <input type="password" class="form-control" id="inputPassword4" >
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Area</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
      </div>
      <div class="form-group">
        <label for="inputAddress2">Address</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">City</label>
          <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-4">
          <label for="inputState">State</label>
          <select id="inputState" class="form-control">
            <option selected>Choose...</option>
            <option>...</option>
          </select>
        </div>
        <div class="form-group col-md-2">
          <label for="inputZip">Zip</label>
          <input type="text" class="form-control" id="inputZip">
        </div>
      </div>
      <div class="form-group">
        <div class="form-check">


        </div>
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>

</nav></p>

  </div>
</div>
<!--/.AccountINformation  -->


<!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-4 footersize">

<!-- Footer Links -->
<div class="container text-center text-md-left">

<!-- Grid row -->
<div class="row">

  <!-- Grid column -->
  <div class="col-md-4 mx-auto">

    <!-- Content -->
    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Footer Content</h5>
    <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
      consectetur
      adipisicing elit.</p>

  </div>
  <!-- Grid column -->

  <hr class="clearfix w-100 d-md-none">

  <!-- Grid column -->
  <div class="col-md-2 mx-auto">

    <!-- Links -->
    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

    <ul class="list-unstyled">
      <li>
        <a href="#!">Link 1</a>
      </li>
      <li>
        <a href="#!">Link 2</a>
      </li>
      <li>
        <a href="#!">Link 3</a>
      </li>
      <li>
        <a href="#!">Link 4</a>
      </li>
    </ul>

  </div>
  <!-- Grid column -->

  <hr class="clearfix w-100 d-md-none">

  <!-- Grid column -->
  <div class="col-md-2 mx-auto">

    <!-- Links -->
    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

    <ul class="list-unstyled">
      <li>
        <a href="#!">Link 1</a>
      </li>
      <li>
        <a href="#!">Link 2</a>
      </li>
      <li>
        <a href="#!">Link 3</a>
      </li>
      <li>
        <a href="#!">Link 4</a>
      </li>
    </ul>

  </div>
  <!-- Grid column -->

  <hr class="clearfix w-100 d-md-none">

  <!-- Grid column -->
  <div class="col-md-2 mx-auto">

    <!-- Links -->
    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

    <ul class="list-unstyled">
      <li>
        <a href="#!">Link 1</a>
      </li>
      <li>
        <a href="#!">Link 2</a>
      </li>
      <li>
        <a href="#!">Link 3</a>
      </li>
      <li>
        <a href="#!">Link 4</a>
      </li>
    </ul>

  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->

</div>
<!-- Footer Links -->

<hr>

<!-- Call to action -->
<ul class="list-unstyled list-inline text-center py-2">
<li class="list-inline-item">
  <h5 class="mb-1">Register for free</h5>
</li>
<li class="list-inline-item">
  <a href="#!" class="btn btn-danger btn-rounded">Sign up!</a>
</li>
</ul>
<!-- Call to action -->

<hr>

<!-- Social buttons -->
<ul class="list-unstyled list-inline text-center">
<li class="list-inline-item">
  <a class="btn-floating btn-fb mx-1">
    <i class="fab fa-facebook-f"> </i>
  </a>
</li>
<li class="list-inline-item">
  <a class="btn-floating btn-tw mx-1">
    <i class="fab fa-twitter"> </i>
  </a>
</li>
<li class="list-inline-item">
  <a class="btn-floating btn-gplus mx-1">
    <i class="fab fa-google-plus-g"> </i>
  </a>
</li>
<li class="list-inline-item">
  <a class="btn-floating btn-li mx-1">
    <i class="fab fa-linkedin-in"> </i>
  </a>
</li>
<li class="list-inline-item">
  <a class="btn-floating btn-dribbble mx-1">
    <i class="fab fa-dribbble"> </i>
  </a>
</li>
</ul>
<!-- Social buttons -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2018 Copyright:
<a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
  </body>
</html>
