<html>
<head>
	<title>Add a new shirts data</title>
</head>
<body>
	<h1> shirts form </h1>
	<form method="post" action="edit1.php">
		<?php
		mysql_connect("localhost","-u root"," ");
		mysql_query("use shirts");
		$id=$_REQUEST['id'];
		$f = mysql_query("select * from shirts where id=$id;");
		$r = mysql_fetch_array($f);
		?>
		<p>
		<label> brand:
			<input type=text name="brand" value='<?php echo $r['brand']?>'>
		</label>
		<br>
		<label> size:
			<input type=text name="size" value='<?php echo $r['size']?>'>
		</label>
		<br>
		<label> color:
			<input type=text name="color" value='<?php echo $r['color']?>'>
		</label>
		<br>
		<label> material:
			<input type=text name="material" value='<?php echo $r['material']?>'>
		</label>
		<input type=hidden name="id" value='<?php echo $r['id'] ?>'>
		<input type=submit value="save">
	</p>
	</form>
</html>
