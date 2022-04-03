<aside class="main-sidebar sidebar-light-lightblue elevation-4">

    <a href="index3.html" class="brand-link navbar-gray">
        <img src="{{ asset('dist/img/proeza.jpg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">PROEZA SRL - ERP</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @can('dashboard.index')
                    <li class="nav-item">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('dashboard.index') }}" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('dashboard.reportgastos') }}" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Gastos</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('dashboard.excelgastos') }}" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Gastos Excel</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('dashboard.reportadministrativos') }}" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Gastos Administrativos</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('dashboard.exceladministrativos') }}" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Gastos Administrativos Excel</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('dashboard.reportintereses') }}" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Intereses</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('dashboard.excelintereses') }}" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Intereses Excel</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan

                @can('permissions.index')
                    <li class="nav-item">
                        <a href="{{ route('permissions.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-check"></i>
                            <p>
                                Permiso
                            </p>
                        </a>
                    </li>
                @endcan

                @can('roles.index')
                    <li class="nav-item">
                        <a href="{{ route('roles.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Rol
                            </p>
                        </a>
                    </li>
                @endcan

                @can('users.index')
                    <li class="nav-item">
                        <a href="{{ route('users.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Usuario
                            </p>
                        </a>
                    </li>
                @endcan

                @can('cities.index')
                    <li class="nav-item">
                        <a href="{{ route('cities.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Departamento
                            </p>
                        </a>
                    </li>
                @endcan

                @can('agencies.index')
                    <li class="nav-item">
                        <a href="{{ route('agencies.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-city"></i>
                            <p>
                                Agencia
                            </p>
                        </a>
                    </li>
                @endcan

                @can('years.index')
                    <li class="nav-item">
                        <a href="{{ route('years.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-calendar-alt"></i>
                            <p>
                                Gestion
                            </p>
                        </a>
                    </li>
                @endcan

                @can('months.index')
                    <li class="nav-item">
                        <a href="{{ route('months.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-calendar-check"></i>
                            <p>
                                Mes
                            </p>
                        </a>
                    </li>
                @endcan

                @can('categories.index')
                    <li class="nav-item">
                        <a href="{{ route('categories.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-align-justify"></i>
                            <p>
                                Categoria
                            </p>
                        </a>
                    </li>
                @endcan

                @can('items.index')
                    <li class="nav-item">
                        <a href="{{ route('items.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-align-left"></i>
                            <p>
                                Artículo
                            </p>
                        </a>
                    </li>
                @endcan


                @can('spendings.index')
                    <li class="nav-item">
                        <a href="{{ route('spendings.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-money-check"></i>
                            <p>
                                Gastos
                            </p>
                        </a>
                    </li>
                @endcan

                @can('administratives.index')
                    <li class="nav-item">
                        <a href="{{ route('administratives.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-money-bill-wave"></i>
                            <p>
                                Gastos Admin.
                            </p>
                        </a>
                    </li>
                @endcan

                @can('interests.index')
                    <li class="nav-item">
                        <a href="{{ route('interests.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-file-invoice-dollar"></i>
                            <p>
                                Intereses
                            </p>
                        </a>
                    </li>
                @endcan

                @can('investors.index')
                    <li class="nav-item">
                        <a href="{{ route('investors.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-file-invoice-dollar"></i>
                            <p>
                                Inversionistas
                            </p>
                        </a>
                    </li>
                @endcan

                @can('changes.index')
                    <li class="nav-item">
                        <a href="{{ route('changes.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-file-invoice-dollar"></i>
                            <p>
                                Historico Invers.
                            </p>
                        </a>
                    </li>
                @endcan

                @can('indicators.index')
                    <li class="nav-item">
                        <a href="{{ route('indicators.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-file-invoice-dollar"></i>
                            <p>
                                Indicadores
                            </p>
                        </a>
                    </li>
                @endcan

                {{-- report --}}
                @can('reportSpending.index')
                    <li class="nav-item">
                        <a href="{{ route('reportSpending.year') }}" class="nav-link">
                            <i class="nav-icon far fa-clipboard"></i>
                            <p>
                                Gastos "Gestiones"
                            </p>
                        </a>
                    </li>
                @endcan

                @can('reportAdministrative.index')
                    <li class="nav-item">
                        <a href="{{ route('reportAdministrative.year') }}" class="nav-link">
                            <i class="nav-icon far fa-clipboard"></i>
                            <p>
                                Gastos Adm. "Gestiones"
                            </p>
                        </a>
                    </li>
                @endcan

                @can('reportInterest.index')
                    <li class="nav-item">
                        <a href="{{ route('reportInterest.year') }}" class="nav-link">
                            <i class="nav-icon far fa-clipboard"></i>
                            <p>
                                Intereses "Gestiones"
                            </p>
                        </a>
                    </li>
                @endcan

                @can('reportIncome.index')
                    <li class="nav-item">
                        <a href="{{ route('reportIncome.year') }}" class="nav-link">
                            <i class="nav-icon far fa-clipboard"></i>
                            <p>
                                Ingresos "Gestiones"
                            </p>
                        </a>
                    </li>
                @endcan

                @can('reportBalance.index')
                    <li class="nav-item">
                        <a href="{{ route('reportBalance.year') }}" class="nav-link">
                            <i class="nav-icon far fa-clipboard"></i>
                            <p>
                                Balances "Gestiones"
                            </p>
                        </a>
                    </li>
                @endcan

                {{-- user --}}
                @can('eadmins.index')
                    <li class="nav-item">
                        <a href="{{ route('eadmins.year') }}" class="nav-link">
                            <i class="nav-icon fas fa-money-check"></i>
                            <p>
                                Gastos Gerencia
                            </p>
                        </a>
                    </li>
                @endcan
                @can('aadmins.index')
                    <li class="nav-item">
                        <a href="{{ route('aadmins.year') }}" class="nav-link">
                            <i class="nav-icon fas fa-money-bill-wave"></i>
                            <p>
                                Gastos Administrativos
                            </p>
                        </a>
                    </li>
                @endcan
                @can('iadmins.index')
                    <li class="nav-item">
                        <a href="{{ route('iadmins.year') }}" class="nav-link">
                            <i class="nav-icon fas fa-money-bill-wave"></i>
                            <p>
                                Intereses
                            </p>
                        </a>
                    </li>
                @endcan
                @can('inadmins.index')
                    <li class="nav-item">
                        <a href="{{ route('inadmins.year') }}" class="nav-link">
                            <i class="nav-icon fas fa-money-bill-wave"></i>
                            <p>
                                Indicadores
                            </p>
                        </a>
                    </li>
                @endcan
            </ul>
        </nav>
    </div>
</aside>
