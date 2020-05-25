<?php
	$db = mysqli_connect('localhost','root','root','CRICKET');
	$player_id = $_POST['playerid'];
	$query = "DELETE FROM PLAYERS WHERE PLAYER_ID = '$player_id'";
	if(mysqli_query($db,$query))
		echo "Player Deleted";
	else
		echo "Not deleted";
?>