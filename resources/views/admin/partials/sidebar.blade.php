<div class="default-sidebar">
    <nav class="side-navbar box-scroll sidebar-scroll">
        <ul class="list-unstyled">
            <li><a href="#dropdown-db" aria-expanded="true" data-toggle="collapse"><i class="la la-columns"></i><span>Cadastros</span></a>
                <ul id="dropdown-db" class="collapse list-unstyled show pt-0">
                    <li><a href="/">Admin</a></li>
                    <li><a class="{{ getCurrentRoute() }}" href="{{ route('admin.index') }}">Funcionários</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</div>
