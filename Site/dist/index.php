 <?php include("partials/header.php"); ?>
 
    <body>
	     <?php include("partials/nav.php"); ?>
	     <div id="header-logo">
	      	<img class="logo" src="img/global/rasouli-spine-logo.jpg">
	      </div> 
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

		<!-- Hero Section -->
		<section id="hero-home" class="hero">
			<?php include("partials/Homepage-hero.php"); ?>
      	</section>
      
      <!-- Procedures and Conditions Section -->
		<section id="home-procedures" class="home-section-2 group">
			<?php include("partials/Homepage-procedures.php"); ?>
		</section>
		
		<!-- The Surgeon Section -->
		<section id="home-Surgeon" class="home-section-3 group twoColumn">
			<?php include("partials/Homepage-TheSurgen.php"); ?>
		</section>
		
			
		<!-- Outpatient Section -->
		<section id="home-outpatient" class="home-section-4 group twoColumn greyBG">
			 <?php include("partials/Homepage-Outpatiant.php"); ?>
		</section>
		
		
				<!-- Blog post 1 -->
		<section id="home-blog" class="home-section-6 group twoColumn greyBG">
			<?php include("partials/homepage-BlogCarousel.php"); ?>		
		</section>
      
         <?php include("partials/footer.php"); ?>