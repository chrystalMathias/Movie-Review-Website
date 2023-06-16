<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    
    $email1=$_POST['lemail'];
    
    $password1=$_POST['lpassword'];
    $con = mysqli_connect("localhost","root","","movie");
    if(!$con){
      die("Could not connect : ".mysqli_connect_error());
    }
    
    
    $result=mysqli_query($con,"SELECT * FROM registration WHERE email='$email1' AND password='$password1'");
    $num=mysqli_num_rows($result);
    if($num==1){
        $login=true;
        session_start();
        $session['loggedin']=true;
        $session['email']=$email;
        header("location:home2.php");
    }
    else{
        $showerror="Invalid credentials";
        header("location:signup.php");
    }
    ?>
    
</body>
</html>