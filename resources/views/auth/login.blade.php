<!DOCTYPE html>
<html>

<head>
    <!-- Meta and Title -->
    <meta charset="utf-8">
    <title>Administration - Certification</title>
    <meta name="keywords" content="Administration - Certification | Connexion"/>
    <meta name="description" content="Administration - Certification | Connexion">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/img/uvci.ico')}}">

    <!-- Angular material -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/skin/css/angular-material.min.css')}}">

    <!-- Icomoon -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/icomoon/icomoon.css')}}">

    <!-- AnimatedSVGIcons -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/animatedsvgicons/css/codropsicons.css')}}">

    <!-- CSS - allcp forms -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/allcp/forms/css/forms.css')}}">

    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.min.css')}}">

    <!-- CSS - theme -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/skin/default_skin/less/theme.css')}}">

    <!-- IE8 HTML5 support -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="utility-page sb-l-c sb-r-c">

<!-- Body Wrap -->
<div id="main" class="animated fadeIn">

    <!-- Main Wrapper -->
    <section id="content_wrapper">

        <div id="canvas-wrapper">
            <canvas id="demo-canvas"></canvas>
        </div>

        <!-- Content -->
        <section id="content">

            <!-- Login Form -->
            <div class="allcp-form theme-primary mw320" id="login">
                <a href="#">
                    <div class=" mw600 text-center mb20 pt15 pb10">
                        <img style="" width="80" height="80" src="{{asset('logo.png')}}" alt=""/>
                    </div>
                </a>
                <div class="panel mw320">

                    <form method="post" action="{{ route('login') }}" id="form-login">
                        <div class="panel-body pn mv10">
                            @csrf
                            <div class="section">
                                <label for="email" class="field prepend-icon">
                                    <input id="email" type="email" class="form-control form-control-prepended @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="email">
                                    <span class="field-icon">
                                        <i class="fa fa-user"></i>
                                    </span>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <!-- <input type="text" name="email" id="email" class="gui-input"
                                           placeholder="email"> -->

                                </label>
                            </div>
                            <!-- /section -->

                            <div class="section">
                                <label for="password" class="field prepend-icon">
                                    <input id="password" type="password" class="form-control form-control-prepended @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"  placeholder="Mot de Passe">
                                    <!-- <input type="text" name="password" id="password" class="gui-input"
                                           placeholder="Mot de Passe"> -->
                                    <span class="field-icon">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </label>
                            </div>
                            <!-- /section -->

                            <div class="section">
                                <!-- <div class="bs-component pull-left pt5">
                                    <div class="radio-custom radio-primary mb5 lh25">
                                        <input type="radio" id="remember" name="remember">
                                        <label for="remember">Remember me</label>
                                    </div>
                                </div> -->
                                <a class="bs-component pull-left pt5" href="">Mot de passe Oublié</a>
                                <button type="submit" class="btn btn-bordered btn-primary pull-right">Connexion</button>
                            </div>
                            <!-- /section -->

                        </div>
                        <!-- /Form -->
                    </form>
                </div>
                <!-- /Panel -->
            </div>
            <!-- /Spec Form -->

        </section>
        <!-- /Content -->

    </section>
    <!-- /Main Wrapper -->

</div>
<!-- /Body Wrap  -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<!-- jQuery -->
<script src="{{asset('assets/js/jquery/jquery-1.12.3.min.js')}}"></script>
<script src="{{asset('assets/js/jquery/jquery_ui/jquery-ui.min.js')}}"></script>

<!-- AnimatedSVGIcons -->
<script src="{{asset('assets/fonts/animatedsvgicons/js/snap.svg-min.js')}}"></script>
<script src="{{asset('assets/fonts/animatedsvgicons/js/svgicons-config.js')}}"></script>
<script src="{{asset('assets/fonts/animatedsvgicons/js/svgicons.js')}}"></script>
<script src="{{asset('assets/fonts/animatedsvgicons/js/svgicons-init.js')}}"></script>

<!-- Scroll -->
<script src="{{asset('assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.concat.min.js')}}"></script>

<!-- HighCharts Plugin -->
<script src="{{asset('assets/js/plugins/highcharts/highcharts.js')}}"></script>

<!-- CanvasBG JS -->
<script src="{{asset('assets/js/plugins/canvasbg/canvasbg.js')}}"></script>

<!-- Theme Scripts -->
<script src="{{asset('assets/js/utility/utility.js')}}"></script>
<script src="{{asset('assets/js/demo/demo.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/demo/widgets_sidebar.js')}}"></script>
<script src="{{asset('assets/js/pages/dashboard_init.js')}}"></script>

<!-- /Scripts -->

</body>

</html>
