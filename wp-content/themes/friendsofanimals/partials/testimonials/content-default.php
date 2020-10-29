<div class="swiper-slide">
    <div class="grid-x ">
        <div class="slide-img cell medium-2 align-self-middle">
            <img src="<?php the_field('image')?>" alt="">
        </div>
        <div class="slide-content cell medium-8 align-self-middle">
            <p class="lead-small">
                <?php the_field('tagline_comment')?>
            </p>
            <div>
                <?php the_content()?>
            </div>
            <p>
                <strong><?php the_title()?></strong> 
            </p>
        </div>
    </div>
</div>