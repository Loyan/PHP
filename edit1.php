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

mysql_connect("localhost","-u root"," ");
mysql_query("use shirts");
$query = "update shirts set brand='$brand' where id=$id";
echo "q=$query";
mysql_query($query);
$query = "update shirts set size='$size' where id=$id";
mysql_query($query);

mysql_query("use shirts");
echo "q=$query";
$query = "update shirts set color='$color' where id=$id";
mysql_query($query);

mysql_query("use shirts");
$query = "update shirts set material='$material' where id=$id";
echo "q=$query";
mysql_query($query);

?>
