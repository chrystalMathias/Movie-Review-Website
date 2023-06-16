<?php
$series=$_GET['movie-name'];
$con = mysqli_connect("localhost","root","");
    if(!$con){
      die("Could not connect : ".mysqli_connect_error());
    }
    mysqli_select_db($con,"movie");
    $result=mysqli_query($con,"SELECT * FROM SERIES WHERE sname='$series'") or die (mysqli_connect_error());
    $row= mysqli_fetch_array($result);
    $serid=$row['sid'];
    $sname1=$row['sname'];
    $result1=mysqli_query($con,"SELECT * FROM REVIEW where movieid='$serid' ")or die (mysqli_connect_error());
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

  .login-button{
  height:35px;
  background-color: #4dbf00;
  border-radius: 10px;
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
        <br>
    <table>
        <tr class="movie-row">
           <?php echo "<td class='movie-name'>"."<h1>".$row['sname']."</h1>"."</td>"?>
            <td class="movie-de">Ratings </td>
            <td class="movie-de">Popularity</td>
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
      <?php echo "<h4>"."<b>"."Director : ".$row['creators']."</b>"."</h4>" ?>
    </div>
    <br>
    <hr>
    <br>
    <div class="director">
    <?php echo "<h4>"."<b>"."Stars : ".$row['stars']."</b>"."</h4>" ?>
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
        <form action="reviews.php" method="get" >
         <?php  // $id=$row2['movieid'];?>
         <?php echo "<button"." class='show-more' "."name='showing' "."value='".$sname1."'>"."Show more"."</button>" ?>
        </form>
        <br>

    </div>
    <div class="movie-list-container">
                <h1 class="movie-list-title">Movies</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="photos/home/9.jpg" alt="">
                            <span class="movie-list-item-title">Vikram</span>
                            <p class="movie-list-item-desc">A special agent investigates a murder committed by a masked group of serial killers. However, a tangled maze of clues soon leads him to the drug kingpin of Chennai.</p>
                            <form action="movie.php" method="get">
                                    <button class="movie-list-item-button" name='movie-name' value="Vikram">view</button>
                                </form>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="photos/home/10.jpg" alt="">
                            <span class="movie-list-item-title">Minions</span>
                            <p class="movie-list-item-desc">Minions Kevin, Stuart and Bob decide to find a new master. They embark on a global trip and meet Scarlett Overkill, a female super-villain who recruits them and hatches a plan to take over the world.</p>
                            <form action="movie.php" method="get">
                                    <button class="movie-list-item-button" name='movie-name' value="Minions">view</button>
                                </form>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="photos/home/11.jpg" alt="">
                            <span class="movie-list-item-title">Avengers Endgame</span>
                            <p class="movie-list-item-desc">After Thanos, an intergalactic warlord, disintegrates half of the universe, the Avengers must reunite and assemble again to reinvigorate their trounced allies and restore balanDeadPool 2</p>
                            <form action="movie.php" method="get">
                                    <button class="movie-list-item-button" name='movie-name' value="Avengers Endgame">view</button>
                                </form>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="photos/home/12.jpeg" alt="">
                            <span class="movie-list-item-title">DeadPool 2</span>
                            <p class="movie-list-item-desc">Deadpool protects a young mutant Russell from the authorities and gets thrown in prison. However, he escapes and forms a team of mutants to prevent a time-travelling mercenary from killing Russell.</p>
                            <form action="movie.php" method="get">
                                    <button class="movie-list-item-button" name='movie-name' value="DeadPool 2">view</button>
                                </form>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="photos/home/13.webp" alt="">
                            <span class="movie-list-item-title"> Avatar</span>
                            <p class="movie-list-item-desc">Jake, who is paraplegic, replaces his twin on the Na'vi inhabited Pandora for a corporate mission. After the natives accept him as one of their own, he must decide where his loyalties lie.</p>
                            <form action="movie.php" method="get">
                                    <button class="movie-list-item-button" name='movie-name' value="Avatar">view</button>
                                </form>
</div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="photos/home/16.jpg" alt="">
                            <span class="movie-list-item-title">Chhichhore</span>
                            <p class="movie-list-item-desc">A tragic incident forces Anirudh, a middle-aged man, to take a trip down memory lane and reminisce his college days along with his friends, who were labelled as losers.</p>
                            <form action="movie.php" method="get">
                                    <button class="movie-list-item-button" name='movie-name' value="Chhichhore">view</button>
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