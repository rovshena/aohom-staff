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
                                <i class="fas fa-user-friends fa-fw mr-2 text-muted"></i>
                                Ulanyjy üýtgetmek
                            </h1>
                        </header>
                        <div class="page-section">
                            <div class="section-block">
                                <div class="card card-body">
                                    <form method="post" action="/admin/user"
                                          onsubmit="disableSubmitButton();">
                                        <input type="hidden" name="_method" value="PUT">
                                        <input type="hidden" name="id" value="<?= $user['id'] ?>">
                                        <div class="form-group">
                                            <label for="username">
                                                Ulanyjy ady <abbr title="Hökman doldurmaly">*</abbr>
                                            </label>
                                            <input type="text"
                                                   class="form-control <?= isset($errors['username']) ? 'is-invalid' : '' ?>"
                                                   id="username" value="<?= old('username', $user['username']) ?>"
                                                   name="username" required
                                                   autofocus>
                                            <?php if (isset($errors['username'])) : ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?= $errors['username'] ?></strong>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">
                                                Ady <abbr title="Hökman doldurmaly">*</abbr>
                                            </label>
                                            <input type="text"
                                                   class="form-control <?= isset($errors['name']) ? 'is-invalid' : '' ?>"
                                                   id="name" value="<?= old('name', $user['name']) ?>" name="name"
                                                   required>
                                            <?php if (isset($errors['name'])) : ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?= $errors['name'] ?></strong>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">
                                                Parol
                                            </label>
                                            <input type="password"
                                                   class="form-control <?= isset($errors['password']) ? 'is-invalid' : '' ?>"
                                                   id="password" name="password">
                                            <?php if (isset($errors['password'])) : ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?= $errors['password'] ?></strong>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="password-confirm">
                                                Paroly gaýtala
                                            </label>
                                            <input type="password"
                                                   class="form-control <?= isset($errors['password']) ? 'is-invalid' : '' ?>"
                                                   id="password-confirm" name="password_confirmation">
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
                                                      role="status" aria-hidden="true"></span> Üýtgetmek
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