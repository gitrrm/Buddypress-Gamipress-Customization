<?php  
/**
 * Nandan main file
 * 
 * @package Nandan.Global
 */ 

if( !defined( 'ABSPATH' ) ) exit;

get_header();

?>
<div class="container bg-light pb-5">
    <div class="row justify-content-center">
        <?php
            if (have_posts()) :
            	if ( is_home() && ! is_front_page() ) :
				?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
					<?php
				endif;
                while (have_posts()) :
                    the_post();
                    get_template_part( 'template-parts/content', get_post_type() );             
                endwhile;
                the_posts_navigation();
            else :
                echo 'No posts found.';
            endif;
        ?>
        <?php get_sidebar(); // Include the sidebar template ?>
    </div><!-- .row -->
</div><!-- .container -->




<?php
get_footer();