<?php
	$db = mysqli_connect('localhost','root','root','CRICKET');
	$name = $_POST['tname'];
	$query = "DELETE FROM TEAMS WHERE TEAM_NAME = '$name'";
	if(mysqli_query($db,$query))
		echo "Player Deleted";
	else
		echo "Not deleted";
?>