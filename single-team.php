<?php

$locations = get_field("locations");
$related_posts = get_field("related_posts");

get_header();
?>

<section class="page">
  <div class="container">

  <h1><?php the_title(); ?></h1>

  <?php foreach ($locations as $post): ?>
    
    <?php setup_postdata($post); ?>

    <?php echo the_title(); ?>

    <?php the_field("address"); ?>

  <?php wp_reset_postdata();endforeach; ?>


  <?php if ($related_posts): ?>
    <pre><?php echo print_r($related_posts); ?></pre>

    <?php echo $related_posts->post_title; ?>
  <?php endif; ?>

  </div>
</section>

<?php get_footer(); ?>
