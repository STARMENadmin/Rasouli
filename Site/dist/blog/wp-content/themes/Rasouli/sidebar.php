<!-- sidebar -->
<aside class="sidebar" role="complementary">

	<?php// get_template_part('searchform'); ?>
	<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div>
        <input type="text" value="" name="s" id="s" class="search-input" placeholder="Search" />
        <input type="image" name="submit" src="/img/searchIcon.png" id="searchsubmit" value="Search" />
    </div>
</form>

	<div class="sidebar-widget">
		
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div>

<!--
	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>
-->

</aside>
<!-- /sidebar -->
