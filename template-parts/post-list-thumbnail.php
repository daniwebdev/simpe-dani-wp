<article class="row">
    <div class="col-md-12">
        <a class="post-item2" href="<?= the_permalink(); ?>">
            <h2 class="mb-2">
            <?= the_title(); ?>
            </h2>
        </a>
    </div>
    <div class="col-md-8">
        <a class="post-item" href="<?= the_permalink(); ?>">
            <?= the_excerpt(); ?>
        </a>

        <div class="date-time-author mt-2">

            <span>Last updated <?= the_modified_date(); ?></span>
            <span class="mx-2 font-weight-bold">·</span>
            <span class="me-2"><?= get_the_author(); ?></span>

        </div>
    </div>
    <div loading="lazy" class="col-md-4 rounded" style="background: url(<?= get_the_post_thumbnail_url(); ?>); background-position: center; background-size: cover">
    </div>
</article>