<section>
	  <div class="container col-xl-10 col-xxl-8 px-4 py-5">
		<div class="row align-items-center g-lg-5 py-5">
		  <div class="col-lg-7 text-center text-lg-start">
			<h1 class="display-4 fw-bold lh-1 mb-3">Vertically centered hero sign-up form</h1>
			<p class="col-lg-10 fs-4">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
		  </div>
		  <div class="col-md-10 mx-auto col-lg-5">
			<form class="p-4 p-md-5 border rounded-3 bg-light" method="post" action="<?php echo BASE_URL."user_login_page_controller_class/login_authention_function"; ?>">
			  <div class="form-floating mb-3">
				<input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
				<label for="floatingInput">Email address</label>
			  </div>
			  <div class="form-floating mb-3">
				<input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
				<label for="floatingPassword">Password</label>
			  </div>
			  <div class="checkbox mb-3">
				<label>
				  <input type="checkbox" value="remember-me"> Remember me
				</label>
			  </div>
<?php
 if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
     foreach($msg as $key => $value){
        echo "<i style='color:red;'>".$value."<i>";
     }
 }
?>
			  <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
			  <hr class="my-4">
				<button class="btn"><a href="">Sign Up</a></button>
				<button class="btn"><a href="<?php echo BASE_URL.'user_login_page_controller_class/forget_password_method'; ?>">Forget Password</a></button>
			</form>
		  </div>
		</div>
  	</div>
</section>