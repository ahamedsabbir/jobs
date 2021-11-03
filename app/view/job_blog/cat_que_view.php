<!DOCTYPE html>
<html lang="en"> 
<head>
    <title><?php //echo $title; ?></title>
    
    <!-- Meta -->
    <meta charset="utf-8">
	<meta http-equiv="refresh" content="2400">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="app/view/job_blog/favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js" integrity="sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="app/view/job_blog/assets/plugins/fontawesome.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">  

    <!-- Theme CSS --> 
	
    <link id="theme-style" rel="stylesheet" href="app/view/job_blog/assets/css/theme-2.css">
	<link id="theme-style" rel="stylesheet" href="app/view/job_blog/assets/css/own.css">
    
</head> 

<body onload=display_ct();>
    
    <header class="header text-center">	

	    <h1 class="blog-name pt-lg-4 mb-0">Exam Time</h1>
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
	
	echo '<div class="bio"><h6>'.ucwords(cookie::get('name')).'</h6>you can live any time form here.<br><a class="btn" href="'.BASE_URL.'user_login_page_controller_class/profile_page_function">Profile </a><a class="btn" href='.BASE_URL.'user_login_page_controller_class/logOut_method> Logout</a></div>';
	
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
    
    <div class="main-wrapper"  style="background:#FAFAFA;">
	    <section class="cta-section theme-bg-light py-5">
		    <div class="container text-center">
			    <h2 class="heading">Preparetion For Exam</h2>
<?php				
if(cookie::get('login') == 0){
?>
			    <div class="intro">It Is must<a href="<?php echo BASE_URL."user_login_page_controller_class/"; ?>"> Signin </a>For Exam.</div>
<?php
}
?>
				</div><!--//container-->
		</section>
		<section class="py-4">
			<div class="container">
<table id="table_id" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
    <thead>
        <tr>
			<th>SN</th>
            <th>Question</th>
			<th>Answer</th>
        </tr>
    </thead>
    <tbody>
				
<?php
$i=1;
foreach($show_by_dep as $key => $value){
    if($value["right_ans"] == 1){
?>		
			<tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $value['question']; ?></td>
                <td><?php echo $value['answer']; ?></td>
            </tr>
<?php
    }
}								
?>
    </tbody>
</table>		

		
		
		
		
		
		
		
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
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
<script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>	    
</body>
</html> 

