<nav class="main-nav">
    <div class="container align-items-center d-flex justify-content-between">
        <button onclick="toggleSideMenu()" class="btn text-white d-block d-lg-none">
            <i class="fas fa-bars"></i>
        </button>
        <div class="brand">
            <a href="<?=get_home_url();?>" class="inline-block py-3">
                <?= get_bloginfo( 'name' );?>
            </a>
        </div>

        <div class="d-flex align-items-center gap-3">
            <div class="d-none d-lg-block">
                <?= wp_nav_menu([]); ?>
            </div>

            <button class="btn search-btn" onclick="toogleSearchModal()">
                <i class="fas fa-search"></i>
            </button>
        </div>

    </div>
</nav>
<div class="sidenav-overlay">
    
</div>

<div class="sidenav">
    <div class="container py-3">
        <?= wp_nav_menu([]); ?>
    </div>
</div>