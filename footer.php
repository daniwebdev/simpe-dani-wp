<footer class="mt-5 p-3 border-top">
    <div class="container text-center">
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