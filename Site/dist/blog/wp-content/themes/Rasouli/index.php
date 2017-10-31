<?php get_header(); ?>

  <?php include("../partials/nav.php"); ?>
	      <?php include("../partials/nav-static.php"); ?>


	<main role="main">
				<!-- Hero Section -->
		<section id="hero-about" class="hero hero-blog">
			<?php include("../partials/blog-hero.php"); ?>
      	</section>
        
		<div class="bodyWrapper">
			<?php get_sidebar(); ?>
				<section class="blog-right">
		
					
		
					<?php // get_template_part('loop'); ?>
		
					<?php // get_template_part('pagination'); ?>
					<?php echo do_shortcode( '[ajax_load_more post_type="post, portfolio" repeater="default" posts_per_page="3" transition="fade" button_label="Older Posts"]' ); ?>
					<div class="clear"></div>
				</section><!-- /section -->
				
				
				<div class="clear"></div>
		</div><!-- /bodyWrapper -->
		
		<div class="clear"></div>
	</main>


<?php get_footer(); ?>
