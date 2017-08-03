<?php
//Access the GD library info in case you need to check the installation specifics
$gdInfoArray = gd_info();
$version = $gdInfoArray["GD Version"];
echo "Your GD version is: ".$version;
echo "<hr />";
foreach($gdInfoArray as $key => $value){
	echo "$key|$value<br />";
}
?>