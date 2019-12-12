
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
      <?php include 'navbar.php' ?>
<!--/.card user  -->
<div class="card profile" style="width: 18rem;">

  <div class="card-body">
    <h5 class="card-title" >Account</h5>
    <p class="card-text " id= "cart"><nav class="nav flex-column">
  <a class="nav-link active" href="myaccount.php">Profile</a>
  <a class="nav-link" href="orderhistory.php">Order History</a>


</nav></p>

  </div>
</div>
<!--/.card user  -->

<!--/.AccountINformation  -->
<div class="card displaytab1" style="width: 64rem;">

  <div class="card-body">
    <h3>Your Order List:</h3>
    <br><p></p>
  



  </div>
</div>
<!--/.AccountINformation  -->


<?php include 'footer.php' ?>
  </body>
</html>
