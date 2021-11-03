<div class="py-1">
    <div class="container">
<?php
$item = LOOP_ITEM;
$page_link = "user_loop_controller_class/for_admin_loop_page_function/";
$page = ceil($prev_next_pagination/$item);
$limit = $item*$page;
$cunt = isset($_GET['page']) ? $_GET['page'] : 1;	
echo "<ul class='pagination'>";			
if($cunt == 1){
	$prev_start = 0;
}else{
	$prev_start = ($cunt-2)*$item;
}			
if($cunt == 1){
	$next_start = $item;
}else{
	$next_start = $cunt*$item;
}
$prev = $cunt-1;
$next = $cunt+1;			
if($cunt != 1){
?>
		<li class='page-item'>
			<a class='page-link' href="<?php echo BASE_URL.$page_link.'&page='.$prev.'&start='.$prev_start; ?>">
			<i class='arrow-prev fas fa-long-arrow-alt-left'></i>
			</a>
		</li>
<?php
}
if($next_start != $limit){
?>

		<li class='page-item'>
			<a class='page-link' href="<?php echo BASE_URL.$page_link.'&page='.$next.'&start='.$next_start; ?>">
			<i class='arrow-next fas fa-long-arrow-alt-right'></i>
			</a>
		</li>

		
<?php		
} 
echo "</ul>"
?> 	
      
    </div>   
</div> 