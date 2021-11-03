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
	    <h1 class="blog-name pt-lg-4 mb-0"><a href="index.html">Anthony's Blog</a></h1>
        
	    <nav class="navbar navbar-expand-lg navbar-dark" >
           
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column" >
				<div class="profile-section pt-3 pt-lg-0">
				    <img style="width:134px; height:130px; background-color:white; box-shadow: 1px 1px 2px black,0px 0px 25px green,0px 0px 7px blue;" class="profile-image mb-3 rounded-circle mx-auto" src="app/view/job_blog/assets/images/profile.jpg" alt="image" >			
					
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
					    <a class="nav-link" href="<?php echo BASE_URL."job_blog_cntr"?>"><i class="fas fa-home fa-fw mr-2"></i>Home<span class="sr-only">(current)</span></a>
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
				</ul>
			</div>
		</nav>
    </header>
    
    <div class="main-wrapper">
	    	    
	    <article class="about-section py-5">
		    <div class="container">
			    <h2 class="title mb-3">About Me</h2>
			    
			    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. </p>
			    <figure><img class="img-fluid" src="assets/images/about-me.jpg" alt="image"></figure>
			    <h5 class="mt-5">About The Blog</h5>
			    <p>Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus.</p>
			    <h5 class="mt-5">My Skills and Experiences</h5>
			    <p>Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.</p>
			    <h5 class="mt-5">Side Projects</h5>
			    <p>Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.</p>
			    
			    <figure><a href="https://made4dev.com"><img class="img-fluid" src="assets/images/promo-banner.jpg" alt="image"></a></figure>
		    </div>
	    </article><!--//about-section-->
	    
	    <section class="cta-section theme-bg-light py-5">
		    <div class="container text-center">
			    <h2 class="heading">Contact</h2>
			    <div class="intro">Admin Reply within 24 houres</div>
			    <div style="color:red;"><b>if You Want to Make Web Site Please Send Message.</b></div>
			    <form class="py-5" role="form" action="<?php echo BASE_URL."publish_contact_page_controller_class/insert_content_method" ?>" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" id="" name="title" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="" name="email" placeholder="example@gmail.com">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="" name="mobile" placeholder="01775567493">
                    </div>
                    <div class="form-group py-1">
                        <textarea name="message" class="form-control" rows="10">My Problem Is</textarea>
                    </div>
                        <button type="submit" class="btn btn-primary btn-lg" name="submit">Send</button>   
                </form>
		    </div><!--//container-->
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

