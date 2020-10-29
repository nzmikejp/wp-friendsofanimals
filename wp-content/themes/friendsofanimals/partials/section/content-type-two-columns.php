<section class="section section-two">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="cell medium-6">
                <h3 class="headline" data-aos="fade-up" data-aos-duration="500"><?php the_title()?></h3>
                <div>
                    <?php the_content()?>
                </div>
            </div>
            <div class="cell img-cell medium-6" data-aos="fade-right" data-aos-delay="300" data-aos-duration="750">
                <img src="<?php the_field('photo')?>" alt="">
            </div>
        </div>
    </div>
</section>