// --------------------------
// 1. Mobile Navigation Toggle
// --------------------------
function toggleMenu() {
  const menu = document.getElementById("mobileMenu");
  if (menu) {
    menu.classList.toggle("hidden");
  }
}

document.addEventListener("DOMContentLoaded", () => {
  const menuToggle = document.querySelector("[data-toggle='mobile']");
  if (menuToggle) {
    menuToggle.addEventListener("click", toggleMenu);
  }
});

// --------------------------
// 2. Smooth Scroll to Anchors
// --------------------------
document.querySelectorAll("a[href^='#']").forEach(anchor => {
  anchor.addEventListener("click", function (e) {
    const targetId = this.getAttribute("href").substring(1);
    const target = document.getElementById(targetId);

    if (target) {
      e.preventDefault();
      target.scrollIntoView({ behavior: "smooth", block: "start" });
    }
  });
});

// --------------------------
// 3. Back to Top Button
// --------------------------
const backToTopBtn = document.getElementById("backToTop");

window.addEventListener("scroll", () => {
  if (backToTopBtn) {
    if (window.scrollY > 400) {
      backToTopBtn.classList.remove("hidden");
    } else {
      backToTopBtn.classList.add("hidden");
    }
  }
});

if (backToTopBtn) {
  backToTopBtn.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
}
