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
	                                <h2 class="page-header-title">Cadastrar Movimentação</h2>
	                                <div>
                                        <ul class="breadcrumb">
			                                <li class="breadcrumb-item"><a href="{{ route('admin.transaction.index') }}"><i class="ti ti-home"></i></a></li>
			                                <li class="breadcrumb-item active">Cadastrar Movimentação</li>
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
                                    <h4>Cadastrar Movimentação</h4>
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
                                    <form class="form-horizontal" method="POST" action="{{ route('admin.transaction.create') }}">
                                    @csrf <!-- {{ csrf_field() }} -->
                                        <div class="form-group row mb-5">
                                            <label class="col-lg-3 form-control-label">Tipo</label>
                                            <div class="col-lg-9 select mb-3">
                                                <select name="type" class="custom-select form-control">
                                                    <option selected disabled>Selecione</option>
                                                    <option value="entrada">Entrada</option>
                                                    <option value="saida">Saída</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-3 form-control-label">Valor</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="value" id="value" placeholder="Insira o valor" value="{{ old('value') }}">
                                                @if($errors->has('value'))
                                                    <div class="invalid-feedback" style="display:block !important">
                                                        {{ $errors->first('value') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-3 form-control-label">Valor</label>
                                            <div class="col-lg-9">
                                                <textarea class="form-control" name="observation" rows="4" placeholder="Adicione uma observação"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-5">
                                            <label class="col-lg-3 form-control-label">Funcionário</label>
                                            <div class="col-lg-9 select mb-3">
                                                <select name="employee" class="custom-select form-control">
                                                    <option selected disabled>Selecione</option>
                                                    @foreach($employees as $employee)
                                                        <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                                    @endforeach
                                                </select>
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
            $('#value').mask('00.000.000,00', {reverse: true});
        })
    </script>
</body>
