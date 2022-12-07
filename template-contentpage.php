<?php

/* Template Name: Content Page */

$image = get_field("feature_image");
// $picture = $image["sizes"]["my_custom_size"];
// $alt = $image["alt"];
// $title = $image["title"];

// $file = get_field("upload_a_file");
// $filename = $file["filename"];
// $filename = $file["url"];

$embed = get_field("embed_a_video");

get_header();
?>


<section class="page">
    <div class="container">



                <h1><?php the_title(); ?></h1>
            
                <?php if (have_posts()):
                  while (have_posts()):
                    the_post(); ?>

                <?php the_content(); ?>

                <?php
                  endwhile;
                else:
                endif; ?>

                
                <?php if ($image): ?>
                  <img src="<?php echo $picture; ?>" class ="img-fluid" alt="<?php echo $alt; ?>" title="<?php echo $alt; ?>">
                <?php endif; ?>

                <?php if ($file): ?>
                  <a href="<?php echo $fileurl; ?>" ><?php echo $filename; ?></a>
                <?php endif; ?>

                <?php if ($embed): ?>
                  <?php echo $embed; ?>
                <?php endif; ?>

    </div>
</section>

<?php get_footer(); ?>
