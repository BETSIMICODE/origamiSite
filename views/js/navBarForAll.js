// Fonction pour afficher ou masquer la classe .navBarForAll
function toggleNavBarForAll() {
    const navBarForAll = document.querySelector('.navBarForAll');
    const screenHeight = window.innerHeight;

    if (window.scrollY > screenHeight) {
        navBarForAll.style.display = 'flex';
    } else {
        navBarForAll.style.display = 'none';
    }
}

// Ajoutez des écouteurs d'événements pour les événements de scroll et de chargement de la fenêtre
window.addEventListener('scroll', toggleNavBarForAll);
window.addEventListener('load', toggleNavBarForAll);

toggleNavBarForAll();