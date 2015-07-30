<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package zerif
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->
	<?php		echo "<p id=search-2 class=widget widget_search>";		if(function_exists('webonary_searchform')) { webonary_searchform(); }		echo "</p>";		//if(is_page() && is_active_sidebar('sidebar-pages')) : dynamic_sidebar('sidebar-pages');		if(is_active_sidebar('sidebar-pages')) : dynamic_sidebar('sidebar-pages');		//elseif(is_active_sidebar('sidebar-blog')) : dynamic_sidebar('sidebar-blog');		endif; 	?>					
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'zerif-lite' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'zerif-lite' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
