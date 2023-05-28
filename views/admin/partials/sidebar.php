<aside class="app-aside app-aside-expand-md app-aside-light">
    <div class="aside-content">
        <header class="aside-header d-block d-md-none">
            <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside">
				<span class="user-avatar user-avatar-lg">
					<img src="<?= asset('assets/images/avatars/placeholder.jpg') ?>" alt="">
				</span>
                <span class="account-icon">
					<span class="fas fa-caret-down fa-lg"></span>
				</span>
                <span class="account-summary">
					<span class="account-name"><?= auth()['username'] ?></span>
                    <span class="account-description"><?= auth()['name'] ?></span>
				</span>
            </button>
            <div id="dropdown-aside" class="dropdown-aside collapse">
                <div class="pb-3">
                    <a class="dropdown-item" href="/admin/change-password">
                        <span class="dropdown-icon fas fa-key fa-fw"></span>Parol çalyşmak
                    </a>
                    <a class="dropdown-item" href="javascript:void(0);"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <span class="dropdown-icon fas fa-sign-out-alt fa-fw"></span>Çykyş
                    </a>
                </div>
            </div>
        </header>
        <div class="aside-menu overflow-hidden">
            <nav id="stacked-menu" class="stacked-menu">
                <ul class="menu">
                    <li class="menu-item <?= urlIs('/admin') ? 'has-active' : '' ?>">
                        <a href="/admin" class="menu-link">
                            <span class="menu-icon fas fa-home"></span>
                            <span class="menu-text">Baş sahypa</span>
                        </a>
                    </li>
                    <?php if (isAdmin()) : ?>
                        <li class="menu-item <?= urlIs('/admin/users') ? 'has-active' : '' ?>">
                            <a href="/admin/users" class="menu-link">
                                <span class="menu-icon fas fa-user-friends"></span>
                                <span class="menu-text">Ulanyjylar</span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <li class="menu-item <?= urlIs('/admin/candidates') ? 'has-active' : '' ?>">
                        <a href="/admin/candidates" class="menu-link">
                            <span class="menu-icon fas fa-user-graduate"></span>
                            <span class="menu-text">Dalaşgärler</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                           class="menu-link">
                            <span class="menu-icon fas fa-sign-out-alt"></span>
                            <span class="menu-text">Çykyş</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <footer class="aside-footer border-top p-2">
            <button class="btn btn-light btn-block text-primary" data-toggle="skin">
                <span class="d-compact-menu-none">Garaňky görnüşi</span>
                <i class="fas fa-moon ml-1"></i>
            </button>
        </footer>
    </div>
</aside>
