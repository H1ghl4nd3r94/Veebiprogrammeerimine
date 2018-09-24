<?php
require ("../../../config.php");
//echo $GLOBALS["serverHost"];
//echo $GLOBALS["serverUsername"];
//echo $GLOBALS["serverPassword"];
$database = "if18_kevinp";
function saveAMsg ($msg) {
	//echo "töötab";
	$notice = ""; //see on teade mis antakse salvestamise kohta
	//loome uhenduse andmeservuga
	$mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $GLOBALS["database"]);
	//valmistame sql palingu
	$stmt = $mysqli->prepare("INSERT INTO vpamg (message) VALUES(?)");
	echo $mysqli->error;
	$stmt->bind_param("s", $msg);//s - string, i - integer, d - decimal
	if ($stmt->execute()) {
		$notice = 'sonum:"' .$msg .'" on salvestatud!';
	}else {
		$notice = "sonumi salvestamisel tekkis probleem: " .$stmt->error;
	}
	$stmt->close();
	$mysqli->close();
	return $notice;
}
?>