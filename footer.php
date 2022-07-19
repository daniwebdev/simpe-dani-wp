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
                    <h5 class="m-0 mb-3 p-0 fw-bold">Contact</h5>

                    <ul>
                        <li class="d-flex gap-3 align-items-center">
                            <div style="width: 24px; height: 24px;">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                    <path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                </svg>
                            </div>
                            <div>
                                <h6 class="m-0">Whatsapp</h6>
                                <p>+6285717453300</p>
                            </div>
                        </li>
                        <li class="d-flex gap-3 align-items-center">
                            <div style="width: 24px; height: 24px;">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                    <circle cx="12" cy="12" r="4"></circle>
                                    <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                                </svg>
                            </div>
                            <div>
                                <h6 class="m-0">Email</h6>
                                <p>me@dani.work</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <div class="py-2 container d-block d-md-flex text-center text-md-normal justify-content-between" style="font-size: 14px">
        <ul class="footer-navigation">
            <li>
                <a href="/sitemap.xml">Sitemap</a>
            </li>
            <li>
                <a href="/disclaimer">Disclaimer</a>
            </li>
            <li>
                <a href="/privacy">Privacy Policy</a>
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