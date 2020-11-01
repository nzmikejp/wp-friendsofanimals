<section class="section section-support shadow-inset">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="cell">
                <h3 class="headline-center" data-aos="fade-up" data-aos-duration="500"><?php the_title()?></h3>
                <div>
                    <?php the_content()?>
                </div>
            </div>
            <div class="cell">
                <ul class="menu taxonomy-menu align-center">
                    <li class="taxonomy-item is-active"><a class="filter" data-filter="all">All</a></li>

                    <?php
                
                        $terms = get_terms( 'filter', array('hide_empty' => false));

                        foreach($terms as $term){
                            echo '<li class="taxonomy-item"><a class="filter" data-filter=".' . $term->slug . '">' . $term->name .'</a></li>';
                        }
                    
                    ?>
                    
                </ul>
            </div>
            <div class="cell charities-cell" id="Container">


                <?php

                    $args = array('post_type' => 'charities',
                    'posts_per_page' => '-1',);

                    // The Query
                    $the_query = new WP_Query( $args );

                    // The Loop
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        get_template_part('partials/charities/content', 'default');
                    }

                    /* Restore original Post Data */
                    wp_reset_postdata();

                ?>
                
            </div>
        </div>
    </div>
</section>