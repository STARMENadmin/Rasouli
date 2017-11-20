 <?php include("partials/header.php"); ?>
 
    <body class="contactPage">
	  <div class="onLoadFadeIn"></div>
	  <?php include("partials/book-pop-up.php"); ?>
	  <?php include("partials/nav.php"); ?>
	  <?php include("partials/nav-static.php"); ?>


        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

		<!-- Hero Section -->
		<section id="hero-about" class="hero hero-contact">
			<?php include("partials/contact-hero.php"); ?>
      	</section>
        
         <!-- form Section -->
		<section id="contactPage-form" class="contact-section-2 group blackBG fade-in">
			<?php include("partials/contact-form.php"); ?>
		</section>
      
      <!-- map Section -->
		<section id="contactPage-map" class="contact-section-3 group fade-in">
			<?php include("partials/contact-map.php"); ?>
		</section>
        


         <?php include("partials/footer.php"); ?>