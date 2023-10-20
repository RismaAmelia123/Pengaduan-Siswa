{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SMK - Pengaduan Siswa</title>
    <link href="{{ asset('asset/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">    
    <link href="{{ asset('asset/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-fw fa-user"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Pengaduan Siswa</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="/pengaduan">
                    <i class="fas fa-fw fa-comments"></i>
                    <span>Pengaduan</span>
                </a>
            <li class="nav-item">
                <a class="nav-link" href="/petugas">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Petugas</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/siswa">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Siswa</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/laporann">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Laporan</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="/logout/admin">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Keluar</span>
                </a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div class="ml-2">@yield('header')</div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <a href="" class="btn btn-white btn-sm">{{ Auth::guard('admin')->user()->nama_petugas }}</a>
                        </ul>
                    </div>
                </nav>

                <div class="container-fluid">
                    <div class="row">
                        @yield('content')
                    </div>
                </div>
            </div>
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; 2023 SMK YPC TASIKMALAYA</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript" src="https://code.highcharts.com/modules/exporting.js"></script>

    <script src="{{ asset('asset/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('asset/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <script src="{{ asset('asset/js/sb-admin-2.min.js') }}"></script>

    <script src="{{ asset('asset/vendor/chart.js/Chart.min.js') }}"></script>

    <script src="{{ asset('asset/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('asset/js/demo/chart-pie-demo.js') }}"></script>

    <script src="{{ asset('asset/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('asset/js/demo/datatables-demo.js') }}"></script>
</body>
</html> --}}

<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />
    <title>@yield('title')</title>
    <meta name="description" content="" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css')}}" />
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>
    <link href="{{ asset('asset/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
  </head>

  <body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <h4 class="demo menu-text fw-bolder ms-2">Pengaduan Siswa</h4>
                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>
                <div class="menu-inner-shadow"></div>
                    <ul class="menu-inner py-1">
                        <li class="menu-item {{ Request::segment(1) == 'dashboard'?'active':'' }}">
                        <a href="/dashboard" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="dashboard">Dashboard </div>
                        </a>
                        </li>
                        <li class="menu-header small text-uppercase">
                            <span class="menu-header-text">Menu</span>
                            <li class="menu-item {{ Request::segment(1) == 'kategori'?'active':'' }}">
                                <a href="/kategori" class="menu-link" >
                                <i class="menu-icon tf-icons bx bx-category-alt"></i>
                                <div data-i18n="Pengaduan">Kategori</div>
                                </a>
                            </li>
                            <li class="menu-item {{ Request::segment(1) == 'pengaduan'?'active':'' }}">
                                <a href="/pengaduan" class="menu-link" >
                                    <i class="menu-icon tf-icons bx bx-message-alt-detail"></i>
                                    <div data-i18n="Pengaduan">Pengaduan</div>
                                </a>
                            </li>
                            <li class="menu-item {{ Request::segment(1) == 'petugas'?'active':'' }}">
                                <a href="/petugas" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-user"></i>
                                <div data-i18n="Petugas">Petugas</div>
                                </a>
                            </li>
                            <li class="menu-item {{ Request::segment(1) == 'siswa'?'active':'' }}">
                                <a href="/siswa" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-user"></i>
                                <div data-i18n="Siswa">Siswa</div>
                                </a>
                            </li>
                            <li class="menu-item {{ Request::segment(1) == 'laporann'?'active':'' }}">
                                <a href="/laporann" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-folder"></i>
                                <div data-i18n="Laporann">Laporan</div>
                                </a>
                            </li>
                        </li>
                        <li class="menu-header small text-uppercase">
                            <span class="menu-header-text">Keluar</span>
                            <li class="menu-item">
                                <a href="/logout/admin" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-log-out"></i>
                                <div data-i18n="Keluar">Keluar</div>
                                </a>
                            </li>
                        </li>
                    </ul>
            </aside>
            <div class="layout-page">
                <div id="content-wrapper" class="d-flex flex-column">
                    <div id="content">
                        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)"><i class="bx bx-menu bx-sm"></i></a>
                            </div>
                            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                                <div class="ml-2">@yield('header')</div>
                                <ul class="navbar-nav flex-row align-items-center ms-auto">
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="nav navbar-nav ml-auto">
                                            <a href="#" class="btn btn-white btn-sm">{{ Auth::guard('admin')->user()->nama_petugas }}</a>
                                        </ul>
                                    </div>
                                </ul>
                            </div>
                        </nav>
                        <div class="container-fluid">
                            <div class="row">
                                @yield('content')
                            </div>
                        </div>
                        <footer class="content-footer footer bg-footer-theme">
                            <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                              <div class="mb-2 mb-md-0">
                                Copyright © 
                                <script>
                                  document.write(new Date().getFullYear());
                                </script>
                                2023 SMK YPC TASIKMALAYA
                              </div>
                            </div>
                        </footer>
                    </div>
                </div>
                <!-- / Navbar -->
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="{{ asset('asset/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('asset/js/demo/datatables-demo.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
      $(function(){
        $(document).on('click', '#delete', function(e){
            e.preventDefault();
            var link = $(this).attr("href");
            Swal.fire({
            title:'Apa kamu yakin?',
            text: "Anda tidak akan dapat mengembalikan ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
              if (result.isConfirmed) {
                window.location = "kategori/delete/"+id_kategori+""
                Swal.fire(
                  'Dihapus!',
                  'File Anda telah dihapus.',
                  'success'
                )
              }
            })
        });
      });
    </script> --}}
  </body>
</html>
