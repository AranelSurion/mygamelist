<?php

function dbconnect(){
	global $DBH;
	try {
		$DBH = new PDO("mysql:host=localhost;dbname=databasename;charset=utf8", "username", "password");
	}
	catch (PDOException $e) {
		die("Could not connect to database.");
	}


}

function dbquery($query){
	global $DBH;
	$QRY = $DBH->prepare($query);
	$QRY->execute();	
}

function getcollection($case){
	global $DBH;
	if ($case == 1) {
		$STH = $DBH->query('SELECT id, game, platform, rating, priority, genre, medium from collection where status = "Playing" ORDER BY platform, game ASC;');
	}
	if ($case == 2) {
		$STH = $DBH->query('SELECT id, game, platform, rating, priority, genre, medium from collection where status = "Replaying" ORDER BY platform, game ASC;');
	}
	if ($case == 3) {
		$STH = $DBH->query('SELECT id, game, platform, rating, priority, genre, medium from collection where status = "Completed" ORDER BY platform, game ASC;');
	}
	if ($case == 4) {
		$STH = $DBH->query('SELECT id, game, platform, rating, priority, genre, medium from collection where status = "On Hold" ORDER BY platform, game ASC;');
	}
	if ($case == 5) {
		$STH = $DBH->query('SELECT id, game, platform, rating, priority, genre, medium from collection where status = "Dropped" ORDER BY platform, game ASC;');
	}
	if ($case == 6) {
		$STH = $DBH->query('SELECT id, game, platform, rating, priority, genre, medium from collection where status = "Plan to Play" ORDER BY platform, game ASC;');
	}
	$STH->setFetchMode(PDO::FETCH_OBJ);
	$count = 0;
	while($row = $STH->fetch()) {
	$count++;
	echo "<tr><td>$count</td><td class='nocenter'>$row->game</td><td>$row->rating</td><td>$row->genre</td><td>$row->platform</td><td>$row->priority</td><td>$row->medium</td></tr>";

}
}

function isemptyct($case){
	global $DBH;
	if ($case == 1) {
		$STH = $DBH->query('SELECT id from collection where status = "Playing" LIMIT 2;');
	}
	if ($case == 2) {
		$STH = $DBH->query('SELECT id from collection where status = "Replaying" LIMIT 2;');
	}
	if ($case == 3) {
		$STH = $DBH->query('SELECT id from collection where status = "Completed" LIMIT 2;');
	}
	if ($case == 4) {
		$STH = $DBH->query('SELECT id from collection where status = "On Hold" LIMIT 2;');
	}
	if ($case == 5) {
		$STH = $DBH->query('SELECT id from collection where status = "Dropped" LIMIT 2;');
	}
	if ($case == 6) {
		$STH = $DBH->query('SELECT id from collection where status = "Plan to Play" LIMIT 2;');
	}
	$STH->setFetchMode(PDO::FETCH_OBJ);
	$count = 0;
	while($row = $STH->fetch()) {
	$count++; }

	if ($count == 0){
		return true;

	}else{
		return false;
	}

}

?>