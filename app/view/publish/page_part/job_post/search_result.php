<article class="jobpost">
    <div class="container">
        <div class="text-center"><h1>Search Job</h1><hr></div><br>
        <div class="row" bis_skin_checked="1">
<?php
if(isset($send_all_post)){
    foreach($send_all_post as $key => $value){
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
                            <a href="#"> View Post>></a></p>
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