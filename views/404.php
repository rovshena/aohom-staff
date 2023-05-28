<?php require('partials/head.php') ?>

<main class="app empty-state empty-state-fullpage">
    <div class="col-12 empty-state-container">
        <div class="card">
            <div class="card-header bg-light text-left">
                <i class="fa fa-fw fa-circle text-red"></i>
                <i class="fa fa-fw fa-circle text-yellow"></i>
                <i class="fa fa-fw fa-circle text-teal"></i>
            </div>
            <div class="card-body">
                <h3 class="state-header"> 404 </h3>
                <p class="state-description lead"> Siziň gözleýän sahypaňyz tapylmady! </p>
                <div class="state-action">
                    <a href="<?= auth() ? '/admin' : '/' ?>" class="btn btn-lg btn-subtle-primary m-2"
                       title="Baş sahypa">
                        <i class="fas fa-home fa-fw mr-sm-1"></i>
                        <span class="d-none d-sm-inline">Baş sahypa</span>
                    </a>
                    <a href="javascript:void(0);" id="previous-link" class="btn btn-lg btn-subtle-success m-2"
                       title="Öňki sahypa">
                        <i class="fas fa-reply fa-fw mr-sm-1"></i>
                        <span class="d-none d-sm-inline">Öňki sahypa</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    $(document).ready(function () {
        $('#previous-link').click(function () {
            parent.history.back()
            return false
        });
    });
</script>

<?php require('partials/footer.php') ?>
