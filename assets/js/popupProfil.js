const modal = document.getElementById('modal');
const openModalBtn = document.getElementById('openModalBtn');
const closeModalBtn = document.getElementById('closeModalBtn');

// Ouvrir la modale
openModalBtn.addEventListener('click', () => {
    modal.classList.remove('hidden');
});

// Fermer la modale
closeModalBtn.addEventListener('click', () => {
    modal.classList.add('hidden');
});

// Fermer la modale en cliquant à l'extérieur
modal.addEventListener('click', (event) => {
    if (event.target === modal) {
        modal.classList.add('hidden');
    }
});