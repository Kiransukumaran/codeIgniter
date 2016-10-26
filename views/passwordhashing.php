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
                 <h3 class="text-center login-title">Login</h3>
                    <form class="form-signin" id="form1" method="POST" action="<?php echo base_url();?>passwordcontroller/passwordHashing">
                       <label>Username</label>
                       <input name="name" id="name" type="text" class="form-control" placeholder="username" >
                       <label>Password<a href="" id="a1">forgot password</a></label>
                       <input name="password" id="password" class="form-control" placeholder="Password" >
                       <div id="div4">
                          <input type="submit" value="Login" class="btn btn-lg btn-primary btn-block">
                       </div>
                    </form>
                </div>	
		  	</div>
		</div>
	</body>
</html>