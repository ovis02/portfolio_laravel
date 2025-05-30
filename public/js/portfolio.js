// confirmation de maniere asyncrone

$(document).ready(function () {
  $("#myForm").submit(function (event) {
    event.preventDefault(); // Empêche la soumission classique du formulaire

    // Récupère des données du formulaire
    var formData = $(this).serialize();

    // Requête AJAX
    $.ajax({
      type: "POST",
      url: "formulaire.php",
      data: formData,
      success: function (response) {
        // met à jour la section dans l'id de confirmation
        $("#confirmation").html(response);
      },
      error: function () {
        $("#confirmation").html(
          "Une erreur est survenue lors de l'envoi du formulaire."
        );
      },
    });
  });
});

//Formulaire administrateur

$(document).ready(function () {
  // Gestion du clic sur le bouton admin pour afficher/masquer le formulaire
  $(".admin").on("click", function (event) {
    event.preventDefault();
    if ($(".login-form").css("display") === "block") {
      $(".login-form").css("display", "none");
    } else {
      $(".login-form").css("display", "block");
    }
  });

  // Gestion du clic sur le bouton "Fermer" pour masquer le formulaire
  $(".close-btn").on("click", function () {
    $(".login-form").css("display", "none");
  });
});

//burger navigation
document.getElementById("burger-menu").addEventListener("click", function () {
  document.getElementById("side-nav").classList.add("open");
});

document.getElementById("close-btn").addEventListener("click", function () {
  document.getElementById("side-nav").classList.remove("open");
});

//canvas

const canvas = document.getElementById("canvas");
const context = canvas.getContext("2d");
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

const particles = [];

class Particle {
  constructor(x, y) {
    this.x = x;
    this.y = y;
    this.size = Math.random() * 30 + 10; // Plus grandes particules pour un effet de brume
    this.speedX = Math.random() * 1 - 0.5; // Mouvement lent
    this.speedY = Math.random() * 1 - 0.5;
    this.opacity = Math.random() * 0.05 + 0.01; // Opacité plus faible pour plus de transparence
    this.color =
      Math.random() > 0.5
        ? `rgba(85, 58, 223, ${this.opacity})`
        : `rgba(255, 215, 0, ${this.opacity})`; // Violet et Jaune
  }

  update() {
    this.x += this.speedX;
    this.y += this.speedY;
    if (this.size > 0.3) this.size -= 0.05; // Diminuer lentement la taille des particules
  }

  draw() {
    context.fillStyle = this.color;
    context.beginPath();
    context.arc(this.x, this.y, this.size, 0, Math.PI * 2);
    context.fill();
  }
}

function createParticles(x, y) {
  for (let i = 0; i < 3; i++) {
    // Moins de particules à chaque mouvement pour un effet léger
    particles.push(new Particle(x, y));
  }
}

function animate() {
  context.clearRect(0, 0, canvas.width, canvas.height);
  for (let i = 0; i < particles.length; i++) {
    particles[i].update();
    particles[i].draw();
    if (particles[i].size <= 0.3) {
      particles.splice(i, 1);
      i--;
    }
  }
  requestAnimationFrame(animate);
}

animate();

window.addEventListener("mousemove", (e) => {
  createParticles(e.x, e.y);
});

window.addEventListener("resize", () => {
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
});
