<section>
    <div class="container">
        <div class="">               
<?php
//if(!isset($_GET['onik'])){
	//$currentPageUrl = 'http://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
	//header("Refresh: 0;".$currentPageUrl."&onik=t");
//}
$item = 5;
$page = ceil($pagenation/$item);
$limit = $item*$page;
$cunt = isset($_GET['page']) ? $_GET['page'] : 1;	
echo "<i style='color:green'>Total Item:- ".$pagenation."</i>";
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
	echo "<li class='page-item'><a class='page-link' href='".BASE_URL."admin_category_controller_class/&page=".$prev."&start=".$prev_start."&item=".$item."'><i class='fas fa-angle-double-left'></i></a></li>";
}
if($next_start != $limit){
	echo "<li class='page-item'><a class='page-link' href='".BASE_URL."admin_category_controller_class/&page=".$next."&start=".$next_start."&item=".$item."'><i class='fas fa-angle-double-right'></i></a></li>";
}
	
			
			
			

  
echo "</ul>"
?>              
        </div>
    </div>
</section>