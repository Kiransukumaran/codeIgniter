<!DOCTYPE html>
<html>
	<head>
		<title>items deleted</title>
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
                    <form method="POST" action="<?php echo base_url();?>updatecontroller/insertValues">  
                       <label>id/label>
                       <input name="id"  type="text" class="form-control" placeholder="id" >
                       <label>item/label>
                       <input name="item" type="text" class="form-control" placeholder="item" >
                       <label>price</label>
                       <input name="price" class="form-control" placeholder="price" >
                       <label>Quantity</label>
                       <input name="quantity"  class="form-control" placeholder="quantity" >
                       <label>customer namae</label>
                       <input name="name" class="form-control" placeholder="customer name" >
                    </form>
                </div>	
		  	</div>
		</div>
	</body>
</html>
