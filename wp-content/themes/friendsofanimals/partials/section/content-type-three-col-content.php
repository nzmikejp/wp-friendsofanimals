<section class="section section-three-col">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell">
                <h3 class="headline-center" data-aos="fade-up" data-aos-duration="500">
                    <?php the_title()?>
                </h3>
            </div>
            <div class="cell cell-content medium-4">
                <div>
                    <?php the_content()?>
                </div>
            </div>
            <div class="cell cell-content medium-4">
                <div>
                    <?php the_field('column_two')?>
                </div>
            </div>
            <div class="cell cell-content medium-4">
                <div>
                    <?php the_field('column_three')?>
                </div>
            </div>
        </div>
    </div>
</section>