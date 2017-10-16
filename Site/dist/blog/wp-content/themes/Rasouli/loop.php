

<?php if (have_posts()): while (have_posts()) : the_post(); ?>



	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="postLeft">
			<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(array(400,400)); // Declare pixel size you need inside the array ?>
				</a>
			<?php endif; ?><!-- /post thumbnail -->
		</div><!-- /postLeft -->

		<div class="postRight">
				<span class="date postDate"><?php the_time('F j, Y'); ?></span>
				<!-- post title -->
				<h2 class="blogTitle">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h2>
				<!-- /post title -->
				
		

		
				<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
				
				<div class="shareWrapper">
					
					
					<script>function fbs_click() {u=location.href;t=document.title;window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;}</script><a href="http://www.facebook.com/share.php?u=<url>" rel="nofollow" onclick="return fbs_click()" target="_blank"><img src="../../img/facebook-share.png"/></a>
					
					<a href="http://twitter.com/share?url=<?php the_permalink(); ?>"><img src="../img/twitter-share.png"/></a>
					
					<a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&source=ADD_YOUR_BLOG_URL_HERE" rel="nofollow"><img src="../img/linkedin-share.png"/></a>
									
					<a href="mailto:?subject=Rasouli Spine Blog Post&amp;body=View the post <?php the_permalink(); ?>" title="Share by Email"><img src="../img/mail-share.png"/></a>
						<div class="clear"></div>
				</div>
			
		</div><!-- /postRight -->
		<div class="clear"></div>
		

	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
