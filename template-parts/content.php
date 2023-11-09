<?php
/**
 * Template part for displaying posts
 *
 * @package nandanglobal
 */
if( !defined( 'ABSPATH' ) ) exit;
?>
<div class="card mb-3 border-bottom pt-3 pb-4 pt-4">
    <div class="card-body d-md-flex">
        <div class="col-12 col-md-6">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="w-100" />
        </div>
        <div class="col-12 col-md-6 ps-md-5">
            <h2 class="card-title pt-3 pt-md-0"><?php the_title(); ?></h2>
            <?php 
                if( is_singular() ){
                    echo '<p class="card-text">' . the_content() . '</p>';
                }else{
                    echo '<p class="card-text">' . the_excerpt() . '</p>';
                }
            ?>
            
            <a href="<?php the_permalink(); ?>" class="btn btn-warning float-end">Start</a>
        </div>
    </div>
</div>
