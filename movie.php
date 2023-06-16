<?php
$series1=$_GET['movie-name'];
$con = mysqli_connect("localhost","root","");
    if(!$con){
      die("Could not connect : ".mysqli_connect_error());
    }
    mysqli_select_db($con,"movie");
    $result=mysqli_query($con,"SELECT * FROM MOVIES WHERE mname='$series1'") or die (mysqli_connect_error());
    $row= mysqli_fetch_array($result);
    $movid=$row['mid'];
    $mname1=$row['mname'];
    $result1=mysqli_query($con,"SELECT * FROM REVIEW where movieid='$movid'")or die (mysqli_connect_error());
    $row2= mysqli_fetch_array($result1);
    $proid=$row2['pid'];
        $result4=mysqli_query($con,"select * from registration where pid='$proid'");
        $row4=mysqli_fetch_array($result4);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="movie.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Document</title>
    <style>
     .reviews{
    margin-right:100px;
    margin-left:100px;
    padding: auto;
    
    }
    .border {
	
	display: grid;
	
	min-height: 200px;
	border: 8px solid ;
	padding: 1rem;
}
.full-withradius {
	position: relative;
	background:rgb(174, 225, 33);

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
    .show-more{
    margin-right: 200px;
    margin-left: 500px;
    width:100px;
    height: 30px;

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

    <div class="movie-head">
    <table>
        <BR>
        <tr class="movie-row">
           <?php echo "<td class='movie-name'>"."<h1>".$row['mname']."</h1>"."</td>"?>

           <!-- <?php $result8=mysqli_query($con,"SELECT AVG('RATINGS') as avgrat FROM REVIEW where movieid='$movid'")or die (mysqli_connect_error());
    $row8= mysqli_fetch_array($result1);
           echo "<td class='movie-de>Ratings : ".$row8['avgrat']." </td>";
           ?> -->
           
        </tr>
    </table>
    </div>
    <div class="movie-img-trailer">
        <table>
            <tr class="movie-img-row">
                <td>
                  <?php echo "<img src='".$row['img']."' class='movie-img' >" ;?>
                </td>
                <td>
                <video height="500px" width="700px" controls>
                   <?php echo "<source src='".$row['video']."' type='video/mp4'>"; ?>
                    
                </video>
                </td>
            </tr>
        </table>
    </div>
    
    <br>
    <div class="description">
        <h1>StoryLine</h1>
        <br>
    <?php   echo "<p>".$row['description']."</p>" ?>
    </div>
    <br>
    <hr>
    <br>
    <div class="director">
      <?php echo "<h4>"."<b>"."Director : ".$row['directors']."</b>"."</h4>" ?>
    </div>
    <br>
    <hr>
    <br>
    <div class="director">
    <?php echo "<h4>"."<b>"."Stars : ".$row['stars']."</b>"."</h4>" ?>
    </div>
    <br>
    <hr>
    <br>
    <div class="director">
    <?php echo "<h4>"."<b>"."Genre : ".$row['genre']."</b>"."</h4>" ?>
    </div>
    <br>
    <br>

    <div class="review"    style=" margin-left: 200px;margin-right: 200px;">
        <div class="review-title"><h1>User Review</h1></h1></div>
        <br>
        <div class="reviews full-withradius border">
       <?php echo "<h7>".$row4['name']."</h7>";?>
            
           <?php  echo "<h3>"."<b>"."<u>".$row2['caption']."</u>"."</b>"."</h4>"; ?>
            
         <?php   echo "<p>".$row2['reviews']."</p>" ?>
        </div>
        <br>
        <form action="reviewm.php" method="get" >
         <?php  // $id=$row2['movieid'];?>
         <?php echo "<button"." class='show-more' "."name='showing' "."value='".$mname1."'>"."Show more"."</button>" ?>
        </form>
        <br>

    </div>
    <div class="movie-list-container">
                <h1 class="movie-list-title">SERIES</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="photos/home/31.jfif" alt="">
                            <span class="movie-list-item-title">House of the Dragon</span>
                            <p class="movie-list-item-desc">An internal succession war within House Targaryen at the height of its power, 172 years before the birth of Daenerys Targaryen.</p>
                            <form action="series.php" method="get">
                                    <button class="movie-list-item-button" name='movie-name' value="House of the Dragon">view</button>
                                </form>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="photos/home/32.jfif" alt="">
                            <span class="movie-list-item-title">Wednesday</span>
                            <p class="movie-list-item-desc">Follows Wednesday Addams' years as a student, when she attempts to master her emerging psychic ability, thwart and solve the mystery that embroiled her parents.</p>
                            <form action="series.php" method="get">
                                    <button class="movie-list-item-button" name='movie-name' value="Wednesday">view</button>
                                </form>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="photos/home/33.jfif" alt="">
                            <span class="movie-list-item-title">Mismatched</span>
                            <p class="movie-list-item-desc">The movie will be a romantic film featuring two people who are not right for each other. The story is about Prajakta's character who is a tech wizard and the guy who is interested in her.</p>
                            <form action="series.php" method="get">
                                    <button class="movie-list-item-button" name='movie-name' value="Mismatched">view</button>
                                </form>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="photos/home/34.jpg" alt="">
                            <span class="movie-list-item-title">Mirzapur</span>
                            <p class="movie-list-item-desc">A shocking incident at a wedding procession ignites a series of events entangling the lives of two families in the lawless city of Mirzapur.</p>
                            <form action="series.php" method="get">
                                    <button class="movie-list-item-button" name='movie-name' value="Mirzapur">view</button>
                                </form>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="photos/home/38.webp" alt="">
                            <span class="movie-list-item-title">Euphoria</span>
                            <p class="movie-list-item-desc">A look at life for a group of high school students as they grapple with issues of drugs, sex, and violence.</p>
                            <form action="series.php" method="get">
                                    <button class="movie-list-item-button" name='movie-name' value="Euphoria">view</button>
                                </form>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="photos/home/39.jpg" alt="">
                            <span class="movie-list-item-title">Flames</span>
                            <p class="movie-list-item-desc">A teenage romance from The Timeliners that aims straight from the heart. This web-series is the story of a young romance unfolding as a chemical reaction.</p>
                            <form action="series.php" method="get">
                                    <button class="movie-list-item-button" name='movie-name' value="Flames">view</button>
                                </form>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="photos/home/40.jpg" alt="">
                            <span class="movie-list-item-title">Campus Diaries</span>
                            <p class="movie-list-item-desc">Campus Diaries is a coming-of-age drama of six students at Excel University.</p>
                            <form action="series.php" method="get">
                                    <button class="movie-list-item-button" name='movie-name' value="Campus Diaries">view</button>
                                </form>
                        </div>
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>
    
 </div>
 <script src="home.js"></script>

    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"><
<?php mysqli_close($con);
?>

</body>
</html>