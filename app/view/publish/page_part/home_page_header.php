<header>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light">
		  <div class="container-fluid">
			<a class="navbar-brand" href="#"><img class="logo" src="uploads/logo.png"/ alt="Logo"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
				  <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL."publish_home_page_controller_class"; ?>">Home</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL."admin_home_page_controller_class"?>"><i>Admin Panal</i></a>
				</li>
				<li class="nav-item dropdown">
				  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					Dropdown
				  </a>
				  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
					<li><a class="dropdown-item" href="#">Action</a></li>
					<li><a class="dropdown-item" href="#">Another action</a></li>
					<li><hr class="dropdown-divider"></li>
					<li><a class="dropdown-item" href="#">Something else here</a></li>
				  </ul>
				</li>
<?php
if(cookie::get('login') == 1){				  
?>
<li class="nav-item">
  <a class="nav-link" href="<?php echo BASE_URL."user_login_page_controller_class/logOut_method"; ?>">Log out</a>
</li>
<?php
}
?>
			  </ul>
				<div class="nav-item dropdown">
				  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					<img src="uploads/admin_img/sss300x300.jpg" class="profileimg"/>
				  </a>
				  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
					<li><a class="dropdown-item" href="<?php ?>">Profile</a></li>
					<li><a class="dropdown-item" href="#">Another action</a></li>
					<li><hr class="dropdown-divider"></li>
					<li><a class="dropdown-item" href="<?php  ?>">LogOut</a></li>
				  </ul>
				</div>
			</div>
		  </div>
		</nav>
	</div>

