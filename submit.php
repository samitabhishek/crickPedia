<?php 
	$db = mysqli_connect('localhost','root','root','CRICKET');
	$player_id = $_POST['player_id'];
	$team_id = $_POST['team_id'];
	$team_name = $_POST['team'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$nationality = $_POST['country'];
	$dob = $_POST['bday'];
	$type = $_POST['type'];
	$no_of_matches = $_POST['no_of_matches'];
	$runs = $_POST['runs'];
	$avg = $_POST['avg'];
	$century = $_POST['century'];
	$halfcentury = $_POST['halfcentury'];
	$runsconceded = $_POST['runsconceded'];
	$wickets = $_POST['wickets'];
	$query = "INSERT INTO TEAMS(TEAM_ID,TEAM_NAME) VALUES('$team_id','$team_name')";
	//mysqli_query($db,$query);
	$query =  "INSERT INTO PLAYERS(PLAYER_ID,FIRSTNAME,LASTNAME,DOB,NATIONALITY) VALUES('$player_id','$firstname','$lastname','$dob','$nationality')";
	//mysqli_query($db,$query);
	if($type == 'Batsman'){
		$query = "INSERT INTO BATSMEN(PLAYER_ID,RUNS,NO_OF_MATCHES,AVG,CENTURY,HALF_CENTURY) VALUES('$player_id','$runs','$no_of_matches','$avg','$century','$halfcentury')";
		mysqli_query($db,$query);
	}
	if($type == 'Bowler'){
		$query = "INSERT INTO BOWLERS(PLAYER_ID,RUNS_CONCEDED,WICKETS) VALUES('$player_id','$runsconceded','$wickets')";
		mysqli_query($db,$query);
	}
	if($type === 'All Rounder'){
		$query = "INSERT INTO BATSMEN(PLAYER_ID,RUNS,NO_OF_MATCHES,AVG,CENTURY,HALF_CENTURY) VALUES('$player_id','$runs','$no_of_matches','$avg','$century','$halfcentury')";
		mysqli_query($db,$query);
		$query = "INSERT INTO BOWLERS(PLAYER_ID,RUNS_CONCEDED,WICKETS) VALUES('$player_id','$runsconceded','$wickets')";
		mysqli_query($db,$query);
	}
	$query = "INSERT INTO PLAYER_TEAM(PLAYER_ID,TEAM_ID) VALUES('$player_id','$team_id')";
	mysqli_query($db,$query);
	header('Location: addplayer.php')
?>