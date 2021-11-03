<meta http-equiv="refresh" content="30">
<style>
	.chatbox{
		padding:5px 5px;
		height: 300px;
		border:3px solid black;
		overflow:auto; 
		display:flex; 
		flex-direction:column-reverse;
	}
	.chatbox ul{list-style: none; color:green; padding-left: 0px; padding-right: 0px;}
	.chatbox ul il{display: block; border-bottom:1px dashed #ddd; margin-bottom:50px; padding-bottom:5px;}
	.chatbox ul il:last-child{display: block; border-bottom:0px dashed #ddd; margin-bottom:0px; padding-bottom:0px;}
	.chatbox b{color:green; font-style: normal;}
	.chatbox p{color:black; font-style: italic;}
</style>
<section class="py-5">
	 <div class="container">
		 <div class="chatbox">
		 	 <ul>
<?php	
foreach($reply->chat as $chat){
	if($chat->name == session::get('name')){
		$reply_class = "text-end";
	}else{
		$reply_class = "text-start";
	}
    echo "<li id='{$chat['id']}' class='".$reply_class."'><b> {$chat->name} </b> <p>{$chat->text} </p></li>";
}			 				 
?>
			 </ul>
		 </div>
		<form class="form-inline" role="form" action="<?php echo BASE_URL.'admin_chat_ontroller_class/reply_chat_function'; ?>" method="post">
			<div class="form-group py-2">
			  <input type="text" class="form-control" id="text" name="text">
			</div>
			<button type="submit" class="btn btn-default">Reply</button>
		</form>	 
	 </div>  
</section> 