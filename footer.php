<footer class="mt-5">
    <div class="footer-top">

        <div class="container py-4">
            <div class="row">
                <div class="col-md-5">
                    <h5 class="m-0 mb-3 p-0 fw-bold"><?= get_bloginfo('name'); ?></h5>
                    <p>
                        <?= get_bloginfo('description'); ?>
                    </p>
                </div>

                <div class="col-md-3">

                </div>

                <div class="col-md-3 footer-widget">
                    <?php dynamic_sidebar('footer_widget');?>

                </div>
            </div>
        </div>

    </div>
    <div class="py-2 container d-block d-md-flex text-center text-md-normal justify-content-between" style="font-size: 14px">
        <ul class="footer-navigation">
            <li>
                <a href="<?=home_url('about');?>">About</a>
            </li>
            <li>
                <a href="<?=home_url('sitemap_index.xml');?>">Sitemap</a>
            </li>
            <li>
                <a href="<?=home_url('privacy');?>">Privacy Policy</a>
            </li>
        </ul>

        <div class="" >
            Maintened by <a href="https://dani.work"><u>Me</u></a> with <i class="fas fa-heart text-danger"></i>
        </div>
    </div>
</footer>

<button class="btn back-to-top hidden">
    <i class="fas fa-arrow-up"></i>
</button>



<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script src="<?= get_template_directory_uri(); ?>/js/script.js?t=<?=wp_get_theme()->get('Version');?>"></script>

<?php wp_footer(); ?>

</body>

</html>