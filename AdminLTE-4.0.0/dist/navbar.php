<nav class="app-header navbar navbar-expand bg-body">
    <div class="container-fluid">

        <!--begin::Start Navbar Links-->
        <ul class="navbar-nav">
            <!-- Tombol toggle sidebar -->
            <li class="nav-item">
                <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                    <i class="bi bi-list"></i>
                </a>
            </li>

            <!-- Live Preview -->
            <li class="nav-item d-none d-md-block">
                <a href="./index.php" class="nav-link">
                    <i class="bi bi-grid-1x2 me-1" aria-hidden="true"></i>
                    Live preview
                </a>
            </li>

            <!-- Documentation -->
            <li class="nav-item d-none d-md-block">
                <a href="./docs/introduction.php" class="nav-link">
                    <i class="bi bi-book me-1" aria-hidden="true"></i>
                    Documentation
                </a>
            </li>
        </ul>
        <!--end::Start Navbar Links-->

        <!--begin::End Navbar Links-->
        <ul class="navbar-nav ms-auto">

            <!-- Search -->
            <li class="nav-item">
                <a class="nav-link" href="#" role="button">
                    <i class="bi bi-search"></i>
                </a>
            </li>

            <!-- Notifikasi -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-bs-toggle="dropdown" href="#">
                    <i class="bi bi-bell-fill"></i>
                    <span class="navbar-badge badge text-bg-warning">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <span class="dropdown-item dropdown-header">3 Notifikasi</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="bi bi-envelope me-2"></i> Pesan baru
                        <span class="float-end text-secondary fs-7">5 menit lalu</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">Lihat Semua</a>
                </div>
            </li>

            <!-- Fullscreen -->
            <li class="nav-item">
                <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                    <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
                    <i data-lte-icon="minimize" class="bi bi-fullscreen-exit d-none"></i>
                </a>
            </li>

            <!-- Color Mode -->
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="bd-theme"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-sun-fill" data-lte-theme-icon="light"></i>
                    <i class="bi bi-moon-fill d-none" data-lte-theme-icon="dark"></i>
                    <i class="bi bi-circle-half d-none" data-lte-theme-icon="auto"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="bd-theme"
                    style="--bs-dropdown-min-width: 8rem">
                    <li>
                        <button type="button" class="dropdown-item d-flex align-items-center"
                            data-bs-theme-value="light">
                            <i class="bi bi-sun-fill me-2"></i> Light
                            <i class="bi bi-check-lg ms-auto d-none"></i>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="dropdown-item d-flex align-items-center"
                            data-bs-theme-value="dark">
                            <i class="bi bi-moon-fill me-2"></i> Dark
                            <i class="bi bi-check-lg ms-auto d-none"></i>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="dropdown-item d-flex align-items-center active"
                            data-bs-theme-value="auto" aria-pressed="true">
                            <i class="bi bi-circle-half me-2"></i> Auto
                            <i class="bi bi-check-lg ms-auto d-none"></i>
                        </button>
                    </li>
                </ul>
            </li>

            <!-- User Menu -->
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img
                        src="./assets/img/Dandi.jpg"
                        class="user-image rounded-circle shadow"
                        alt="User Image" />
                    <span class="d-none d-md-inline">Dandi Azaidane</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <li class="user-header text-bg-primary">
                        <img
                            src="./assets/img/Dandi.jpg"
                            class="rounded-circle shadow"
                            alt="User Image" />
                        <p>
                            Dandi Azaidane
                            <small>Administrator</small>
                        </p>
                    </li>
                    <li class="user-body">
                        <div class="row">
                            <div class="col-4 text-center">
                                <a href="#">Profil</a>
                            </div>
                            <div class="col-4 text-center">
                                <a href="#">Pengaturan</a>
                            </div>
                            <div class="col-4 text-center">
                                <a href="#">Bantuan</a>
                            </div>
                        </div>
                    </li>
                    <li class="user-footer">
                        <a href="#" class="btn btn-outline-secondary">Profil</a>
                        <a href="#" class="btn btn-outline-danger float-end">Keluar</a>
                    </li>
                </ul>
            </li>

        </ul>
        <!--end::End Navbar Links-->

    </div>
</nav>