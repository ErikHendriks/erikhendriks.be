<?php include_once 'content/common.php'; ?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title><?php echo $lang['PAGE_TITLE']; ?></title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">  
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/vendor.css">     

   <!-- script
   ================================================== -->   
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">

</head>

<body id="top">
<?php include 'content/header1.php';?>
	<!-- intro section
   ================================================== -->
   <section id="intro">   

   	<div class="intro-overlay"></div>	

   	<div class="intro-content">
   		<div class="row">

   			<div class="col-twelve">

	   			<h5><?php echo $lang['INTRO_H5']; ?></h5>
	   			<h1><?php echo $lang['INTRO_H1']; ?></h1>

	   			<p class="intro-position">
	   				<span><?php echo $lang['INTRO_S1']; ?></span>
	   				<span><?php echo $lang['INTRO_S2']; ?></span> 
	   			</p>

	   			<a class="button stroke smoothscroll" href="#about" title=""><?php echo $lang['INTRO_B1']; ?></a>

	   		</div>  
   			
   		</div>   		 		
   	</div> <!-- /intro-content --> 

   	<ul class="intro-social">        
			      <li><a href="#"><i class="fa fa-github"></i></a></li>
			      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
			      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			      <li><a href="#"><i class="fa fa-linux"></i></a></li>
      </ul> <!-- /intro-social -->      	

   </section> <!-- /intro -->

<?php include "content/services.php" ?>	

   <!-- about section
   ================================================== -->
   <section id="about">  

   	<div class="row section-intro">
   		<div class="col-twelve">

   			<h5><?php echo $lang['ABOUT_H5']; ?></h5>
   			<h1><?php echo $lang['ABOUT_H1']; ?></h1>

   			<div class="intro-info">

   				<img src="images/ehrounddef.png" alt="Profile Picture Erik Hendriks">

   				<p class="lead"><?php echo $lang['ABOUT_P1']; ?></p>
   			</div>   			

   		</div>   		
   	</div> <!-- /section-intro -->

   	<div class="row about-content">

   		<div class="col-six tab-full">

   			<h3><?php echo $lang['ABOUT_H31']; ?></h3>
   			<p></p>

   			<ul class="info-list">
   				<li>
   					<strong><?php echo $lang['ABOUT_L1']; ?></strong>
   					<span>Erik Hendriks</span>
   				</li>
   				<li>
   					<strong><?php echo $lang['ABOUT_L2']; ?></strong>
   					<span>Wilrijk, Belgium</span>
   				</li>
   				<li>
   					<strong><?php echo $lang['ABOUT_L3']; ?></strong>
   					<span>Freelancer, Penetration Tester</span>
   					<span>Secure Web Development</span>
   				</li>
   				<li>
   					<strong><?php echo $lang['ABOUT_L4']; ?></strong>
   					<span>erik.hendriks@linuxmail.org</span>
   				</li>
   				<li>
   					<strong><?php echo $lang['ABOUT_L5']; ?> <i class="fa fa-key" aria-hidden="true"></i>:</strong>
   					<span><a href="content/eh-pubkey.asc" download>Download</a></span>
   				</li>
   				<li>
   					<strong><?php echo $lang['ABOUT_L6']; ?></strong>
   					<span>VAT NUMBER</span>
   				</li>

   				<li>
   					<strong><?php echo $lang['ABOUT_L7']; ?></strong>
   					<span>ACCOUNT NUMBER</span>
   				</li>
   				<li>
   					<strong><?php echo $lang['ABOUT_L8']; ?></strong>
   					<span>ACCOUNT NUMBER</span>
   				</li>   				
   			</ul> <!-- /info-list -->

   		</div>

   		<div class="col-six tab-full">

   			<h3><?php echo $lang['ABOUT_H32']; ?></h3>
   			<p></p>

				<ul class="skill-bars">
				   <li>
				   	<div class="progress percent90"><span>90%</span></div>
				   	<strong>HTML</strong>
				   </li>
				   <li>
				   	<div class="progress percent85"><span>85%</span></div>
				   	<strong>CSS</strong>
				   </li>
				   <li>
				   	<div class="progress percent70"><span>70%</span></div>
				   	<strong>JavaScript</strong>
				   </li>
				   <li>
				   	<div class="progress percent85"><span>85%</span></div>
				   	<strong>PHP</strong>
				   </li>
				   <li>
                    <div class="progress percent85"><span>85%</span></div>
				   	<strong>MySQL</strong>
				   </li>
				   <li>
				   	<div class="progress percent90"><span>90%</span></div>
				   	<strong>Python</strong>
				   </li>
				   <li>
				   	<div class="progress percent85"><span>85%</span></div>
				   	<strong>Perl</strong>
				   </li>
				   <li>
				   	<div class="progress percent95"><span>95%</span></div>
				   	<strong>Open Source Software</strong>
				   </li>
      
				</ul> <!-- /skill-bars -->		

   		</div>

   	</div>

   	<div class="row button-section">
   		<div class="col-twelve">
   			<a href="#contact" title="Hire Me" class="button stroke smoothscroll"><?php echo $lang['ABOUT_B1']; ?></a>
   			<!--<a href="#" title="Download CV" class="button button-primary">Download CV</a>-->
   		</div>   		
   	</div>

   </section> <!-- /process-->    


	

<?php include "content/stats.php" ?>	
<?php include "content/contact.php" ?>
<?php include "content/footer.php" ?>

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>

</body>

</html>
