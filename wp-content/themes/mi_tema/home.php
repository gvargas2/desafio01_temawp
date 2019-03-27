<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1>Blog</h1>
    </div>
  </div>
  <div class="row">

    <?php
    if( have_posts() ):
      while ( have_posts() ): the_post();
      ?>

    <div class="col-md-6">
      <div class="post">
        <h2><?php the_title() ?></h2>
        <p><?php the_content() ?></p>
        <div class="img">
          <?php the_post_thumbnail([500,300]) ?>
        </div>
          <?php the_tags() ?>
          <?php the_category() ?>
      </div>
    </div>
  <?php endwhile;
  endif;
  ?>
  </div>
</div>

<?php get_footer(); ?>
