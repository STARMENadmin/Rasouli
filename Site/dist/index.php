 <?php include("partials/header.php"); ?>
 
    <body class="hompage">
	     <?php include("partials/nav.php"); ?>

        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

		<!-- Hero Section -->
		<section id="hero-home" class="hero">
			<?php include("partials/homepage-hero.php"); ?>
      	</section>
      
      <!-- Procedures and Conditions Section -->
		<section id="home-procedures" class="home-section-2 group">
			<?php include("partials/homepage-procedures.php"); ?>
		</section>
		
		<!-- The Surgeon Section -->
		<section id="home-Surgeon" class="home-section-3 group twoColumn">
			<?php include("partials/homepage-TheSurgen.php"); ?>
		</section>
		
			
		<!-- Outpatient Section -->
		<section id="home-outpatient" class="home-section-4 group twoColumn greyBG">
			 <?php include("partials/homepage-Outpatiant.php"); ?>
		</section>
		
		<!-- Outpatient Section -->
		<section id="home-testimonials" class="home-section-5 group twoColumn">
			 <?php include("partials/homepage-testimonials.php"); ?>
		</section>
		
		
				<!-- Blog post 1 -->
		<section id="home-blog" class="home-section-6 group twoColumn greyBG">
			<?php include("partials/homepage-BlogCarousel.php"); ?>		
		</section>
        
        <!-- social media section -->
		<section id="home-social" class="home-section-7 ">
			<?php include("partials/homepage-social.php"); ?>		
		</section>
      
         <?php include("partials/footer.php"); ?>