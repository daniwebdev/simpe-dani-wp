<h2>
    <?= the_title(); ?>
</h2>
<p>
    <?= the_excerpt(); ?>
</p>
<div class="date-time-author">
    
    <span><?=get_the_date();?></span>
    <span class="mx-2 font-weight-bold">·</span>
    <span class="me-2"><?=get_the_author();?></span>

    <a class="d-inline-block" href="<?php the_permalink(); ?>">Read More</a>

</div>