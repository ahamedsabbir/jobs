<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="app/view/admin_login/css/style.css" media="screen" />
</head>
    <body>
        <div class="container">
            <section id="content">
                <form action="<?php echo BASE_URL; ?>admin_xml_login_controller_class/login_authention_function" method="post">
                   <h1>Admin Login</h1>
                   <div>
                        <input type="text" placeholder="username" required="" name="email"/>
                    </div>
                    <div>
                        <input type="password" placeholder="password" required="" name="password"/>
                    </div>
                    <div>
                        <input type="submit" value="Login" name="login"/>
                    </div>
		          </form>
		          <div class="button">
                    <a  href="<?php echo BASE_URL."admin_xml_login_controller_class/forget_password_function";?>">Forget Password</a>
                    <a href="<?php echo BASE_URL."admin_xml_login_controller_class/signup_function";?>">sign up</a>
                </div>
            </section>
        </div>
    </body>
</html>