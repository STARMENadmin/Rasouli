<?php get_header(); ?>

 <nav class="header-nav">
     <img class="navLogo" src="/img/rasouliNavLogo.png"/>
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
			<div id="home-hero-copy-1" class="blog-hero-copy-1">
		      <h1>Rasouli Blog</h1>
                <h2>News and Notes from the Rasouli spine surgery team</h2>
			</div>
			<img class="hero-background" src="/img/blogHero.jpg"> 
      	</section>
      	
		<div class="bodyWrapper">
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
		

				<?php get_sidebar(); ?>
				<div class="clear"></div>
		</div><!-- /bodyWrapper -->
	</main>



<?php get_footer(); ?>
