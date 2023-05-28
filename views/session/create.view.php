<?php require base_path('views/partials/head.php') ?>

<main class="auth justify-content-center">
    <div class="text-center">
        <img src="<?= asset('assets/images/favicons/android-chrome-192x192.png') ?>" alt="Logo"
             style="max-height: 120px;">
        <h5 class="my-md-3">Dolandyryş paneli | Giriş</h5>
    </div>
    <form class="auth-form" action="/session" method="POST" onsubmit="disableSubmitButton();">
        <div class="form-group">
            <div class="form-label-group">
                <input type="text" id="username"
                       class="form-control <?= isset($errors['username']) ? 'is-invalid' : '' ?>"
                       name="username" value="<?= old('username') ?>" required autocomplete="username" autofocus>
                <label for="username">
                    Ulanyjy ady <abbr title="Hökman doldurmaly">*</abbr>
                </label>
                <?php if (isset($errors['username'])) : ?>
                    <span class="invalid-feedback" role="alert">
                    <strong><?= $errors['username'] ?></strong>
                </span>
                <?php endif; ?>
            </div>
        </div>
        <div class="form-group">
            <div class="form-label-group">
                <input type="password" id="password"
                       class="form-control <?= isset($errors['password']) ? 'is-invalid' : '' ?>"
                       name="password" required autocomplete="current-password">
                <label for="password">
                    Parol <abbr title="Hökman doldurmaly">*</abbr>
                </label>
                <?php if (isset($errors['password'])) : ?>
                    <span class="invalid-feedback" role="alert">
                    <strong><?= $errors['password'] ?></strong>
                </span>
                <?php endif; ?>
            </div>
        </div>
        <div class="form-group">
            <button class="btn btn-lg btn-primary btn-block d-flex align-items-center justify-content-center"
                    type="submit" id="submit-button">
                <span id="loading" class="spinner-border spinner-border-sm d-none mr-2" role="status"
                      aria-hidden="true"></span>
                Giriş
            </button>
        </div>
    </form>
</main>

<?php require base_path('views/partials/footer.php') ?>
