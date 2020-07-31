
@section('navigation')

    <div class="navbar-custom">

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                <li class="submenu">
                    <a href="{{ route('home') }}"><span><i class="mdi mdi-home">
                        </i></span><span class="txtSizeRegular txtColorWhite"> Accueil</span>
                    </a>
                </li>

                @if(Auth::user()->role_id == 1)
                    <li class="has-submenu">
                        <a href="#"><span><i class="mdi mdi-apps ">
                        </i></span><span class="txtSizeRegular txtColorWhite"> Référentiels </span>
                        </a>
                        <ul class="submenu">
                            <li class="has-submenu">
                                <a href="#">Régistres</a>
                                <ul class="submenu">
                                    <li><a href="#">Régistres Naissances</a></li>
                                    <li><a href="#">...</a></li>
                                </ul>
                            </li>

                            <li class="dropdown-divider"></li>
                            <li><a href="#">Centres</a></li>

                            <li class="dropdown-divider"></li>
                            <li><a href="#">Localités</a></li>

                            <li class="dropdown-divider"></li>
                            <li><a href="#">Aide...</a></li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"> <span><i class="mdi mdi-account-multiple">
                        </i></span><span class="txtSizeRegular txtColorWhite">Naissances</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="#">Emission D&eacute;clarations ...</a></li>
                            <li class="dropdown-divider"></li>

                            <li><a href="#">Reception D&eacute;clarations...</a></li>
                            <li class="dropdown-divider"></li>

                            <li><a href="#">Actes ...</a></li>
                            <li class="dropdown-divider"></li>

                            <li><a href="#"> ...</a></li>
                        </ul>
                    </li>

                @endif


                <li class="has-submenu">
                    <a href="#">
                        <span><i class="mdi mdi-account-switch"></i></span>
                        <span class="txtSizeRegular txtColorWhite">Mariages</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('declaration.create') }}">Nouvelle déclaration</a></li>
                        <li class="dropdown-divider"></li>

                        <li><a href="{{ route('declaration.list') }}">Déclarations des mariages</a></li>

                        @if(Auth::user()->role_id == 1)
                            <li class="dropdown-divider"></li>

                            <li><a href="{{ route('registers.list') }}">Registres des mariages</a></li>

                            <li class="dropdown-divider"></li>

                            <li><a href="{{ route('calendar') }}">Calendrier des mariages</a></li>

                        @endif

                    </ul>
                </li>

                @if(Auth::user()->role_id == 1)
                    <li class="has-submenu">
                        <a href="#"> <span><i class="mdi mdi-church"></i></span>
                            <span class="txtSizeRegular txtColorWhite">Décès</span>
                        </a>

                        <ul class="submenu">
                            <li><a href="#">Emissions déclarations...</a></li>
                            <li class="dropdown-divider"></li>

                            <li><a href="#">Reception Déclarations...</a></li>
                            <li class="dropdown-divider"></li>

                            <li><a href="#">Actes...</a></li>
                            <li class="dropdown-divider"></li>

                            <li><a href="#">Autres...</a></li>
                        </ul>
                    </li>

                @endif

                <li class="has-submenu">
                    <a href="#"> <span><i class="mdi mdi-view-grid "></i>
                        </span><span class="txtSizeRegular txtColorWhite">Consultations</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="#">Etats et statistiques naissances</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a href="{{ route('mariages.stats') }}">Etats et statistiques mariages</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a href="#">Etats et statistiques décès</a></li>
                    </ul>
                </li>

            </ul>
            <!-- End navigation menu -->
        </div>
        <!-- end #navigation -->
    </div>
    <!-- end navbar-custom -->

@endsection