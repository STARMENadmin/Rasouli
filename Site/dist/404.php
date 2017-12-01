<?php
  header("HTTP/1.0 404 Not Found");
?>
	<?php include("partials/header.php"); ?>
	
	 <body class="404Page">
		 	  <?php include("partials/nav.php"); ?>
	  <?php include("partials/nav-static.php"); ?>
<section class="page404">
   <img src="img/404image.png"/>
    <h1>WE CAN’T SEEM TO FIND <br/>THE PAGE YOU’RE LOOKING FOR</h1>
     <p>HERE ARE SOME<br/>HELPFUL LINKS INSTEAD:</p>
     
		<nav class="error-nav">
		 				<ul>
					    <li><a href="thepractice.php">The Practice</a></li>
					    <li><a href="theconditions.php">The Conditions</a></li>
					    <li><a href="theprocedures.php">The Procedures</a></li>
					    <li><a href="the-outpaient-revolution.php">The Outpatient Revolution</a></li>
					    <li><a href="/blog">The Blog</a></li>
					    <li><a href="testimonials.php">Testimonials</a></li>
					    <li><a href="patient-resources.php">Patient Resources</a></li>
					    <li><a href="contact.php">Contact</a></li>
					 </ul>
		</nav>
    
</section>
     

<!-- IE needs 512+ bytes: https://blogs.msdn.microsoft.com/ieinternals/2010/08/18/friendly-http-error-pages/ -->
         <?php include("partials/footer.php"); ?>