<?php
  if(isset($_POST['productID'])){

  $server = "localhost";
  $username = "root";
  $password = "";
  $dbname = "product_manage";

  $conn = new mysqli($server,$username,$password,$dbname) or die("Unable to Connectt");

  echo "great work";

  $productID = $_POST['productID'];
  $productName = $_POST['productName'];
  $productPrice = $_POST['productPrice'];
  $productCategory = $_POST['productCategory'];
  $productDescription = $_POST['productDescription'];


  $sql = "INSERT INTO product_db (productID, productName, productPrice, productCategory, productDescription) VALUES ('$productID','$productName', '$productPrice',' $productCategory',' $productDescription')";
  if($conn -> query($sql) == TRUE){

    echo "Connection Successfull";

  }
  else{
    echo "Error: $sql <br> $conn->error";
  }


  $conn->close();
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

    <style>
        .btn-dark{
            padding : 5px 20px;
        }

        .flex-parent {
           display: flex;
        }
        
        .jc-center {
           justify-content: center; 
           margin-right : 20px;
        }
        
    </style>

</head>

<body>

<h1 class="text-center my-5">Product Management System</h1>
<div class="row ">

<div class="col-lg-5 my_product">
<div class=" mx-3 shadow p-4 mb-5">
   <form   method="POST" >

                <label for="productID"   class="fw-bold">Product ID :</label>
                <input type="text" name ="productID" required class="form-control my-2" id="productID">


                <label for="productName"   class="fw-bold">Product Name :</label>
                <input type="text" name ="productName" required class="form-control my-2" id="productName">
           
                <label for="productPrice"  class="fw-bold">Product Price :</label>
                <input type="text" name = "productPrice"required class="form-control my-2" id="productPrice" >
        
                <label for="productCategory"  class="fw-bold">Product Category :</label>
                <input type="text" name = "productCategory" required class="form-control my-2" id="productCategory" >
              
              
                <label for="productDescription"  class="fw-bold">Product Description :</label>
              <input type="text"    name ="productDescription"  class="form-control my-2" id="productDescription" >
         
        
              <button   type="submit" id="mainBtn" class="btn btn-dark fw-bold border-2 rounded-pill my-3 flex-parent jc-center">Add Product</button>
              
            
              
   </form>


           
</div>
<div class="flex-parent jc-center">
        <a href='../assets/update.php' class="flex-parent jc-center btn btn-dark fw-bold border-2 rounded-pill  my-3" >Update Product</a>
        <a href='../assets/delete.php'  class="flex-parent jc-center btn btn-dark fw-bold border-2 rounded-pill  my-3" >Delete Product</a>  
        <a href='../assets/display.php'  class="flex-parent jc-center btn btn-dark fw-bold border-2 rounded-pill  my-3" >Display</a>    
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