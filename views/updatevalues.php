<!DOCTYPE html>
<html>
	<head>
		<title>login</title>
		 <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
			#row1{
				padding-top: 60px;
			}
			#div4{
				padding-top: 30px;
			}
		</style>
	</head>
	<body>
		<div class="container">
		  	<div class="row" id="row1">
		  		<div class="col-md-4 col-md-offset-4">
                 <h3 class="text-center">Login</h3>
                    <form method="POST" action="<?php echo base_url();?>updatecontroller/insertValues">
                       <label>Username</label>
                       <input name="name" id="name" type="text" class="form-control" placeholder="name" >
                       <label>Email</label>
                       <input name="email" id="email" class="form-control" placeholder="email" >
                       <label>phone number</label>
                       <input name="phonenumber" id="phonenumber" class="form-control" placeholder="phonenumber" >
                       <div id="div4">
                          <input type="submit" value="insert/update" class="btn btn-lg btn-primary btn-block">
                       </div>
                    </form>
                </div>	
		  	</div>
		</div>
	</body>
</html>