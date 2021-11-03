<section id="mySidenav" class="sidenav">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><span class="closestyle">&times;</span></a>
	  <div class="flex-shrink-0 p-3 bg-white">
		<a href="#" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
		  <span class="fs-5 fw-semibold"><i class="fas fa-th"></i> Menu</span>
		</a>
		<ul class="list-unstyled ps-0">
			<li class="mb-1">
			<button class="mb-1 btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#user-collapse" aria-expanded="false">User Control</button>
			<div class="collapse" id="user-collapse">
			  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
				<li><a href="<?php echo BASE_URL."user_login_page_controller_class/xml_data_show_method"?>" class="link-dark rounded">Approve</a></li>
				<li><a href="<?php echo BASE_URL."user_loop_controller_class/user_loop_page_function/"?>" class="link-dark rounded">User List For All</a></li>
				<li><a href="<?php echo BASE_URL."user_loop_controller_class/for_admin_loop_page_function/"?>" class="link-dark rounded">User List For Admin</a></li>
			  </ul>
			</div>
		  </li>
		  <li class="mb-1">
			<button class="mb-1 btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">Admin Control</button>
			<div class="collapse" id="home-collapse">
			  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
				<li><a href="#" class="link-dark rounded">Add Admin</a></li>
				<li><a href="#" class="link-dark rounded">Admin List</a></li>
				<li><a href="#" class="link-dark rounded">Status Assign</a></li>
			  </ul>
			</div>
		  </li>
		  <li class="mb-1">
			<button class="mb-1 btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">Post Category</button>
			<div class="collapse" id="dashboard-collapse">
			  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
				<li><a href="<?php echo BASE_URL."admin_category_controller_class/create_category_function"?>" class="link-dark rounded">Create New Category</a></li>
				<li><a href="<?php echo BASE_URL."admin_category_controller_class"?>" class="link-dark rounded">View Category</a></li>
			  </ul>
			</div>
		  </li>
		  <li class="mb-1">
			<button class="mb-1 btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
			  Orders
			</button>
			<div class="collapse" id="orders-collapse">
			  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
				<li><a href="#" class="link-dark rounded">New</a></li>
				<li><a href="#" class="link-dark rounded">Processed</a></li>
				<li><a href="#" class="link-dark rounded">Shipped</a></li>
				<li><a href="#" class="link-dark rounded">Returned</a></li>
			  </ul>
			</div>
		  </li>
		  	<li class="border-top my-3"></li>
			<li class="fs-5 my-3">Post Controller</li>
		  <li class="mb-1">
			<button class="mb-1 btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#job-collapse" aria-expanded="false">Job</button>
			<div class="collapse" id="job-collapse">
			  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
				<li><a href="<?php echo BASE_URL."admin_job_controller_class/create_job_post_function"?>" class="link-dark rounded">Create New Post</a></li>
				<li><a href="<?php echo BASE_URL."admin_job_controller_class"?>" class="link-dark rounded">Show All Post</a></li>
				<li><a href="#" class="link-dark rounded">Approve</a></li>
				<li><a href="#" class="link-dark rounded">Add Category</a></li>
				<li><a href="<?php echo BASE_URL."job_blog_cntr"?>" class="link-dark rounded">Visitor Look</a></li>
			  </ul>
			</div>
		  </li>
		  <li class="mb-1">
			<button class="mb-1 btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#suggestion-collapse" aria-expanded="false">Suggestion</button>
			<div class="collapse" id="suggestion-collapse">
			  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
				<li><a href="<?php echo BASE_URL."admin_suggestion_controller_class/create_suggestion_post_function"?>" class="link-dark rounded">Create New Post</a></li>
				<li><a href="<?php echo BASE_URL."admin_suggestion_controller_class"?>" class="link-dark rounded">Show All Post</a></li>
				<li><a href="#" class="link-dark rounded">Approve</a></li>
				<li><a href="#" class="link-dark rounded">Add Category</a></li>
			  </ul>
			</div>
		  </li>
		  <li class="mb-1">
			<button class="mb-1 btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#shop-collapse" aria-expanded="false">Online Shop</button>
			<div class="collapse" id="shop-collapse">
			  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
				<li><a href="<?php echo BASE_URL."admin_suggestion_controller_class/create_suggestion_post_function"?>" class="link-dark rounded">Create New Post</a></li>
				<li><a href="<?php echo BASE_URL."admin_suggestion_controller_class"?>" class="link-dark rounded">Show All Post</a></li>
				<li><a href="#" class="link-dark rounded">Approve</a></li>
				<li><a href="#" class="link-dark rounded">Add Category</a></li>
			  </ul>
			</div>
		  </li>
		  <li class="mb-1">
			<button class="mb-1 btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#exam-collapse" aria-expanded="false">Online Exam</button>
			<div class="collapse" id="exam-collapse">
			  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
				<li><a href="<?php echo BASE_URL."question_submit_without_login_controller_class/"?>" class="link-dark rounded">Create Question</a></li>
				<li><a href="<?php echo BASE_URL."admin_exam_controller_class"; ?>" class="link-dark rounded">Show All Post</a></li>
				<li><a href="#" class="link-dark rounded">Add Category</a></li>
				<li><a style="color:red;" href="<?php echo BASE_URL.'admin_exam_controller_class/delete_all_data_function/'; ?>" class="link-dark rounded">Friday Delete</a></li>
			  </ul>
			</div>
		  </li>
		  <li class="mb-1">
			<button class="mb-1 btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#advertisement-collapse" aria-expanded="false">Advertisement</button>
			<div class="collapse" id="advertisement-collapse">
			  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
				<li><a href="<?php echo BASE_URL."admin_suggestion_controller_class/create_suggestion_post_function"?>" class="link-dark rounded">Create New Post</a></li>
				<li><a href="<?php echo BASE_URL."admin_suggestion_controller_class"?>" class="link-dark rounded">Show All Post</a></li>
				<li><a href="#" class="link-dark rounded">Approve</a></li>
				<li><a href="#" class="link-dark rounded">Add Category</a></li>
			  </ul>
			</div>
		  </li>
		</ul>
	  </div>
</section> 
