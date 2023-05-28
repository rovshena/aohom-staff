<!-- Begin Plugins JS -->
<script src="<?= asset('assets/vendor/smoothscroll-for-websites/smooth.scroll.js') ?>"></script>

<?php if (auth()) : ?>
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

<?php if (\Core\Session::has('success')) : ?>
    <script>
        toastr.success("<?= \Core\Session::get('success') ?>");
    </script>
<?php endif; ?>

<?php if (\Core\Session::has('error')) : ?>
    <script>
        toastr.error("<?= \Core\Session::get('error') ?>");
    </script>
<?php endif; ?>

<?php if (auth()) : ?>
    <script>
        $('body').on('click', '.delete-item', function () {
            const $form = $(this).parent('form')
            swal.fire({
                title: "Pozmak isleýärsiňizmi?",
                text: "Saýlan maglumatyňyzy hakykatdan hem pozmak isleýärsiňizmi?",
                type: "question",
                showCancelButton: true,
                confirmButtonText: "Hawa",
                cancelButtonText: "Ýok",
                onOpen: () => Swal.getCancelButton().focus()
            }).then((result) => {
                if (result.value) {
                    $form.submit()
                    // $('.preloader').show()
                }
            });
        });
    </script>
<?php endif; ?>

<script src="<?= asset('assets/js/layout.js') ?>"></script>
<!-- End Page Level JS -->

</body>

</html>