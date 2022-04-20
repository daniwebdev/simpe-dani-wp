<article>
<a class="post-item" href="<?=the_permalink();?>">
    <h2>
    <?= the_title(); ?>
    </h2>
    <?= the_excerpt(); ?>
</a>

<div class="date-time-author">
    
    <span><?=get_the_date();?></span>
    <span class="mx-2 font-weight-bold">·</span>
    <span class="me-2"><?=get_the_author();?></span>

</div>
</article>