 <?php include("partials/header.php"); ?>
 
    <body class="resourcesPage">
	  <div class="onLoadFadeIn"></div>
	  <?php include("partials/book-pop-up.php"); ?>
	  <?php include("partials/nav.php"); ?>
	  <?php include("partials/nav-static.php"); ?>

        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

		<!-- Hero Section -->
		<section id="hero-about" class="hero patient-resources">
			<?php include("partials/resoures-hero.php"); ?>
      	</section>
        
         <!-- form Section -->
		<section id="resources-forms" class="resources-section-2 group blackBG">
			<?php include("partials/resources-forms.php"); ?>
		</section>
      
      <!-- map Section -->
		<section id="resources-providers" class="outpaientPage resources-section-3 group">
			<?php include("partials/resources-providers.php"); ?>
		</section>
        


         <?php include("partials/footer.php"); ?>