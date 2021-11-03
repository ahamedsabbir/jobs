<?php
class session{ 
    public function __construct(){}
    public static function init(){
        session_start();
    }
    public static function set($key,$value){
        $_SESSION[$key] = $value;
    }
    public static function get($key){
        if(isset($_SESSION[$key])){
            return $_SESSION[$key];
        }else{
            return false;
        }
    }
    public static function checkSession(){
        self::init();
        if(self::get("login") == false){
            self::destroy();
        }
    }
    public static function checkLogin(){
        self::init();
        if(self::get("login") == true){
            header("Location:?url=AdminController");
        }
    }
	public static function id(){
       //self::init();
		return session_id();
    }
    public static function destroy(){
        session_destroy();
        header("Location:".BASE_URL."admin_login_page_controller_class");
    }
}
?>