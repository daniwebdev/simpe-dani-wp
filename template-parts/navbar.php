<nav>
    <div class="container align-items-center d-flex justify-content-between">
        <div class="brand">
            <a href="<?=get_home_url();?>" class="inline-block py-3">
                <?= get_bloginfo( 'name' );?>
            </a>
        </div>

        <div class="d-flex align-items-center gap-3">
            <?= wp_nav_menu([]); ?>

            <button class="btn search-btn" onclick="toogleSearchModal()">
                <i class="fas fa-search"></i>
            </button>
        </div>

    </div>
</nav>