<!-- Footer -->
<footer class="footer">
  <div class="container">
    <!-- Section principale du footer -->
    <div class="footer-content row d-flex justify-content-between align-items-center">
      
      <!-- Section à propos -->
      <div class="col-md-4 footer-about">
        <h3><a href="{{ route('apropos') }}">À propos de moi</a></h3>
        <p>
          Développeur passionné par la création d'expériences web modernes et performantes. Mon portfolio reflète mon expertise dans le design et le développement front-end.
        </p>
      </div>

      <!-- Section réseaux sociaux -->
      <div class="col-md-4 text-center footer-social">
        <div class="d-flex flex-wrap justify-content-center gap-2">
          <div class="social-icon">
            <a href="https://www.facebook.com/oves.moh" target="_blank">
              <img src="{{ asset('images/facebook.png') }}" alt="Facebook Logo" />
            </a>
          </div>
          <div class="social-icon">
            <a href="https://www.instagram.com/ovismo786/" target="_blank">
              <img src="{{ asset('images/instagram.png') }}" alt="Instagram Logo" />
            </a>
          </div>
          <div class="social-icon">
            <a href="https://www.linkedin.com/in/aowis-mohammad-45763328a/" target="_blank">
              <img src="{{ asset('images/linkedin.png') }}" alt="LinkedIn Logo" />
            </a>
          </div>
          <div class="social-icon">
            <a href="https://twitter.com/oviss02" target="_blank">
              <img src="{{ asset('images/twitter.png') }}" alt="Twitter Logo" />
            </a>
          </div>
          <div class="social-icon">
            <a href="https://github.com/ovis02" target="_blank">
              <img src="{{ asset('images/github.png') }}" alt="GitHub Logo" />
            </a>
          </div>
        </div>
      </div>

      <!-- Section contact rapide -->
      <div class="col-md-4 footer-contact text-right">
        <h3>Me contacter</h3>
        <p>Email : <a href="mailto:oves7860@gmail.com">oves7860@gmail.com</a></p>
        <p>Téléphone : +33 6 09 38 12 07</p>
      </div>
    </div>

    <!-- Barre de copyright -->
    <div class="footer-bottom row text-center mt-4">
      <div class="col-12">
        <p>© {{ date('Y') }} MOHAMMAD Aowis. Tous droits réservés.</p>
        <p><a href="#">Mentions légales</a> | <a href="#">Politique de confidentialité</a></p>
      </div>
    </div>
  </div>
</footer>
