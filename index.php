<?php
get_header();
?>

<div id="article" class="mt-3">
  <div class="container">
    <div class="row g-5">
      <div class="col-md-9">
      <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 5,
          'orderby' => 'date',
          'order' => 'DESC',
        );
        $query = new WP_Query($args);
        if (have_posts()) :
          while (have_posts()) : the_post();
              if(get_the_post_thumbnail() == null): ?>
              <article>
              <?=get_template_part( 'template-parts/post', 'list');?> 
              </article>
              <?php else: ?>
                <article class="row">
                  <div class="col-md-9">
                  <?=get_template_part( 'template-parts/post', 'list');?>
                  </div>
                  <div class="col-md-3 rounded" style="background: url(<?=get_the_post_thumbnail_url();?>); background-position: center; background-size: cover">
                  </div>
              </article>
          <?php
        endif;
        endwhile;
        endif;
        
      ?>
      <?php echo bootstrap_pagination() ?>

      </div> <!-- Main Content -->
      <div class="col-md-3 mt-4 mt-md-0">
        <?php get_sidebar(); ?>
      </div> <!-- Sidebar -->
    </div>
  </div>
</div>

<?=get_footer();?>