<?php
$mov=$_GET['showing'];
$con = mysqli_connect("localhost","root","");
    if(!$con){
      die("Could not connect : ".mysqli_connect_error());
    }
    mysqli_select_db($con,"movie");
    $result2=mysqli_query($con,"SELECT * FROM MOVIES WHERE mname='$mov'") or die (mysqli_connect_error());
    $row1=mysqli_fetch_array($result2);
    $movid1=$row1['mid'];
    $result3=mysqli_query($con,"SELECT * FROM REVIEW where movieid='$movid1'")or die (mysqli_connect_error());
   // $row3=mysqli_fetch_array($result3);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reviews.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Document</title>
    <style>
        body{
            background-color: #151515;
            margin-top: 10px;
        }
        .border {
	
	display: grid;
	
	min-height: 200px;
	border: 8px solid ;
	padding: 1rem;
}
.full-withradius {
	position: relative;
	background:#fff;
    color:black;

	/*The background extends to the outside edge of the padding. No background is drawn beneath the border.*/
	background-clip: padding-box;

	border: solid 8px transparent;
	border-radius: 0.8rem;
}
.full-withradius:before {
		content: "";
		position: absolute;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		z-index: -1;
		margin: -8px; /* same as border width */
		border-radius: inherit; /* inherit container box's radius */
		background: linear-gradient(to left, turquoise, greenyellow);
	}
    </style>
</head>
<body>
<div class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <h1 class="logo">renasas</h1>
            </div>
            <div class="menu-container">
                <ul class="menu-list">
                <a href="home.php" style="text-decoration: none ;color:white;"> <li class="menu-list-item">Home</li></a>
                <a href="movie-bar.php" style="text-decoration: none ;color:white;"> <li class="menu-list-item">Movies</li></a>
                <a href="series-bar.php" style="text-decoration: none ;color:white;"> <li class="menu-list-item">Series</li></a>
                <a href="oscars.php" style="text-decoration: none ;color:white;"> <li class="menu-list-item">Oscars</li></a>


                </ul>
            </div>
            <div className="topbarCenter">
        <div className="searchbar">
          <form action="search.php" method="get">
          <input
            placeholder="Search your Favourite movie"
            className="searchInput" name="sea"
          />
</form>
        </div>
      </div>
            <div class="profile-container">
                <!-- <img class="profile-picture" src="photos/profile.jpg" alt=""> -->
                <div class="profile-text-container">
                <form action="signup.php" method="get">
                    <button type="submit" class="login-button" >Register</button>
                </form>
                </div>
               
            </div>
        </div>
    </div>
 <div class="container">
    <br>
    <div class="mname">
       <?php echo "<h1>".$mov."</h1>";?>
        <h2>User Reviews</h2x>
    </div>
    <?php
    while($row3=mysqli_fetch_array($result3)){

        $proid=$row3['pid'];
        $result4=mysqli_query($con,"select * from registration where pid='$proid'");
        $row4=mysqli_fetch_array($result4);

    echo "<div class='review'    style=' margin-left: 20px;margin-right: 20px;'>";
    echo    "<div class='reviews full-withradius border'>";
        echo "<h7>".$row4['name']."</h7>";
            echo "<h3>"."<b>"."<u>".$row3['caption']."</u>"."</b>"."</h4>";
            echo "<h4>".$row3['ratings']."/5</h3>";
            echo "<p>".$row3['reviews']."</p>" ;
            echo " </div>";
            echo"<br>";
   echo"</div>";
    }
    ?>
    <form action="addreviewM.php" method="get" >
         <?php echo"<button type='submit' style='margin-left:600px' name='mid' value='".$row1['mid']."'>Add Review</button>";?>
        </form>
 </div>
</body>
</html>