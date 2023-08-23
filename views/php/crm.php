<?php $page="service"; ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CRM</title>
  <link rel="stylesheet" href="../css/crm.css">

</head>
<?php 
  // Navigation
  require_once "navContent.php";
?>
<body>
<!-- partial:index.partial.html -->
<div class="crmContainer">
  <div class="bigCardContent">
    <div class="leftCard">
      <img src="../images/crm.jpg"  class="lcUp">

      </img>
      <div class="lcDown">
        <main class="container">
            <section class="animation">
              <div class="animationTxt "><p class="txtCRM first" >Gestion de l'Information Client</p></div>
              <div class="animationTxt "><p class="txtCRM second">Gestion des Ventes et du Marketing</p></div>
              <div class="animationTxt "><p class="txtCRM third">Service et Support Client</p></div>
              <div class="animationTxt "><p class="txtCRM forth">Personnalisation et Amélioration de l'Expérience Client</p></div>
            </section>
          </main>
      </div>

    </div>
    <div class="rightCard">
      <div class="navContentCRM">
      <?php 
                callNavContent(true,$page,"menu1.png","x1.png","arrowDown1.png"); 
                switch ($page) {
                    case "home":
                        $btnClic="btnHome";
                        break;
                    case "service":
                        $btnClic="btnService, .btnServiceForDown";
                        break;
                    case "evenement":
                        $btnClic="btnEvent";
                        break;
                    case "contact":
                        $btnClic="btnContact";
                        break;
                    
                    default:
                        $btnClic="btnHome";
                        break;
                }
            
                echo "
                <style>
                .".$btnClic."{
                    color: rgb(255, 0, 200)!important;
                }
                .btnService:hover{
                    color: rgb(255, 0, 200)!important;
                    text-shadow: 2px 2px 20px color: rgb(255, 0, 200)!important;
                }
                .nav a::after{
                    background-color: rgb(255, 0, 200)!important;
                }
                .nav a:hover{
                    color: rgb(255, 0, 200)!important;
                    text-shadow: 2px 2px 20px rgb(255, 0, 200)!important;
                }
                .nav a{
                  color: rgb(0, 128, 255);
                  text-shadow: 0px 0px 0px rgba(35, 37, 37, 0);;
              }
                </style>
                ";
                ?> 
      </div>
      <div class="middleRC">
              <div class="mRCparaContent">
                <h1 class="titleCRM">
                  Gestion Relation Client
                </h1>
                <p class="paraMRC">
                  Optimisez vos relations client avec notre solution de gestion sur mesure, conçue pour vous simplifier la vie tout en renforçant vos liens commerciaux.
                </p>
              </div>
              
      </div>
      <img src="../images/nuage.png" class="flotRCmore">
      
      </img>
    </div>
  </div>
</div>
<div class="crmContent">
  <div class="partCrm">
    <div class="partLeftCrm">
      <h1 class="titlePLC">
        Gestion de l'Information Client 
      </h1>
      <p class="paraPLC">
      Centralisation, analyse et intégration des données clients pour faciliter les interactions et optimiser les processus.
      </p>
    </div>
    <div class="partRightCrm">
      <img src="../images/anal.gif" alt="" class="imgCrm">
    </div>
  </div>

  <div class="partCrm">
    <div class="partRightCrm">
      <img src="../images/mark.gif" alt="" class="imgCrm">
    </div>
    <div class="partLeftCrm">
      <h1 class="titlePLC">
      Gestion des Ventes et du Marketing
      </h1>
      <p class="paraPLC">
      Automatisation du marketing, suivi des ventes, gestion des campagnes et service client pour une approche globale de développement commercial.      </p>
    </div> 
  </div>

  
  <div class="partCrm">
    <div class="partLeftCrm">
      <h1 class="titlePLC">
      Personnalisation et Amélioration de l'Expérience Client
      </h1>
      <p class="paraPLC">
      Offrir une expérience personnalisée à travers la personnalisation des interactions, la gestion des rendez-vous, les analyses et la gestion de projets.      </p>
    </div>
    <div class="partRightCrm">
      <img src="../images/exp.gif" alt="" class="imgCrm">
    </div>
  </div>

  <div class="partCrm">
    <div class="partRightCrm">
      <img src="../images/proj.gif" alt="" class="imgCrm">
    </div>
    <div class="partLeftCrm">
      <h1 class="titlePLC">
      Gestion des Projets
      </h1>
      <p class="paraPLC">
      Assurer une gestion efficace des projets impliquant les clients, en respectant les délais et en maximisant les ressources disponibles.      </p>
    </div> 
  </div>
</div>
<div class="devisContent">
  <p class="textDevisCRM">
  Confiez vos projets à des professionnels, avec un prix abordable
  </p>
  <button class="glow-on-hover" type="button">FAIRE UN DEVIS</button>
  
</div>

<?php 
  // Navigation
  require_once "navBarForAll.php";
    navBarForAll($page);
  // button back to top
  require_once "backToTop.php";
  // footer
  require_once "footer.php";
?> 
<script src="../js/navBarForAll.js"></script>
    <script src="../js/serviceBtn.js"></script>
    <script src="../js/btnNavigationForDown.js"></script>
    <script src="../js/btnNavigation.js"></script>   
    <script src="../js/backToTop.js"></script>
    <script src="../js/dropDownMenuDown.js"></script>
    <script>
        // Sélectionnez l'élément .btnService et .menuDerService
        let btnService = document.querySelector('.btnService');
        let menuDerService = document.querySelector('.menuDerService');

        // Ajoutez un écouteur d'événement au survol de .btnService
        btnService.addEventListener('mouseenter', () => {
            menuDerService.style.display = 'flex'; // Affichez le menu déroulant au survol
            // Obtenez les coordonnées de .btnService
            let btnServiceRect = btnService.getBoundingClientRect();

            // Calculez la position top et left du menu déroulant
            let topPosition = (btnServiceRect.bottom - 0.16 * window.innerHeight) + 'px';
            let leftPosition = (btnServiceRect.left - 0.12 * window.innerWidth) + 'px';

            // Appliquez les positions calculées
            menuDerService.style.top = topPosition;
            menuDerService.style.left = leftPosition;
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
    </script>
    <!-- partial -->

</body>

</html>
