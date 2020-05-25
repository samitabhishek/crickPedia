<!DOCTYPE html>
<html lang="en">
<head>
<title>CrickPedia</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/addp.css">
<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.4.1.js"></script>
<script src="js/slider.js"></script>
<script src="js/custom.js"></script>
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
          <li class="current"> <a>Players</a>
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
   <h2 id="enterplayerdetails" >Enter PLayer Details</h2>
   <form id="add" action="submit.php" method="POST">
<div id="container">
<div id="first">
   
    <label class="labeladd" for="pid">Player ID</label><br>
    <input type="text" id="pid" name="player_id" placeholder="ID"><br>
	<label class="labeladd" for="fname">First Name</label><br>
    <input type="text" id="fname" name="firstname" placeholder="Your name.."><br>

   
	<label class="labeladd" for="fname">Nationality</label><br>
	
	<select id="country" name="country">
       <option value="">-- select one --</option>
  <option value="afghan">Afghan</option>
  <option value="albanian">Albanian</option>
  <option value="algerian">Algerian</option>
  <option value="american">American</option>
  <option value="andorran">Andorran</option>
  <option value="angolan">Angolan</option>
  <option value="antiguans">Antiguans</option>
  <option value="argentinean">Argentinean</option>
  <option value="armenian">Armenian</option>
  <option value="australian">Australian</option>
  <option value="austrian">Austrian</option>
  <option value="azerbaijani">Azerbaijani</option>
  <option value="bahamian">Bahamian</option>
  <option value="bahraini">Bahraini</option>
  <option value="bangladeshi">Bangladeshi</option>
  <option value="barbadian">Barbadian</option>
  <option value="barbudans">Barbudans</option>
  <option value="batswana">Batswana</option>
  <option value="belarusian">Belarusian</option>
  <option value="belgian">Belgian</option>
  <option value="belizean">Belizean</option>
  <option value="beninese">Beninese</option>
  <option value="bhutanese">Bhutanese</option>
  <option value="bolivian">Bolivian</option>
  <option value="bosnian">Bosnian</option>
  <option value="brazilian">Brazilian</option>
  <option value="british">British</option>
  <option value="bruneian">Bruneian</option>
  <option value="bulgarian">Bulgarian</option>
  <option value="burkinabe">Burkinabe</option>
  <option value="burmese">Burmese</option>
  <option value="burundian">Burundian</option>
  <option value="cambodian">Cambodian</option>
  <option value="cameroonian">Cameroonian</option>
  <option value="canadian">Canadian</option>
  <option value="cape verdean">Cape Verdean</option>
  <option value="central african">Central African</option>
  <option value="chadian">Chadian</option>
  <option value="chilean">Chilean</option>
  <option value="chinese">Chinese</option>
  <option value="colombian">Colombian</option>
  <option value="comoran">Comoran</option>
  <option value="congolese">Congolese</option>
  <option value="costa rican">Costa Rican</option>
  <option value="croatian">Croatian</option>
  <option value="cuban">Cuban</option>
  <option value="cypriot">Cypriot</option>
  <option value="czech">Czech</option>
  <option value="danish">Danish</option>
  <option value="djibouti">Djibouti</option>
  <option value="dominican">Dominican</option>
  <option value="dutch">Dutch</option>
  <option value="east timorese">East Timorese</option>
  <option value="ecuadorean">Ecuadorean</option>
  <option value="egyptian">Egyptian</option>
  <option value="emirian">Emirian</option>
  <option value="equatorial guinean">Equatorial Guinean</option>
  <option value="eritrean">Eritrean</option>
  <option value="estonian">Estonian</option>
  <option value="ethiopian">Ethiopian</option>
  <option value="fijian">Fijian</option>
  <option value="filipino">Filipino</option>
  <option value="finnish">Finnish</option>
  <option value="french">French</option>
  <option value="gabonese">Gabonese</option>
  <option value="gambian">Gambian</option>
  <option value="georgian">Georgian</option>
  <option value="german">German</option>
  <option value="ghanaian">Ghanaian</option>
  <option value="greek">Greek</option>
  <option value="grenadian">Grenadian</option>
  <option value="guatemalan">Guatemalan</option>
  <option value="guinea-bissauan">Guinea-Bissauan</option>
  <option value="guinean">Guinean</option>
  <option value="guyanese">Guyanese</option>
  <option value="haitian">Haitian</option>
  <option value="herzegovinian">Herzegovinian</option>
  <option value="honduran">Honduran</option>
  <option value="hungarian">Hungarian</option>
  <option value="icelander">Icelander</option>
  <option value="indian">Indian</option>
  <option value="indonesian">Indonesian</option>
  <option value="iranian">Iranian</option>
  <option value="iraqi">Iraqi</option>
  <option value="irish">Irish</option>
  <option value="israeli">Israeli</option>
  <option value="italian">Italian</option>
  <option value="ivorian">Ivorian</option>
  <option value="jamaican">Jamaican</option>
  <option value="japanese">Japanese</option>
  <option value="jordanian">Jordanian</option>
  <option value="kazakhstani">Kazakhstani</option>
  <option value="kenyan">Kenyan</option>
  <option value="kittian and nevisian">Kittian and Nevisian</option>
  <option value="kuwaiti">Kuwaiti</option>
  <option value="kyrgyz">Kyrgyz</option>
  <option value="laotian">Laotian</option>
  <option value="latvian">Latvian</option>
  <option value="lebanese">Lebanese</option>
  <option value="liberian">Liberian</option>
  <option value="libyan">Libyan</option>
  <option value="liechtensteiner">Liechtensteiner</option>
  <option value="lithuanian">Lithuanian</option>
  <option value="luxembourger">Luxembourger</option>
  <option value="macedonian">Macedonian</option>
  <option value="malagasy">Malagasy</option>
  <option value="malawian">Malawian</option>
  <option value="malaysian">Malaysian</option>
  <option value="maldivan">Maldivan</option>
  <option value="malian">Malian</option>
  <option value="maltese">Maltese</option>
  <option value="marshallese">Marshallese</option>
  <option value="mauritanian">Mauritanian</option>
  <option value="mauritian">Mauritian</option>
  <option value="mexican">Mexican</option>
  <option value="micronesian">Micronesian</option>
  <option value="moldovan">Moldovan</option>
  <option value="monacan">Monacan</option>
  <option value="mongolian">Mongolian</option>
  <option value="moroccan">Moroccan</option>
  <option value="mosotho">Mosotho</option>
  <option value="motswana">Motswana</option>
  <option value="mozambican">Mozambican</option>
  <option value="namibian">Namibian</option>
  <option value="nauruan">Nauruan</option>
  <option value="nepalese">Nepalese</option>
  <option value="new zealander">New Zealander</option>
  <option value="ni-vanuatu">Ni-Vanuatu</option>
  <option value="nicaraguan">Nicaraguan</option>
  <option value="nigerien">Nigerien</option>
  <option value="north korean">North Korean</option>
  <option value="northern irish">Northern Irish</option>
  <option value="norwegian">Norwegian</option>
  <option value="omani">Omani</option>
  <option value="pakistani">Pakistani</option>
  <option value="palauan">Palauan</option>
  <option value="panamanian">Panamanian</option>
  <option value="papua new guinean">Papua New Guinean</option>
  <option value="paraguayan">Paraguayan</option>
  <option value="peruvian">Peruvian</option>
  <option value="polish">Polish</option>
  <option value="portuguese">Portuguese</option>
  <option value="qatari">Qatari</option>
  <option value="romanian">Romanian</option>
  <option value="russian">Russian</option>
  <option value="rwandan">Rwandan</option>
  <option value="saint lucian">Saint Lucian</option>
  <option value="salvadoran">Salvadoran</option>
  <option value="samoan">Samoan</option>
  <option value="san marinese">San Marinese</option>
  <option value="sao tomean">Sao Tomean</option>
  <option value="saudi">Saudi</option>
  <option value="scottish">Scottish</option>
  <option value="senegalese">Senegalese</option>
  <option value="serbian">Serbian</option>
  <option value="seychellois">Seychellois</option>
  <option value="sierra leonean">Sierra Leonean</option>
  <option value="singaporean">Singaporean</option>
  <option value="slovakian">Slovakian</option>
  <option value="slovenian">Slovenian</option>
  <option value="solomon islander">Solomon Islander</option>
  <option value="somali">Somali</option>
  <option value="south african">South African</option>
  <option value="south korean">South Korean</option>
  <option value="spanish">Spanish</option>
  <option value="sri lankan">Sri Lankan</option>
  <option value="sudanese">Sudanese</option>
  <option value="surinamer">Surinamer</option>
  <option value="swazi">Swazi</option>
  <option value="swedish">Swedish</option>
  <option value="swiss">Swiss</option>
  <option value="syrian">Syrian</option>
  <option value="taiwanese">Taiwanese</option>
  <option value="tajik">Tajik</option>
  <option value="tanzanian">Tanzanian</option>
  <option value="thai">Thai</option>
  <option value="togolese">Togolese</option>
  <option value="tongan">Tongan</option>
  <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
  <option value="tunisian">Tunisian</option>
  <option value="turkish">Turkish</option>
  <option value="tuvaluan">Tuvaluan</option>
  <option value="ugandan">Ugandan</option>
  <option value="ukrainian">Ukrainian</option>
  <option value="uruguayan">Uruguayan</option>
  <option value="uzbekistani">Uzbekistani</option>
  <option value="venezuelan">Venezuelan</option>
  <option value="vietnamese">Vietnamese</option>
  <option value="welsh">Welsh</option>
  <option value="yemenite">Yemenite</option>
  <option value="zambian">Zambian</option>
  <option value="zimbabwean">Zimbabwean</option>
    </select><br>
	<label class="labeladd" for="lname">Date of Birth</label><br>
	<input type="date" name="bday"><br>
	 
	<label class="labeladd" for="fname">Role</label><br>
	&nbsp; &nbsp; &nbsp; <input type="checkbox" name="type" value="Batsman" onclick="if(this.checked){document.getElementById('textodiruns').removeAttribute('disabled'); document.getElementById('textodiavg').removeAttribute('disabled'); document.getElementById('textodi100').removeAttribute('disabled');document.getElementById('textodi50').removeAttribute('disabled');}else{
																							document.getElementById('textodiruns').disabled=true; 	
																						document.getElementById('textodiavg').disabled=true; 	 	
																						document.getElementById('textodi100').disabled=true; 	
																						document.getElementById('textodi50').disabled=true; 	
																						
																						
																						}"> Batsman &nbsp; &nbsp; &nbsp; 
		<input type="checkbox" name="type" value="Bowler" onclick="if(this.checked){
																						document.getElementById('btextodiruns').disabled=false; 	
																						document.getElementById('textodiwicket').disabled=false;	
																						
																						}
																						else{
																							document.getElementById('btextodiruns').disabled=true; 	
																						document.getElementById('textodiwicket').disabled=true;	
																						
																						}
																						"> Bowler &nbsp; &nbsp; &nbsp;
	<input type="checkbox" name="type" value="All Rounder" onclick="if(this.checked){
																						document.getElementById('textodiruns').removeAttribute('disabled'); 	
																						document.getElementById('textodiavg').removeAttribute('disabled'); 	
																						document.getElementById('textodi100').removeAttribute('disabled');
																						document.getElementById('textodi50').removeAttribute('disabled'); 
																						document.getElementById('btextodiruns').removeAttribute('disabled'); 
																						document.getElementById('textodiwicket').removeAttribute('disabled');
																						
																						
																						
																						
																						}
																						else{
																							document.getElementById('textodiruns').disabled=true; 	
																						document.getElementById('textodiavg').disabled=true; 	 	
																						document.getElementById('textodi100').disabled=true; 	
																						document.getElementById('textodi50').disabled=true; 	
																						document.getElementById('btextodiruns').disabled=true; 	
																						document.getElementById('textodiwicket').disabled=true; 	
																						
																						}"> All Rounder<br>
		
		<label class="labeladd" for="fname">No. of Matches</label><br>
    <input type="text" id="fname" name="no_of_matches" placeholder="Matches"><br>
	
	
	<label id="labelodiruns" class="labeladd" for="textodiruns">Runs</label><br>
    <input type="text" id="textodiruns" name="runs" placeholder="runs" disabled ><br>
	
	<label id="labelodiavg" class="labeladd" for="textodiavg">Avg</label><br>
    <input type="text" id="textodiavg" name="avg" placeholder="Avg" disabled><br>
	
	<label id="labelodi100" class="labeladd" for="textodi100">100s</label><br>
    <input type="text" id="textodi100" name="century" placeholder="100s" disabled><br>
	
	<label id="labelodi50" class="labeladd" for="textodi50">50s</label><br>
    <input type="text" id="textodi50" name="halfcentury" placeholder="50s"disabled><br>
	
	<label id="blabelodiruns" class="labeladd" for="btextodiruns">Runs Conceded</label><br>
    <input type="text" id="btextodiruns" name="runsconceded" placeholder="runs" disabled><br>
	
	
	
	<label id="labelodiwickets" class="labeladd" for="textodiwicket">Wickets</label><br>
    <input type="text" id="textodiwicket" name="wickets" placeholder="Wickets" disabled><br>
	</div>
    


<div id="second">

      <label class="labeladd" for="tid">Team ID</label><br>
    <input type="text" id="tid" name="team_id" placeholder="ID"><br>
    <label class="labeladd" for="lname">Last Name</label><br>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.."><br>
	<label class="labeladd" for="fname">Team</label><br>
	<select id="country" name="team">
	<option value="">-- select one --</option>
	<option value="India">India</option>
	<option value="South_Africa">South Africa</option>
	<option value="Australia">Australia</option>
	<option value="New_Zealand">New Zealand</option>
	<option value="England">England</option>
	<option value="Pakistan">Pakistan</option>
	<option value="Bangladesh">Bangladesh</option>
	<option value="Sri_Lanka">Sri Lanka</option>
	<option value="West_Indies">West Indies</option>
	<option value="Afghanistan">Afghanistan</option>
	<option value="Zimbawae">Zimbawae</option>
	<option value="Ireland">Ireland</option>
    </select><br>
	 
																										

	
	
	
	

   
    
 </div>

</div> 
    <input type="submit" value="Submit">
  </form>
    
	
	
	
	
    <!-- Footer -->
    <footer>
      <div class="copyright"> Websitedesigned by Samit Abhishek & Rohit Anand</a> </div>
     
    </footer>
  </div>
</div>
</body>
</html>
