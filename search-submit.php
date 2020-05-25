<?php
	$db = mysqli_connect('localhost','root','root','CRICKET');
	$name = $_POST['pname'];
	$query = "SELECT * FROM PLAYERS WHERE FIRSTNAME = '$name' OR LASTNAME = '$name'";
	$res = mysqli_query($db,$query);
	while($row = mysqli_fetch_array($res))
	{
		$player_id = $row[0];
		$firstname = $row[1];
		$lastname = $row[2];
		$date = $row[3];
		$nationality = $row[4];
	}
	$query = "SELECT TEAM_ID FROM PLAYER_TEAM WHERE PLAYER_ID = '$player_id'";
	$res = mysqli_query($db,$query);
	while($row = mysqli_fetch_array($res))
		$team_id = $row[0];
	$query = "SELECT TEAM_NAME FROM TEAMS WHERE TEAM_ID = '$team_id'";
	$res = mysqli_query($db,$query);
	while($row = mysqli_fetch_array($res))
		$team_name = $row[0];
	$query = "SELECT * FROM BOWLERS WHERE PLAYER_ID = '$player_id'";
	$res = mysqli_query($db,$query);
	while($row = mysqli_fetch_array($res))
	{
		$runs_conceded = $row['1'];
		$wickets = $row['2'];
	}
	$query = "SELECT * FROM BATSMEN WHERE PLAYER_ID = '$player_id'";
	$res = mysqli_query($db,$query);
	while($row = mysqli_fetch_array($res))
	{
		$runs = $row[1];
		$no_of_matches = $row[2];
		$avg = $row[3];
		$cents = $row[4];
		$halfcents = $row[5];
	}
	echo $team_id.'<br>';
	echo $team_name.'<br>';
	echo $runs_conceded.'<br>';
	echo $wickets.'<br>';
	echo $runs.'<br>';
	echo $no_of_matches.'<br>';
	echo $avg.'<br>';
	echo $cents.'<br>';
	echo $halfcents;
?>