

<?php

/**

 * The template for displaying Search Results pages.

 *

 * @package zerif

 */

 

get_header(); ?>

<div class="clear"></div>

</header> <!-- / END HOME SECTION  -->



<div id="content" class="site-content">

<div class="container">


	<div id="primary" class="content-area" style="margin-top:60px;">

		<main id="main" class="site-main" role="main">



		<?php if ( have_posts() ) : ?>



			<header class="page-header">

				<h1 class="page-title"><?php printf( __( 'Resultados para: %s', 'zerif-lite' ), '<span>' . get_search_query() . '</span>' ); ?></h1>

			</header><!-- .page-header -->
			
			
			<?php
				echo "<p id=search-2 class=widget widget_search>";
				if(function_exists('webonary_searchform')) { webonary_searchform(); }
				echo "</p>";

				//if(is_page() && is_active_sidebar('sidebar-pages')) : dynamic_sidebar('sidebar-pages');
				if(is_active_sidebar('sidebar-pages')) : dynamic_sidebar('sidebar-pages');
				//elseif(is_active_sidebar('sidebar-blog')) : dynamic_sidebar('sidebar-blog');
				endif; 
			?>


			<?php /* Start the Loop */ ?>

			<?php while ( have_posts() ) : the_post(); ?>



				<?php get_template_part( 'content', get_post_format() ); ?>



			<?php endwhile; ?>



			<?php zerif_paging_nav(); ?>



		<?php else : ?>



			<?php get_template_part( 'content', 'none' ); ?>



		<?php endif; ?>



		</main><!-- #main -->

	</div><!-- #primary -->


</div><!-- .container -->



<?php get_footer(); ?>