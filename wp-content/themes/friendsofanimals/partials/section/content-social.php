<?php

    $link = get_field('link')

?>


<section class="section section-social">
    <div class="social-img hide-for-small-only">
        <img src="<?php the_field('photo')?>" alt="">
    </div>
    <div class="grid-container">
        <h3 class="headline-center no-line"><?php the_title()?></h3>
        <p class="lead lead-uppercase text-center">
            <?php the_field('tagline')?>
        </p>
        <div class="text-light text-center">
            <?php the_content()?>
        </div>
        <div class="social-icon">
            <a href="<?php echo $link['url']?>"><i class="fab fa-<?php echo $link['title']?>"></i></a>
        </div>
    </div>
</section>