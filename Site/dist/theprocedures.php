 <?php include("partials/header.php"); ?>
 
    <body class="theproceduresPage">
	          <div class="onLoadFadeIn"></div>
	  <?php include("partials/book-pop-up.php"); ?>
	  <?php include("partials/nav.php"); ?>
	  <?php include("partials/nav-static.php"); ?>


        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

		<!-- Hero Section -->
		<section id="hero-about" class="hero hero-procedures ">
			<?php include("partials/procedures-hero.php"); ?>
      	</section>
        
         <!-- select spine Section -->
		<section id="procedures-selectSpine" class="procedures-section-2 group blackBG fade-in">
			<?php include("partials/procedures-spineArea.php"); ?>
		</section>
      
      <!-- video Section -->
		<section id="conditions-video" class="procedures-section-3 group fade-in">
			<?php include("partials/procedures-video.php"); ?>
		</section>
		
		
		<!-- tesimonial Section -->
		<section id="about-testimonials" class="procedures-section-5 group twoColumn greyBG fade-in">
			 <?php include("partials/about-testimonials.php"); ?>
		</section>
		

         <?php include("partials/footer.php"); ?>