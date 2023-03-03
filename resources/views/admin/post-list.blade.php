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
						<h3 class="text-center">Post List</h3>
						<div>
							<a href="/admin/add-post" class="btn btn-primary flex-fill">Add Post</a>
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
				<div class="col-lg-12">
					<table id="example" class="table table-striped" style="width:100%">
				        <thead>
				            <tr>
				                <th>#Id</th>
				                <th>name</th>
				                <th>Category</th>
				                <th>slug</th>
				                <th>Image</th>
				                <th>Start date</th>
				                <th>Action</th>
				            </tr>
				        </thead>
				        <tbody>
				        	@if(isset($postData))
				        		@foreach($postData as $row)
						            <tr>
						                <td><?=$row['id'];?></td>
						                <td><?=$row['name'];?></td>
						                <td><?=$row['cate_id'];?></td>
						                <td><?=$row['slug'];?></td>
						                <td><img src="{{asset('post_image').'/'.$row['post_image']}}" width="100px;"></td>
						                <td><?=$row['created_at'];?></td>
						                <td>
						                	<a href="/admin/question/{{$row['id']}}" class="btn btn-success">Add Question</a>
						                	<a href="/admin/edit-post-{{$row['id']}}" class="btn btn-success">Edit</a> &nbsp; 
						                	<a href="/admin/delete-post/{{$row['id']}}" onclick="return confirm('Are you sure you want to Delete');" class="btn btn-danger">Delete</a>
						                </td>
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