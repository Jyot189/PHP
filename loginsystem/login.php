<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $login=false;
    include 'partials/dbconnect.php';
    $username=$_POST["username"];
    $password=$_POST["password"];

    $sql="select * from user where username='$username' AND password='$password' ";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
   if($num==1){
      $login=true;
      echo"sucessful login";
      session_start();
      $_SESSION['loggedin']=true;
      $_SESSION['username']=$username;
      header("location:welcome.php");
   }else{
      
   }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <?php require 'partials/nav.php'?>
    <div class="container">
        <h1 class="">Login to our website</h1>
        <form action="/PHP/PHP_ADVANCE/loginsystem/login.php" method="POST">
            <div class="mb-3 col-md-3">
                <label for="username" class="form-label">username</label>
                <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-md-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button> 
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>



