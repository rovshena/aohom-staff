<!-- Begin Plugins JS -->
<script src="<?= asset('assets/vendor/smoothscroll-for-websites/smooth.scroll.js') ?>"></script>

<?php if (auth() && isAdminPage()) : ?>
    <script src="<?= asset('assets/vendor/pace-progress/pace.min.js') ?>"></script>
    <script src="<?= asset('assets/vendor/stacked-menu/js/stacked-menu.min.js') ?>"></script>
<?php endif; ?>

<script src="<?= asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js') ?>"></script>
<script src="<?= asset('assets/vendor/toastr/build/toastr.min.js') ?>"></script>
<script src="<?= asset('assets/vendor/sweetalert/sweetalert.min.js') ?>"></script>
<!-- End Plugins JS -->

<!-- Begin Layout JS -->
<script src="<?= asset('assets/js/theme.min.js') ?>"></script>
<!-- End Layout JS -->

<!-- Begin Page Level JS -->
<script src="<?= asset('assets/js/layout.js') ?>"></script>
<!-- End Page Level JS -->

</body>

</html>