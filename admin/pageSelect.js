function toggleClass(element) {
    // Retire la classe 'aSel' de tous les liens
    var links = document.querySelectorAll('.pageListLeft');
    links.forEach(function(link) {
      link.classList.remove('aSel');
    });

    // Ajoute la classe 'aSel' uniquement à l'élément actuellement cliqué
    element.classList.add('aSel');
  }