<?php  
/**
 * Header template
 * 
 * @package Nandan.Global
 */ 
if( !defined( 'ABSPATH' ) ) exit;

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    <?php 
        if( ! function_exists('wp_body_open') ){
            wp_body_open();
        }
    ?>
   <div id="page" class="site">
       <?php get_template_part('template-parts/header/nav'); ?>
       <div id="content" class="site-content">
        <div class="container bg-warning p-2 text-center">
            <h6 class="text-uppercase text-decoration-underline">Tip of the day</h6>
            <?php echo do_shortcode('[tips_of_the_day]'); ?>
        </div>


           