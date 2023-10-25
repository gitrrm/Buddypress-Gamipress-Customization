<?php  
/**
 * Main Footer file
 * 
 * @package Nandan.Global
 */ 
?>
   <footer id="colophon" class="site-footer">
      <div class="site-info bg-warning pt-2 pb-2 text-center">
         <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'nandanglobal' ) ); ?>" class="link-secondary" target="_blank">
            <?php
            /* translators: %s: CMS name, i.e. WordPress. */
            printf( esc_html__( 'Proudly powered by %s', 'nandanglobal' ), 'WordPress' );
            ?>
         </a>
         <span class="sep text-secondary"> | </span>
            <?php
            /* translators: 1: Theme name, 2: Theme author. */
            printf( esc_html__( 'Theme: %1$s by %2$s.', 'nandanglobal' ), 'nandanglobal', '<a href="https://nandan.global/" class="link-secondary" target="_blank">Rashmi Ranjan Muduli</a>' );
            ?>
      </div><!-- .site-info -->
   </footer><!-- #colophon -->

</div><!-- #content -->
   </div><!-- #page -->
   <?php wp_footer(); ?>
</body>
</html>