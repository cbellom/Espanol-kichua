<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package zerif
 */
?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php _e( 'No se encontró nada', 'zerif-lite' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'zerif-lite' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php _e( 'Lo sentimos, pero no se encontraron resultados. Por favor, inténtelo de nuevo con algunas palabras clave diferentes.', 'zerif-lite' ); ?></p>
			<?php				echo "<p id=search-2 class=widget widget_search>";				if(function_exists('webonary_searchform')) { webonary_searchform(); }				echo "</p>";				//if(is_page() && is_active_sidebar('sidebar-pages')) : dynamic_sidebar('sidebar-pages');				if(is_active_sidebar('sidebar-pages')) : dynamic_sidebar('sidebar-pages');				//elseif(is_active_sidebar('sidebar-blog')) : dynamic_sidebar('sidebar-blog');				endif; 			?>

		<?php else : ?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'zerif-lite' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->