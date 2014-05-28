<?php

mysql_connect("localhost","student2","111");
echo "<table border=2>\n";
echo "<tr><td>brand</td>
            <td>size</td>
            <td>color</td>
            <td>material</td>
            <td>edit</td>
            <td>delete</td>
            </tr>\n";
mysql_query("use shirt's");
$r = mysql_query("select * from shirt's");
$n = mysql_num_rows($r);
for ($i=0;$i<$n;$i++)
{
	$f = mysql_fetch_array($r);
	//var_dump($f);
    echo "<tr><td>".$f['brand']."</td>
            <td>".$f['size']."</td>
            <td>".$f['color']."</td>
            <td>".$f['material']."</td>
            <td><a href='edit.php?id=".$f['id']."'>edit</a></td>
            <td><a href='delete.php?id=".$f['id']."'>delete</a></td>
            </tr>\n";

}
?>
