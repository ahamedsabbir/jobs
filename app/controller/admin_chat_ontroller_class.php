<?php
class admin_chat_ontroller_class extends main_controller_class{
	
	public function __construct(){
		parent::__construct();
        session::checkSession();
	} 
	
	public function main_page_function(){
	$xml['reply'] = simplexml_load_file("app/view/admin/chat/data.xml");
	$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_head");
	$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_header");
	$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_side_nav");
	$this->page_model_validation_object_array->page_load_function("admin/page_part/chat", $xml);
	$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_footer");
	}
	
	public function reply_chat_function(){
		$xml = simplexml_load_file("app/view/admin/chat/data.xml");
		$date = date('F j, Y, g:i a');
		$name = session::get('name');
		$text = $_POST['text'];
		$chat = $xml->addChild("chat");
    	$chat->addAttribute('id',$date);
    	$chat->addChild("name",$name);		
    	$chat->addChild("text",$text);		
		file_put_contents("app/view/admin/chat/data.xml", $xml->asXML());
		header("location:".BASE_URL."admin_chat_ontroller_class/");
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}
?>