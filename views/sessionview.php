<!DOCTYPE html>
<html>
	<head>
		<title>session</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
			#row1{
				margin-top: 100px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row" align="center" id="row1">
					<a href="<?php echo base_url(); ?>sessioncontroller/sessionSetting" class="btn btn-success">setsession</a>	
					<a href="<?php echo base_url(); ?>sessioncontroller/deleteSession" class="btn btn-danger">deletesession</a>			
			</div>
		</div>
	</body>
</html>