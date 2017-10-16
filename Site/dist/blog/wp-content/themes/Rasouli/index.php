<?php get_header(); ?>

 <nav class="header-nav">
     <img class="navLogo" src="../img/rasouliNavLogo.png"/>
	 <ul>
	    <li><a href="/index.php">Home</a></li>
	    <li><a href="/thepractice.php">The Practice</a></li>
	    <li><a href="/theconditions.php">The Conditions</a></li>
	    <li><a href="/theprocedures.php">The Procedures</a></li>
	    <li><a href="/the-outpaient-revolution.php">The Outpatient Revolution</a></li>
	    <li><a href="/contact.php">Contact</a></li>
	 </ul>
	 <div id="navBackground"></div>
	 
  </nav>

	     <div id="header-logo">
	      	<img class="logo" src="/img/global/rasouli-spine-logo.jpg">
	      </div> 

	<main role="main">
				<!-- Hero Section -->
		<section id="hero-about" class="hero hero-blog">
			<?php include("../partials/blog-hero.php"); ?>
      	</section>
        
		<div class="bodyWrapper">
				<section class="blog-right">
		
					
		
					<?php // get_template_part('loop'); ?>
		
					<?php // get_template_part('pagination'); ?>
					<?php echo do_shortcode( '[ajax_load_more post_type="post, portfolio" repeater="default" posts_per_page="3" transition="fade" button_label="Older Posts"]' ); ?>
					<div class="clear"></div>
				</section><!-- /section -->
				
				<?php get_sidebar(); ?>
				<div class="clear"></div>
		</div><!-- /bodyWrapper -->
		
		<div class="clear"></div>
	</main>


<?php get_footer(); ?>
