// assets/js/app.js

// Menu mobile (ouvre/ferme la navigation).
document.addEventListener("DOMContentLoaded", () => {
  const btn = document.getElementById("menuToggle");
  const nav = document.getElementById("mainNav");

  if (btn && nav) {
    btn.addEventListener("click", () => {
      const open = nav.classList.toggle("open");
      btn.setAttribute("aria-expanded", open ? "true" : "false");
    });
  }
});

// Fermer le menu mobile quand on clique ailleurs.
document.addEventListener("click", (e) => {
  const btn = document.getElementById("menuToggle");
  const nav = document.getElementById("mainNav");
  if (!btn || !nav) return;
  const clickedInside = nav.contains(e.target) || btn.contains(e.target);
  if (!clickedInside) nav.classList.remove("open");
});
