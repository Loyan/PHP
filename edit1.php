<?php
$brand = $_REQUEST['brand'];
$size = $_REQUEST['size'];
$color = $_REQUEST['color'];
$material = $_REQUEST['material'];
$id = $_REQUEST['id'];
echo "<p>brand=$brand</p>";
echo "<p>size=$size</p>";
echo "<p>color=$color</p>";
echo "<p>material=$material</p>";

mysql_connect("localhost","student2","111");
mysql_query("use shirt's");
$query = "update shirt's set brand='$brand' where id=$id";
echo "q=$query";
mysql_query($query);
$query = "update shirt's set size='$size' where id=$id";
mysql_query($query);

mysql_query("use shirt's");
echo "q=$query";
$query = "update shirt's set color='$color' where id=$id";
mysql_query($query);

mysql_query("use shirt's");
$query = "update shirt's set material='$material' where id=$id";
echo "q=$query";
mysql_query($query);

//$query = "update shirt's set (brand,size,color,material) 
//	values ('$brand', '$size','$color','$material');";

?>
