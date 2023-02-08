<?php
session_start();
include('connect.php');
if(isset($_POST['submit']))
{
    $email=$_POST['email']; 
    $password=$_POST['password'];
    $query="SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";
    $run=mysqli_query($con,$query);
    if (mysqli_num_rows($run)){
      $_SESSION['login'] = TRUE;
      header("location:fetch.php");
    }
    else
    {
      echo "<script>alert('Email and password are not match!!!')</script>";
    }
    
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
	<title>LOGIN</title>
</head>
<body>
<h1 align="center">Sign In</h1>
<div class="container mt-3">
  <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
      <form action="login.php" method="post">
      	<div class="mt-3 h5" style="text-align: center;"><b>
        _________________ sign in via email__________________</b></div>
      	<div class="form-group mt-3">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="submit" class="btn btn-success btn-lg btn-block mt-3">Submit</button>
  <a class="btn btn-primary btn-lg btn-block mt-3" href="form.php" role="button">Sign Up</a>
      </form>
    </div>
    <div class="col-sm-3"></div>
  </div>
</div>
</body>
</html>