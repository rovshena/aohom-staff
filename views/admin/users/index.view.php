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
                                Ulanyjylar
                            </h1>
                        </header>
                        <div class="page-section">
                            <div class="section-block">
                                <div class="card card-body">
                                    <a href="#" class="btn btn-primary mr-auto">Ulanyjy goşmak</a>
                                    <hr>
                                    <div class="table-responsive">
                                        <table class="table table-hover align-middle">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Ulanyjy ady</th>
                                                <th>Ady</th>
                                                <th>Admin</th>
                                                <th style="width:160px; min-width:160px;">Amallar</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (!empty($users)) : ?>
                                                <?php foreach ($users as $user) : ?>
                                                    <tr>
                                                        <td><?= $user['id'] ?></td>
                                                        <td><?= $user['username'] ?></td>
                                                        <td><?= $user['name'] ?></td>
                                                        <td>
                                                            <?php if ($user['is_admin']) : ?>
                                                                <i class="fas fa-check-circle fa-fw fa-lg text-success"></i>
                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);"
                                                               data-href="##"
                                                               class="btn btn-subtle-danger btn-sm mr-2 delete-item">
                                                                <i class="fas fa-trash-alt fa-fw"></i>
                                                            </a>
                                                            <form action="/admin/user" class="delete-form"
                                                                  method="POST">
                                                                <input type="hidden" name="_method" value="DELETE">
                                                                <input type="hidden" name="id"
                                                                       value="<?= $user['id'] ?>">
                                                            </form>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            <?php else : ?>
                                                <tr>
                                                    <td colspan="5" class="text-center">
                                                        <i>Maglumat tapylmady.</i>
                                                    </td>
                                                </tr>
                                            <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
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