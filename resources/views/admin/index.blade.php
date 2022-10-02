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
                    @include('admin.partials.page-header')

                    <div class="row flex-row">
                        <div class="col-xl-12">
                            <div class="widget widget-07 has-shadow">
                                <div class="widget-header bordered d-flex align-items-center">
                                    <h2>Funcionários - Visão Geral</h2>
                                </div>
                                <div class="widget-body">
                                    <div class="table-responsive table-scroll padding-right-10" style="max-height:520px;">
                                        <table class="table table-hover mb-0">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nome</th>
                                                    <th>Saldo Atual</th>
                                                    <th>Data da Criação</th>
                                                    <th>Ações</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><span class="text-primary">054-01-FR</span></td>
                                                    <td>Lori Baker</td>
                                                    <td>R$139,45</td>
                                                    <td>21/10/2017</td>
                                                    <td class="td-actions">
                                                        <a href="#"><i class="la la-edit edit"></i></a>
                                                        <a href="#"><i class="la la-close delete"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="text-primary">054-01-FR</span></td>
                                                    <td>Lori Baker</td>
                                                    <td>R$139,45</td>
                                                    <td>21/10/2017</td>
                                                    <td class="td-actions">
                                                        <a href="#"><i class="la la-edit edit"></i></a>
                                                        <a href="#"><i class="la la-close delete"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="text-primary">054-01-FR</span></td>
                                                    <td>Lori Baker</td>
                                                    <td>R$139,45</td>
                                                    <td>21/10/2017</td>
                                                    <td class="td-actions">
                                                        <a href="#"><i class="la la-edit edit"></i></a>
                                                        <a href="#"><i class="la la-close delete"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="widget-footer d-flex align-items-center">
                                    <div class="mr-auto p-2">
                                        <span class="display-items">Showing 1-30 / 150 Results</span>
                                    </div>
                                    <div class="p-2">
                                        <nav aria-label="...">
                                            <ul class="pagination justify-content-end">
                                                <li class="page-item disabled">
                                                    <span class="page-link"><i class="ion-chevron-left"></i></span>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item active">
                                                    <span class="page-link">2<span class="sr-only">(current)</span></span>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#"><i class="ion-chevron-right"></i></a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
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
</body>
