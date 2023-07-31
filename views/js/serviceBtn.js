// Récupérer tous les boutons et les contenus du menu déroulant
let btnService00 = document.querySelector('.btnService');
let btnService11 = document.querySelector('.btnServiceForDown');
let btnMenuDerContents00 = document.querySelectorAll('.btnMenuDerContent');
let images = document.querySelectorAll('.arrowDownImg');
// Fonction pour basculer la classe .activeNav pour tous les éléments
function toggleActiveNav() {
    // alert("cliquer");
    btnMenuDerContents00.forEach((content) => {
        content.classList.toggle('activeNav');
    });
    // alert("rotation1");
    images.forEach((image) => {
        image.classList.toggle('rotation180');
    });
    // alert("rotation2");
}

// Ajouter un écouteur d'événement pour le clic sur chaque bouton
btnService00.addEventListener('click', toggleActiveNav);
btnService11.addEventListener('click', toggleActiveNav);
