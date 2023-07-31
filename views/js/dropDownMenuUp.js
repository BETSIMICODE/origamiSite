  // Sélectionnez l'élément .btnService et .menuDerService
  let btnServiceForDown = document.querySelector('.btnServiceForDown');
  let btnService = document.querySelector('.btnService');
  let menuDerService = document.querySelector('.menuDerService');

  // Ajoutez un écouteur d'événement au survol de .btnService
  btnService.addEventListener('mouseenter', () => {
      menuDerService.style.display = 'flex'; // Affichez le menu déroulant au survol
      // Obtenez les coordonnées de .btnService
      let btnServiceRect = btnService.getBoundingClientRect();

      // Placez le menu déroulant en bas de .btnService
      menuDerService.style.top = btnServiceRect.bottom + 'px';
  
  
  });
  menuDerService.addEventListener('mouseenter', () => {
      menuDerService.style.display = 'flex'; // Affichez le menu déroulant au survol
  });

 // Ajoutez un écouteur d'événement pour détecter lorsque le curseur entre dans des conteneurs différents de .btnService ou .menuDerService
document.addEventListener('mouseover', (event) => {
if (!btnService.contains(event.target) && !menuDerService.contains(event.target)) {
  // Cachez le menu déroulant lorsque le curseur entre dans des conteneurs différents de .btnService ou .menuDerService
  menuDerService.style.display = 'none';
}
});

// Ajoutez un écouteur d'événement lorsque le curseur quitte le menu déroulant
menuDerService.addEventListener('mouseleave', () => {
menuDerService.style.display = 'none';
});