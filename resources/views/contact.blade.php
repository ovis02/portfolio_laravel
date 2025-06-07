@extends('layouts.app')

@section('content')

    <canvas id="canvas"></canvas>
    <div class="background"></div>

<!-- Contact -->
<section class="Contact">
  <div class="container">

    <div id="success-message" class="alert alert-success d-none text-center">
      Message envoyé avec succès !
    </div>

    <div class="contact-box">
      <div class="contact-left">
        <img src="{{ asset('images/logo.png') }}" alt="Votre Logo" class="logo2" />
      </div>

      <div class="contact-right">
        <!-- Titre déplacé ici pour un meilleur alignement -->
        <h2 class="title-form">Contact</h2>

        <form id="contact-form" method="POST" action="{{ route('contact.store') }}">
          @csrf

          <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" />
            <div class="error text-danger" id="error-nom"></div>
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Entrez votre adresse email" />
            <div class="error text-danger" id="error-email"></div>
          </div>

          <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Saisissez votre message ici" style="height: 200px"></textarea>
            <div class="error text-danger" id="error-message"></div>
          </div>

          <button class="send-button" type="submit">Envoyer</button>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection