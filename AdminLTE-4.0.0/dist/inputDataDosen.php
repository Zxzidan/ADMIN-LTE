<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>AdminLTE 4 | Input Data Dosen</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta name="color-scheme" content="light dark" />
    <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)" />
    <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)" />

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
        crossorigin="anonymous" media="print" onload="this.media='all'" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css"
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/adminlte.css" />
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">

        <!--begin::Header-->
        <?php include 'navbar.php'; ?>
        <!--end::Header-->

        <!--begin::Sidebar-->
        <?php include 'sidebar.php'; ?>
        <!--end::Sidebar-->

        <!--begin::App Main-->
        <main class="app-main">

            <!--begin::App Content Header-->
            <div class="app-content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Input Data Dosen</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Input Data Dosen</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::App Content Header-->

            <!--begin::App Content-->
            <div class="app-content">
                <div class="container-fluid">
                    <div class="row g-4">

                        <!-- Form Input Data Dosen -->
                        <div class="col-12">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="bi bi-person-plus-fill me-2"></i>
                                        Form Input Data Dosen
                                    </h3>
                                </div>
                                <form action="proses_dosen.php" method="POST">
                                    <div class="card-body">
                                        <div class="row">

                                            <!-- NIP -->
                                            <div class="col-md-6 mb-3">
                                                <label for="nip" class="form-label fw-semibold">
                                                    NIP <span class="text-danger">*</span>
                                                </label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="nip"
                                                    name="nip"
                                                    placeholder="Masukkan NIP"
                                                    required />
                                            </div>

                                            <!-- Nama Dosen -->
                                            <div class="col-md-6 mb-3">
                                                <label for="nama" class="form-label fw-semibold">
                                                    Nama Dosen <span class="text-danger">*</span>
                                                </label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="nama"
                                                    name="nama"
                                                    placeholder="Masukkan nama lengkap"
                                                    required />
                                            </div>

                                            <!-- Jenis Kelamin -->
                                            <div class="col-md-6 mb-3">
                                                <label for="jenis_kelamin" class="form-label fw-semibold">
                                                    Jenis Kelamin <span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                                                    <option value="" disabled selected>-- Pilih Jenis Kelamin --</option>
                                                    <option value="L">Laki-laki</option>
                                                    <option value="P">Perempuan</option>
                                                </select>
                                            </div>

                                            <!-- Program Studi -->
                                            <div class="col-md-6 mb-3">
                                                <label for="prodi" class="form-label fw-semibold">
                                                    Program Studi <span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select" id="prodi" name="prodi" required>
                                                    <option value="" disabled selected>-- Pilih Program Studi --</option>
                                                    <option value="TI">Teknik Informatika</option>
                                                    <option value="SI">Sistem Informasi</option>
                                                    <option value="MI">Manajemen Informatika</option>
                                                </select>
                                            </div>

                                            <!-- Email -->
                                            <div class="col-md-6 mb-3">
                                                <label for="email" class="form-label fw-semibold">
                                                    Email <span class="text-danger">*</span>
                                                </label>
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="bi bi-envelope-fill"></i>
                                                    </span>
                                                    <input
                                                        type="email"
                                                        class="form-control"
                                                        id="email"
                                                        name="email"
                                                        placeholder="contoh@email.com"
                                                        required />
                                                </div>
                                            </div>

                                            <!-- No. Telepon -->
                                            <div class="col-md-6 mb-3">
                                                <label for="telepon" class="form-label fw-semibold">No. Telepon</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="bi bi-telephone-fill"></i>
                                                    </span>
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        id="telepon"
                                                        name="telepon"
                                                        placeholder="08xxxxxxxxxx" />
                                                </div>
                                            </div>

                                            <!-- Alamat -->
                                            <div class="col-12 mb-3">
                                                <label for="alamat" class="form-label fw-semibold">Alamat</label>
                                                <textarea
                                                    class="form-control"
                                                    id="alamat"
                                                    name="alamat"
                                                    rows="3"
                                                    placeholder="Masukkan alamat lengkap"></textarea>
                                            </div>

                                            <!-- Status Aktif -->
                                            <div class="col-12 mb-3">
                                                <label class="form-label fw-semibold">Status</label>
                                                <div class="form-check form-switch">
                                                    <input
                                                        class="form-check-input"
                                                        type="checkbox"
                                                        role="switch"
                                                        id="status"
                                                        name="status"
                                                        value="1"
                                                        checked />
                                                    <label class="form-check-label" for="status">Dosen Aktif</label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card-footer d-flex gap-2">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="bi bi-save me-1"></i> Simpan
                                        </button>
                                        <a href="./dataDosen.php" class="btn btn-secondary">
                                            <i class="bi bi-arrow-left me-1"></i> Kembali
                                        </a>
                                        <button type="reset" class="btn btn-outline-danger ms-auto">
                                            <i class="bi bi-x-circle me-1"></i> Reset
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--end::App Content-->

        </main>
        <!--end::App Main-->

        <!--begin::Footer-->
        <footer class="app-footer">
            <div class="float-end d-none d-sm-inline">Sistem Manajemen</div>
            <strong>
                Copyright &copy; 2026&nbsp;
                <a href="#" class="text-decoration-none">Sistem Manajemen</a>.
            </strong>
            All rights reserved.
        </footer>
        <!--end::Footer-->

    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="./js/adminlte.js"></script>

    <script>
        // OverlayScrollbars
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarWrapper = document.querySelector('.sidebar-wrapper');
            const isMobile = window.innerWidth <= 992;
            if (sidebarWrapper && OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined && !isMobile) {
                OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                    scrollbars: {
                        theme: 'os-theme-light',
                        autoHide: 'leave',
                        clickScroll: true
                    },
                });
            }
        });

        // Color Mode
        (() => {
            const STORAGE_KEY = 'lte-theme';
            const getStoredTheme = () => localStorage.getItem(STORAGE_KEY);
            const setStoredTheme = (t) => localStorage.setItem(STORAGE_KEY, t);
            const prefersDark = () => globalThis.matchMedia('(prefers-color-scheme: dark)').matches;
            const getPreferredTheme = () => getStoredTheme() || (prefersDark() ? 'dark' : 'light');
            const setTheme = (t) => {
                document.documentElement.setAttribute('data-bs-theme',
                    t === 'auto' ? (prefersDark() ? 'dark' : 'light') : t);
            };
            setTheme(getPreferredTheme());
            const showActiveTheme = (theme) => {
                document.querySelectorAll('[data-bs-theme-value]').forEach((el) => {
                    el.classList.remove('active');
                    el.setAttribute('aria-pressed', 'false');
                    const check = el.querySelector('.bi-check-lg');
                    if (check) check.classList.add('d-none');
                });
                const active = document.querySelector(`[data-bs-theme-value="${theme}"]`);
                if (active) {
                    active.classList.add('active');
                    active.setAttribute('aria-pressed', 'true');
                    const check = active.querySelector('.bi-check-lg');
                    if (check) check.classList.remove('d-none');
                }
                document.querySelectorAll('[data-lte-theme-icon]').forEach((icon) => {
                    icon.classList.toggle('d-none', icon.dataset.lteThemeIcon !== theme);
                });
            };
            document.addEventListener('DOMContentLoaded', () => {
                showActiveTheme(getPreferredTheme());
                document.querySelectorAll('[data-bs-theme-value]').forEach((toggle) => {
                    toggle.addEventListener('click', () => {
                        const theme = toggle.getAttribute('data-bs-theme-value');
                        setStoredTheme(theme);
                        setTheme(theme);
                        showActiveTheme(theme);
                    });
                });
            });
        })();
    </script>

</body>

</html>