<section class="category">
    <div class="container">
        <div class="text-center"><h1>Job Category</h1><hr></div>
        <div class="row">
<?php
 if(isset($get_category)){
    foreach($get_category as $key => $value){
        echo "<div class='thumbnail categorythum col-md-3 text-center'><a href=".BASE_URL."publish_job_page_controller_class/job_category_post_page_function/".$value['id']."><h4>".$value['job_cat_name']."</h4></a></div>";
    }
}else{
    echo "no data";
}
?>
        </div>
    </div>
</section>
    