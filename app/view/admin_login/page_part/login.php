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
                <form action="<?php echo BASE_URL; ?>admin_login_page_controller_class/login_authention_function" method="post">
                    <h1>Admin Login</h1>
                    <div>
                        <input type="text" placeholder="username" required="" name="name"/>
                    </div>
                    <div>
                        <input type="password" placeholder="password" required="" name="password"/>
                    </div>
                    <div>
                        <input type="submit" value="Login" name="login"/>
                    </div>
				</form>
<?php
$database = simplexml_load_file("system/database.xml");
foreach($database->database as $database){
	if(empty($database->db_name) or empty($database->db_host) or empty($database->db_user) or empty($database->db_password)){
?>
		          <div class="button">
                    <a href="<?php echo BASE_URL."database_controller_class/before_update_page_function";?>">Database Setup</a>
                </div>
<?php
		}
}
?>
            </section>
        </div>
    </body>
</html>