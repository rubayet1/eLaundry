
<?php include('connection.php') ?>
<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js"></script>

 <link rel="stylesheet" href="index.css">
    <meta charset="utf-8">

    <title></title>
  </head>
  <body class="body2">
  <?php include 'navbar.php' ?>

<!--/.card  -->
<div class="card cardaccount3" style="width: 22rem;">

  <div class="card-body ">
    <h5 class="card-title" >Your Cart</h5>




    <p class="card-text " id= "cart"><nav class="nav flex-column"></nav></p>



    </div>
    <!--Panel-->
<div class="card card-block add">

    <p class="card-text">Total</p>
    <p id="total">0tk</p>;


</div>
          <form  action=" " method="post">
           <button  id="out" type="submit" class="btn btn-info checkout " name="checkout1">GO TO CHECKOUT</button>
           <?php

             if(isset($_POST['checkout1']))
             {

               header("location: checkout.php"); //to redirect back to "index.php" after logging out

             }

            ?>
          </form>
</div>


</div>

<!--/.card  -->
<p class="select" > </p>
    <!-- Collapse buttons -->
<div>
  <a class="btn btn-light-blue collapse2" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
Shirt / T-Shirt / Apron
  </a>


</div>
<!-- / Collapse buttons -->


<div class="collapse" id="collapseExample">
  <div class="mt-3">
    <!-- /Body element -->
    <ul class="list-group list-group-flush table1">
  <li class="list-group-item ">Shirt (40tk)  <button type="button" name="Shirt (40tk)" value="40tk" class="btn btn-outline-info waves-effect cartbtn  click"  >ADD TO CART</button></li>

  <li  class="list-group-item ">Baby Shirt (25tk)<button type="button" name="Baby Shirt (25tk) " value="25tk"class="btn btn-outline-info waves-effect cartbtn click">ADD TO CART</button></li>
  <li class="list-group-item ">T-Shirt - Half (30tk)<button type="button" name="T-Shirt - Half (30tk)" value="30tk" class="btn btn-outline-info waves-effect cartbtn click">ADD TO CART</button></li>
  <li class="list-group-item">T-Shirt - Full (40tk)<button type="button" name="T-Shirt - Full (40tk)" value="40tk" class="btn btn-outline-info waves-effect cartbtn click">ADD TO CART</button></li>
  <li class="list-group-item">Apron (50tk)<button type="button" name="Apron (50tk)" value="50tk" class="btn btn-outline-info waves-effect cartbtn click">ADD TO CART</button></li>
</ul>
  </div>
</div>

<!-- / scr element -->

<script type="text/javascript">
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.click'); //Add button selector
    var wrapper = $('.card-body'); //Input field wrapper
    var totalPrice=0;


    var x = 1; //Initial field counter is 1


    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        var id1 = $(this).attr('name');
        var id2 = $(this).attr('value');
        var fieldHTML = '<div id="gap"> <p   class="rmv" >'+id1+' </p><button  type="button"  value="'+id2+'" class="remove_button btn btn-danger yoyo">DEL</button> </div>'; //New input field html




        if(x < maxField){
            x++; //Increment field counter

            $(wrapper).append(fieldHTML); //Add field html


            totalPrice=totalPrice+ parseInt(id2);

             document.getElementById('total').innerHTML=totalPrice +"Tk";
        }
      if(x==4)
        {




        }
    });
    $('#out').click(function() {
      var elements = document.getElementsByClassName('rmv');
      var x= [];

      for (i = 0; i < elements.length ;i++) {
        x.push(elements[i].innerHTML);

       }

      console.log(x);
  $.ajax({
    url:"checkout.php",
    method:"post",
    data:{x:JSON.stringify(x),y:totalPrice,},

    success :function (res)
    {
      console.log(res);
    }


  });


        });


    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){

        e.preventDefault();

        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter

        var id2 = $(this).attr('value');

        totalPrice=totalPrice-parseInt(id2);

        document.getElementById('total').innerHTML=totalPrice +"Tk";
    });
});
  </script>


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
Kameez - Salwar & Other Ladies Dress
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
Suits
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
Car Seat Cover
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

<?php include 'footer.php' ?>
</body>
</html>
