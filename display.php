
<?php include('connection.php') ?>
<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
<script src="addcart.js">

</script>
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
  <body class="body2">
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



<p class="select" >Select your item</p>
    <!-- Collapse buttons -->
<div>
  <a class="btn btn-light-blue collapse1" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Kameez - Salwar & Other Ladies Dress
  </a>


</div>
<!-- / Collapse buttons -->


<div class="collapse" id="collapseExample">
  <div class="mt-3">
    <!-- /Body element -->
    <ul class="list-group list-group-flush table1">
  <li class="list-group-item">Cras justo odio  <button type="button" class="btn btn-outline-info waves-effect cartbtn add addbtn" id="addcart" >ADD TO CART</button><p class="pricetag">Starts from 30tk</p></li>

  <li class="list-group-item">Dapibus ac facilisis in<button type="button" class="btn btn-outline-info waves-effect cartbtn">ADD TO CART</button></li>
  <li class="list-group-item">Morbi leo risus<button type="button" class="btn btn-outline-info waves-effect cartbtn">ADD TO CART</button></li>
  <li class="list-group-item">Porta ac consectetur ac<button type="button" class="btn btn-outline-info waves-effect cartbtn">ADD TO CART</button></li>
  <li class="list-group-item">Vestibulum at eros<button type="button" class="btn btn-outline-info waves-effect cartbtn">ADD TO CART</button></li>
</ul>
  </div>
</div>

<!-- / Collapsible element -->
<!-- Collapse buttons -->
<div>
<a class="btn btn-light-blue collapse2" data-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
Saree & Others
</a>


</div>
<!-- / Collapse buttons -->


<div class="collapse" id="collapseExample2">
<div class="mt-3">
  <ul class="list-group list-group-flush table1">
  <li class="list-group-item">Cras justo odio  <button type="button" class="btn btn-outline-info waves-effect cartbtn">ADD TO CART</button><p class="pricetag">Starts from 30tk</p></li>
  <li class="list-group-item">Dapibus ac facilisis in<button type="button" class="btn btn-outline-info waves-effect cartbtn">ADD TO CART</button></li>
  <li class="list-group-item">Morbi leo risus<button type="button" class="btn btn-outline-info waves-effect cartbtn">ADD TO CART</button></li>
  <li class="list-group-item">Porta ac consectetur ac<button type="button" class="btn btn-outline-info waves-effect cartbtn">ADD TO CART</button></li>
  <li class="list-group-item">Vestibulum at eros<button type="button" class="btn btn-outline-info waves-effect cartbtn">ADD TO CART</button></li>
  </ul>
</div>
</div>
<!-- / Collapsible element -->
<div>
<a class="btn btn-light-blue collapse2" data-toggle="collapse" href="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
Suits
</a>


</div>
<!-- / Collapse buttons -->


<div class="collapse" id="collapseExample3">
<div class="mt-3">
  <ul class="list-group list-group-flush table1">
  <li class="list-group-item">Cras justo odio  <button type="button" class="btn btn-outline-info waves-effect cartbtn">ADD TO CART</button><p class="pricetag">Starts from 30tk</p></li>

  <li class="list-group-item">Dapibus ac facilisis in<button type="button" class="btn btn-outline-info waves-effect cartbtn">ADD TO CART</button></li>
  <li class="list-group-item">Morbi leo risus<button type="button" class="btn btn-outline-info waves-effect cartbtn">ADD TO CART</button></li>
  <li class="list-group-item">Porta ac consectetur ac<button type="button" class="btn btn-outline-info waves-effect cartbtn">ADD TO CART</button></li>
  <li class="list-group-item">Vestibulum at eros<button type="button" class="btn btn-outline-info waves-effect cartbtn">ADD TO CART</button></li>
  </ul>
</table>
</div>
</div>
<!-- / Collapsible element -->
<div>
<a class="btn btn-light-blue collapse2" data-toggle="collapse" href="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">
Coat / Jacket / Blazer (Winter ware)
</a>


</div>
<!-- / Collapse buttons -->


<div class="collapse" id="collapseExample4">
<div class="mt-3">
  <ul class="list-group list-group-flush table1">
  <li class="list-group-item">Cras justo odio  <button type="button" class="btn btn-outline-info waves-effect cartbtn">ADD TO CART</button><p class="pricetag">Starts from 30tk</p></li>
  <li class="list-group-item">Dapibus ac facilisis in<button type="button" class="btn btn-outline-info waves-effect cartbtn">ADD TO CART</button></li>
  <li class="list-group-item">Morbi leo risus<button type="button" class="btn btn-outline-info waves-effect cartbtn">ADD TO CART</button></li>
  <li class="list-group-item">Porta ac consectetur ac<button type="button" class="btn btn-outline-info waves-effect cartbtn">ADD TO CART</button></li>
  <li class="list-group-item">Vestibulum at eros<button type="button" class="btn btn-outline-info waves-effect cartbtn">ADD TO CART</button></li>
  </ul>
</table>
</div>
</div>
<!-- / Collapsible element -->
<div>
<a class="btn btn-light-blue collapse2" data-toggle="collapse" href="#collapseExample5" aria-expanded="false" aria-controls="collapseExample">
Shirt / T-Shirt / Apron
</a>


</div>
<!-- / Collapse buttons -->


<div class="collapse" id="collapseExample5">
<div class="mt-3">
  <ul class="list-group list-group-flush table1">
  <li class="list-group-item">Cras justo odio  <button type="button" class="btn btn-outline-info waves-effect cartbtn">ADD TO CART</button><p class="pricetag">Starts from 30tk</p></li>
  <li class="list-group-item">Dapibus ac facilisis in<button type="button" class="btn btn-outline-info waves-effect cartbtn">ADD TO CART</button></li>
  <li class="list-group-item">Morbi leo risus<button type="button" class="btn btn-outline-info waves-effect cartbtn">ADD TO CART</button></li>
  <li class="list-group-item">Porta ac consectetur ac<button type="button" class="btn btn-outline-info waves-effect cartbtn">ADD TO CART</button></li>
  <li class="list-group-item">Vestibulum at eros<button type="button" class="btn btn-outline-info waves-effect cartbtn">ADD TO CART</button></li>
  </ul>
</table>
</div>
</div>
<!-- / Collapsible element -->
<div>
<a class="btn btn-light-blue collapse2" data-toggle="collapse" href="#collapseExample6" aria-expanded="false" aria-controls="collapseExample">
Suits
</a>


</div>
<!-- / Collapse buttons -->


<div class="collapse" id="collapseExample6">
<div class="mt-3">
  <ul class="list-group list-group-flush table1">
  <li class="list-group-item">Cras justo odio  <button type="button" class="btn btn-outline-info waves-effect cartbtn">ADD TO CART</button><p class="pricetag">Starts from 30tk</p></li>
  <li class="list-group-item">Dapibus ac facilisis in<button type="button" class="btn btn-outline-info waves-effect cartbtn">ADD TO CART</button></li>
  <li class="list-group-item">Morbi leo risus<button type="button" class="btn btn-outline-info waves-effect cartbtn">ADD TO CART</button></li>
  <li class="list-group-item">Porta ac consectetur ac<button type="button" class="btn btn-outline-info waves-effect cartbtn">ADD TO CART</button></li>
  <li class="list-group-item">Vestibulum at eros<button type="button" class="btn btn-outline-info waves-effect cartbtn">ADD TO CART</button></li>
  </ul>
</table>
</div>
</div>

<!-- card -->

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
