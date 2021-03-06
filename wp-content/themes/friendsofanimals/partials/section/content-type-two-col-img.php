<section class="section section-two-col">
    <div class="grid-container">
        <div class="grid-x margin-x">
            <div class="cell">
                <h3 class="headline-center" data-aos="fade-up" data-aos-duration="500">
                    <?php the_title()?>
                </h3>
            </div>
            <div class="cell cell-content medium-6">
                <?php the_content()?>
            </div>
            <div class="cell cell-img medium-6" data-aos="fade-right" data-aos-delay="300" data-aos-duration="750">
                <img src="<?php the_field('photo')?>" alt="">
            </div>
        </div>
    </div>
</section>