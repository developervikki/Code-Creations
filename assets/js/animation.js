// ------------------------------
// 1. Scroll Animation (Fade-in)
// ------------------------------
const revealElements = document.querySelectorAll(".reveal");

function revealOnScroll() {
  for (let i = 0; i < revealElements.length; i++) {
    const windowHeight = window.innerHeight;
    const elementTop = revealElements[i].getBoundingClientRect().top;
    const revealPoint = 100;

    if (elementTop < windowHeight - revealPoint) {
      revealElements[i].classList.add("opacity-100", "translate-y-0");
    } else {
      revealElements[i].classList.remove("opacity-100", "translate-y-0");
    }
  }
}

window.addEventListener("scroll", revealOnScroll);
window.addEventListener("load", revealOnScroll);

// To use, add these classes to HTML elements:
// class="reveal opacity-0 translate-y-4 transition-all duration-700"

// ------------------------------
// 2. Typed Text Effect (Optional)
// ------------------------------
const typedTarget = document.getElementById("typed");
if (typedTarget && typeof Typed !== "undefined") {
  new Typed("#typed", {
    strings: ["Web Developer", "Tech Enthusiast", "Open Source Contributor"],
    typeSpeed: 60,
    backSpeed: 30,
    backDelay: 1500,
    loop: true,
  });
}

// ------------------------------
// 3. Particle Background (Optional)
// ------------------------------
if (typeof particlesJS !== "undefined") {
  particlesJS("particles-js", {
    particles: {
      number: { value: 50 },
      size: { value: 3 },
      color: { value: "#3f51b5" },
      line_linked: { enable: true, color: "#8e0a37" }
    },
    interactivity: {
      events: {
        onhover: { enable: true, mode: "repulse" }
      }
    }
  });
}
