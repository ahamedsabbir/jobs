<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Signin Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="app/view/user_login/css/bootstrap.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="app/view/user_login/css/style.css" rel="stylesheet">
    <link href="app/view/user_login/css/style.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form method="post" action="<?php echo BASE_URL."user_login_page_controller_class/send_password_method"; ?>">
    <h1 class="h3 mb-3 fw-normal">Enter Valid Email</h1>
<?php
 if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
     foreach($msg as $key => $value){
        echo "<i style='color:red;'>".$value."<i>";
     }
 }
?>
    <div class="form-floating mb-3">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <button class="w-100 btn btn-lg btn-primary" type="submit">Send Email</button>
    </div>
  </form>
		<a href="<?php echo BASE_URL."user_login_page_controller_class/"; ?>" class="btn">SignIn </a>
		<a href="<?php echo BASE_URL."user_login_page_controller_class/signup_page_function"; ?>" class="btn">SignUp </a>
</main> 
  </body>
</html>
