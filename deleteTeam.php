<!DOCTYPE html>
<html lang="en">
<head>
<title>CrickPedia</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/searchT.css">
<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.4.1.js"></script>
<script src="js/slider.js"></script>
<script src="js/addT.js"></script>
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
          <li ><a href="index.php">home</a></li>
          <li><a href="about.php">About</a></li>
          <li > <a>Players</a>
            <ul>
              <li><a href="addplayer.php">Add Player</a></li>
              <li><a href="searchP.php">Search Player</a></li>
              
              <li><a href="deleteP.php">Delete Player</a></li>
            </ul>
          </li>
		  <li class="current"> <a>Teams</a>
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
   <h2 id="enterplayerdetails" >Enter Team To Be Deleted</h2>
   <form id="add" action="delete-team.php" method="POST">
<div id="container" style="float:left;height:auto;width:100%;">


	<label class="labeladd" for="pname">Team Name</label><br>
	 <input type="text" id="Tname" name="tname" ><br>
</div> 
    <input type="submit" value="Delete">
  </form>
    
	
	
	
	
    <!-- Footer -->
    <footer>
      <div class="copyright"> Websitedesigned by Samit Abhishek & Rohit Anand</a> </div>
     
    </footer>
  </div>
</div>
</body>
</html>
