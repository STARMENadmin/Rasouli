<?php get_header(); ?>

  <?php include("../partials/nav.php"); ?>
	      <?php include("../partials/nav-static.php"); ?>


	<main role="main">
					<!-- Hero Section -->
		<section id="hero-about" class="hero hero-blog">
			
			
				    	 <picture>
	    	<source media="(max-width: 768px)" srcset="/img/blogHero-mobile.jpg">
                <source media="(max-width: 1024px)" srcset="/img/blogHero1024.jpg">
                <img class="hero-background" src="/img/blogHero.jpg"> 
            </picture> 
    
            
			<div id="home-hero-copy-1" class="blog-hero-copy-1">
		      <h1>Rasouli Blog</h1>
                <h2>News and Notes from the Rasouli spine surgery team</h2>
			</div>
			
      	</section>
      	
		<div class="bodyWrapper">
			<?php get_sidebar(); ?>
				<section class="blog-right">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<span class="date postDate"><?php the_time('F j, Y'); ?></span>


			<!-- post title -->
			<h1 class="blogTitle blogTitleInterior">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
			<!-- /post title -->



			<?php the_content(); // Dynamic Content ?>

			
		

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>



	<?php endif; ?>
		<?php echo do_shortcode( '[ajax_load_more post_type="post" posts_per_page="3" meta_key="" meta_value="" meta_compare="IN" meta_type="CHAR" meta_relation="AND" transition="fade"]' ); ?>
				
	</section>
	<!-- /section -->
		

				
				<div class="clear"></div>
		</div><!-- /bodyWrapper -->
	</main>



<?php get_footer(); ?>
