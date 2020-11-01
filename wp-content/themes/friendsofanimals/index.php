<?php get_header()?>

<?php get_template_part('default-header')?>

    <main>
          
        <?php 
        while ( have_posts() ) {
            the_post(); 
            get_template_part('partials/content', 'index');
        } // end while
        ?> 
        
    </main>

<?php get_footer()?>