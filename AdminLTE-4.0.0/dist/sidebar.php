<!--begin::Sidebar-->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <div class="sidebar-brand">
        <a href="./index.php" class="brand-link">
            <img src="./assets/img/AdminLTELogo.png" alt="AdminLTE Logo"
                class="brand-image opacity-75 shadow" />
            <span class="brand-text fw-light">Sistem Pendataan</span>
        </a>
    </div>

    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column"
                data-lte-toggle="treeview"
                role="navigation"
                aria-label="Main navigation"
                data-accordion="false"
                id="navigation">

                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="./index.php" class="nav-link">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Input Data -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-pencil-square"></i>
                        <p>
                            Input Data
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./inputDataDosen.php" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Input Dosen</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./inputDataMahasiswa.php" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Input Mahasiswa</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Data Tabel -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-table"></i>
                        <p>
                            Data Tabel
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="datadosen.php" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Data Dosen</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="dataMahasiswa.php" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Data Mahasiswa</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>
</aside>
<!--end::Sidebar-->