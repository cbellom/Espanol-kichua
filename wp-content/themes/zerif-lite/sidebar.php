<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package zerif
 */
?>
	<div id="secondary" class="widget-area" role="complementary">
			<?php		echo "<p id=search-2 class=widget widget_search>";		if(function_exists('webonary_searchform')) { webonary_searchform(); }		echo "</p>";				//if(is_page() && is_active_sidebar('sidebar-pages')) : dynamic_sidebar('sidebar-pages');		if(is_active_sidebar('sidebar-pages')) : dynamic_sidebar('sidebar-pages');		//elseif(is_active_sidebar('sidebar-blog')) : dynamic_sidebar('sidebar-blog');		endif; 				?>
	</div><!-- #secondary -->