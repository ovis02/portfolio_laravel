@extends('layouts.app')

@section('content')
    <canvas id="canvas"> </canvas>

    <!-- Introduction -->
    <section class="Introduction">
        <div class="perso-content">
            <h1 class="perso-title">Bienvenue dans mon Portfolio</h1>
            <p class="perso-subtitle">Web Developer</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="content1">
                        <h1 class="title">Développeur front-end</h1>
                        <p class="text">
                            Développeur front-end créant des sites web conviviaux et percutants. Explorez mon portfolio pour découvrir mon expertise
                            en conception web.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="logo-container">
                        <img src="{{ asset('images/logo.png') }}" alt="Votre Logo" class="logo" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Présentation -->
    <section class="Main">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="content2">
                        <h2 class="title">1. Qui suis-je ?</h2>
                        <p class="text">
                            Je suis une personne récemment convertie au développement web. Passionné par l'aspect artistique du métier et doté d'une
                            grande imagination...
                        </p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="logo-container2">
                        <img src="{{ asset('images/Image2.png') }}" alt="Photo de Profil" class="profile-picture" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technologies -->
    <section class="technologies">
        <div class="container">
            <h2 class="title">Technologies</h2>
            <div class="tech-icons">
                <img src="{{ asset('images/html.png') }}" alt="HTML" />
                <img src="{{ asset('images/css.png') }}" alt="CSS" />
                <img src="{{ asset('images/js.png') }}" alt="JavaScript" />
                <img src="{{ asset('images/php.png') }}" alt="PHP" />
                <img src="{{ asset('images/nodejs.png') }}" alt="Node.js" />
                <img src="{{ asset('images/bootstrap.png') }}" alt="Bootstrap" />
            </div>
        </div>
    </section>
@endsection
