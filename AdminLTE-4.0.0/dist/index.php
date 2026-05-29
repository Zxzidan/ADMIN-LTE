<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>AdminLTE v4 | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
        crossorigin="anonymous" media="print" onload="this.media='all'" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css"
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css"
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
            <div class="app-content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Dashboard</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="app-content">
                <div class="container-fluid">
                    <div class="row">

                        <!-- Widget 1 -->
                        <div class="col-lg-3 col-6">
                            <div class="small-box text-bg-primary">
                                <div class="inner">
                                    <h3>150</h3>
                                    <p>Dosen Aktif</p>
                                </div>
                                <i class="small-box-icon bi bi-person-badge-fill"></i>
                                <a href="./dataDosen.php"
                                    class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                                    Lihat Data <i class="bi bi-link-45deg"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Widget 2 -->
                        <div class="col-lg-3 col-6">
                            <div class="small-box text-bg-success">
                                <div class="inner">
                                    <h3>320</h3>
                                    <p>Mahasiswa Aktif</p>
                                </div>
                                <i class="small-box-icon bi bi-people-fill"></i>
                                <a href="./dataMahasiswa.php"
                                    class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                                    Lihat Data <i class="bi bi-link-45deg"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Widget 3 -->
                        <div class="col-lg-3 col-6">
                            <div class="small-box text-bg-warning">
                                <div class="inner">
                                    <h3>10</h3>
                                    <p>Mata Kuliah</p>
                                </div>
                                <i class="small-box-icon bi bi-book-fill"></i>
                                <a href="#"
                                    class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover">
                                    Lihat Data <i class="bi bi-link-45deg"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Widget 4 -->
                        <div class="col-lg-3 col-6">
                            <div class="small-box text-bg-danger">
                                <div class="inner">
                                    <h3>5</h3>
                                    <p>Mitra</p>
                                </div>
                                <i class="small-box-icon bi bi-building-fill"></i>
                                <a href="#"
                                    class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                                    Lihat Data <i class="bi bi-link-45deg"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                   
                    
                </div>
            </div>
        </main>
        <!--end::App Main-->

        <footer class="app-footer">
            <div class="float-end d-none d-sm-inline">Sistem Manajemen</div>
            <strong>Copyright &copy; 2026&nbsp;
                <a href="#" class="text-decoration-none">Sistem Manajemen</a>.
            </strong> All rights reserved.
        </footer>

    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="./js/adminlte.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js" crossorigin="anonymous"></script>

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
            document.addEventListener('DOMContentLoaded', () => {
                document.querySelectorAll('[data-bs-theme-value]').forEach((el) => {
                    el.addEventListener('click', () => {
                        const t = el.getAttribute('data-bs-theme-value');
                        setStoredTheme(t);
                        setTheme(t);
                    });
                });
            });
        })();

        // Chart
        const sales_chart = new ApexCharts(document.querySelector('#revenue-chart'), {
            series: [{
                    name: 'Dosen',
                    data: [10, 20, 15, 30, 25, 40, 35]
                },
                {
                    name: 'Mahasiswa',
                    data: [50, 80, 70, 120, 100, 150, 130]
                },
            ],
            chart: {
                height: 250,
                type: 'area',
                toolbar: {
                    show: false
                }
            },
            colors: ['#0d6efd', '#20c997'],
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth'
            },
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul'],
            },
        });
        sales_chart.render();

        // Map
        new jsVectorMap({
            selector: '#world-map',
            map: 'world'
        });
    </script>

</body>

</html>