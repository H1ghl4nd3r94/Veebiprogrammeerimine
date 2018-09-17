<?php
 //echo "Siin on minu esimene php";
 $name = "Tundmatu";
 $surname = "Inimene";
 
 //var_dump($_POST);
 if (isset($_POST["firstName"])));
	 $name = $_POST["firstname"];
}
if (isset($_POST["surname"];
    $surname = $_POST["surname"];
}
	 
?>

<html>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Minu esimene leht lol
 <?php
 echo $name;
 echo " ";
 echo $surname;
 ?>
, õppetöö</title>
</head>
<body>
<h1>
<?php
echo $name ." " .$surname ." ";
?>
Teretulemast minu veebisaidile</h1>
<p>See leht on valminud 
<hr>
<form method="POST">
<label>Eesnimi</label>
<input name="firstName" type="text" value="">
<label>Perekonna nimi</label>
<input name="surName" type="text" value="">
<br>
<input name="submitUserData" type="submit">
<input name="birthYear" type="number" min="1989" max="2003" value="1994">
<br>
<input name="submitUserData" type="submit" value="Saada andmed">
</form>

<?php
if (isset($_POST["submitUserData"]])){
    echo"<br><p>Olete elanud j'rgnevatel aastatep</p>";
	echo "<ul> \n";
	for ($i = $_POST["birthYear"]; $i <= date
	?>
</form>
</body>

</html>