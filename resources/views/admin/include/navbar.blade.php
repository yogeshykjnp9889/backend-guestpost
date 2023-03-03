<header>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <div class="container-fluid">
		    <a class="navbar-brand" href="{{url('/admin/dashboard')}}">Travel Fly</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarNavDropdown">
		      <ul class="navbar-nav">
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="{{url('admin/dashboard')}}">Dashboard</a>
		        </li>
		        <li class="nav-item dropdown">
		          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		            Category
		          </a>
		          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		            <li><a class="dropdown-item" href="/admin/add-category">Add Category</a></li>
		            <li><a class="dropdown-item" href="#">List Category</a></li>
		          </ul>
		        </li>
		        <li class="nav-item dropdown">
		          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		            Post
		          </a>
		          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		            <li><a class="dropdown-item" href="/admin/add-post">Add Post</a></li>
		            <li><a class="dropdown-item" href="/admin/post-list">List Post</a></li>
		          </ul>
		        </li>
		        <li class="nav-item dropdown">
		          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		            Profile
		          </a>
		          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		            <li><a class="dropdown-item" href="/admin/profile">Setting</a></li>
		            <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
		          </ul>
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>
	</div>
</header>