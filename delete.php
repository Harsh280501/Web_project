<?php
if(isset($_POST['productID'])){

$server='localhost';
$username = 'root';
$password = '';
$dbname = 'product_manage';


$mysqli = new mysqli($server, $username,$password, $dbname);


                if ($mysqli->connect_error) {
                    die('Connect Error (' .
                    $mysqli->connect_errno . ') '.
                    $mysqli->connect_error);
                }

$productID = $_POST['productID'];

$sql = "DELETE from product_db WHERE productID = '$productID'";
$result = $mysqli->query($sql);
$mysqli->close();
}
?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
</head>

<body>

<h1 class="text-center my-5">Delete Product Management System</h1>
<div class="row ">

<div class="col-lg-5 my_product">
<div class=" mx-3 shadow p-4 mb-5">
   <form   method="POST" >

                <label for="productID"   class="fw-bold">Product ID :</label>
                <input type="text" name ="productID" required class="form-control my-2" id="productID">


         
        
              <button   type="submit" id="mainBtn" class="btn btn-dark fw-bold border-2 rounded-pill  my-3">Delete</button>
              

              
   </form>
           
</div>
</div>
    




</div>
    <script src="js.js"></script>  
<script src="bootstrap.bundle.min.js"></script>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>


</html>