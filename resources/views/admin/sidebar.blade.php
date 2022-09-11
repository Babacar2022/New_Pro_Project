<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="{{ url('/redirect') }}"></a>
        <a class="sidebar-brand brand-logo-mini" href="{{ url('/redirect') }}"></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="admin/assets/images/faces/logo_ucab.jpg" alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">Admin</h5>
                        <span>Hello</span>
                    </div>
                </div>
                <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-settings text-primary"></i>
                            </div>
                        </div>


                    </a>
                </div>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
 <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-icon">
        <i class="mdi mdi-laptop"></i>
      </span>
                <span class="menu-title">utilisateur</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ url('view_utilisateur') }}">Ajouter un utilisateur</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('/show_student') }}">Show utilisateur</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-icon">
        <i class="mdi mdi-laptop"></i>
      </span>
                <span class="menu-title">Etudiant</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ url('view_student') }}">Ajouter Etudiant</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('/show_student') }}">Liste Etudiant</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-icon">
        <i class="mdi mdi-laptop"></i>
      </span>
                <span class="menu-title">Information</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ url('view_information') }}">Add Informations</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('/show_information') }}">Show Informations</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('view_center') }}">
                <span class="menu-icon">
        <i class="mdi mdi-playlist-play"></i>
      </span>
                <span class="menu-title">Center</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('view_type_info') }}">
                <span class="menu-icon">
        <i class="mdi mdi-playlist-play"></i>
      </span>
                <span class="menu-title">Type Information</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('view_fliere') }}">
                <span class="menu-icon">
        <i class="mdi mdi-playlist-play"></i>
      </span>
                <span class="menu-title">Fliere</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('demande') }}">
                <span class="menu-icon">
        <i class="mdi mdi-speedometer"></i>
      </span>
                <span class="menu-title">Demande</span>
            </a>
        </li>

    </ul>
</nav>
