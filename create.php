<?php
//These are mysql commands for user creation
//CREATE USER 'student2'@'localhost' IDENTIFIED BY '111';
//GRANT ALL PRIVILEGES ON * . * TO 'student2'@'localhost';

mysql_connect("localhost","student2","111");

mysql_query("drop database if exists shirt's;");
mysql_query("create database shirt's;");
mysql_query("use shirt's;");
mysql_query("create table shirt's(id int not null auto_increment primary key, 
	 brand char(30), size int, color char(30), material char(30);");
mysql_query("insert into shirt's (brand,size,color,material) 
	values ('colins', 40,'black','cotton');");
mysql_query("insert into shirt's (brand,size,color,material) 
	values ('Pull&Bear', 41,'yellow','polyester');");
mysql_query("insert into shirt's (brand,size,color,material) 
	values ('CROPP', 39,'white','cotton');");
echo "Ok.";
?>
