<?php

if(isset($_POST['email'])){

    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "product_manage";
  
    $conn = new mysqli($server,$username,$password,$dbname) or die("Unable to Connectt");
  
    echo " ";
  
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $add_ress = $_POST['add_ress'];
    $pass_word = $_POST['pass_word'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    
  
    $sql = "INSERT INTO signup_db (fname, lname, add_ress, pass_word, phone,email) VALUES ('$fname','$lname', '$add_ress',' $pass_word',' $phone','$email')";
    if($conn -> query($sql) == TRUE){
  
      echo "<a href='login_signup.php'></a>";
      echo "User Created";
  
    }
    else{
      echo " ";
    }


}

?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    

    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Hello, world!</title>
</head>
<body>

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form  method = "POST">
                <h1 style="padding-top: 15px"> Create Account</h1>
                <input type="text" name="fname" placeholder="First Name">
                <input type="text" name="lname" placeholder="Last Name">
                <input type="text" name="add_ress" placeholder="Address">
                <input type="password" name="pass_word" placeholder="Password">
                <input type="text" name="phone" placeholder="Phone Number">
                <input type="email" name="email" placeholder="email">
                <button type="submit" class="btn btn-primary">Submit Details</button>
                <h5>Already have an account! <a class="ghost" id="signIn" style="color:blue;"><u>Sign In</u></a></h5>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form  action="product_manage.php" method="POST">
                <h1 style="padding-bottom: 15px"> Login Now</h1>
                <input type="email" name="email_login" placeholder="Email">
                <input type="password" name="pass_word_login" placeholder="Password">
                <a href="#" style="padding-left:150px; font-weight: bold"> Forgot Your Password?</a>
                <button   type="submit" id="mainBtn" class="btn btn-dark fw-bold border-2 rounded-pill  my-3">Log In</button>
                <h5>New to here! <a class="ghost" id="signUp" style="color:blue;"><u>Sign Up</u></a></h5>
            </form>
            
        </div>

    </div>
    <script type="text/javascript">
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });
    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
</script>



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