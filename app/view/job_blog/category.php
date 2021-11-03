<!DOCTYPE html>
<html lang="en"> 
<head>
    <title><?php echo $title; ?></title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="app/view/job_blog/favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js" integrity="sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="app/view/job_blog/assets/plugins/fontawesome.css">
    <!-- Theme CSS --> 
	
    <link id="theme-style" rel="stylesheet" href="app/view/job_blog/assets/css/theme-2.css">
	<link id="theme-style" rel="stylesheet" href="app/view/job_blog/assets/css/own.css">
</head> 

<body>
    
    <header class="header text-center">	    
	    <h1 class="blog-name pt-lg-4 mb-0"><a href="index.html"><?php echo "Total ".$pagenation." Post"; ?></a></h1>
        
	    <nav class="navbar navbar-expand-lg navbar-dark" >
           
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column" >
				<div class="profile-section pt-3 pt-lg-0">
				    <img style="width:134px; height:130px; background-color:white; box-shadow: 1px 1px 2px black,0px 0px 25px green,0px 0px 7px blue;" class="profile-image mb-3 rounded-circle mx-auto" src="app/view/admin/upload/cat_icon/<?php echo $cat_icon; ?>" alt="image" >			
					
					<div class="bio mb-3">Hi, my name is Anthony Doe. Briefly introduce yourself here. You can also provide a link to the about page.<br><a href="about.html">Find out more about me</a></div><!--//bio-->
					<ul class="social-list list-inline py-3 mx-auto">
			            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
			        </ul><!--//social-list-->
			        <hr> 
				</div><!--//profile-section-->
				
				<ul class="navbar-nav flex-column text-left">
					<li class="nav-item">
					    <a class="nav-link" href="<?php echo BASE_URL."job_blog_cntr"?>"><i class="fas fa-home fa-fw mr-2"></i>Home <span class="sr-only">(current)</span></a>
					</li>
<?php
if(cookie::get('login') == 0){
?>
					
					<li class="nav-item">
					    <a class="nav-link" href="<?php echo BASE_URL."user_login_page_controller_class/"?>"><i class="fas fa-tree fa-fw mr-2"></i>Signin</a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="<?php echo BASE_URL."user_login_page_controller_class/signup_page_function"?>"><i class="fas fa-car fa-fw mr-2"></i>Signup</a>
					</li>
<?php
}
?>
					<li class="nav-item">
					    <a class="nav-link" href="<?php echo BASE_URL.'job_blog_cntr/blog_cal_controller_class/'; ?>"><i class="fas fa-blog mr-2"></i>Blog</a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="<?php echo BASE_URL.'job_blog_cntr/public_result_page_function/'; ?>"><i class="fas fa-fan mr-2"></i>Week Result</a>
					</li>			
					<li class="nav-item">
					    <a class="nav-link" href="<?php echo BASE_URL.'job_blog_cntr/pre_exam_page_function/'; ?>"><i class="fas fa-laptop mr-2"></i>Exam</a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="<?php echo BASE_URL.'job_blog_cntr/about_method'; ?>"><i class="fas fa-user fa-fw mr-2"></i>About</a>
					</li>
				</ul>
			</div>
		</nav>
    </header>
    
    <div class="main-wrapper">
	    <section class="cta-section theme-bg-light py-5">
		    <div class="container text-center">
			    <h2 class="heading">Bangladesh Govment Job Post</h2>
			    <div class="intro">Welcome to my blog. Subscribe and get my latest job post in your inbox.</div>
				
			    <form class="signup-form form-inline justify-content-center pt-3" action="<?php echo BASE_URL."job_blog_cntr/job_search_method";?>" method="post">
                    <div class="form-group">
                        <label class="sr-only" for="semail">Your email</label>
                        <input type="text" id="semail" name="keyword" class="form-control mr-md-1 semail" placeholder="Search Current Post Job.">
                    </div>
                    <button type="submit" class="btn btn-primary">Search</button>
				</form>
				
		    </div><!--//container-->
		</section>
	    <section class="blog-list px-3 py-5 p-md-5">
		    <div class="container">
			
			
<?php
if(isset($get_5_post_by_id)){
	foreach($get_5_post_by_id as $key => $value){
?>
			    <div class="item mb-5">
				    <div class="media">
					    <img style="background-color:white; box-shadow: 1px 1px 2px #f99191, 0px 0px 25px #a2cda2, 0px 0px 7px #aeaed3;" class="mr-3 img-fluid post-thumb d-none d-md-flex" src="app/view/admin/upload/img/<?php echo $value["icon"]; ?>" alt="image">
					    <div class="media-body">
						    <h3 class="title mb-1"><?php echo $value["title"]; ?></h3>
                            <div class="meta mb-1">
								<span class="date"><?php echo format::formatDate($value["date"]); ?></span><span class="date mr-2">
									<i class="fas fa-eye fa-fw mr-2"></i><?php echo $value["total_watch"]; ?>
								</span>
								<span class="date mr-2">
									<a href="<?php echo BASE_URL."job_blog_cntr/like_function/".$value['id']; ?>">
										<i class="fas fa-thumbs-up fa-fw mr-2"></i><?php echo $value["total_like"]; ?>
									</a>
								</span>
							</div>
<?php
if(empty($value["dedline"])){
    
}else{
    echo "<div><b style='color:red;'> Deadline:- ".$value["dedline"]."</b></div>";
}?>
                            
                            
						    <a class="more-link" href="<?php echo BASE_URL."job_blog_cntr/single_page_function/".$value['id']; ?>">View post &rarr;</a>
					    </div>
				    </div>
			    </div>
<?php
	}
}
?>					    





		<div class="">               
<?php
$item = 5;
$page = ceil($pagenation/$item);
$limit = $item*$page;
$cunt = isset($_GET['page']) ? $_GET['page'] : 1;	
echo "<nav class='blog-nav nav nav-justified my-5'>";			
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
	echo "<a class='nav-link-prev nav-item nav-link rounded-left' href='".BASE_URL."job_blog_cntr/category_post_function/&cat_id=".$cat_id."&page=".$prev."&start=".$prev_start."&item=".$item."'>Previous<i class='arrow-prev fas fa-long-arrow-alt-left'></i></a>";
}
if($next_start != $limit){
	echo "<a class='nav-link-next nav-item nav-link rounded-right' href='".BASE_URL."job_blog_cntr/category_post_function/&cat_id=".$cat_id."&page=".$next."&start=".$next_start."&item=".$item."'>Next<i class='arrow-next fas fa-long-arrow-alt-right'></i></a>";
} 
echo "</nav>"
			?> 	
				</div>
		    </div>
	    </section>
	    	    <section class="promo-section theme-bg-light py-5 text-center">
		    <div class="container">
			    <h2 class="title">Promo Section Heading</h2>
			    <p>You can use this section to promote your side projects etc. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                <figure class="promo-figure">
			        <a href="https://made4dev.com" target="_blank"><img class="img-fluid" src="app/view/job_blog/assets/images/promo-banner.jpg" alt="image"></a>
			    </figure>
		    </div><!--//container-->
	    </section><!--//promo-section-->
	    <footer class="footer text-center py-2 theme-bg-dark">
		   
	        <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can buy the commercial license via our website: themes.3rdwavemedia.com */-->
                <small class="copyright">Designed with <i class="fas fa-heart" style="color: #fb866a;"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
		   
	    </footer>
    
    </div><!--//main-wrapper-->
    
    
    
    
    <!-- *****CONFIGURE STYLE (REMOVE ON YOUR PRODUCTION SITE)****** -->  
    <div id="config-panel" class="config-panel d-none d-lg-block">
        <div class="panel-inner">
            <a id="config-trigger" class="config-trigger config-panel-hide text-center" href="#"><i class="fas fa-cog fa-spin mx-auto" data-fa-transform="down-6" ></i></a>
            <h5 class="panel-title">Choose Colour</h5>
            <ul id="color-options" class="list-inline mb-0">
                <li class="theme-1 active list-inline-item"><a data-style="app/view/job_blog/assets/css/theme-1.css" href="#"></a></li>
                <li class="theme-2  list-inline-item"><a data-style="app/view/job_blog/assets/css/theme-2.css" href="#"></a></li>
                <li class="theme-3  list-inline-item"><a data-style="app/view/job_blog/assets/css/theme-3.css" href="#"></a></li>
                <li class="theme-4  list-inline-item"><a data-style="app/view/job_blog/assets/css/theme-4.css" href="#"></a></li>
                <li class="theme-5  list-inline-item"><a data-style="app/view/job_blog/assets/css/theme-5.css" href="#"></a></li>
                <li class="theme-6  list-inline-item"><a data-style="app/view/job_blog/assets/css/theme-6.css" href="#"></a></li>
                <li class="theme-7  list-inline-item"><a data-style="app/view/job_blog/assets/css/theme-7.css" href="#"></a></li>
                <li class="theme-8  list-inline-item"><a data-style="app/view/job_blog/assets/css/theme-8.css" href="#"></a></li>
            </ul>
            <a id="config-close" class="close" href="#"><i class="fa fa-times-circle"></i></a>
        </div><!--//panel-inner-->
    </div><!--//configure-panel-->

    
       
    <!-- Javascript -->          
    <script src="app/view/job_blog/assets/plugins/jquery-3.3.1.min.js"></script>
    <script src="app/view/job_blog/assets/plugins/popper.min.js"></script> 
    <script src="app/view/job_blog/assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
	<script src="app/view/job_blog/assets/plugins/fontawesome.js"></script>
    <!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
    <script src="app/view/job_blog/assets/js/demo/style-switcher.js"></script>     
    

</body>
</html> 

