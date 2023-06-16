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
    $name=$_POST['fname'];
    $email=$_POST['pemail'];
    $phone=$_POST['mphone'];
    $password=$_POST['ipassword'];
    $con = mysqli_connect("localhost","root","");
    if(!$con){
      die("Could not connect : ".mysqli_connect_error());
    }
    mysqli_select_db($con,"movie");
    mysqli_query($con,"INSERT INTO `registration`(`name`, `email`, `phone`, `password`) VALUES ('$name','$email','$phone','$password')") or die (mysqli_connect_error());
    mysqli_close($con);
    header("location:home.php");
    ?>
</body>
</html>