<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	@include("admin/include/headerscript")
</head>
<body>
	@include("admin/include/navbar")
	<section class="">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="d-flex justify-content-between align-items-center mt-4 mb-4">
						<h3 class="text-center">Add Category</h3>
						<div>
							<a href="" class="btn btn-primary flex-fill">Add Post</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
					  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div> -->
					
					@if($message = Session::get('success'))
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>Success: </strong> {{$message}}
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>
					@endif
					@if($message = Session::get('error'))
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong> Success: </strong> {{$message}}
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					</div>
					@endif
				</div>
				
			</div>
			<div class="row">
				<div class="col-lg-4">
					<form method="post" enctype="multipart/form-data">
						@csrf
						<div class="mb-2">
							<label>Category Name</label>
							<input type="text" class="form-control" name="name" placeholder="Name">
						</div>
						<div class="mb-2">
							<label>Category Slug</label>
							<input type="text" class="form-control" name="slug" placeholder="Slug">
						</div>
						<div class="mb-2">
							<label>Upload Image</label>
							<input type="file" class="form-control" name="cate_image">
						</div>
						<div class="mb-2">
							<input type="submit" class="btn btn-success" name="submit" >
						</div>
					</form>
				</div>
				<div class="col-lg-8">
					<table id="example" class="table table-striped" style="width:100%">
				        <thead>
				            <tr>
				                <th>#Id</th>
				                <th>name</th>
				                <th>slug</th>
				                <th>Image</th>
				                <th>Start date</th>
				                <th>Action</th>
				            </tr>
				        </thead>
				        <tbody>
				        	@if($categoryData)
				        		@foreach($categoryData as $row)
						            <tr>
						                <td><?=$row['id'];?></td>
						                <td><?=$row['name'];?></td>
						                <td><?=$row['slug'];?></td>
						                <td><?=$row['cat_image'];?></td>
						                <td><?=$row['created_at'];?></td>
						                <td><a href="" class="btn btn-success">Edit</a> &nbsp; <a href="/admin/delete-category/{{$row['id']}}" onclick="return confirm('Are you sure you want to Delete');" class="btn btn-danger">Delete</a></td>
						            </tr>
					            @endforeach
				            @endif
				        </tbody>
				    </table>
				</div>
			</div>
		</div>
	</section>
	@include("admin/include/footerscript")
	<script type="text/javascript">
		$(document).ready(function () {
		    $('#example').DataTable();
		});
	</script>
</body>
</html>