<?php
/**
 * Template Name: Nandan Custom Template 
 * 
 * */

if( !defined( 'ABSPATH' ) ) exit;
get_header();


// Define the number of posts per page and the current page
$posts_per_page = 4;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

// Query the posts
$args = array(
    'post_type' => 'post',
    'posts_per_page' => $posts_per_page,
    'paged' => $paged
);
$query = new WP_Query($args);
?>

<div class="container bg-light px-5 pt-5 pb-0">
    <div class="row">
        <h2>Nandan Global</h2>
        <p class="mb-3">
        Welcome to the test of Nandan Global.<br/>
        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
        </p>
    </div>
    <div class="d-none d-sm-none d-md-none d-lg-block">
        <!-- <div class="col-md-1"> -->
            <div class="circle circle-start position-sticky start-50"></div>
            <div class="vline position-relative top-50 start-50 mt-1"  style="height: 40px;"></div>
            <div class="hline"></div>
            <div class="vline"></div>
        <!-- </div> -->
    </div>
<?php
// Start the loop
if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
?>

    <div class="row nandan-row  mb-5">
        <div class="col-md-1 d-none d-sm-none d-md-none d-lg-block">
            <div class="vline"></div>
            <div class="circle"></div>
            <div class="vline h-100"></div>
        </div>
        <div class="col-md-5">
            <?php if (has_post_thumbnail()) : ?>
                <div class="post-thumbnail">
                    <?php 
                        $alt_text = get_the_title();
                        the_post_thumbnail('large', ['class' => 'img-fluid', 'alt' => esc_attr($alt_text)]); 
                    ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-md-6">
            <h2><?php the_title(); ?></h2>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn btn-warning float-end">Start</a>
        </div>
    </div>

<?php
    endwhile;
    // Add pagination
    the_posts_pagination(array(
        'prev_text' => '&laquo; Previous',
        'next_text' => 'Next &raquo;'
    ));
?>
</div>
<?php
    
else :
    echo 'No posts found';
endif;

// Restore the global $post variable
wp_reset_postdata();

get_footer('nandan');
