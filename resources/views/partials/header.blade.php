<header class="header-3d">
  <nav class="navbar navbar-expand custom-navbar">
    <a class="navbar-brand admin" href="#">
      <img src="{{ asset('images/maison.png') }}" alt="Logo" class="custom-logo" />
    </a>

    <div class="login-form">
      <form action="{{ route('login') }}" method="POST">
        @csrf
        <button type="button" class="close-btn">X</button>
        <input type="text" name="username" placeholder="Nom d'utilisateur">
        <input type="password" name="password" placeholder="Mot de passe">
        <button type="submit">Se connecter</button>
      </form>
    </div>

    <ul class="navbar-nav ml-auto custom-link">
      <li class="nav-item">
        <a class="nav-link perso-class" href="{{ route('home') }}">Accueil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link perso-class" href="{{ route('projets') }}">Projets</a>
      </li>
      <li class="nav-item">
        <a class="nav-link perso-class" href="{{ route('apropos') }}">À propos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link perso-class" href="{{ route('contact') }}">Contact</a>
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
      <li><a href="{{ route('projets') }}">Projets</a></li>
      <li><a href="{{ route('apropos') }}">À propos</a></li>
      <li><a href="{{ route('contact') }}">Contact</a></li>
    </ul>
  </div>
</header>
