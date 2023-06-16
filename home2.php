<?php
    $con = mysqli_connect("localhost","root","");
    if(!$con){
      die("Could not connect : ".mysqli_connect_error());
    }
    mysqli_select_db($con,"movie");

    $result=mysqli_query($con,"SELECT * FROM SERIES ") or die (mysqli_connect_error());
    $row=mysqli_fetch_array($result);
    $result1=mysqli_query($con,"SELECT * FROM MOVIES ") or die (mysqli_connect_error());
    $row1=mysqli_fetch_array($result1);

    

?>



<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Movie Design</title>
    
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
                <a href="movies.php" style="text-decoration: none ;color:white;"> <li class="menu-list-item">Movies</li></a>
                <a href="series.php" style="text-decoration: none ;color:white;"> <li class="menu-list-item">Series</li></a>
                <a href="oscars.php" style="text-decoration: none ;color:white;"> <li class="menu-list-item">Oscars</li></a>


                </ul>
            </div>
            <div className="topbarCenter">
        <div className="searchbar">
          <form action="search.php" method="get">
          <input
            placeholder="Search for friend, post or video"
            className="searchInput" name="sea"
          />
</form>
        </div>
      </div>
            <div class="profile-container">
                <!-- <img class="profile-picture" src="photos/profile.jpg" alt=""> -->
                <div class="profile-text-container">
                <form action="signup.php" method="get">
                    <button type="submit" class="login-button">Register</button>
                </form>
                </div>
               
            </div>
        </div>
    </div>
    <div class="container">
        <div class="content-container">
            <div class="featured-content"
                style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('photos/home/1.jpg');">
                <img class="featured-title" src="photos/home/1-c.webp" style=" width: 500px;height: 70px;">
                
                    <?php echo "<p class='featured-desc' style ='width: 500px;color: lightgrey;margin: 30px 0;'> ".$row['description']."</p>" ;   ?>
                
            <form action="series.php" method="get">
                <button class="featured-button" name="movie-name" value="House of the Dragon">View</button>
            </form>
            </div>
            <div class="movie-list-container">
                <h1 class="movie-list-title">NEW RELEASES</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="photos/1.jpeg" alt="">
                            <span class="movie-list-item-title">Enola Holmes 2</span>
                            <p class="movie-list-item-desc">Enola Holmes takes on her first case as a detective, but to unravel the mystery of a missing girl, she'll need some help from friends -- and brother Sherlock</p>
                                <form action="movie.php" method="get">
                                    <button class="movie-list-item-button" name='movie-name' value="Enola Holmes 2">view</button>
                                </form>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="photos/BA-1.png" alt="">
                            <span class="movie-list-item-title">Kantara</span>
                            <p class="movie-list-item-desc">Kantara is a 2022 Indian Kannada-language action thriller film written and directed by Rishab Shetty, and produced by Vijay Kiragandur, under Hombale Films. The film stars Shetty as a Kambala champion who is at loggerheads with an upright DRFO officer, Murali.</p>
                            <form action="movie.php" method="get">
                                    <button class="movie-list-item-button" name='movie-name' value="Kantara">view</button>
                                </form>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="photos/3.jpg" alt="">
                            <span class="movie-list-item-title">Mili</span>
                            <p class="movie-list-item-desc">Young Mili is abducted and finds herself trapped in a freezer with no way out, and every ticking second lowers her chances of survival.</p>
                            <form action="movie.php" method="get">
                                    <button class="movie-list-item-button" name='movie-name' value="Mili">view</button>
                                </form>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="photos/4.jpg" alt="">
                            <span class="movie-list-item-title"> Fantastic Beast</span>
                            <p class="movie-list-item-desc">Dumbledore assembles a team of wizards, witches and a Muggle baker to oppose the rise of Gellert Grindelwald. They hatch a plan to confuse Grindelwald and stop him from attaining political power.</p>
                            <form action="movie.php" method="get">
                                    <button class="movie-list-item-button" name='movie-name' value="Fantastic Beast">view</button>
                            </form>
                        </div>
                        <div class="movie-list-item">
                            <img src="">
                            <span class="movie-list-item-title">KGF 2</span>
                            <p class="movie-list-item-desc">Rocky takes control of the Kolar Gold Fields and his newfound power makes the government as well as his enemies jittery. However, he still has to confront Ramika, Adheera and Inayat..</p>
                            <form action="movie.php" method="get">
                                    <button class="movie-list-item-button" name='movie-name' value="KGF 2">view</button>
                                </form>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="photos/6.jpg" alt="">
                            <span class="movie-list-item-title">Brahmastra</span>
                            <p class="movie-list-item-desc">This is the story of Shiva who sets out in search of love and self-discovery. During his journey, he has to face many evil forces that threaten our existence.</p>
                            <form action="movie.php" method="get">
                                    <button class="movie-list-item-button" name='movie-name' value="Brahmastra">view</button>
                                </form>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="photos/7.jpg" alt="">
                            <span class="movie-list-item-title">Wakanda Forever</span>
                            <p class="movie-list-item-desc">Queen Ramonda, Shuri, M'Baku, Okoye and the Dora Milaje fight to protect their nation from intervening world powers in the wake of King T'Challa's death. As the Wakandans strive to embrace their next chapter, the heroes must band together with Nakia and Everett Ross to forge a new path for their beloved kingdom.</p>
                            <form action="movie.php" method="get">
                                    <button class="movie-list-item-button" name='movie-name' value="Wakanda Forever">view</button>
                                </form>
                        </div>
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>
            <div class="movie-list-container">
                <h1 class="movie-list-title">Movies</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="photos/8.jpg" alt="">
                            <span class="movie-list-item-title">Vikram</span>
                            <p class="movie-list-item-desc">A special agent investigates a murder committed by a masked group of serial killers. However, a tangled maze of clues soon leads him to the drug kingpin of Chennai.</p>
                            <form action="movie.php" method="get">
                                    <button class="movie-list-item-button" name='movie-name' value="Vikram">view</button>
                                </form>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="photos/9.jpg" alt="">
                            <span class="movie-list-item-title">Minions</span>
                            <p class="movie-list-item-desc">Minions Kevin, Stuart and Bob decide to find a new master. They embark on a global trip and meet Scarlett Overkill, a female super-villain who recruits them and hatches a plan to take over the world.</p>
                            <form action="movie.php" method="get">
                                    <button class="movie-list-item-button" name='movie-name' value="Minions">view</button>
                                </form>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="photos/10.jpg" alt="">
                            <span class="movie-list-item-title">Avengers Endgame</span>
                            <p class="movie-list-item-desc">After Thanos, an intergalactic warlord, disintegrates half of the universe, the Avengers must reunite and assemble again to reinvigorate their trounced allies and restore balanDeadPool 2</p>
                            <form action="movie.php" method="get">
                                    <button class="movie-list-item-button" name='movie-name' value="Avengers Endgame">view</button>
                                </form>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="photos/11.jpg" alt="">
                            <span class="movie-list-item-title">DeadPool 2</span>
                            <p class="movie-list-item-desc">Deadpool protects a young mutant Russell from the authorities and gets thrown in prison. However, he escapes and forms a team of mutants to prevent a time-travelling mercenary from killing Russell.</p>
                            <form action="movie.php" method="get">
                                    <button class="movie-list-item-button" name='movie-name' value="DeadPool 2">view</button>
                                </form>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="photos/12.jpg" alt="">
                            <span class="movie-list-item-title"> Avatar</span>
                            <p class="movie-list-item-desc">Jake, who is paraplegic, replaces his twin on the Na'vi inhabited Pandora for a corporate mission. After the natives accept him as one of their own, he must decide where his loyalties lie.</p>
                            <form action="movie.php" method="get">
                                    <button class="movie-list-item-button" name='movie-name' value="Avatar">view</button>
                                </form>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="photos/1.jpg" alt="">
                            <span class="movie-list-item-title">Ek Villian</span>
                            <p class="movie-list-item-desc">Guru is a gangster whose life changes after he falls in love with Aisha and decides to mend his ways. When Aisha gets murdered by a serial killer, Guru begins to search for the culprit.</p>
                            <form action="movie.php" method="get">
                                    <button class="movie-list-item-button" name='movie-name' value="Ek Villain">view</button>
                                </form>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="photos/1.jpg" alt="">
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
            <div class="featured-content"
                style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('img/f-2.jpg');">
                <img class="featured-title" src="img/f-t-2.png" alt="">
                <p class="featured-desc">In college, Farhan and Raju form a great bond with Rancho due to his refreshing outlook. Years later, a bet gives them a chance to look for their long-lost friend whose existence seems rather elusive.</p>
                <form action="movie.php" method="get">
                                    <button class="movie-list-item-button" name='movie-name' value="3 Idiots">view</button>
                                </form>
            </div>
            <div class="movie-list-container">
                <h1 class="movie-list-title">SERIES</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="photos/1.jpeg" alt="">
                            <span class="movie-list-item-title"></span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <form action="movie.php" method="get">
                                    <button class="movie-list-item-button" name='movie-name' value="">view</button>
                                </form>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="photos/2.jpeg" alt="">
                            <span class="movie-list-item-title"></span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <form action="movie.php" method="get">
                                    <button class="movie-list-item-button" name='movie-name' value="">view</button>
                                </form>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="photos/15.jpg" alt="">
                            <span class="movie-list-item-title"></span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <form action="movie.php" method="get">
                                    <button class="movie-list-item-button" name='movie-name' value="">view</button>
                                </form>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="photos/3.jpg" alt="">
                            <span class="movie-list-item-title"></span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <form action="movie.php" method="get">
                                    <button class="movie-list-item-button" name='movie-name' value="">view</button>
                                </form>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="photos/4.jpg" alt="">
                            <span class="movie-list-item-title"></span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <form action="movie.php" method="get">
                                    <button class="movie-list-item-button" name='movie-name' value="">view</button>
                                </form>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="photos/5.jpg" alt="">
                            <span class="movie-list-item-title"></span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <form action="movie.php" method="get">
                                    <button class="movie-list-item-button" name='movie-name' value="">view</button>
                                </form>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="photos/1.jpg" alt="">
                            <span class="movie-list-item-title"></span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <form action="movie.php" method="get">
                                    <button class="movie-list-item-button" name='movie-name' value="">view</button>
                                </form>
                        </div>
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>
            <div class="movie-list-container">
                <h1 class="movie-list-title">OSCARS</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">

                       

                            <img class="movie-list-item-img" src="photos/17.jpg" alt="">
                            <span class="movie-list-item-title">Parasite</span>
                            <p class="movie-list-item-desc">The struggling Kim family sees an opportunity when the son starts working for the wealthy Park family. Soon, all of them find a way to work within the same household and start living a parasitic life.</p>
                            <form action="movie.php" method="get">
                                    <button class="movie-list-item-button" name='movie-name' value="Parasite">view</button>
                                </form>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="photos/18.jpg" alt="">
                            <span class="movie-list-item-title">Joker</span>
                            <p class="movie-list-item-desc">Arthur Fleck, a party clown, leads an impoverished life with his ailing mother. However, when society shuns him and brands him as a freak, he decides to embrace the life of crime and chaos.</p>
                            <form action="movie.php" method="get">
                                    <button class="movie-list-item-button" name='movie-name' value="Joker">view</button>
                                </form>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="photos/19.jpg" alt="">
                            <span class="movie-list-item-title">Slumdog Millionare</span>
                            <p class="movie-list-item-desc">A teenager from the slums of Mumbai becomes a contestant on the show 'Kaun Banega Crorepati?' When interrogated under suspicion of cheating, he revisits his past, revealing how he had all the answers.</p>
                            <form action="movie.php" method="get">
                                    <button class="movie-list-item-button" name='movie-name' value="Slumdog Millionare">view</button>
                                </form>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="photos/7.jpg" alt="">
                            <span class="movie-list-item-title">MoonLight</span>
                            <p class="movie-list-item-desc">A young African-American man grapples with his identity and sexuality while experiencing the everyday struggles of childhood, adolescence, and burgeoning adulthood.</p>
                            <form action="movie.php" method="get">
                                    <button class="movie-list-item-button" name='movie-name' value="Moonlight ">view</button>
                                </form>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="photos/1.jpg" alt="">
                            <span class="movie-list-item-title"> Westside Story</span>
                            <p class="movie-list-item-desc">Love at first sight strikes when young Tony spots Maria at a high school dance in 1957 New York City. Their burgeoning romance helps to fuel the fire between the warring Jets and Sharks -- two rival gangs vying for control of the streets.</p>
                            <form action="movie.php" method="get">
                                    <button class="movie-list-item-button" name='movie-name' value="West side Story">view</button>
                                </form>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="photos/1.jpg" alt="">
                            <span class="movie-list-item-title">Dune</span>
                            <p class="movie-list-item-desc">A noble family becomes embroiled in a war for control over the galaxy's most valuable asset while its heir becomes troubled by visions of a dark futur</p>
                            <form action="movie.php" method="get">
                                    <button class="movie-list-item-button" name='movie-name' value="Dune">view</button>
                                </form>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="photos/1.jpg" alt="">
                            <span class="movie-list-item-title">Titanic</span>
                            <p class="movie-list-item-desc">A seventeen-year-old aristocrat falls in love with a kind but poor artist aboard the luxurious, ill-fated R.M.S. Titanic.</p>
                            <form action="movie.php" method="get">
                                    <button class="movie-list-item-button" name='movie-name' value="Titanic">view</button>
                                </form>
                        </div>
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>
        </div>
    </div>
    <script src="home.js"></script>
</body>

</html>


