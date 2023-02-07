<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>    

<title></title>
</head>
<body>
    
    <h1 class="text-center bg-dark text-white">Sign up User Form</h1>
<div class="container mt-3">
     <a class="btn btn-success mt-3 " href="login.php" role="button" style="float: right;">Sign Up</a>
  <div class="row">
    <div class="col-sm-2">       
    </div>
    <div class="col-sm-8">
    <?php require_once 'messages.php'?>
    <form action="<?php echo htmlspecialchars("insert.php")?>" name = "myForm" method="post" enctype="multipart/form-data" onsubmit="return (validate());">

    <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control"  placeholder="Name" name="name" id="name"  />
    <span id="name_error" class="text-danger font-weight-bold"></span>
  </div> 

  <div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control"  placeholder="Email" name="email" id="email"  />
     <span id="emailerror" class="text-danger font-weight-bold"></span>
  </div> 
  

  <div class="form-group">
    <label >Phone</label>
    <input type="number" class="form-control"  placeholder="Phone" name="phone" id="phone"  />
     <span id="phone_error" class="text-danger font-weight-bold"></span>
  </div> 
  

  <div class="form-group">
    <label >Avatar</label><br>
    <input type="file" name="avatar" id="avatar"  >
     <span id="avatarerror" class="text-danger font-weight-bold"></span>
  </div>  

  <div class="form-group">
    <label >Password</label>
    <input type="password" class="form-control" name="password"  placeholder="Password" id="password" />
     <span id="passworderror" class="text-danger font-weight-bold"></span>
  </div>    

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form> 
    </div> 
    <div class="col-sm-2">
    </div>
    
  </div>
</div>
  <script type="text/javascript">
    function validate() {
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var phone = document.getElementById('phone').value;
        var avatar = document.getElementById('avatar').value;
        var password = document.getElementById('password').value;

        var namecheck = /^[A-Za-z. ]{3,30}$/gm ;
        var emailcheck = /^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$/;
        var phonecheck = /^\d{10}$/;
        var avatarcheck = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
        var passwordcheck = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
        

        if(namecheck.test(name)){
            document.getElementById('name_error').innerHTML = "";
        }else{
            document.getElementById('name_error').innerHTML = "**Name is Invalid";
            return false;
        }
        if (emailcheck.test(email)) {
            document.getElementById('emailerror').innerHTML = "";
        }
        else{
            document.getElementById('emailerror').innerHTML = "**Email is Invalid."
            return false;
        }
        if (phonecheck.test(phone)) {
            document.getElementById('phone_error').innerHTML = "";
        }
        else{
            document.getElementById('phone_error').innerHTML = "**Permit only phone numbers with 10 digits. "
            return false;
        }
         if (avatarcheck.test(avatar)) {
            document.getElementById('avatarerror').innerHTML = "";
        }
        else{
            document.getElementById('avatarerror').innerHTML = "**Please upload image"
            return false;
        }
           
        if (passwordcheck.test(password)) {
            document.getElementById('passworderror').innerHTML = "";
        }
        else{
            document.getElementById('passworderror').innerHTML = "**Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
            return false;
        }

    }
    
</script> 
</body>
</html>