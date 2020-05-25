<?php
	$db = mysqli_connect('localhost','root','root','CRICKET');
	$name = $_POST['tname'];
	$query = "SELECT TEAM_ID FROM TEAMS WHERE TEAM_NAME = '$name'";
	$res = mysqli_query($db,$query);
	while($row = mysqli_fetch_array($res))
	{
		$team_id = $row['TEAM_ID'];
		echo $name;
	}
	$query = "SELECT PLAYER_ID FROM PLAYER_TEAM WHERE TEAM_ID = '$team_id'";
	$res = mysqli_query($db,$query);
	while($row = mysqli_fetch_array($res))
	{
		$player_id = $row[0];
		$query = "SELECT * FROM PLAYERS WHERE PLAYER_ID = '$player_id'";
		$res1 = mysqli_query($db,$query);
		while($row1 = mysqli_fetch_array($res1))
		{
			echo $row1[1].'  ';
			echo $row1[2];
		}
	}

?>