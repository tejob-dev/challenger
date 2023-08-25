<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
        <img src="/img/import/T-LOGO.jpg" alt="Vemto Logo" class="brand-image bg-white img-circle">
        <span class="brand-text font-weight-light">Challenge-Toit</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu">

                @auth
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">
                        <i class="nav-icon icon ion-md-pulse"></i>
                        <p>
                            Accueil
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon icon ion-md-apps"></i>
                        <p>
                            Données
                            <i class="nav-icon right icon ion-md-arrow-round-back"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                            @can('view-any', App\Models\User::class)
                            <li class="nav-item">
                                <a href="{{ route('users.index') }}" class="nav-link">
                                    <i class="nav-icon icon ion-md-radio-button-off"></i>
                                    <p>Utilisateurs</p>
                                </a>
                            </li>
                            @endcan
                            @can('view-any', App\Models\Challengerpro::class)
                            <li class="nav-item">
                                <a href="{{ route('challengerpros.index') }}" class="nav-link">
                                    <i class="nav-icon icon ion-md-radio-button-off"></i>
                                    <p>Challengers Pro</p>
                                </a>
                            </li>
                            @endcan
                            @can('view-any', App\Models\Contact::class)
                            <li class="nav-item">
                                <a href="{{ route('contacts.index') }}" class="nav-link">
                                    <i class="nav-icon icon ion-md-radio-button-off"></i>
                                    <p>Contacts</p>
                                </a>
                            </li>
                            @endcan
                            @can('view-any', App\Models\Parraine::class)
                            <li class="nav-item">
                                <a href="{{ route('parraines.index') }}" class="nav-link">
                                    <i class="nav-icon icon ion-md-radio-button-off"></i>
                                    <p>Parrainées</p>
                                </a>
                            </li>
                            @endcan
                            @can('view-any', App\Models\Acquereur::class)
                            <li class="nav-item">
                                <a href="{{ route('acquereurs.index') }}" class="nav-link">
                                    <i class="nav-icon icon ion-md-radio-button-off"></i>
                                    <p>Acquéreurs</p>
                                </a>
                            </li>
                            @endcan
                            @can('view-any', App\Models\ProjectConstuct::class)
                            <li class="nav-item">
                                <a href="{{ route('project-constucts.index') }}" class="nav-link">
                                    <i class="nav-icon icon ion-md-radio-button-off"></i>
                                    <p>Les projets</p>
                                </a>
                            </li>
                            @endcan
                            @can('view-any', App\Models\Poster::class)
                            <li class="nav-item">
                                <a href="{{ route('posters.index') }}" class="nav-link">
                                    <i class="nav-icon icon ion-md-radio-button-off"></i>
                                    <p>Gallerie</p>
                                </a>
                            </li>
                            @endcan
                    </ul>
                </li>

                @if (Auth::user()->can('view-any', Spatie\Permission\Models\Role::class) || 
                    Auth::user()->can('view-any', Spatie\Permission\Models\Permission::class))
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon icon ion-md-key"></i>
                        <p>
                            Administration
                            <i class="nav-icon right icon ion-md-arrow-round-back"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @can('view-any', Spatie\Permission\Models\Role::class)
                        <li class="nav-item">
                            <a href="{{ route('roles.index') }}" class="nav-link">
                                <i class="nav-icon icon ion-md-radio-button-off"></i>
                                <p>Roles</p>
                            </a>
                        </li>
                        @endcan

                        @can('view-any', Spatie\Permission\Models\Permission::class)
                        <li class="nav-item">
                            <a href="{{ route('permissions.index') }}" class="nav-link">
                                <i class="nav-icon icon ion-md-radio-button-off"></i>
                                <p>Permissions</p>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </li>
                @endif
                @endauth

                <!-- <li class="nav-item">
                    <a href="https://adminlte.io/docs/3.1//index.html" target="_blank" class="nav-link">
                        <i class="nav-icon icon ion-md-help-circle-outline"></i>
                        <p>Docs</p>
                    </a>
                </li> -->

                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="nav-icon icon ion-md-exit"></i>
                        <p>{{ __('Déconnecter') }}</p>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                @endauth
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>