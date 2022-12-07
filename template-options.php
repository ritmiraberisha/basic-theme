<?php

/* Template Name: Options */

$color = get_field("choose_a_color");

get_header();
?>


<section class="page">
    <div class="container">

                <h1><?php the_title(); ?></h1>

                <?php if($color): ?>
                    <strong>Color:</strong><?php echo $color['value']; ?>
                <?php endif; ?>

                <br> <br>

                <?php switch($color['label']) {
                    case 'Green':
                        echo 'Success! The color is green :)'; 
                    break;
                };?>
    </div>
</section>

<?php get_footer(); ?>
