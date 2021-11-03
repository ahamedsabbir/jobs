<section>
    <div class="container">
        <div class="">               
<?php
$item = 10;
$limites = $item-1;
$page = ceil($pagenation/$item);
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
echo "<i style='color:green'>Total Item:- ".$pagenation."</i>";
echo "<ul class='pagination'>";
echo "<li class='page-item'><a class='page-link' href='".BASE_URL."publish_job_page_controller_class/job_view_page_function/".$post_id."/&page=1&start=0&item=".$item."'>First</a></li>";
if($page >= $cunt){
	for($i=$cunt;$i<=$limit;$i++){
		if(isset($i)){
		   $start=($i*$item)-$item;
		}else{
		   $start=0;
		}	
		echo "<li class='page-item'><a class='page-link' href='".BASE_URL."publish_job_page_controller_class/job_view_page_function/".$post_id."/&page=".$i."&start=".$start."&item=".$item."'>".$i."</a></li>";
		if($i == $page){
			break;
		}
	}   
}
echo "<li class='page-item'><a class='page-link' href='".BASE_URL."publish_job_page_controller_class/job_view_page_function/".$post_id."/&page=".$page."&start=".$start."&item=".$item."'>last</a></li>";  
echo "</ul>"
?>              
        </div>
    </div>
</section>