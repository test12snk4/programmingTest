<html>
    <head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
    <body>
		<form action="post-login.php" method="post">
			<div class="row form-group">
				<label class="col-md-3" >username</label>
				<div class="col-md-8">
					<input type="text" name="txtUsername" class="form-control">
				</div>
			</div>
			<div class="row form-group">
			<label class="col-md-3" >password</label>
				<div class="col-md-8">
				<input type="password" name="txtPassword" class="form-control">					
				</div>
			</div>
			<div class="row form-group">
				<input type="submit" value="login" class="form-control">
				<input type="reset" value="cancel" class="form-control">
			</div>			
		</form>

    </body>
</html>