function setHeightContentboiteText() {
  const cbtElements = document.querySelectorAll('.contentBoiteText');
  const nbrBoite = document.querySelector('.numberBoite');
 
  const nbrBoiteRect = nbrBoite.getBoundingClientRect();
  const nbrBoiteHeight = nbrBoiteRect.height;

  cbtElements.forEach(cbtElement => {
    cbtElement.style.height = nbrBoiteHeight + 'px';
  });

  var screenWidth = screen.width;

  // Afficher la largeur de l'écran dans la console du navigateur
  // console.log("Largeur de l'écran : " + screenWidth + " pixels");

  // Afficher la largeur de l'écran dans une alerte (boîte de dialogue)
  alert("Largeur de l'écran : " + screenWidth + " pixels");
  // alert(nbrBoiteHeight); 
  // alert(cbtElements[0].style.height); 
}

setHeightContentboiteText();