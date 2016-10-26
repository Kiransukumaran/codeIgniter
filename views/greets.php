<!DOCTYPE html>
<html>
	<head>
		<title>greets</title>
	</head>
	<style>
		#heading{
			color: grey;
			text-align: center;
			padding-top: 50px;
		}
	</style>
	<body>
	<?php 
	foreach ($result as $value) {?>
	<h1 id="heading">Good morning..
		<?php echo "$value->name"; ?><h1>
	<?php	
	}
	?>
	</body>
</html>