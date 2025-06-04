<header class="header-3d">
  <nav class="navbar navbar-expand custom-navbar">
    <a class="navbar-brand admin" href="{{ route('home') }}">
      <img src="{{ asset('images/maison.png') }}" alt="Logo" class="custom-logo" />
    </a>

    <ul class="navbar-nav ml-auto custom-link">
      <li class="nav-item">
      <a class="nav-link perso-class {{ Route::is('home') ? 'active-link' : '' }}" href="{{ route('home') }}">Accueil</a>
      </li>
      <li class="nav-item">
      <a class="nav-link perso-class {{ Route::is('projets') ? 'active-link' : '' }}" href="{{ route('projets') }}">Projets</a>
  </li>
  <li class="nav-item">
  <a class="nav-link perso-class {{ Route::is('apropos') ? 'text-gold' : '' }}" href="{{ route('apropos') }}">
    À propos
</a>
  </li>
  <li class="nav-item">
    <a class="nav-link perso-class" href="#">Contact</a>
  </li>
    </ul>

    <a class="burger-menu">
      <img src="{{ asset('images/burger.png') }}" alt="Menu" id="burger-menu"/>
    </a>
  </nav>

  <div class="side-nav" id="side-nav">
    <a href="#" class="close-btn" id="close-btn">&times;</a>
    <ul>
      <li><a href="{{ route('home') }}">Accueil</a></li>
      <li class="nav-item">
    <a class="nav-link perso-class" href="#">Projets</a>
  </li>
  <li class="nav-item">
    <a class="nav-link perso-class" href="#">À propos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link perso-class" href="#">Contact</a>
  </li>
    </ul>
  </div>
</header>
