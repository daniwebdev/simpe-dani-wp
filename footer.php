
<footer class="mt-5">
    <div class="footer-top">
    
        <div class="container py-4">
            <div class="row">
                <div class="col-md-5 blog-info">
                    <h5 class="m-0 mb-3 p-0 fw-bold"><?=get_bloginfo( 'name' );?></h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, vitae inventore, officia repudiandae nobis nam autem accusantium, porro nemo quia aspernatur doloremque modi exercitationem voluptas. Ratione id quasi suscipit temporibus.
                    </p>
                </div>
                <div class="col-md-5">

                </div>
                <div class="col-md-5">

                </div>
            </div>
        </div>
    
    </div>
    <div class="py-2 container">
        <?= get_bloginfo( 'name' );?>
        <span class="d-block" id="y"></span>
    </div>
</footer>


<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script src="<?= get_template_directory_uri();?>/js/script.js"></script>

<script>
    document.getElementById('y').innerHTML = new Date().getFullYear();
</script>

<?php wp_footer(); ?>

</body>

</html>