<?php require base_path('views/partials/head.php') ?>

    <div class="app">

        <?php require base_path('views/admin/partials/head.php') ?>
        <?php require base_path('views/admin/partials/sidebar.php') ?>

        <main class="app-main">
            <div class="wrapper">
                <div class="page">
                    <div class="page-inner">

                        <header class="page-title-bar">
                            <h1 class="page-title text-truncate">
                                <i class="fas fa-key fa-fw mr-2 text-muted"></i>
                                Parol çalyşmak
                            </h1>
                        </header>
                        <div class="page-section">
                            <div class="section-block">
                                <div class="card card-body">
                                    <form method="post" action="/admin/change-password"
                                          onsubmit="disableSubmitButton();">
                                        <input type="hidden" name="_method" value="PUT"/>
                                        <div class="form-group">
                                            <label for="current_password">
                                                Häzirki parol
                                                <abbr title="Hökman doldurmaly">*</abbr>
                                            </label>
                                            <input type="password"
                                                   class="form-control <?= isset($errors['current_password']) ? 'is-invalid' : '' ?>"
                                                   id="current_password" name="current_password" required autofocus>
                                            <?php if (isset($errors['current_password'])) : ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?= $errors['current_password'] ?></strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">
                                                Täze parol
                                                <abbr title="Hökman doldurmaly">*</abbr>
                                            </label>
                                            <input type="password"
                                                   class="form-control <?= isset($errors['password']) ? 'is-invalid' : '' ?>"
                                                   id="password" name="password" required>
                                            <?php if (isset($errors['password'])) : ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?= $errors['password'] ?></strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="password-confirm">
                                                Paroly gaýtala
                                                <abbr title="Hökman doldurmaly">*</abbr>
                                            </label>
                                            <input type="password"
                                                   class="form-control <?= isset($errors['password']) ? 'is-invalid' : '' ?>"
                                                   id="password-confirm" name="password_confirmation" required>
                                            <?php if (isset($errors['password'])) : ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?= $errors['password'] ?></strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-actions">
                                            <button type="submit"
                                                    class="btn btn-primary d-flex align-items-center justify-content-center"
                                                    id="submit-button">
                                                <span id="loading" class="spinner-border spinner-border-sm d-none mr-2"
                                                      role="status" aria-hidden="true"></span>
                                                Üýtgetmek
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <?php require base_path('views/admin/partials/footer.php') ?>

        </main>
    </div>

<?php require base_path('views/partials/footer.php') ?>