@extends('layouts.app')

@section('content')

    <canvas id="canvas"></canvas>
    <div class="background"></div>
<div class="projet-global">
<!-- Titre principal -->
<div class="container text-center mb-3">
    <h1 class="title" id="titre-principale">Mes projets</h1>
</div>

<!-- Projet 1 : EcoRide -->
<section class="mb-5">
    <div class="container" id="Projet1">
        <div class="row">
            <div class="col-md-7">
                <div class="content">
                    <h2 class="titre-projet">EcoRide</h2>
                    <p class="text">
                        <strong>EcoRide</strong> est une plateforme de covoiturage écologique développée avec Symfony et MongoDB. Elle permet de rechercher, proposer et rejoindre des trajets avec une logique de crédits écologiques.
                    </p>
                    <h3 class="titre-projet">Technologies utilisées</h3>
                    <br>
                    <img src="https://img.shields.io/badge/-Symfony-000000?logo=symfony&logoColor=white" alt="Symfony" />
                    <img src="https://img.shields.io/badge/-MongoDB-47A248?logo=mongodb&logoColor=white" alt="MongoDB" />
                    <img src="https://img.shields.io/badge/-MySQL-4479A1?logo=mysql&logoColor=white" alt="MySQL" />
                    <p class="mt-4 d-flex gap-3">
    <a href="https://github.com/ovis02/EcoRide" target="_blank" class="btn-demo">Code source</a>
    <a href="https://ecoride02-edbedfe97bbc.herokuapp.com/" target="_blank" class="btn-demo">Voir la démo</a>
</p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="logo-container">
                    <img src="{{ asset('images/ecoride.png') }}" alt="Logo EcoRide" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projet 2 : Arcadia Zoo -->
<section class="mb-5">
    <div class="container" id="Projet2">
        <div class="row">
            <div class="col-md-5">
                <div class="logo-container">
                    <img src="{{ asset('images/logoArcadia.png') }}" alt="Logo ArcadiaZoo" class="img-fluid" />
                </div>
            </div>
            <div class="col-md-7">
                <div class="content">
                    <h2 class="titre-projet">ArcadiaZoo</h2>
                    <p class="text">
                        Ce projet est en cours de développement. Il s'agit d'une application web de gestion complète pour un zoo, incluant la gestion des habitats, animaux, services, vétérinaires et statistiques.
                    </p>
                    <h3 class="titre-projet">Statut</h3>
                    <p class="text text-warning">En cours de développement</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projet 3 : Blog Auto -->
<section class="mb-5">
    <div class="container" id="Projet3">
        <div class="row">
            <div class="col-md-7">
                <div class="content">
                    <h2 class="titre-projet">Blog Automobile</h2>
                    <p class="text">
                        Projet en cours de création. Il s’agit d’un blog qui présente des voitures emblématiques avec système de vote et d’avis des visiteurs.
                    </p>
                    <h3 class="titre-projet">Statut</h3>
                    <p class="text text-warning">En cours de développement</p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="logo-container">
                    <img src="{{ asset('images/blogAuto.png') }}" alt="Blog Auto" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>
</section>
</div>
@endsection
