   // Fonction pour afficher ou masquer le bouton Back to Top
  function toggleBackToTop() {
    const backToTopButton = document.getElementById('backToTop');
    if (window.scrollY > 100) {
        backToTopButton.classList.add('active');
    } else {
        backToTopButton.classList.remove('active');
    }
    }
    
    // Ajoutez des écouteurs d'événements pour les événements de scroll et de chargement de la fenêtre
    window.addEventListener('scroll', toggleBackToTop);
    window.addEventListener('load', toggleBackToTop);
    
    // Fonction pour faire défiler vers le haut lorsque le bouton Back to Top est cliqué
    document.getElementById('backToTop').addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
                });
        });