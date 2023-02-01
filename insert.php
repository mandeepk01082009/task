<?php
session_start();
include 'connect.php';
if (isset($_POST['submit'])) 
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $img = "";
    $filename = $_FILES['avatar']['name'];
    $tempname = $_FILES['avatar']['tmp_name'];
    $folder = "./images/". $filename;
    move_uploaded_file($tempname,$folder);
    $password = $_POST['password'];

    if (!empty($name)  && !empty($email)  && !empty($phone) && !empty($password)  && !empty($filename) ) {

    

    $qry = "INSERT INTO users(name,email,phone,avatar,password) VALUES ('$name','$email','$phone','$filename','$password')"; 


    if (mysqli_query($con,$qry)) 
    {
        
         header("Location: fetch.php");
    }
    else
    {
        echo "Failed";
    }
}
else{
    // die('Please fill all the fields!');
    $_SESSION['messages'][] =  'Please fill all the fields!';
    header('Location:form.php');
    exit;
    }
    


    mysqli_close($con);
}

?>