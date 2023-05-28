<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO -->
    <title> <?= $title ?? 'AOHOM' ?> </title>

    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#346cb0">

    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#346cb0">

    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#346cb0">
    <meta name="apple-mobile-web-app-capable" content="yes"/>

    <!--App manifest-->
    <link rel="manifest" href="<?= asset('assets/images/favicons/site.webmanifest') ?>">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= asset('assets/images/favicons/apple-touch-icon.png') ?>"
          type="image/png">
    <link rel="shortcut icon" href="<?= asset('assets/images/favicons/favicon.ico') ?>" type="image/x-icon">
    <link rel="icon" sizes="16x16" href="<?= asset('assets/images/favicons/favicon-16x16.png') ?>" type="image/png">
    <link rel="icon" sizes="32x32" href="<?= asset('assets/images/favicons/favicon-32x32.png') ?>" type="image/png">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="<?= asset('assets/fonts/firasans.css') ?>">

    <!-- Plugin styles -->
    <link rel="stylesheet" href="<?= asset('assets/vendor/fontawesome/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('assets/vendor/toastr/build/toastr.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('assets/vendor/sweetalert/sweetalert.min.css') ?>">

    <!-- Theme styles -->
    <link rel="stylesheet" href="<?= asset('assets/css/theme.min.css') ?>" data-skin="default">
    <link rel="stylesheet" href="<?= asset('assets/css/theme-dark.min.css') ?>" data-skin="dark">
    <link rel="stylesheet" href="<?= asset('assets/css/custom.css') ?>">

    <!-- Begin Base JS -->
    <script src="<?= asset('assets/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= asset('assets/vendor/popper.js/umd/popper.min.js') ?>"></script>
    <script src="<?= asset('assets/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
    <!-- End Base JS -->

    <script>
        const skin = localStorage.getItem('skin') || 'default';
        const disabledSkinStylesheet = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
        // Disable unused skin immediately
        disabledSkinStylesheet.setAttribute('rel', '');
        disabledSkinStylesheet.setAttribute('disabled', true);
        // add loading class to html immediately
        document.querySelector('html').classList.add('loading');
    </script>
</head>
<body>

<!--<div class="preloader">-->
<!--    <img src="--><?php //= asset('assets/images/preloaders/miniballs.svg') ?><!--" alt="">-->
<!--</div>-->