<section class="section section-volunteers">
    <div class="grid-container">
        <h3 class="headline-center" data-aos="fade-up" data-aos-duration="500"><?php the_title()?></h3>
        <div class="grid-x grid-padding-x card-wrap align-center">

            <?php

            $args = array('post_type' => 'volunteer');
            // The Query
            $the_query = new WP_Query( $args );

            // The Loop
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                get_template_part('partials/volunteers/content', 'default');
            }

            /* Restore original Post Data */
            wp_reset_postdata();

            ?>

        </div>
    </div>
</section>