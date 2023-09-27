// Récupérer tous les boutons et les contenus du menu déroulant
let btnService111 = document.querySelector('.btnServiceForDown');
let btnMenuDerContents000 = document.querySelectorAll('.btnMenuDerContent');
let imagesA0 = document.querySelectorAll('.arrowDownImg');
// Fonction pour basculer la classe .activeNav pour tous les éléments
function toggleActiveNav() {
    // alert("cliquer");
    btnMenuDerContents000.forEach((content) => {
        content.classList.toggle('activeNav');
    });
    // alert("rotation1");
    imagesA0.forEach((image) => {
        image.classList.toggle('rotation180');
    });
    // alert("rotation2");
}

// Ajouter un écouteur d'événement pour le clic sur chaque bouton
btnService111.addEventListener('click', toggleActiveNav);
