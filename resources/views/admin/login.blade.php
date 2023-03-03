<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	@include("admin/include/headerscript")
</head>
<body>
	<div class="container">
		<div class="row d-flex justify-content-center align-items-center" style="width: 100%;height: 600px">
			<div class="col-lg-6">
				@if($errors->has('error'))
				 	@foreach ($errors->all() as $error)
				        <li class="alert alert-danger">{{ $error }}</li>
				    @endforeach
				@endif
				<div class="p-5 border bg-info text-white">
					<h3 class="text-center">Login Form</h3>
					<form method="post">
						@csrf
						<div class="mb-3">
							<label>Username:</label>
							<input type="email" name="email" class="form-control" placeholder="Enter Username">
						</div>
						<div class="mb-3">
							<label>Password</label>
							<input type="password" class="form-control" name="password" placeholder="Enter password">
						</div>
						<div>
							<input type="submit" class="btn btn-primary" name="submit">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	@include("admin/include/footerscript")
</body>
</html>