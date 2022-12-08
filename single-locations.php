<?php

$link = get_field("link");
$page_link = get_field("page_link");

get_header();
?>

<section class="page">
  <div class="container">

  <h1><?php the_title(); ?></h1>

  <pre><?php echo print_r($link); ?></pre>

  <?php if ($link): ?>

    <a href="<?php echo $link["url"]; ?>" target="<?php echo $link[
  "target"
]; ?>"><?php echo $link["title"]; ?></a>

    <?php endif; ?>

    <br> <br>

    <a href="<?php echo $page_link; ?>" target="blank">Click here</a>

  </div>
</section>

<?php get_footer(); ?>
