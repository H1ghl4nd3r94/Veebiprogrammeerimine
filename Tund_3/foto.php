<?php
 //echo "Siin on minu esimene php";
 $name = "Kevin";
 $surname = "Pruus";
 $dirToRead = "../../pics/";
 $allFiles = array_slice(scandir($dirToRead), 2) ;
 var_dump($allFiles) ;

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

<!--<img src="http://greeny.cs.tlu.ee/~rinde/veebiprogrammeerimine2018s/tlu_terra_600x400_1.jpg" alt="TLÜ terra hoone">-->
<!--<img src="../../../~rinde/veebiprogrammeerimine2018s/tlu_terra_600x400_1.jpg" alt="TLÜ terra hoone">-->
<img src=
<!--"https://scontent-arn2-1.xx.fbcdn.net/v/t1.0-9/27867214_1807132252652671_1766114752174874559_n.jpg?_nc_cat=0&oh=52fd1692c8c06bd653e8a88ad0035711&oe=5BF174D2" alt="Pilt minu jalgrattast"-->
<?php
for($i = 0; $i < count($allFiles); $i ++){
echo '<img src="' .$dirToRead .$allFiles[$i] .'"alt="pilt">br>'
}
?>
</body>

</html>