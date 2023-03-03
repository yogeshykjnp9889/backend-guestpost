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
						<h3 class="text-center">Add Post</h3>
						<div>
							<a href="/admin/post-list" class="btn btn-primary flex-fill">View Post</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				
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
			<div class="row d-flex justify-content-center">
				<div class="col-lg-8 border rounded">
					@if(empty($postData))
					<form method="post" enctype="multipart/form-data">
						@csrf
						<div class="mb-2">
							<label>Post name</label>
							<input type="text" class="form-control" name="name" placeholder="Name">
						</div>
						<div class="mb-2">
							<label>Post slug</label>
							<input type="text" class="form-control" name="slug" placeholder="Slug">
						</div>
						<div class="mb-2">
							<label>Short Description</label>
							<textarea name="short_desc" rows="4" class="form-control" placeholder="Short Description"></textarea>
						</div>
						<div class="mb-2">
							<label>Meta Title</label>
							<input type="text" class="form-control" name="meta_title" placeholder="Meta Title">
						</div>
						<div class="mb-2">
							<label>Meta Description</label>
							<textarea type="text" class="form-control" name="meta_desc" placeholder="Description"></textarea>
						</div>
						<div class="mb-2">
							<label>Category</label>
							<select class="form-control" name="cate_id">
								<option value="">Select Category</option>
								@if(!empty($category))
								@foreach($category as $row)
									<option value="{{$row['id']}}">{{$row['name']}}</option>
								@endforeach
								@endif
							</select>
						</div>
						<div class="mb-2">
							<label>Image Alt (Enter image alt attribution text)</label>
							<input type="text" class="form-control" name="image_alt">
						</div>
						<div class="mb-2">
							<label>Upload Image</label>
							<input type="file" class="form-control" name="post_image">
						</div>
						<div class="mb-2">
							<textarea id="editor" name="long_desc"></textarea>
						</div>
						<div class="mb-2">
							<input type="submit" class="btn btn-success" name="submit" >
						</div>
					</form>
					@else
					<form method="post" enctype="multipart/form-data">
						@csrf
						<div class="mb-2">
							<label>Post name</label>
							<input type="text" class="form-control" value="{{$postData['name']}}" name="name" placeholder="Name">
						</div>
						<div class="mb-2">
							<label>Post slug</label>
							<input type="text" class="form-control" value="{{$postData['slug']}}" name="slug" placeholder="Slug">
						</div>
						<div class="mb-2">
							<label>Short Description</label>
							<textarea name="short_desc" class="form-control" placeholder="Short Description" rows="5">{{$postData['short_desc']}}</textarea>
						</div>
						<div class="mb-2">
							<label>Meta Title</label>
							<input type="text" class="form-control" value="{{$postData['meta_title']}}" name="meta_title" placeholder="Meta Title">
						</div>
						<div class="mb-2">
							<label>Meta Description</label>
							<textarea type="text" class="form-control"  name="meta_desc" placeholder="Description">{{$postData['meta_desc']}}</textarea>
						</div>
						<div class="mb-2">
							<label>Category</label>
							<select class="form-control" name="cate_id">
								<option value="">Select Category</option>
								@if(!empty($category))
									@foreach($category as $row)
										<option value="{{$row['id']}}" <?php echo ($postData['cate_id']==$row['id'])? "selected":""; ?> >{{$row['name']}}</option>
									@endforeach
								@endif
							</select>
						</div>
						<div class="mb-2">
							<label>Image Alt (Enter image alt attribution text)</label>
							<input type="text" class="form-control" value="{{$postData['image_alt']}}" name="image_alt">
						</div>
						<div class="mb-2">
							<label>Upload Image</label>
							<img src="{{asset('post_image').'/'.$postData['post_image']}}" alt="" width="100px">
							<input type="file" class="form-control" name="post_image">
						</div>
						<div class="mb-2">
							<textarea id="editor" name="long_desc">{{$postData['long_desc']}}</textarea>
						</div>
						<div class="mb-2">
							<input type="submit" class="btn btn-success" name="update" >
						</div>
					</form>
					@endif
				</div>
			</div>
		</div>
	</section>
	<style type="text/css">
		.ck-editor__editable[role="textbox"] {
            /* editing area */
            min-height: 200px;
        }
        .ck-content .image {
            /* block images */
            max-width: 80%;
            margin: 20px auto;
        }
	</style>
	@include("admin/include/footerscript")
	<script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
		    $('#example').DataTable();
			CKEDITOR.replace( 'editor' );
		    // var data = ClassicEditor.create( document.querySelector( '#editor' ),{
			// 	link: {
            // 	// Automatically add target="_blank" and rel="noopener noreferrer" to all external links.
            // 	addTargetToExternalLinks: true,

            // 	// Let the users control the "download" attribute of each link.
			// 		decorators: [
			// 			{
			// 				mode: 'manual',
			// 				label: 'Downloadable',
			// 				attributes: {
			// 					download: 'download'
			// 				}
			// 			}
			// 		]
			// 	}
			// } )
	        // .catch( error => {
	        //     console.error( error );
	        // } );


	        // $('input[name=long_desc]').val(data);


	        function convertToSlug(Text) {
			  return Text.toLowerCase()
			             .replace(/ /g, '-')
			             .replace(/[^\w-]+/g, '');
			}

			$("input[name='name']").keyup(function(){
				$("input[name='slug']").val(convertToSlug($(this).val()));
				console.log(value);
			})

		});

	</script>
</body>
</html>