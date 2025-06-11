//burger navigation
document.getElementById('burger-menu').addEventListener('click', function () {
    document.getElementById('side-nav').classList.add('open');
});

document.getElementById('close-btn').addEventListener('click', function () {
    document.getElementById('side-nav').classList.remove('open');
});

// canvas

const canvas = document.getElementById('canvas');
const context = canvas.getContext('2d');
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
        this.color = Math.random() > 0.5 ? `rgba(85, 58, 223, ${this.opacity})` : `rgba(255, 215, 0, ${this.opacity})`; // Violet et Jaune
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

// particules au demarrage
for (let i = 0; i < 50; i++) {
    createParticles(Math.random() * canvas.width, Math.random() * canvas.height);
}

animate();

// pour format bureau
window.addEventListener('mousemove', (e) => {
    createParticles(e.x, e.y);
});

// pour mobile
window.addEventListener('touchstart', (e) => {
    const touch = e.touches[0];
    createParticles(touch.clientX, touch.clientY);
});

window.addEventListener('touchmove', (e) => {
    const touch = e.touches[0];
    createParticles(touch.clientX, touch.clientY);
});

window.addEventListener('resize', () => {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
});

//asynchrone message succès
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contact-form');
    const successMsg = document.getElementById('success-message');

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        // Reset previous errors
        ['nom', 'email', 'message'].forEach((id) => {
            const errorEl = document.getElementById('error-' + id);
            if (errorEl) errorEl.textContent = '';
        });
        successMsg.classList.add('d-none');

        const formData = new FormData(form);

        fetch(form.action, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                Accept: 'application/json',
            },
            body: formData,
        })
            .then((response) => {
                if (!response.ok) return response.json().then((err) => Promise.reject(err));
                return response.json();
            })
            .then((data) => {
                form.reset();
                successMsg.classList.remove('d-none');
                successMsg.textContent = data.message;
            })
            .catch((error) => {
                if (error.errors) {
                    for (let field in error.errors) {
                        const errorEl = document.getElementById(`error-${field}`);
                        if (errorEl) errorEl.textContent = error.errors[field][0];
                    }
                }
            });
    });
});
