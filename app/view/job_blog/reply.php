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
<?php
if(isset($single_post)){
	foreach($single_post as $key => $value){
?>
<body>
    
    <header class="header text-center">	    
	    <h1 class="blog-name pt-lg-4 mb-0">Week Result</h1>
        
	    <nav class="navbar navbar-expand-lg navbar-dark" >
           
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column" >
				<div class="profile-section pt-3 pt-lg-0">
<?php
if(cookie::get('login') == 1){
	echo '<img style="width:134px; height:130px; background-color:white; box-shadow: 1px 1px 2px black,0px 0px 25px green,0px 0px 7px blue;" class="profile-image mb-3 rounded-circle mx-auto" src="app/view/user_login/image/'.cookie::get('image').'" alt="image" >';

}else{
	echo '<img style="width:134px; height:130px; background-color:white; box-shadow: 1px 1px 2px black,0px 0px 25px green,0px 0px 7px blue;" class="profile-image mb-3 rounded-circle mx-auto" src="app/view/job_blog/assets/images/logo.png" alt="image" >';
}									
if(cookie::get('login') == 1){	
	
	echo '<div class="bio mb-3"><h6>'.ucwords(cookie::get('name')).'</h6>you can live any time form here.<br><a class="btn" href="'.BASE_URL.'user_login_page_controller_class/profile_page_function">Profile </a><a class="btn" href='.BASE_URL.'user_login_page_controller_class/logOut_method> Logout</a></div>';
	
}else{

	echo '<div class="bio mb-3">Hi, my name is Anthony Doe. Briefly introduce yourself here. You can also provide a link to the about page.<br><a href="about.html">Find out more about me</a></div>';

}
?>					
					
					
					
					
					
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

	    <article class="blog-post px-3 py-5 p-md-5">

			
			
			
		    <div class="container">
			    <header class="blog-post-header">
				    <h2 class="title mb-2"><?php echo format::textShorten($value["title"], 100);?></h2>
				    <div class="meta mb-1"><span class="date"><?php echo format::formatDate($value["date"]); ?></span></div>
			    </header>
			    
			    <div class="blog-post-body">
					<?php echo format::remove_tag($value["content"]);?> 
			    </div> 
		    </div><!--//container-->
	    </article>		
		
<?php
if(isset($_GET['msg'])){
?>
		<section>
			<div class="container">
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
					<strong>Alert </strong><?php echo $_GET['msg']; ?>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>
			</div>
		</section>
<?php
}
?>
		
		
<section>
  <div class="container">
	  <h2 class="text-center">Comment Reply</h2>
<?php
foreach($comment_view as $keys => $values){
?>
	  	<div class="row py-2">
			<div class="col-md-1">
				<img src="app/view/user_login/image/<?php echo $values['image']; ?>" style="width:65px; border-radius: 10%;"/>
			</div>
			<div class="col-md-11">
				<div><span style="font-size: small;"><?php echo format::formatDate($values['date']); ?></span></div>			
				<div><span style="font-size: small;"><?php echo $values['comment']; ?></span></div>
			</div>
		</div>  
	  
<?php
	$cat_id = $values['com_id'];
	if(isset($sub_comment_view)){
		foreach($sub_comment_view as $ke => $vl){
						
?>
					<div class="row py-2">
						<div class="col-md-1"></div>
						<div class="col-md-1">
							<img src="app/view/user_login/image/<?php echo $vl['image']; ?>" style="width:65px; border-radius: 10%;"/>
						</div>
						<div class="col-md-10">
							<div><span style="font-size: small;"><?php echo format::formatDate($vl['sub_date']); ?></span></div>
							<div><span style="font-size: small;"><?php echo $vl['sub_comment']; ?></span></div>	
						</div>
	  				</div>

						
						
<?php
		}	
	}
}
?>					
						<form id="" class="form py-3" action="<?php echo BASE_URL."job_blog_cntr/sub_comment_method";?>" method="post">
							<input class="d-none" type="text" name="post_id" value="<?php echo $values["post_id"]; ?>">
							<input class="d-none" type="text" name="user_id" value="<?php echo cookie::get("id"); ?>">
							<input class="d-none" type="text" name="com_id" value="<?php echo $values["com_id"]; ?>">
							<textarea name ="sub_comment" class="form-control"></textarea><br />
							<button type="submit" class="btn btn-primary" style="width:300px;">Reply</button>
						</form> 
		
	  
	</div>
</section>
	  
		
		
		
		
		
		
		
		
<section><!--//pagenation Section-->
    <div class="container">
        <div class="">               
<?php
$item = LOOP_ITEM*4;
$page_url = BASE_URL."job_blog_cntr/reply_page_method/".$post_id."/";
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
echo "<i style='color:green'>Total Comment:- ".$pagenation."</i>";
echo "<ul class='pagination'>";
if($pagenation != 0){											
echo "<li class='page-item'><a class='page-link' href='".$page_url."&page=1&start=0&&com_id=".$cat_id."'>First</a></li>";
}
	if($page >= $cunt){
	for($i=$cunt;$i<=$limit;$i++){
		if(isset($i)){
		   $start=($i*$item)-$item;
		}else{
		   $start=0;
		}	
		echo "<li class='page-item'><a class='page-link' href='".$page_url."&page=".$i."&start=".$start."&com_id=".$cat_id."'>".$i."</a></li>";
		if($i == $page){
			break;
		}
	}   
}
if($pagenation != 0){											
	echo "<li class='page-item'><a class='page-link' href='".$page_url."&page=".$page."&start=".$start."&com_id=".$cat_id."'>last</a></li>";  
}
echo "</ul>"
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
<?php
	}
}
?>
</html> 

