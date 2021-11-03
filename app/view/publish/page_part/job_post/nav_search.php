<section class="searchoption">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav mr-auto"><span style="color:white;">Today : <?php echo date('d/m/Y');?></span></ul>
            <form class="form-inline" action="<?php echo BASE_URL."publish_job_page_controller_class/job_search_page_function"; ?>"  method="post">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search" name="keyword">
              <select class="form-control" type="search" name="job_cat_id">
<?php
 if(isset($get_search_category)){
    foreach($get_search_category as $key => $value){
        echo "<option value='{$value['id']}'>{$value['job_cat_name']}</option>";
    }
}else{
    echo "no data";
}
?>
              </select>
              <button class="btn btn-outline-success searchbtn" type="submit">Search</button>
            </form>
          </div>
        </nav>
    </div>
</section>