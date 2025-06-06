@extends('layouts.app')

@section('content')

    <canvas id="canvas"></canvas>
    <div class="background"></div>

    <section class="a-propos-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="a-propos-content text-center">
                    <h1 class="a-propos-title">À propos de moi</h1>
                    <p class="a-propos-description">
                        Je suis Mohammad Aowis, développeur web passionné par les technologies modernes.
                        Mon objectif est de créer des expériences numériques immersives et de répondre aux défis
                        de la transformation numérique. Créatif et déterminé, je m'engage à concevoir des solutions
                        web efficaces et élégantes.
                    </p>
                    <a href="{{ asset('cv/Aowis_MOHAMMAD_cv_2025.pdf') }}" target="_blank" class="futuristic-link">
                        Mon CV
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection