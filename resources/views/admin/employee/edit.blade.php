@include('admin.partials.head')

<body id="page-top">
    <div id="preloader">
        <div class="canvas">
            <img src="{{ mix('assets/images/logo.png') }}" alt="logo" class="loader-logo">
            <div class="spinner"></div>
        </div>
    </div>

    <div class="page">
        @include('admin.partials.navbar')

        <div class="page-content d-flex align-items-stretch">
            @include('admin.partials.sidebar')

            <div class="content-inner">
                <div class="container-fluid">
                    <!-- Begin Page Header-->
                    <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title">Editar Funcionário</h2>
	                                <div>
                                        <ul class="breadcrumb">
			                                <li class="breadcrumb-item"><a href="{{ route('admin.employee.index') }}"><i class="ti ti-home"></i></a></li>
			                                <li class="breadcrumb-item active">Editar Funcionário</li>
			                            </ul>
	                                </div>
	                            </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                    <div class="row flex-row">
                        <div class="col-xl-12">
                            <!-- Form -->
                            <div class="widget has-shadow">
                                <div class="widget-header bordered no-actions d-flex align-items-center">
                                    <h4>Editar Funcionário</h4>
                                </div>
                                <div class="widget-body">
                                    @if(Session::has('success'))
                                        <div class="alert alert-success">
                                            {{ Session::get('success') }}
                                        </div>
                                    @endif
                                    @if(Session::has('error'))
                                        <div class="alert alert-danger">
                                            {{ Session::get('error') }}
                                        </div>
                                    @endif
                                    <form class="form-horizontal" method="POST" action="{{ route('admin.employee.update', $employee->id) }}">
                                    @csrf <!-- {{ csrf_field() }} -->
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-3 form-control-label">Nome</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="name" placeholder="Insira o nome do funcionário" value="{{ $employee->name }}">
                                            </div>
                                        </div>
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-3 form-control-label">Login</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="login" placeholder="Insira o login do funcionário" value="{{ $employee->login }}">
                                            </div>
                                        </div>
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-3 form-control-label">Saldo Atual</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="current_balance" id="current_balance" placeholder="Insira o saldo atual do funcionário" value="{{ $employee->current_balance }}">
                                            </div>
                                        </div>

                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <button type="submit" class="btn btn-primary mr-1 mb-2">Cadastrar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- End Form -->
                        </div>
                    </div>
                </div>
                @include('admin.partials.footer')

                <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>
            </div>
        </div>
    </div>

    <script src="{{ mix('assets/vendor/js/base/jquery.min.js') }}"></script>
    <script src="{{ mix('assets/vendor/js/base/core.min.js') }}"></script>
    <script src="{{ mix('assets/vendor/js/nicescroll/nicescroll.min.js') }}"></script>
    <script src="{{ mix('assets/vendor/js/chart/chart.min.js') }}"></script>
    <script src="{{ mix('assets/vendor/js/progress/circle-progress.min.js') }}"></script>
    <script src="{{ mix('assets/vendor/js/calendar/moment.min.js') }}"></script>
    <script src="{{ mix('assets/vendor/js/calendar/fullcalendar.min.js') }}"></script>
    <script src="{{ mix('assets/vendor/js/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ mix('assets/vendor/js/app/app.js') }}"></script>
    <script src="{{ mix('assets/js/dashboard/db-default.js') }}"></script>
    <script src="{{ mix('assets/vendor/js/jquery-mask/jquery.mask.min.js') }}" defer></script>
    <script>
		$(document).ready(function(){
            $('#current_balance').mask('00.000.000,00', {reverse: true});
        })
    </script>
</body>
