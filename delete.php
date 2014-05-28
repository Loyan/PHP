<?php
$id = $_REQUEST['id'];

mysql_connect("localhost","-u root"," ");
mysql_query("use shirts");
$query = "delete from shirts where id=$id";
echo "q=$query";
mysql_query($query);

?>
