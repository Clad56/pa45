window.addEventListener("DOMContentLoaded", () => {
  // DOMContentLoaded est un événement qui signifie que tout le HTML de la page a été chargé et analysé
  const banner = document.getElementById("consent-banner");
  const btn = document.getElementById("accept-cookies");
  const formulaire = document.getElementById("formulaire");

  // Affiche la bannière si pas encore accepté
  if (!localStorage.getItem("cookiesAccepted")) {
    banner.style.display = "block";
    formulaire.style.display = "none"; // on cache le formulaire tant que pas accepté
  } else {
    banner.style.display = "none";
    formulaire.style.display = "block";
  }

  btn.addEventListener("click", () => {
    localStorage.setItem("cookiesAccepted", "true");
    banner.style.display = "none";
    formulaire.style.display = "block";
  });

  // Pré-remplit les champs si consent donné
  if (localStorage.getItem("cookiesAccepted")) {
    const nom = localStorage.getItem("nom");
    const prenom = localStorage.getItem("prenom");
    const email = localStorage.getItem("email");

    if (nom) document.getElementById("name").value = nom;
    if (prenom) document.getElementById("firstname").value = prenom;
    if (email) document.getElementById("email").value = email;
  }

  // Gestion de la soumission du formulaire
  formulaire.addEventListener("submit", (e) => {
    e.preventDefault();

    if (!localStorage.getItem("cookiesAccepted")) {
      alert("Veuillez accepter la politique de stockage avant d’envoyer le formulaire.");
      return; // stoppe la soumission
    }

    const nom = document.getElementById("name").value;
    const prenom = document.getElementById("firstname").value;
    const email = document.getElementById("email").value;

    localStorage.setItem("nom", nom);
    localStorage.setItem("prenom", prenom);
    localStorage.setItem("email", email);

    alert("Données enregistrées ! Le formulaire va être envoyé.");

    formulaire.submit(); // envoi réel
  });
});


