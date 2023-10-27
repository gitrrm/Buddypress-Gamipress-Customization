<?php  
/**
 * Nandan main file
 * 
 * @package Nandan.Global
 */ 

get_header();

?>
<div class="container bg-light">
    <div class="row justify-content-center">
        <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    ?>
                    <div class="card mb-3 border-bottom pt-3 pb-4">
                        <div class="card-body d-flex">
                            <div class="col-6">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="w-100" />

                               
                                    
                                </div>
                            <div class="col-6 ps-5">
                                <h2 class="card-title"><?php the_title(); ?></h2>
                                <p class="card-text"><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-warning float-end">Start</a>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
            else :
                echo 'No posts found.';
            endif;
        ?>
        <?php get_sidebar(); // Include the sidebar template ?>
    </div><!-- .row -->
</div><!-- .container -->




<?php
get_footer();