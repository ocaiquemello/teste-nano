<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Nano</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <link rel="apple-touch-icon" sizes="180x180" href="{{ mix('assets/images/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ mix('assets/images/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ mix('assets/images/favicon-16x16.png') }}">
        <link rel="stylesheet" href="{{ mix('assets/vendor/css/base/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ mix('assets/vendor/css/base/elisyam-1.5.min.css') }}">
        <link rel="stylesheet" href="{{ mix('assets/css/animate/animate.min.css') }}">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body class="bg-white">
        <div id="preloader">
            <div class="canvas">
                <img src="{{ mix('assets/images/logo.png') }}" alt="logo" class="loader-logo">
                <div class="spinner"></div>
            </div>
        </div>
        <div class="container-fluid no-padding h-100">
            <div class="row flex-row h-100 bg-white">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 my-auto no-padding">
                    <div class="authentication-form-2 mx-auto">
                        <div class="tab-content" id="animate-tab-content">
                            @if(Session::has('error'))
                                <div class="alert alert-danger alert-dissmissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                    {{ Session::get('error') }}
                                </div>
                            @endif
                            @if(Session::has('success'))
                                <div class="alert alert-success alert-dissmissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                            <div role="tabpanel" class="tab-pane show active" id="singin" aria-labelledby="singin-tab">
                                <h3>Fazer login no Sistema</h3>
                                <form method="POST" action="{{ route('auth') }}">
                                    @csrf <!-- {{ csrf_field() }} -->
                                    <div class="group material-input">
        							    <input type="text" name="login" required>
        							    <span class="highlight"></span>
        							    <span class="bar"></span>
        							    <label>Login</label>
                                    </div>
                                    <div class="group material-input">
        							    <input type="password" name="password" required>
        							    <span class="highlight"></span>
        							    <span class="bar"></span>
        							    <label>Senha</label>
                                    </div>
                                    <div class="sign-btn text-center">
                                        <button type="submit" class="btn btn-lg btn-gradient-01">
                                            Login
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ mix('assets/vendor/js/base/jquery.min.js') }}"></script>
        <script src="{{ mix('assets/vendor/js/base/core.min.js') }}"></script>
        <script src="{{ mix('assets/vendor/js/app/app.min.js') }}"></script>
        <script src="{{ mix('assets/js/components/tabs/animated-tabs.min.js') }}"></script>
    </body>
</html>
