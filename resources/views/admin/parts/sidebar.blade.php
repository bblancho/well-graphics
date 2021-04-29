<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{ route('admin.index') }}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Tableau de bord
                </p>
            </a>
        </li>

        <li class="nav-item has-treeview">
            <a href="{{ route('commande.index') }}" class="nav-link">
                <i class="nav-icon fa fa-briefcase"></i>
                <p> Commandes </p>
            </a>
        </li>

        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Mon compte
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.users.show', $users->id) }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Afficher mon compte</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.users.edit', $users->id) }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Editer mes informations</p>
                    </a>
                </li>
            </ul>
        </li>

        @can('isAdmin', $users)
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-gift"></i>
                    <p>
                        En promotion
                        <span class="badge badge-info right">2</span>
                    </p>
                </a>
            </li>

            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Utilisateurs
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.users.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Liste</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.users.create') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Ajouter</p>
                        </a>
                    </li>
                </ul>
            </li>
            
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-briefcase"></i>
                    <p>
                        Commande
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Liste</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>En cours</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Terminé</p>
                        </a>
                    </li>
                </ul>
            </li>
            
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Services
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.services.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Liste</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.services.create') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Ajouter</p>
                        </a>
                    </li>
                </ul>
            </li>
            
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-cubes"></i>
                    <p>
                        Réalisations
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.users.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Liste</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.users.create') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Ajouter</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item has-treeview">
                <a href="{{ route('admin.mail.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-random"></i>
                    <p>
                        Mise en relation
                    </p>
                </a>
            </li>
        @endcan

    </ul>
</nav>
<!-- /.sidebar-menu -->