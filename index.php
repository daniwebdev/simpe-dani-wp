<?php
  // $the_query = new WP_Query( array(
  //   'meta_key' => 'post_views_count',
  //   'orderby' => 'meta_value_num',
  //   'posts_per_page' => 5
  // ) );

  get_header();

?>

<?=get_template_part( 'template-parts/header-discover');?>

<div class="container-lg">
  <div id="article">
    <div class="row g-0 g-md-5">
      
      <main class="col-12 col-md-8">
        
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
                <?=get_template_part( 'template-parts/post', 'list');?> 
              <?php else: ?>
                <?=get_template_part( 'template-parts/post', 'list-thumbnail');?> 
                
      <?php
              endif;
          endwhile;
        endif;
        
      ?>
      <?php echo bootstrap_pagination() ?>

      </main> <!-- Main Content -->
      
      <!-- BEGIN: Sidebar -->
      <div class="col-12  col-md-4">
        <?php get_sidebar(); ?>
      </div> <!-- END: Sidebar -->
    </div>
  </div>
</div>

<?=get_footer();?>