<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Bootstrap 4 Blog Template For Developers</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js" integrity="sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="app/view/job_blog/assets/plugins/fontawesome.css">
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="app/view/job_blog/assets/css/theme-1.css">
    <link id="theme-style" rel="stylesheet" href="app/view/job_blog/assets/css/own.css">

</head> 

<body>
    
    <header class="header text-center">	
		<h1 class="blog-name pt-lg-4 mb-0"><?php echo ucwords(cookie::get('name')); ?></h1>
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
?>	
					<div class="bio mb-3">
						<form role="form" action="<?php echo BASE_URL.'user_login_page_controller_class/image_update_method/'; ?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<level for="fileupload">
									<input type="file" class="form-control-file" id="fileupload" name="image">
								</level>	
							</div>
								<button type="submit" class="btn btn-defult">Photo Update</button>   
						</form>
					</div>
<?php	
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
if(cookie::get('status') == 1){
?>
					
					<li class="nav-item">
					    <a class="nav-link" href="<?php echo BASE_URL."admin_home_page_controller_class"?>"><i class="fas fa-car fa-fw mr-2"></i>Admin </a>
					</li>
<?php
}
?>
					
					
					
					
					

					<li class="nav-item">
					    <a class="nav-link" href="<?php echo BASE_URL.'job_blog_cntr/blog_cal_controller_class/'; ?>"><i class="fas fa-blog mr-2"></i>Blog </a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="<?php echo BASE_URL.'job_blog_cntr/public_result_page_function/'; ?>"><i class="fas fa-fan mr-2"></i>Week Result </a>
					</li>			
					<li class="nav-item">
					    <a class="nav-link" href="<?php echo BASE_URL.'job_blog_cntr/pre_exam_page_function/'; ?>"><i class="fas fa-laptop mr-2"></i>Exam </a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="<?php echo BASE_URL.'job_blog_cntr/about_method'; ?>"><i class="fas fa-user fa-fw mr-2"></i>About </a>
					</li>
				</ul>
				</div>
		</nav>
    </header>
    
    <div class="main-wrapper">
	    	    
	    <article class="about-section py-5">
		    <div class="container">
			    <h2 class="title mb-3">Profile</h2>

<?php
if(isset($profile_info)){
	foreach($profile_info as $info_key => $info_value){
?>
		<form class="form-horizontal" role="form" action="<?php echo BASE_URL.'user_login_page_controller_class/info_update_method/'; ?>" method="post">
		  <div class="form-group">
			<label class="control-label col-sm-2" for="email">Email:</label>
			<div class="col-sm-10">
			  <input type="email" class="form-control" id="email" placeholder="<?php echo $info_value['email']; ?>" style="background:#B93D00;">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="mobile">Mobile:</label>
			<div class="col-sm-10">
			  <input type="number" class="form-control" id="mobile" placeholder="<?php echo $info_value['mobile']; ?>" value="0<?php echo $info_value['mobile']; ?>" name="mobile">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="name">Name:</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" id="name" placeholder="<?php echo $info_value['name']; ?>" value="<?php echo $info_value['name']; ?>" name="name">
			</div>
		  </div>
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-default">Update</button>
			</div>
		  </div>
		</form>							
<?php
	}
}
?>						
			    
			   
		    </div>
	    </article><!--//about-section-->
		<section class="about-section py-5">
		    <div class="container">
				<h2 class="title mb-3">Result Table</h2>
				<table class="table">
					<tr>
						<th>SN</th>
						<th>Date</th>
						<th>Mark</th>
						<th>Total</th>
					</tr>
<?php
$i = 1;
if(isset($mark_view)){
	foreach($mark_view as $key => $value){					
?>
					
					<tr>
						<td><?php echo $i++; ?></td>
						<td><?php echo format::formatDate($value['date']); ?></td>
						<td><?php echo $value['total_mark']; ?></td>
						<td>50</td>
					</tr>
<?php
	}
}
		
?>
				</table>
				
				
				
			</div>
		</section>
		
		
		
		
		
		
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

