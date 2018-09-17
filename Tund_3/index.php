<?php
 //echo "Siin on minu esimene php";
 $name = "Kevin";
 $surname = "Pruus";
 $todayDate = date("d.m.Y");
 $hourNow = date ("H");
 //echo $hourNow;
 $partofDay = "";
 if ($hourNow <8){
	 $partofDay = "Varajane hommik";
 }
 if ($hourNow <16) {
	$partofDay = "Tööaeg";
 }
 if ($hourNow >=16) {
	 $partofDay = "Tööpäeva lõpp";
 }
 //kuupäev
 $weekDayNow = date("N");
 $weekDayNamesET = ["esmaspäev", "teisipäev", "kolmapäev", "neljapöev", "reede", "laupäev", "pühapäev"] ;
 var_dump($weekDayNamesET) ;
 //echo $weekDayNamesET ;
 //Loosime juhusliku pildi
 $picNum = mt_rand(2, 43);//random
 //echo $pickNum;
 $picURL = "http://www.cs.tlu.ee/~rinde/media/fotod";
 $picExt = ".jpg";
 $picFileName = $picURL .$picNum .$picExt;
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
<p>See leht on valminud <a href="http://www.tlu.ee" target="_blank">TLÜ</a> õppetöö raames. Siin hakkavad siis asetsema minu Kevin Pruusi dokumendid ja tekstid.
Olen töö- ja tehnologiaõppeppe kolmanda kursuse tudeng ning plaanin õigeigeaegselt lõpetada</p>
<p>Minu sõps teeb ka siin veebiproge <a href="../../../~rogemik">veebi</a>. </p>
<img src="<?php echo $picFileName; ?>" alt="Juhuslik pilt TLUst">
<h2>Antud hetkel rohkem nagu lisada pole...</h2>
<?php
echo "<p> Täna on " .$weekDayNamesET[$weekDayNow - 1] ." " .$todayDate ."</p>\n";
echo "<p> Lehe avamisel oli kell " .date("H:m:s") .", käes on " .$partofDay .".</p>\n";

?>
<!--<img src="http://greeny.cs.tlu.ee/~rinde/veebiprogrammeerimine2018s/tlu_terra_600x400_1.jpg" alt="TLÜ terra hoone">-->
<!--<img src="../../../~rinde/veebiprogrammeerimine2018s/tlu_terra_600x400_1.jpg" alt="TLÜ terra hoone">-->
<img src=
"https://scontent-arn2-1.xx.fbcdn.net/v/t1.0-9/27867214_1807132252652671_1766114752174874559_n.jpg?_nc_cat=0&oh=52fd1692c8c06bd653e8a88ad0035711&oe=5BF174D2" alt="Pilt minu jalgrattast"

</body>

</html>