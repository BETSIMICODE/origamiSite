  // Sélectionnez l'élément .btnService1 et .menuDerService1
  let btnService1 = document.querySelector('.btnServiceForDown');
  let menuDerService1 = document.querySelector('.menuDerServiceForDown');

  // Ajoutez un écouteur d'événement au survol de .btnService1
  btnService1.addEventListener('mouseenter', () => {
    // alert("OK!");
    menuDerService1.style.display = 'flex'; // Affichez le menu déroulant au survol
      
  
  
  });
  menuDerService1.addEventListener('mouseenter', () => {
      menuDerService1.style.display = 'flex'; // Affichez le menu déroulant au survol
  });

 // Ajoutez un écouteur d'événement pour détecter lorsque le curseur entre dans des conteneurs différents de .btnService1 ou .menuDerService1
document.addEventListener('mouseover', (event) => {
if (!btnService1.contains(event.target) && !menuDerService1.contains(event.target)) {
    // Cachez le menu déroulant lorsque le curseur entre dans des conteneurs différents de .btnService1 ou .menuDerService1
    menuDerService1.style.display = 'none';
}
});

// Ajoutez un écouteur d'événement lorsque le curseur quitte le menu déroulant
menuDerService1.addEventListener('mouseleave', () => {
menuDerService1.style.display = 'none';
});