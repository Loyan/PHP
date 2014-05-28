<?php
mysql_connect("localhost","-u root"," ");

mysql_query("drop database if exists shirts;");
mysql_query("create database shirts;");
mysql_query("use shirts;");
mysql_query("create table shirts(id int not null auto_increment primary key, 
	 brand char(30), size int, color char(30), material char(30);");
mysql_query("insert into shirts (brand,size,color,material) 
	values ('colins', 40,'black','cotton');");
mysql_query("insert into shirts (brand,size,color,material) 
	values ('Pull&Bear', 41,'yellow','polyester');");
mysql_query("insert into shirts (brand,size,color,material) 
	values ('CROPP', 39,'white','cotton');");
echo "Ok.";
?>
