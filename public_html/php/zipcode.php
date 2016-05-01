<?php
// Use get request to get city, state matching supplied zipcode

require_once("../connect.php");

?>

<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="../js/zipcode_ajax.js"></script>
</head>

<form>
	City:<br>
	<input type="text" name="city"><br>
	State:<br>
	<input type="text" name="state">
	Zipcode:<br>
	<input type="number" name="zipcode">
</form>
</html>
