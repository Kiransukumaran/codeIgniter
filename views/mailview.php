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

	<!-- email setting page -->
	<body>
		<div class="container">
		  	<div class="row" id="row1">
		  		<div class="col-md-4 col-md-offset-4">
                 <h3 class="text-center">Login</h3>
                    <form method="POST" action="<?php echo base_url();?>emailcontroller/emailSend">
                       <label>Emailid</label>
                       <input name="email" id="email" class="form-control" placeholder="email" >
                       <label>subject</label>
                       <input name="subject" id="subject" class="form-control" placeholder="subject" >
                       <label>message</label>
                       <input name="message" id="message" class="form-control" placeholder="message" >
                       <div id="div4">
                          <input type="submit" value="send" class="btn btn-lg btn-primary btn-block">
                       </div>
                    </form>
                </div>	
		  	</div>
		</div>
	</body>
</html>