@extends('layouts.app')

@section('content')

    <canvas id="canvas"></canvas>
    <div class="background"></div>

<!-- Contact -->
<section class="Contact">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="contact-box row">
          
          <!-- Logo -->
          <div class="col-md-5 d-flex justify-content-center align-items-center mb-4 mb-md-0">
            <img src="{{ asset('images/logo.png') }}" alt="Votre Logo" class="logo2 img-fluid" />
          </div>

          <!-- Formulaire -->
          <div class="col-md-7">
            <h2 class="title-form">Contact</h2>
            <form method="POST" action="{{ route('contact.store') }}">
              @csrf

              <div class="form-group mb-3">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez votre nom">
              </div>

              <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre adresse email">
              </div>

              <div class="form-group mb-3">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Saisissez votre message ici"></textarea>
              </div>

              <button type="submit" class="send-button w-100">Envoyer</button>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
@endsection