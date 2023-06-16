









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="search.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Document</title>
    <style>


        .border {
	
	display: grid;
	
	min-height: 200px;
	border: 8px solid ;
	padding: 1rem;
}
.full-withradius {
	position: relative;
	background:#f2e4be;

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
		background: linear-gradient(to left, turquoise, #10a8b9);
	}

    .item-pic{
        height:250px;
        width:200px
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
    <br>
    <div class="container">
    <?php 
        $con=mysqli_connect("localhost","root","");
        if(!$con){
            die("Could not connect : ".mysqli_connect_error());
          }
          mysqli_select_db($con,"movie");
          $sear=$_GET['sea'];
          $result=mysqli_query($con,"SELECT * FROM MOVIES WHERE mname like '$sear';") or die (mysqli_connect_error());
          $num=mysqli_num_rows($result);
          if($num>=1)

        {




    while($row=mysqli_fetch_array($result))
    {
    echo  "<div class='oscar-list full-withradius border'>";
    echo    "<table>";
       echo     "<tr>";
           echo"     <td rowspan='2'>";
           echo"         <img src='".$row['img']."' class='item-pic'>";
           echo"     </td>";
           echo"     <td>";
           echo"          <h1>".$row['mname']."</h1>";
           echo"          <p>".$row['desp']."</p>";
           echo"     </td>";
           echo" </tr>";
           echo" <tr>";
           echo"     <td> <form method='get' action='movie.php'>";
           echo"         <button name='movie-name' class='show-more' value='".$row['mname']."' style='margin-left:350px'> Show Details </button>";
           echo" </form>";
           echo"     </td>";
           echo" </tr>";
       echo "</table>";
   echo" </div>";
   echo "<br>";
    }
}
else{
    echo "<H1>Search Result not found</H1>";
}
    ?>
 </div>
 </div>

</body>
</html>