<?php
/*
*Cash clear
*/
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache"); 
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
header("Cache-Control: max-age=2592000");
/*
*main path
*/
define("BASE_URL", "index.php?url=");
define("BASE_PATH", "app/view/");
/*
*database conncetion
*/
$database = simplexml_load_file("system/database.xml");
foreach($database->database as $database){
	define("DB_NAME", "{$database->db_name};charset=utf8");
	define("DB_HOST", "{$database->db_host}");
	define("DB_USER", "{$database->db_user}");
	define("DB_PASSWORD", "{$database->db_password}");
}
/*
*Page Info
*/
define("TITLE", "Blog Site");
define("DESCRIPTION", "sabbir Blog Site. ");
define("KEYWORDS", "Blog Site, java tutorial, css tutorial, php tutorial, ");
define("AUTHOR", "Israt Ahamed Sabbir");
/*
*Set Home page
*/
define("HOME_PAGE", "job_blog_cntr");
define("LOOP_ITEM", 5);
/*
*Upload function
*/
define('UPLOAD', BASE_URL."admin_job_controller_class/blog_image_upload_method/");
?>