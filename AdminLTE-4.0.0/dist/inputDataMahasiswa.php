<?php
include 'koneksi.php';

$is_edit = false;
$id = '';
$npm = '';
$nama = '';
$jurusan = '';

if (isset($_GET['id'])) {
    $is_edit = true;
    $id = intval($_GET['id']);
    $stmt = $mysqli->prepare("SELECT * FROM mahasiswa WHERE id_mahasiswa = ?");
    if ($stmt) {
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($row = $result->fetch_assoc()) {
            $npm = $row['npm_mahasiswa'];
            $nama = $row['nama_mahasiswa'];
            $jurusan = $row['jurusan_mahasiswa'];
        }
        $stmt->close();
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>AdminLTE 4 | <?php echo $is_edit ? 'Edit Data Mahasiswa' : 'Input Data Mahasiswa'; ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta name="color-scheme" content="light dark" />
    <meta name="theme-color" content="#20c997" media="(prefers-color-scheme: light)" />
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
                            <h3 class="mb-0"><?php echo $is_edit ? 'Edit Data Mahasiswa' : 'Input Data Mahasiswa'; ?></h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $is_edit ? 'Edit Data Mahasiswa' : 'Input Data Mahasiswa'; ?></li>
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

                        <!-- Form Input Data Mahasiswa -->
                        <div class="col-12">
                            <div class="card card-success card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="bi <?php echo $is_edit ? 'bi-pencil-square' : 'bi-person-plus-fill'; ?> me-2"></i>
                                        Form <?php echo $is_edit ? 'Edit Data Mahasiswa' : 'Input Data Mahasiswa'; ?>
                                    </h3>
                                </div>
                                <form action="aksi.php?act=<?php echo $is_edit ? 'edit_mahasiswa&id='.$id : 'insert_mahasiswa'; ?>" method="POST">
                                    <div class="card-body">
                                        <div class="row">

                                            <!-- NPM -->
                                            <div class="col-md-6 mb-3">
                                                <label for="npm" class="form-label fw-semibold">
                                                    NPM <span class="text-danger">*</span>
                                                </label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="npm"
                                                    name="npm"
                                                    placeholder="Masukkan NPM"
                                                    value="<?php echo htmlspecialchars($npm); ?>"
                                                    required />
                                            </div>

                                            <!-- Nama Mahasiswa -->
                                            <div class="col-md-6 mb-3">
                                                <label for="nama" class="form-label fw-semibold">
                                                    Nama Mahasiswa <span class="text-danger">*</span>
                                                </label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="nama"
                                                    name="nama"
                                                    placeholder="Masukkan nama lengkap"
                                                    value="<?php echo htmlspecialchars($nama); ?>"
                                                    required />
                                            </div>

                                            <!-- Jurusan -->
                                            <div class="col-12 mb-3">
                                                <label for="jurusan" class="form-label fw-semibold">
                                                    Jurusan <span class="text-danger">*</span>
                                                </label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="jurusan"
                                                    name="jurusan"
                                                    placeholder="Masukkan jurusan"
                                                    value="<?php echo htmlspecialchars($jurusan); ?>"
                                                    required />
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card-footer d-flex gap-2">
                                        <button type="submit" class="btn btn-success">
                                            <i class="bi bi-save me-1"></i> <?php echo $is_edit ? 'Update' : 'Submit'; ?>
                                        </button>
                                        <a href="./dataMahasiswa.php" class="btn btn-secondary">
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