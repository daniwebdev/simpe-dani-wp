<?php
get_header();
$category = get_the_category();
// echo "<pre>";
// print_r($category);
// echo "</pre>";
// die;
?>


<div id="article" class="mt-3">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <header>
            <?php
              the_archive_title( '<h2 class="page-title">', '</h2>' );
              the_archive_description( '<div class="archive-description">', '</div>' );
            ?>
          <hr>
        </header>
        <?php
        if (have_posts()) :
          while (have_posts()) :
            the_post();
            get_template_part( 'template-parts/post');
          endwhile;
        endif;
        ?>

        <?php the_posts_pagination(); ?>
      </div>

      <div class="col-md-3">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>

<?=get_footer();?>