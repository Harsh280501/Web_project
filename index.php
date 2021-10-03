<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>

    <style>
        .btn-dark{
          padding : 15px 30px;
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

  <!-- Nav Bar -->
    
  <nav  class="navbar navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Navbar</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">about us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>   
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


  <div class="container_main">
  <div id="carouselExampleControls" class="carousel slide img_main" data-bs-ride="carousel">
   <div class="carousel-inner">
      <div class="carousel-item active">
      <img  src="images/cloth.jpg" class="d-block w-100" style="height: 80vh;" alt="book">
        <div class="carousel-caption d-none d-md-block">
        <h5>CLOTHS</h5>
        <p>Add cloth to the systems</p>
      </div>
      </div>
      <div class="carousel-item">
        <img  src="images/book.jpg" class="d-block w-100" style="height: 80vh;" alt="book">
        <div class="carousel-caption d-none d-md-block">
        <h5>Books</h5>
        <p>Add books to the system</p>
      </div>
      </div>
      <div class="carousel-item">
        <img  src="images/electronic.jpg" class="d-block w-100" style="height: 80vh;" alt="electronic">
        <div class="carousel-caption d-none d-md-block">
        <h5>Electronic</h5>
        <p>Add electronics thing to the system</p>
      </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

      <div class="flex-parent jc-center">
        <a href= 'assests/login_signup.php' class="flex-parent jc-center btn btn-dark fw-bold border-2 rounded-pill  my-3" >Login</a>
        <a href= 'assests/login_signup.php'  class="flex-parent jc-center btn btn-dark fw-bold border-2 rounded-pill  my-3" >Sign Up</a>   
      </div>
     


  






    


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

