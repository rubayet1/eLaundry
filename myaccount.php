
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
<?php
$unilog=$_SESSION["log"];


$sql = "SELECT * FROM user where username='$unilog'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc())
{
   $username= $row["username"];
   $fullname= $row["fullname"];
   $email= $row["email"];
   $phonenumber= $row["cno"];
   $area= $row["area"];
   $address= $row["address"];



}

 ?>
<!--/.AccountINformation  -->
<div class="card displaytab" style="width: 64rem;">

  <div class="card-body">
    <h5 class="card-title" >Account</h5>
    <p class="card-text " id= "cart"><nav class="nav flex-column">
      <form>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Username</label>
          <input type="text" class="form-control" id="inputEmail5" placeholder="Email">


          <script type="text/javascript">
        document.getElementById("inputEmail5").setAttribute('value','<?php echo $username ?>');
       </script>
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Full Name</label>
          <input type="text" class="form-control" id="inputfname" >
        </div>
        <script type="text/javascript">
      document.getElementById("inputfname").setAttribute('value','<?php echo $fullname ?>');
     </script>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Email</label>
          <input type="email" class="form-control" id="inputemail" placeholder="Email">


          <script type="text/javascript">
        document.getElementById("inputemail").setAttribute('value','<?php echo $email ?>');
       </script>
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Phone Number</label>
          <input type="text" class="form-control" id="inputphone" >
        </div>
        <script type="text/javascript">
      document.getElementById("inputphone").setAttribute('value','<?php echo $phonenumber ?>');
     </script>
      </div>

      <div class="form-group">
        <label for="inputAddress">Area</label>
        <input type="text" class="form-control" id="inputarea" placeholder="1234 Main St">
      </div>
      <script type="text/javascript">
    document.getElementById("inputarea").setAttribute('value','<?php echo $area ?>');
   </script>
      <div class="form-group">
        <label for="inputAddress2">Address</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="Apartment, studio, or floor">
      </div>
      <script type="text/javascript">
      document.getElementById("inputAddress").setAttribute('value','<?php echo $address ?>');
      </script>
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


<?php include 'footer.php' ?>
  </body>
</html>
