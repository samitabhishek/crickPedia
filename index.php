<!DOCTYPE html>
<html lang="en">
<head>
<title>CrickPedia</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.4.1.js"></script>
<script src="js/slider.js"></script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css"> 
<![endif]-->
</head>
<body>
<div class="main-indents">
  <div class="main">
    <!-- Header -->
    <header>
      <h1 class="logo"><a href="index.php">DivingClub</a></h1>
      <nav>
         <ul class="sf-menu">
          <li class="current"><a href="index.php">home</a></li>
          <li><a href="about.php">About</a></li>
          <li > <a>Players</a>
            <ul>
              <li><a href="addplayer.php">Add Player</a></li>
              <li><a href="searchP.php">Search Player</a></li>
              
              <li><a href="deleteP.php">Delete Player</a></li>
            </ul>
          </li>
		  <li> <a>Teams</a>
            <ul>
              <li><a href="addteam.php">Add Team</a></li>
              <li><a href="searchteam.php">Search Team</a></li>
              
              <li><a href="deleteTeam.php">Delete Team</a></li>
            </ul>
          </li>
		  
		  <li> <a >Rankings</a>
            <ul>
              <li><a href="odi rank.php">ICC RANKING ODI</a></li>
              <li><a href="test rank.php">ICC RANKING TEST</a></li>
              
              <li><a href="t20 rank.php">ICC RANKING T20</a></li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <div class="clear"></div>
    </header>
    <!-- Slider -->
    <div class="mp-slider">
      <ul class="items">
        <li><img src="images/one.jpg" alt="">
          
        </li>
        <li><img src="images/two.jpg" alt="">
          
        </li>
        <li><img src="images/four.jpg" alt="">
          
        </li>
      </ul>
      <a href="#" class="mp-prev"></a> <a href="#" class="mp-next"></a> </div>
    <!-- Content -->
    <section id="content">
      <div class="container_12">
        <article class="a1">
          <div class="wrapper"> <img src="images/batbal.png" alt="" class="img-indent">
            <div class="extra-wrap">
              <h3> <span class="welcome">Welcome</span> TO THE CRICKET DATABSE  </h3>
              <p class="p1"> We are providing an interactive platform to search for anything related to cricket. Use our database to search for any cricketer , any team or any tournament </p>
            </div>
          </div>
        </article>
        <article class="content-box">
          <h3 class="hp-1">Our Services:</h3>
          <div class="wrapper">
            <div class="col-1">
              <figure class="img-box"> <img src="images/sachin.jpg" alt=""> </figure>
              <a href="addplayer.php"><h5>Players</h5></a>
              
			  <p> Browse for players .Use our intereactive tools for content filtering </p>
            </div>
            <div class="col-1">
              <figure class="img-box"> <img src="images/six.jpg" alt=""> </figure>
              <a href="addteam.php"><h5>Teams</h5></a>
              <p> You can find your favourite team here . We provide you full details of your team </p>
            </div>
            <div class="col-2">
              <figure class="img-box"> <img src="images/tournament.jpg" alt=""> </figure>
              <a href="addtournament.php"><h5>Tournaments</h5></a>
              <p> Access all the cricket tournaments played so far . bBth leage  international tournaments available </p>
            </div>
          </div>
        </article>
      </div>
    </section>
    <!-- Footer -->
    <footer>
      <div class="copyright"> Websitedesigned by Samit Abhishek & Rohit Anand</a> </div>
     
    </footer>
  </div>
</div>
</body>
</html>
