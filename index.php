<?php
/* MyGameList 1.0 
	by Aranel Surion <aranel@aranelsurion.org>
*/

require("functions.php");

dbconnect();
dbquery("SELECT * FROM collection");
?>

<!DOCTYPE html>
<head>
<title>Aranel Surion's Game List</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,700">

<link rel="stylesheet" href="style.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
	<div class="row">
	<div class="col-lg-5 col-lg-offset-3 voffset5">
	<a href="http://steamcommunity.com/id/steamidgoeshere"><img src="http://steamsignature.com/profile/english/76561198014979577.png" class="img-responsive center-block"></a>
	<div align="center"><h6>User Name's Game List</h6></div>
	</div>
	<div class="col-lg-9 col-lg-offset-1">
<?php if (!isemptyct(1)){ ?>
<h6>Playing</h6>
<table border="1">
<tr>
<th>#</th>
<th>Game Title</th>
<th>Rating</th>
<th>Genre</th>
<th>Platform</th>
<th>Priority</th>
<th>Medium</th>
</tr>
<?php getcollection(1); ?>
</table>
<?php } if (!isemptyct(2)){ ?>
<h6>Replaying</h6>
<table border="1">
<tr>
<th>#</th>
<th>Game Title</th>
<th>Rating</th>
<th>Genre</th>
<th>Platform</th>
<th>Priority</th>
<th>Medium</th>
</tr>
<?php getcollection(2); ?>
</table><?php } if (!isemptyct(3)){  ?>
<h6>Completed</h6>
<table border="1">
<tr>
<th>#</th>
<th>Game Title</th>
<th>Rating</th>
<th>Genre</th>
<th>Platform</th>
<th>Priority</th>
<th>Medium</th>
</tr>
<?php getcollection(3); ?>
</table><?php } if (!isemptyct(4)){  ?>
<h6>On Hold</h6>
<table border="1">
<tr>
<th>#</th>
<th>Game Title</th>
<th>Rating</th>
<th>Genre</th>
<th>Platform</th>
<th>Priority</th>
<th>Medium</th>
</tr>
<?php getcollection(4); ?>
</table><?php } if (!isemptyct(5)){  ?>
<h6>Dropped</h6>
<table border="1">
<tr>
<th>#</th>
<th>Game Title</th>
<th>Rating</th>
<th>Genre</th>
<th>Platform</th>
<th>Priority</th>
<th>Medium</th>
</tr>
<?php getcollection(5); ?>
</table><?php } if (!isemptyct(6)){  ?>
<h6>Plan to Play</h6>
<table border="1">
<tr>
<th>#</th>
<th>Game Title</th>
<th>Rating</th>
<th>Genre</th>
<th>Platform</th>
<th>Priority</th>
<th>Medium</th>
</tr>
<?php getcollection(6); ?>
</table><?php } ?>
</div>
<div class="col-lg-5 col-lg-offset-4 voffset5"><small>Lovingly crafted by <a href="http://www.aranelsurion.org">Aranel Surion.</a> Get yours from <a href="https://github.com/AranelSurion">my GitHub!</a></small></div>
</div></div>
</body>