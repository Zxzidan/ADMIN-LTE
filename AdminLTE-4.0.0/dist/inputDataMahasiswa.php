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
            <div class="app-main-content">
                <div class="container-fluid p-4">
                    <h1 class="mb-4">Input Data Mahasiswa</h1>
                    <form action="./proses_input_mahasiswa.php" method="POST">
                        <div class="mb-3">
                            <label for="npm" class="form-label">NPM</label>
                            <input type="text" class="form-control" id="npm" name="npm" required>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <input type="text" class="form-control" id="jurusan" name="jurusan" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
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