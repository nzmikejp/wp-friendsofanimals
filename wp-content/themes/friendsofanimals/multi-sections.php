<?php /* Template Name: Multi Sections */ ?>

<?php get_header()?>

    <main>
                    
        <?php 
        while ( have_posts() ) {
            the_post(); 
            get_template_part('partials/page/content', 'multi-sections');
        } // end while
        ?> 

    </main>

<?php get_footer()?>