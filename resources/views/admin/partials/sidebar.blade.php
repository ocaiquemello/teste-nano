<div class="default-sidebar">
    <nav class="side-navbar box-scroll sidebar-scroll">
        <ul class="list-unstyled">
            <li><a href="#dropdown-db" aria-expanded="true" data-toggle="collapse"><i class="la la-columns"></i><span>Cadastros</span></a>
                <ul id="dropdown-db" class="collapse list-unstyled show pt-0">
                    <li><a class="{{ getCurrentRoute('/') }}" href="/">Admin</a></li>
                    <li><a class="{{ getCurrentRoute(route('admin.employee.index')) }}" href="{{ route('admin.employee.index') }}">Funcionários</a></li>
                    <li><a class="{{ getCurrentRoute(route('admin.transaction.index')) }}" href="{{ route('admin.transaction.index') }}">Movimentações</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</div>
