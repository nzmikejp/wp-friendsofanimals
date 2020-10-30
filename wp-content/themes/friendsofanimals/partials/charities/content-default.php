<?php
    $terms = get_the_terms( get_the_ID(), 'filter' );
    $classes = '';

    foreach($terms as $term){
        $classes .= $term->slug . ' ';
    }
?>


<div class="mix <?php echo $classes?>">
    <img src="<?php the_field('logo')?>" alt="">
</div>