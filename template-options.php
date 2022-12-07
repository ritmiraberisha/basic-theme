<?php

/* Template Name: Options */

$colors = get_field("choose_a_color");

get_header();
?>


<section class="page">
    <div class="container">

                <h1><?php the_title(); ?></h1>

                <?php echo implode($colors, ","); ?>
    </div>
</section>

<?php get_footer(); ?>
