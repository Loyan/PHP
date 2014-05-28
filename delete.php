<?php
$id = $_REQUEST['id'];

mysql_connect("localhost","student2","111");
mysql_query("use shirt's");
$query = "delete from shirt's where id=$id";
echo "q=$query";
mysql_query($query);

?>
