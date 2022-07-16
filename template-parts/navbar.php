<nav>
    <div class="container align-items-center d-flex justify-content-between">
        <div class="brand">
            <a href="<?=get_home_url();?>" class="inline-block py-3">
                <?= get_bloginfo( 'name' );?>
            </a>
        </div>

        <div>
            <?= wp_nav_menu([]); ?>
        </div>

    </div>
</nav>