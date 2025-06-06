@extends('layouts.app')

@section('content')

    <canvas id="canvas"></canvas>
    <div class="background"></div>

    <!-- Contact -->
<section class="Contact">
  <div class="container">
    <h2 class="title-form">Contact</h2>

    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="contact-box">
      <div class="contact-left">
        <img src="{{ asset('images/logo.png') }}" alt="Votre Logo" class="logo2" />
      </div>
      <div class="contact-right">
        <form method="POST" action="{{ route('contact.store') }}">
          @csrf

          <div class="form-group">
            <label for="nom">Nom</label>
            <input
              type="text"
              id="nom"
              name="nom"
              required
              placeholder="Entrez votre nom"
              value="{{ old('nom') }}"
            />
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input
              type="email"
              id="email"
              name="email"
              required
              placeholder="Entrez votre adresse email"
              value="{{ old('email') }}"
            />
          </div>

          <div class="form-group">
            <label for="message">Message</label>
            <textarea
              id="message"
              name="message"
              required
              placeholder="Saisissez votre message ici"
              style="height: 200px"
            >{{ old('message') }}</textarea>
          </div>

          <button class="send-button" type="submit">Envoyer</button>
        </form>
      </div>
    </div>
    <div id="confirmation"></div>
  </div>
</section>
@endsection