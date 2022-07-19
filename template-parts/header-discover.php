<?php
$args = array(
    'post_type'  => 'post',
    'posts_per_page' => 3,
     'meta_query' => array(
         array(
          'key' => '_thumbnail_id',
          'compare' => 'EXISTS'
         ),
     )
);


$query = new WP_Query($args);

?>

<div class="container">
    <div id="discover" class="">

    <?php
        if ( $query->have_posts() ) { // you never checked to see if no posts were found
            while($query->have_posts()) { // alt style syntax doesn't work with most IDEs
                // individual statement should be on individual line
                $query->the_post();

                // only print out the thumbnail if it actually has one
                if ( has_post_thumbnail() ) {?>
                    
                    <div class="discover-item" style="background: url(<?=get_the_post_thumbnail_url();?>);background-size: cover; background-position: center">
                        <div class="discover-summary">
                            <a href="">
                                <h3 class="title"><?= the_title(); ?></h3>
                                <p class="description">
                                    <?= strlen(get_the_excerpt()) > 100 ? substr(get_the_excerpt(), 0, 100).'...':get_the_excerpt(); ?>
                                </p>
                            </a>
                        </div>
                    </div>

                <?php
                }
            }
        } else {
            echo '<p>no posts found</p>';
        }
    ?>
    </div>
</div>