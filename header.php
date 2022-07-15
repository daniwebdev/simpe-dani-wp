<!--
============================================================================
    ____  ___    _   _______       ____________  ____  _______    __
   / __ \/   |  / | / /  _/ |     / / ____/ __ )/ __ \/ ____/ |  / /
  / / / / /| | /  |/ // / | | /| / / __/ / __  / / / / __/  | | / / 
 / /_/ / ___ |/ /|  // /  | |/ |/ / /___/ /_/ / /_/ / /___  | |/ /  
/_____/_/  |_/_/ |_/___/  |__/|__/_____/_____/_____/_____/  |___/   

Theme   : <?= wp_get_theme()->get('Name').PHP_EOL; ?>
Version : <?= wp_get_theme()->get('Version'); ?>

============================================================================
-->
<!doctype html>

<html <?php language_attributes(); ?> class="no-js" >

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600&amp;display=swap" />
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <WP Head> -->
    <?= wp_head(); ?>
    <!-- </WP Head> -->

    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css?v=<?=wp_get_theme()->get("Version");?>">

</head>

<body class="dark" >

    <header class="mt-4 d-none d-md-block">
        <div class="container d-block d-md-flex text-center text-md-start">
            
            <div class="image">
                <a href="<?=get_bloginfo('wpurl');?>">
                    <img class="rounded-circle" width="150" src="https://www.gravatar.com/avatar/<?=md5('me@dani.work');?>?s=300" alt="" />
                </a>
            </div>

            <div class="profile" style="width: 100%">
                <div class="d-md-flex d-block justify-content-between">
                    <div>
                        <h6 class="title m-0"><?= get_bloginfo( 'name' );?></h6>
                        <h6 class="mt-1">Software Engineer <span class="mx-2">·</span> Fullstack</h6>
                    </div>
                    <div>
                        <button id="button-light" class="toggle-theme d-none">
                            <svg viewBox="0 0 24 24" width="36" height="36" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                        </button>
                        <button id="button-dark" class="toggle-theme">
                            <svg viewBox="0 0 24 24" width="36" height="36" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
                        </button>
                    </div>
                </div>
                <div class="border-top mb-2 mt-2"></div>

                <div id="contact">
                    <span class="d-block mb-1"><i class="fas fa-envelope"></i>
                        <a href="mailto:me@dani.work">me@dani.work</a>
                    </span>
                    <span class="d-block mb-1"><i class="fab fa-github"></i>
                        <a href="https://github.com/daniwebdev">daniwebdev</a></span>
                    <span class="d-block mb-1">
                        <i class="fab fa-instagram"></i>
                        <a href="https://instagram.com/daniwebdev">daniwebdev</a>
                    </span>
                </div>
            </div>
        </div>
    </header>

    <nav class="mb-3 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="navbar navbar-expand-lg navbar-light">

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        
                        <div class="collapse navbar-collapse" id="navbarNav">
                        <?php
                            //wp_nav_menu
                            wp_nav_menu([

                            ]);
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <nav class="py-5 d-block d-md-none">
        <div class="d-flex container justify-content-between">
            <div class="d-flex align-items-center gap-3">
                <img class="rounded-circle" width="70" src="https://www.gravatar.com/avatar/<?=md5('me@dani.work');?>?s=300" alt="" />
                <div>
                    <h5>
                        <a href="<?= get_home_url(); ?>">
                            <?= get_bloginfo( 'name' );?>
                        </a>
                    </h5>
                    <h6>Software Engineer <span class="mx-2">·</span> Fullstack</h6>
                </div>
            </div>

            <div>
                <button id="button-light" class="toggle-theme d-none">
                    <svg viewBox="0 0 24 24" width="36" height="36" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                </button>
                <button id="button-dark" class="toggle-theme">
                    <svg viewBox="0 0 24 24" width="36" height="36" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
                </button>
            </div>
        </div>
    </nav>

    <div id="content" hidden>
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-6 menu-item text-center">
                    <a href="https://dani.work/blog" target="_blank">
                        <div class="card">
                            <div class="card-body">
                                <span class="icon d-block">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file">
                                        <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                        <polyline points="13 2 13 9 20 9"></polyline>
                                    </svg>
                                </span>
                                <span> Article </span>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-6 menu-item text-center">
                    <a href="https://dani.work/blog/category/portofolio/" target="_blank">
                        <div class="card">
                            <div class="card-body">
                                <span class="icon d-block">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase">
                                        <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                    </svg>
                                </span>
                                <span> Portofolio </span>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-6 mt-sm-4 mt-md-0 menu-item text-center">
                    <a href="https://dani.work/blog/category/journal/" target="_blank">
                        <div class="card">
                            <div class="card-body">
                                <span class="icon d-block">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book-open">
                                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                                        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                                    </svg>
                                </span>
                                <span class="menu-title"> Journal </span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>