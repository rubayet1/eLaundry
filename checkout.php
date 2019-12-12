
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <link rel="stylesheet" href="index.css">

 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
     <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />


    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php include 'navbar.php' ?>



    <?php

    if(isset($_POST['x'])){ //check if $_POST['examplePHP'] exists

                $_SESSION["cart"]=json_decode($_POST['x']);
        }
        if(isset($_POST['y'])){ //check if $_POST['examplePHP'] exists

                    $_SESSION["total"]= $_POST['y'];
            }





     ?>



     <!-- card1 -->
     <div class="card payment" style="width: 35%;">
     <p></p>
     <p></p>
     <p></p>

     <div class="card-body">
     <h5 class="card-title" >Payment Method</h5>
     <p class="card-text " id= "cart"><nav class="nav flex-column">

       <div class="form-group">


               <div class = "radio">
                  <label>
                     <input type = "radio" name = "optionsRadios" id = "optionsRadios1" value = "online" checked> Bkash
                  </label>
               </div>
               <div class = "radio">
                  <label>
                     <input type = "radio" name = "optionsRadios" id = "optionsRadios2" value = "Cash on delivery">
                        Cash on delivery
                  </label>
               </div>
       </div>
      </select>
      <p></p>
      <p></p>
      <p></p>



     </nav></p>

     </div>
     </div>
     <!-- card1 -->
     <!-- card2 -->
     <div class="card total1" style="width: 23%;">

     <div class="card-body">
     <h3 class="card-title" >Payment</h3>
     <p class="card-text " id= "cart"><nav class="nav flex-column">

       <div class="form-group">
         <p></p>
         <p></p>

<h5>Subtotal</h5> <p id="subtk" class="subtk"><?php echo   $_SESSION["total"]; ?></p>
<p></p>
<p></p>
<h5>Delivery Charge</h5><p class="deltk">60</p>
<br>
<p style="border-style: dashed;border-width: thin;"></p>


<h5>Total</h5><p id="ttt"class="totaltk"> 360</p>
               </div>
       </div>
      </select>
      <p></p>
      <p></p>
      <p></p>

      <script type="text/javascript">
      var subtotal=parseInt(document.getElementById('subtk').innerHTML, 10);
      var delcharge=60;
      var totalp=subtotal+delcharge;
       document.getElementById('ttt').innerHTML=totalp;


      </script>

     </nav></p>

     </div>
     </div>
     <!-- card2 -->

          <!-- card1 -->
     <div class="card dateandtime" style="width: 60%;">
       <p></p>
       <p></p>
       <p></p>

       <div class="card-body">
         <h5 class="card-title " >Select your date and time slot below</h5>
         <p class="card-text " id= "cart"><nav class="nav flex-column">

           <input id="datepicker" width="45%" />
           <select id="timeslot"style="width:45%; " class="browser-default custom-select timing" >
             <option selected>Time Slot</option>
             <option value="9AM-1PM">9AM-1PM</option>
             <option value="1PM-6PM">1PM-6PM</option>
             <option value="6PM-10PM">6PM-10PM</option>
           </select>
           <p></p>
           <p></p>
           <p></p>



     </nav></p>

       </div>
     </div>
<!-- card1 -->

<!-- selected -->
<div class="card dateandtime" style="width: 60%;">
<p></p>
<p></p>
<p></p>
<br>
<div class="card-body">
<h5 class="card-title " >Selected Items</h5>
<p class="card-text " id= "cart"><nav class="nav flex-column">
<?php

foreach($_SESSION["cart"] as $value){
  echo $value;
}
 ?>


 <p></p>
 <p></p>
 <p></p>



</nav></p>

</div>
</div>
<!-- selected -->
<!-- card1 -->
<div class="card Additionalcomment" style="width: 60%;">
<p></p>
<p></p>
<p></p>

<div class="card-body">
<h5 class="card-title" >Additional Comment</h5>
<p class="card-text " id= "cart"><nav class="nav flex-column">

  <div class="form-group">

    <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="5"></textarea>
  </div>
 </select>
 <p></p>
 <p></p>
 <p></p>



</nav></p>

</div>
</div>
<!-- card1 -->

    <script>
        $('#datepicker').datepicker({

        });
        $('.yo').click(function(){
            console.log(document.getElementById('datepicker').value);
        });


    </script>

   <!-- front_back -->
<form  action="display.php " method="post">


<button id="backb"type="submit" class="btn btn-info" name="backb">Back</button>

<button id="placeb" type="button" class="btn btn-success">Place Order</button>

 </form>
<!-- front_back -->


  <?php include 'footer.php' ?>

  </body>
</html>
