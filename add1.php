<?php
$brand = $_REQUEST['brand'];
$size = $_REQUEST['size'];
$color = $_REQUEST['color'];
$material = $_REQUEST['material'];
echo "<p>brand=$brand</p>";
echo "<p>size=$size</p>";
echo "<p>color=$color</p>";
echo "<p>material=$material</p>";

mysql_connect("localhost","-u root"," ");
mysql_query("use shirts");
$query = "insert into shirts (brand,size,color,material) 
	values ('$brand', '$size','$color','$material');";
echo $query;
mysql_query($query);
?>
