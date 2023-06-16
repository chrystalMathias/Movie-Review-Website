



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
        $con=mysqli_connect("localhost","root","");
        $email1=$_POST['email'];
        $caption1=$_POST['caption'];
        $rating=$_POST['rate'];
        $review1=$_POST['review'];
        $movieid1=$_POST['movieid'];
        mysqli_select_db($con,"movie");

        $result=mysqli_query($con,"SELECT * FROM registration WHERE email='$email1'");
        $num=mysqli_num_rows($result);
        if($num==1){
            $row=mysqli_fetch_array($result);
            $pid=$row['pid'];
            $result5=mysqli_query($con,"SELECT * FROM REVIEW WHERE pid='$pid' AND movieid='$movieid1'");
            if(mysqli_num_rows($result5)==1){
                echo '<script>alert("You Can review only once");</script>';
                $result1=mysqli_query($con,"SELECT * FROM SERIES WHERE sid='$movieid1'");
                $row2=mysqli_fetch_array($result1);
                $mname=$row2['sname'];
                header('location:reviews.php?showing='.$mname.'');
            }
            else{

            mysqli_query($con,"INSERT INTO `review`(`movieid`, `pid`, `reviews`, `caption`, `ratings`) VALUES ('$movieid1','$pid','$review1','$caption1','$rating')");
            $result1=mysqli_query($con,"SELECT * FROM series WHERE sid='$movieid1'");
            $row2=mysqli_fetch_array($result1);
            $mname=$row2['sname'];
            header('location:reviews.php?showing='.$mname.'');
            }
        }
        else{
            echo"<script>alert('Email not registered')</script>";
            
            header("location:signup.php");

        }

        ?>


</body>
</html>