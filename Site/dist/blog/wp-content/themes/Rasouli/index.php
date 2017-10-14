<?php get_header(); ?>

 <nav class="header-nav">
     <img class="navLogo" src="../img/rasouliNavLogo.png"/>
	 <ul>
	    <li><a href="index.php">Home</a></li>
	    <li><a href="thepractice.php">The Practice</a></li>
	    <li><a href="theconditions.php">The Conditions</a></li>
	    <li><a href="theprocedures.php">The Procedures</a></li>
	    <li><a href="the-outpaient-revolution.php">The Outpatient Revolution</a></li>
	    <li><a href="contact.php">Contact</a></li>
	 </ul>
	 <div id="navBackground"></div>
	 
  </nav>

	     <div id="header-logo">
	      	<img class="logo" src="../img/global/rasouli-spine-logo.jpg">
	      </div> 

	<main role="main">
				<!-- Hero Section -->
		<section id="hero-about" class="hero hero-blog">
			<?php include("../partials/blog-hero.php"); ?>
      	</section>
        
		<div class="bodyWrapper">
				<section class="blog-right">
		
					
		
					<?php get_template_part('loop'); ?>
		
					<?php  get_template_part('pagination'); ?>
					<?php

 
// don't display the button if there are not enough posts
if (  $wp_query->max_num_pages > 1 )
	echo '<div class="misha_loadmore">More posts</div>'; // you can use <a> as well
?>
					<div class="clear"></div>
				</section><!-- /section -->
				
				<?php get_sidebar(); ?>
		</div><!-- /bodyWrapper -->
		
		<div class="clear"></div>
	</main>


<?php get_footer(); ?>
