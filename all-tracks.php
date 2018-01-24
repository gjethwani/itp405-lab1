<?php
	require('./Track.php');
	use Apple\iTunes\Track;
	$pdo = new PDO('sqlite:chinook.db');
	var_dump(Track::all($pdo));
?>