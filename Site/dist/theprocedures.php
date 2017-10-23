 <?php include("partials/header.php"); ?>
 
    <body class="theproceduresPage">
	     <?php include("partials/nav.php"); ?>
	      <?php include("partials/nav-static.php"); ?>
	     <div id="header-logo">
	      	<img class="logo" src="img/global/rasouli-spine-logo.jpg">
	      </div> 
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

		<!-- Hero Section -->
		<section id="hero-about" class="hero hero-procedures">
			<?php include("partials/procedures-hero.php"); ?>
      	</section>
        
         <!-- select spine Section -->
		<section id="procedures-selectSpine" class="procedures-section-2 group blackBG">
			<?php include("partials/procedures-spineArea.php"); ?>
		</section>
      
      <!-- video Section -->
		<section id="conditions-video" class="procedures-section-3 group">
			<?php include("partials/procedures-video.php"); ?>
		</section>
		
		
		<!-- tesimonial Section -->
		<section id="about-testimonials" class="procedures-section-5 group twoColumn greyBG">
			 <?php include("partials/about-testimonials.php"); ?>
		</section>
		

         <?php include("partials/footer.php"); ?>