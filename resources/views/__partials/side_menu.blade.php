<div class="content-side content-side-full">
    <ul class="nav-main">
        <li>
            <a href="{{route('home')}}"><i class="si si-home"></i><span class="sidebar-mini-hide">Accueil</span></a>
        </li>
        <li>
            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-briefcase"></i><span class="sidebar-mini-hide">Mon espace</span></a>
            <ul>
                <li>
                    <a href="{{route('admin.my_profil')}}">Profile</a>
                </li>
            </ul>
        </li>
        @hasanyrole('super-admin|admin|gestionnaire')
        <li>
            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i><span class="sidebar-mini-hide">Types candidats</span></a>
            <ul>
                <li>
                    <a href="{{ route("type_candidat.index") }}">Liste</a>
                </li>
                <li>
                    <a href="{{ route("type_candidat.create") }}">Ajouter</a>
                </li>
            </ul>
        </li>
        @endhasanyrole
        @hasanyrole('super-admin|admin|gestionnaire')
        <li>
            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i><span class="sidebar-mini-hide">Types formations</span></a>
            <ul>
                <li>
                    <a href="{{ route("type_formation.index") }}">Liste</a>
                </li>
                <li>
                    <a href="{{ route("type_formation.create") }}">Ajouter</a>
                </li>
            </ul>
        </li>
        @endhasanyrole
        @hasanyrole('super-admin|admin|gestionnaire')
        <li>
            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i><span class="sidebar-mini-hide">Modes paiements</span></a>
            <ul>
                <li>
                    <a href="{{ route("mode_paiement.index") }}">Liste</a>
                </li>
                <li>
                    <a href="{{ route("mode_paiement.create") }}">Ajouter</a>
                </li>
            </ul>
        </li>
        @endhasanyrole
        @hasanyrole('super-admin|admin|gestionnaire')
        <li>
            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i><span class="sidebar-mini-hide">Formations</span></a>
            <ul>
                <li>
                    <a href="{{ route("formation.index") }}">Liste</a>
                </li>
                <li>
                    <a href="{{ route("formation.create") }}">Ajouter</a>
                </li>
            </ul>
        </li>
        @endhasanyrole
        @hasanyrole('super-admin|admin|gestionnaire')
        <li>
            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i><span class="sidebar-mini-hide">Modules formations</span></a>
            <ul>
                <li>
                    <a href="{{ route("module_formation.index") }}">Liste</a>
                </li>
                <li>
                    <a href="{{ route("module_formation.create") }}">Ajouter</a>
                </li>
            </ul>
        </li>
        @endhasanyrole
        @hasanyrole('super-admin|admin|gestionnaire')
        <li>
            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i><span class="sidebar-mini-hide">Prix formations</span></a>
            <ul>
                <li>
                    <a href="{{ route("prix_formation.index") }}">Liste</a>
                </li>
                <li>
                    <a href="{{ route("prix_formation.create") }}">Ajouter</a>
                </li>
            </ul>
        </li>
        @endhasanyrole
        @hasanyrole('super-admin|admin|')
        <li class="nav-main-heading"><span class="sidebar-mini-visible">AD</span><span class="sidebar-mini-hidden">Administration</span></li>
        <li>
            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-users"></i><span class="sidebar-mini-hide">Gestion Utilisateur</span></a>
            <ul>
                <li>
                    <a href="{{route('admin.users')}}">Utilisateurs</a>
                </li>
            </ul>
        </li>
        @can('manage_cohort_members')
        <li>
            <a href="{{route('cohort.index')}}"><i class="si si-notebook"></i><span class="sidebar-mini-hide">Cohorts</span></a>
        </li>
        @endcan
        @can('manage_recup_paiement')
        <li>
            <a href="{{route('recup_payement_scolarite')}}"><i class="si si-wallet"></i><span class="sidebar-mini-hide">Recup Paiement</span></a>
        </li>
        @endcan
        @endhasanyrole
        @can('manage_role')
        <li class="nav-main-heading"><span class="sidebar-mini-visible">SA</span><span class="sidebar-mini-hidden">Super Admin</span></li>
        <li>
            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-lock"></i><span class="sidebar-mini-hide">Rôles et Permissions</span></a>
            <ul>
                <li>
                    <a href="{{route('admin.roles')}}">Rôles</a>
                </li>
                <li>
                    <a href="{{route('admin.permissions')}}">Permissions</a>
                </li>
                <!-- <li>
                    <a href="#">Users</a>
                </li> -->
            </ul>
        </li>
        @endcan
    </ul>
</div>
