<?php

    $link = get_field('button');

?>


<section class="section section-index">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="cell">
                <h3 class="headline-center" data-aos="fade-up" data-aos-duration="500">
                    <?php the_title()?>
                </h3>
            </div>
            <div class="cell">
                <div><?php the_content()?></div>
            </div>
            <div class="cell">
                <a href="<?php echo $link['url']?>" class="button button-custom"><?php echo $link['title']?></a>
            </div>
        </div>
    </div>
</section>