<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package zerif
 */
?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside>

			<aside id="archives" class="widget">
				<h1 class="widget-title"><?php _e( 'Archives', 'zerif-lite' ); ?></h1>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>

			<aside id="meta" class="widget">
				<h1 class="widget-title"><?php _e( 'Meta', 'zerif-lite' ); ?></h1>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</aside>

		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->	<?php		echo "<p id=search-2 class=widget widget_search>";		if(function_exists('webonary_searchform')) { webonary_searchform(); }		echo "</p>";				//if(is_page() && is_active_sidebar('sidebar-pages')) : dynamic_sidebar('sidebar-pages');		if(is_active_sidebar('sidebar-pages')) : dynamic_sidebar('sidebar-pages');		//elseif(is_active_sidebar('sidebar-blog')) : dynamic_sidebar('sidebar-blog');		endif; ?>