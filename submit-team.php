<?php
	$db = mysqli_connect('localhost','root','root','CRICKET');
	$team_id = $_POST['teamid'];
	$team_name = $_POST['teamname'];
	$odi = $_POST['odi'];
	$test = $_POST['test'];
	$t20 = $_POST['t20'];
	$query = "INSERT INTO TEAMS(TEAM_ID,TEAM_NAME) VALUES('$team_id','$team_name')";
	mysqli_query($db,$query);
	$query = "INSERT INTO TEAM_RECORD(TEAM_ID,ODI,TEST,T20) VALUES('$team_id','$odi','$test','$t20')";
	mysqli_query($db,$query);
	header('Location: addteam.php');
?>