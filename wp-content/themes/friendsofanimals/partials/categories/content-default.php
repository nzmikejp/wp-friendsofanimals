<?php

    $link = get_field('button');

?>

<div class="cell medium-4 foa-card" data-aos="fade-up" data-aos-delay="<?php the_field('transition_delay')?>" data-aos-duration="1000">
    <div class="card-img">
        <img src="<?php the_field('photo')?>">
    </div>
    <div class="card-content">
        <h5 class="card-headline"><?php the_title()?></h5>
        <div><?php the_content()?></div>
    </div>
    <a href="<?php echo $link['url']?>" class="button button-custom"><?php echo $link['title']?></a>
</div>