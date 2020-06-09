<!DOCTYPE html>
<html lang="en">
<head>
	  <title>Laravel Crud</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container"><br>
		@if(session()->has('message'))
		    <div class="alert alert-success">
		        {{ session()->get('message') }}
		    </div>
		@endif
		<div class="well">
			<button onclick="location.href = '/view';" class="btn btn-info" style="float: right;">View</button>
			<center><h2>Laravel Crud</h2></center>
			<form action="/form/store" method="post">
		 	{{ csrf_field() }}
			  	<div class="form-group">
					<label>Name :</label>
					<input type="text" class="form-control" placeholder="Enter Name" name="name">
				</div>
			    <div class="form-group">
				    <label>Email:</label>
				    <input type="email" class="form-control" placeholder="Enter Email" name="email">
			    </div>
			    <div class="form-group">
				    <label>Mobile Number :</label>
				    <input type="number" class="form-control" placeholder="Enter Mobile Number" name="mobile_number" maxlength="10">
			    </div>
				<button type="submit" class="btn btn-primary">Submit</button>
		  	</form>
		</div>
	</div>
</body>
</html>
