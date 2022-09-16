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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">

    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css?v=<?=wp_get_theme()->get("Version");?>">

    <script async defer data-website-id="42776a03-0e07-4ab1-aea5-f556c5bf0a17" src="https://stats.onbox.my.id/umami.js"></script>
</head>

<body class="dark" >
    <div id="" class="search-modal" data-behaviour="modal">
        <button onclick="toogleSearchModal()" class="btn position-absolute bg-transparent search-modal-dissmis">
            <i class="fa fa-times" aria-hidden="true"></i>
        </button>

        <form action="<?=get_home_url();?>">
            <div class="input-group" style="max-width: 800px">
                <input type="text" name="s" class="form-control text-white" placeholder="Search...">
                <button type="button" class="btn btn-outline-primary">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </div>
        </form>
    </div>  

    <?=get_template_part( 'template-parts/navbar');?>