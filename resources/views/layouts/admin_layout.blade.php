<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>@yield("title", "Gestion Plateforme Certification UVCI")</title>

        <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="{{asset('temp/assets/media/uvci.ico')}}">
        <link rel="icon"  sizes="192x192" href="{{asset('temp/assets/media/uvci.ico')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('temp/assets/media/uvci.ico')}}">
        <!-- END Icons -->

        <!-- Stylesheets -->

        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
        <link rel="stylesheet" id="css-main" href="{{asset('temp/assets/css/codebase.min.css')}}">
        @yield("styles")
        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>

        <!-- Page Container -->

        <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-fixed main-content-boxed side-trans-enabled sidebar-inverse">
            <!-- Sidebar -->
            <nav id="sidebar">
                <!-- Sidebar Content -->
                <div class="sidebar-content">
                    <!-- Side User -->
                    <div class="content-side content-side-full content-side-user px-10 align-parent">
                        <!-- Visible only in mini mode -->
                        <div class="sidebar-mini-visible-b align-v animated fadeIn">
                            <img class="img-avatar img-avatar32" src="{{ asset("assets/media/logo.png")}}" alt="">
                        </div>
                        <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                            <i class="fa fa-times text-danger"></i>
                        </button>
                        <!-- END Visible only in mini mode -->

                        <!-- Visible only in normal mode -->
                        <div class="sidebar-mini-hidden-b text-center">
                            <a class="img-link" href="#">
                                <img class="img-avatar" src="{{asset('temp/assets/media/logo.png')}}" alt="">
                            </a>
                            <ul class="list-inline mt-10">
                                <li class="list-inline-item">
                                    <a class="link-effect text-dual-primary-dark font-size-sm font-w600 text-uppercase" href="#">Gestion Plateforme Certification UVCI</a>
                                </li>
                            </ul>
                        </div>
                        <!-- END Visible only in normal mode -->
                    </div>
                    <!-- END Side User -->

                    <!-- Side Navigation -->
                    @include('__partials.side_menu')

                    <!-- END Side Navigation -->
                </div>
                <!-- Sidebar Content -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header class="" id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="content-header-section">
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-navicon"></i>
                        </button>

                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="content-header-section">
                        <!-- User Dropdown -->
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <!-- <i class="fa fa-user d-sm-none"></i> -->
                                <!-- <img class="img-avatar"  src="{{asset('temp/assets/media/logo.png')}}" alt=""> -->
                                @if(!is_null(Auth::user()->profile_photo))
                                <img class="img-avatar img-avatar32" style="height: 40px; width: 40px;" src="{{ asset(Auth::user()->profile_photo) }}" alt="">
                                @else
                                <img class="img-avatar img-avatar32" style="height: 40px; width: 40px;" src="{{ asset("temp/assets/media/avatars/avatar15.jpg") }}" alt="">
                                @endif
                                <span class="d-none d-sm-inline-block">{{ Auth::user()->name }} {{ Auth::user()->prenoms }}</span>
                                <i class="fa fa-angle-down ml-5"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right min-width-200" aria-labelledby="page-header-user-dropdown">
                                <h5 class="h6 text-center py-10 mb-5 border-b text-uppercase">{{ Auth::user()->name }} {{ Auth::user()->prenoms }}</h5>
                                <a class="dropdown-item" href="#">
                                    <i class="si si-user mr-5"></i> Profil
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="si si-logout mr-5"></i>Déconnexion
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                       {{ csrf_field() }}
                                    </form>
                                </a>
                                <!-- <a class="dropdown-item" href="op_auth_signin.html">
                                    <i class="si si-logout mr-5"></i>Déconnexion
                                </a> -->
                            </div>
                        </div>
                        <!-- END User Dropdown -->
                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->
                <!-- Header Loader -->
                <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
                <div id="page-header-loader" class="overlay-header bg-primary">
                    <div class="content-header content-header-fullrow text-center">
                        <div class="content-header-item">
                            <i class="fa fa-sun-o fa-spin text-white"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">

                @yield('content')

            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="opacity-0">
                <div class="content py-20 font-size-sm clearfix">
                    <div class="float-right">
                        <!-- Crafted with <i class="fa fa-heart text-pulse"></i> by  --><a class="font-w600" href="mailto:pedagogie@uvci.edu.ci" target="_blank">certification@uvci.edu.ci</a>
                    </div>
                    <div class="float-left">
                        <a class="font-w600" href="https://certification.uvci.edu.ci/" target="_blank">Certification UVCI</a> &copy; <span class="js-year-copy"></span>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->


        <script src="{{asset('temp/assets/js/codebase.core.min.js')}}"></script>

        <!--
            Codebase JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
        <script src="{{asset('temp/assets/js/codebase.app.min.js')}}"></script>
        @yield("script")
        <script type="text/javascript">
              $(document).ready(function() {
                  $('.js-dataTable-full-pagination').DataTable( {
                      "language": {
                          "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
                      }
                  } );
              } );
        </script>
        <script type="text/javascript">
              $(document).ready(function() {
                  $('.serge').DataTable( {
                      "language": {
                          "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
                      }
                  } );
              } );
        </script>
    </body>
</html>
