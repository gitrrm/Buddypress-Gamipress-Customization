<?php  
/**
 * Nandan main file
 * 
 * @package Nandan.Global
 */ 

get_header();

?>


<div class="container">
    <div class="row">
        <div class="col-md-8">

            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    ?>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h2 class="card-title"><?php the_title(); ?></h2>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                    <?php
                endwhile;
            else :
                echo 'No posts found.';
            endif;
            ?>

        </div><!-- .col-md-8 -->

        <?php get_sidebar(); // Include the sidebar template ?>
    </div><!-- .row -->
</div><!-- .container -->




<?php
get_footer();