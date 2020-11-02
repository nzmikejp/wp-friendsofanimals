<section class="section section-two-col">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell">
                <h3 class="headline-center" data-aos="fade-up" data-aos-duration="500">
                    <?php the_title()?>
                </h3>
            </div>
            <div class="cell cell-content medium-6">
                <div>
                    <?php the_content()?>
                </div>
            </div>
            <div class="cell cell-content medium-6 align-self-top">
                <div class="cell-map" id="mapid" data-path="<?php echo get_template_directory_uri()?>">
                </div>
            </div>
        </div>
    </div>
</section>