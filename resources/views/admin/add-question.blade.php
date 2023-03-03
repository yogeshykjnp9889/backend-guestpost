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
				<div class="col-lg-12">
					<div class="alert alert-success">
						<span>Add post successfully</span>
					</div>
				</div>
				
			</div>
			<div class="row d-flex justify-content-center">
				<div class="col-lg-8 border rounded">
					<form method="post" enctype="multipart/form-data">
						@csrf
						<div class="addsuccess">
							@if(!empty($question))
								@php
									$questionAns = unserialize($question->question_ans);
								@endphp
								@foreach($questionAns as $answer)
								<div class="clonequestion border p-3 mb-2 mt-2" id="clonesection">
									<span class="close-remove btn btn-danger">X</span>
									<div class="">
										<div class="mb-2">
											<label>Question</label>
											<input type="text" value="{{$answer['question']}}" class="form-control" name="question[]" placeholder="Enter Question...">
										</div>
										<div class="mb-2">
											<label>Answer</label>
											<textarea class="form-control" name="answer[]" placeholder="Enter Answer...">{{$answer['answer']}}</textarea>
										</div>	
									</div>
								</div>
								@endforeach
							@else
							<div class="clonequestion border p-3 mb-2 mt-2" id="clonesection">
								<span class="close-remove btn btn-danger">X</span>
								<div class="">
									<div class="mb-2">
										<label>Question</label>
										<input type="text" class="form-control" name="question[]" placeholder="Enter Question...">
									</div>
									<div class="mb-2">
										<label>Answer</label>
										<textarea class="form-control" name="answer[]" placeholder="Enter Answer..."></textarea>
									</div>	
								</div>
							</div>
							@endif
						</div>
						<div class="mb-3">
							<a href="#"  class="btn btn-info addmore">+ Add More </a>
						</div>
						<div class="mb-2">
							<input type="submit" class="btn btn-success" name="submit" >
						</div>
					</form>
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

        .clonequestion:first-child > span {
        	display: none;
        }

	</style>
	@include("admin/include/footerscript")
	<script type="text/javascript">
		$(document).ready(function(){
			$(".addmore").click(function(e){
				e.preventDefault();
				var clone = $("#clonesection").clone().find("input:text, textarea").val("").end();
				$(".addsuccess").append(clone);
			});

			$("body").on("click", ".close-remove", function(e){
				e.preventDefault();
				$(this).parent().remove();
			});


		});
	</script>
</body>
</html>