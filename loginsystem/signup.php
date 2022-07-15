<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $err=false;
    include 'partials/dbconnect.php';
    $username=$_POST["username"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];

    $exitssql="select * from user where username='$username' ";
    $result=mysqli_query($conn,$exitssql);
    $numExitsRows=mysqli_num_rows($result);
    if($numExitsRows > 0){
      echo"username already exit";
    }else{
      $exists=false;
      if($password == $cpassword){
          $sql="INSERT INTO `user` (`username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp());";;          $result=mysqli_query($conn,$sql);
      }else{
        echo"password is not match";
      }
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <?php require 'partials/nav.php'?>
    <div class="container">
        <h1 class="">Signup to our website</h1>
        <form action="/PHP/PHP_ADVANCE/loginsystem/signup.php" method="POST">
            <div class="mb-3 col-md-3">
                <label for="username" class="form-label">username</label>
                <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-md-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3 col-md-3">
                <label for="cpassword" class="form-label">confirmPassword</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword">
                <div id="emailHelp" class="form-text">make you sure same password</div>
            </div>
            <button type="submit" class="btn btn-primary">Signup</button> 
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>

