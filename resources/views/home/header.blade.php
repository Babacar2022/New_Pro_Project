<header class="header_section">
        <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
    <a class="navbar-brand" href="{{ url('/') }}"><img style=" width:50%; border-radius: 100%; " src="home/images/logo_ucab.jpg" alt="#" /></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}">Acueil <span class="sr-only">(current)</span></a>
                 </li>
                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Groupe UCAB <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                       <li><a href="{{url('/presentation')}}">Presentation UCAB</a></li>
                       <li><a href="{{url('/directition')}}">Mot du DG </a></li>
                       <li><a href="{{url('/administration')}}">Administration</a></li>
                       <li><a </a></li>
                    </ul>
                 </li>

    <li class="nav-item dropdown" >
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Nos Formations <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                       <li><a href="{{url('/informatique')}}">Informatique de gestion</a></li>
                       <li><a href="{{url('/electro_mecanique')}}">ElectroMecanique</a></li>
                       <li><a href="{{url('/adminis')}}">Administration</a></li>
                    </ul>
                 </li>

                <li class="nav-item">
                   <a class="nav-link" href="{{url('service')}}">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('info')}}">infos</a>
                 </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('contact')}}">Contact</a>
                 </li>

                 @if (Route::has('login'))
                 @auth


                <li class="nav-item">
                    <x-app-layout>

                    </x-app-layout>
                </li>
                 @else
                 <li class="nav-item">
                    <a class="btn btn-primary" id="logincss" href="{{ route('login') }}">Login</a>
                 </li>
                 <li class="nav-item">
                    <a class="btn btn-success" href="{{ route('register') }}">Register</a>
                 </li>
                 @endauth
                 @endif


             </ul>
          </div>
       </nav>
    </div>
 </header>
