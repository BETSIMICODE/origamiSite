// Sélectionnez tous les éléments ayant la classe .fbLinkOrigami
var fbLinks = document.querySelectorAll('.fbLinkOrigami');

// Ajoutez un gestionnaire d'événements clic à chaque élément
fbLinks.forEach(function(link) {
  link.addEventListener('click', function(event) {
    event.preventDefault(); // Empêche le lien de s'ouvrir dans la fenêtre actuelle
    window.open('https://www.facebook.com/profile.php?id=100071048936332', '_blank');
  });
});



// Sélectionnez tous les éléments ayant la classe .fbLinkOrigami
var lkdLinks = document.querySelectorAll('.lkdLinkOrigami');

// Ajoutez un gestionnaire d'événements clic à chaque élément
lkdLinks.forEach(function(link) {
  link.addEventListener('click', function(event) {
    event.preventDefault(); // Empêche le lien de s'ouvrir dans la fenêtre actuelle
    window.open('https://www.linkedin.com/company/origami-tech-groupe/about/', '_blank');
  });
});