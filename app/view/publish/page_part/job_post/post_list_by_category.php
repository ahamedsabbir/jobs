<article class="jobpost">
    <div class="container">
        <div class="text-center"><h1>Job List</h1><hr></div><br>
        <div class="row" bis_skin_checked="1">
<?php
if(isset($job_view)){
    foreach($job_view as $key => $value){
?>
            <div class="thumbnail col-md-12">
                <div class="jobpostth">
                    <div class="listimg">
                        <img src="uploads/<?php echo $value['job_icon']; ?>" alt=""/>
                    </div>
                    <div class="listcontent">
                        <h3><?php echo $value['post_title']; ?></h3>
                        <p>
<?php
 $content = $value['post_content']; 
if(strlen($content) > 30){
    echo substr($content, 0, 200);
}       
?>
                            <a href="<?php echo BASE_URL."publish_job_page_controller_class/job_view_page_function/".$value['id'];?>"> View Post>></a></p>
                    </div>
                </div>
            </div>               
<?php        
    }
}else{
     
}

?>            
        </div>
        </div>
</article>