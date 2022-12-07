<?php

/* Template Name: Options */

$color = get_field("choose_a_color");
$flavors = get_field("choose_a_flavor");
$consent = get_field("do_you_consent");
$where = get_field("where_do_you_want_to_go");
$question = get_field("are_you_leaning_anything");

get_header();
?>


<section class="page">
    <div class="container">

                <!-- Select field -->
                
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

                <br><br>

                <!-- Checkboxes -->

                <?php echo implode($flavors);?>

                <br><br>

                <!-- Radio Buttons -->

                <?php echo $consent;?>

                <br><br>

                <!-- Button Group -->

                <?php echo $where;?>

                <br><br>

                <!-- True/False fields-->

                <?php if($question):?>
                    Yes, I'm learning :)

                <?php else:?>
                    No, I'm not learning :(
                <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
