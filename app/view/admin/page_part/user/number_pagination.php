<div class="py-1">
    <div class="container">
<?php
$item = LOOP_ITEM;
$page_link = "user_loop_controller_class/user_loop_page_function/";
$limites = $item-1;
$page = ceil($number_pagination/$item);
$cunt = isset($_GET['page']) ? $_GET['page'] : 1;					
switch($cunt){
    case 1:
    $limit = $cunt+$limites;
    break;
    case 2:
   	$cunt = $cunt-1;
	$limit = $cunt+$limites;
    break;
    case $page:
   	$cunt = $cunt-2;
	$limit = $cunt+$limites;
    break;
    default:
   	$cunt = $cunt-2;
	$limit = $cunt+$limites;
}
echo "<i style='color:green'>Total Item:- ".$number_pagination."</i>";
echo "<ul class='pagination'>";
if($number_pagination != 0){
	echo "<li class='page-item'><a class='page-link' href='".BASE_URL.$page_link."&page=1&start=0'>First</a></li>";
}
if($page >= $cunt){
	for($i=$cunt;$i<=$limit;$i++){
		if(isset($i)){
		   $start=($i*$item)-$item;
		}else{
		   $start=0;
		}	
		echo "<li class='page-item'><a class='page-link' href='".BASE_URL.$page_link."&page=".$i."&start=".$start."'>".$i."</a></li>";
		if($i == $page){
			break;
		}
	}   
}
if($number_pagination != 0){
	echo "<li class='page-item'><a class='page-link' href='".BASE_URL.$page_link."&page=".$page."&start=".$start."'>last</a></li>"; 
}
 
echo "</ul>"
?>
      
    </div>   
</div> 