<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <style type="text/css">
      .fixed-top {
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1030;
    }

      #navbar
      {
        font-size:20px ;
        color: black;
        font-weight: bold;

      }
      li
      {
        font-size: 18px;
        margin-left: 20px;
        font-weight: bold;
      }
    </style>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-light  p-3 ">
  <a class="navbar-brand ml-3 " href="#" id="navbar">Martamu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto mr-5">
      <li class="nav-item active" id="list">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Events</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Partners</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Blog</a>
      </li>
      </ul>
  </div>
</nav>
<div class="container">
<div class="col-sm-1"></div>
<a class="btn btn-success mt-5 " href="logout.php" role="button" style="float: right;">Logout</a>
<div class="col-sm-10">
<h1 class="mt-5 text-center p-3 " > Details of Users  </h1>
<table border="1px" cellpadding="10px" align="center" cellspacing="o">
  <tr>
    <th>Name</th> 
    <th>Email</th>
    <th>Phone</th>
    <th>Avatar</th>
    <th>Password</th>
    
  </tr>
  <?php 
  include 'connect.php';
  $query = "SELECT * FROM users";
    $data = mysqli_query($con,$query);
    $result =mysqli_num_rows($data);
      while ($row = mysqli_fetch_array($data)) {
        ?>
        <tr>
          <td><?php echo $row['name']?></td>
          <td><?php echo $row['email']?></td>
          <td><?php echo $row['phone']?></td>
           <td><img src="images/<?php echo $row['avatar']; ?>" style="max-height:150px; max-width:120px;"/></td>
          <td><?php echo $row['password']?></td>
        </tr>
           
        <?php
      }
   
  ?>
</table>
</div>
<div class="col-sm-1"></div>
</div>
</body>
</html>