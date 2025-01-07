// Récupérer les éléments nécessaires
const roleSelect = document.getElementById("role");
const dynamicFields = document.getElementById("dynamicFields");

// Ajouter un écouteur pour le changement de rôle
roleSelect.addEventListener("change", () => {
  // Réinitialiser les champs dynamiques
  dynamicFields.innerHTML = "";

  if (roleSelect.value === "Vendeur") {
    // Créer le champ pour le nom de l'entreprise
    const companyNameInput = document.createElement("input");
    companyNameInput.type = "text";
    companyNameInput.name = "companyName";
    companyNameInput.placeholder = "Nom de l'entreprise";
    companyNameInput.className =
      "w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 placholder:font-principale mt-4";

    // Créer le champ pour l'adresse de l'entreprise
    const companyAddressInput = document.createElement("input");
    companyAddressInput.type = "text";
    companyAddressInput.name = "companyAddress";
    companyAddressInput.placeholder = "Adresse de l'entreprise";
    companyAddressInput.className =
      "w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 mt-4";

    // Ajouter les champs au conteneur
    dynamicFields.appendChild(companyNameInput);
    dynamicFields.appendChild(companyAddressInput);
  }
});



