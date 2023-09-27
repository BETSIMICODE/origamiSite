<?php $page="service"; ?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/cm.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Fira+Code&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/scrolAnimation.css">
        <title>Community manager</title>
    </head>
    <body>
        <?php 
                // Navigation
                require_once "navContent.php";
        ?>


<div class="bgCmFrame">
    
    <div class="frameContent">
            <!-- icon à coté de l'image  -->
           
            <!-- grand image  -->
            <div class="logoCmOrigamiContent">
                <img src="../images/a1.png" alt="" class="logoCmOrigami">
            </div>
            <div class="grid1">
                <div class="image-container">
                    <img src="../images/almadie.jpg" class="G-img"  width="260" height="426px">
                    <div class="cardContent">
                        <h1>Image Professionnel</h1>
                            <p>Envoutante symphonie verbale.</p>
                        <div class="sci">
                                <a href="https://www.facebook.com/people/Origami-Tech/100071048936332/"  target="_blank"><img class="iconMember roundIconMember" src="../images/fb.png" alt="Icone Facebook"></a>
                                <a href="https://www.linkedin.com/company/origami-tech-groupe/about/" target="_blank"><img class="iconMember squareIconMember" src="../images/lkdin.png" alt=""></a>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- description de la personne -->
            <div class="grid2">
            <?php 
                callNavContent(true,$page); 
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
                    color: #31e8b4;
                }
                .btnService:hover{
                    color: #31e8b4;
                    text-shadow: 2px 2px 20px color: #31e8b4;
                }
                .nav a::after{
                    background-color: #31e8b4;
                }
                .nav a:hover{
                    color: #31e8b4;
                    text-shadow: 2px 2px 20px #31e8b4;
                }
                </style>
                ";
                ?> 
                <div class="boite1">
                    <h1>Représenter votre image</h1>
                    <span>A travers nos contenus</span>
                    <p>
                    Avec notre service de community management professionnel, nous stimulons l'engagement et la croissance de votre communauté en ligne grâce à une stratégie personnalisée et un contenu captivant. Vous bénéficierez d'une présence en ligne stratégique, attirant plus de prospects et augmentant vos clients.
                    </p>
                </div>
                <div class="boite2">
                    <h1>Approche</h1>
                    <div class="service-container">
                        <div class="serviceClass">
                            <div class="service">
                                <img src="../images/reunir.png" alt="" class="imgCmApr">
                                <h2 class="scTitle">Réunir les clients</h2>
                                <p>Favoriser l'engagement communautaire par la création de contenu original et diversifié, renforçant ainsi les liens avec la communauté.</p>
                
                            </div>
                        </div>
                        <div class="serviceClass">
                            <div class="service">
                            <img src="../images/fidel.png" alt="" class="imgCmApr">
                                <h2 class="scTitle">Fidéliser les clients</h2>
                                <p>Développer une connaissance approfondie des besoins, préoccupations et aspirations de la communauté pour une meilleure compréhension.</p>
                
                            </div>
                        </div>
                        <div class="serviceClass">
                            <div class="service">
                            <img src="../images/convertir.png" alt="" class="imgCmApr">
                                <h2 class="scTitle">Convertir en clients</h2>
                                <p>Développer une connaissance approfondie des besoins, préoccupations et aspirations de la communauté pour une meilleure compréhension.</p>
                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
    
        </div>

</div>
<div class="contentCMmore">
    <div class="titleWorkCM">
        Nos missions
    </div>
    <div class="textContentCM1">
        
            <div class="leftCM">
                <h2 class="classTitleSection scrolAnim leftAnimation">
                    Gérer les réseaux sociaux
                </h2>
                
                <p class="paraCM scrolAnim leftAnimation">
                    En produisant des visuels attrayants, des vidéos captivantes, des infographies informatives, des articles intéressants et des histoires percutantes,on pourra attirer l'attention de l'audience et stimuler l'interaction.
                </p>
            </div>
            <div class="rightCM scrolAnim rightAnimation">
                <img src="../images/cm.gif" alt="reseaux sociaux gif" class="imgCM">

            </div>
    </div>
    <div class="textContentCM1">
            <div class="rightCM scrolAnim leftAnimation">
                <img src="../images/anime.gif" alt="anime gif" class="imgCM">
            </div>
            <div class="leftCM">
                <h2 class="classTitleSection scrolAnim rightAnimation">
                    Animer les communautés en ligne d'une Entreprise    
                </h2>
                
                <p class="paraCM scrolAnim rightAnimation">
                    Répondre de manière proactive.
                    Encourager la participation en organisant des concours, des jeux ou des événements en ligne.
                    Suivre les tendances et les sujets d'actualité.                 
                </p>
            </div>
            
    </div>

    <div class="textContentCM1">
        
            <div class="leftCM">
                <h2 class="classTitleSection scrolAnim leftAnimation">
                    Partager du contenu pertinent et engageant               
                </h2>
                
                <p class="paraCM scrolAnim leftAnimation">
                Chaque contenu partagé doit inclure un appel à l'action clair et pertinent. Cela peut être une invitation à commenter, à partager, à aimer.
                Planification et calendrier éditorial : Avoir un calendrier éditorial bien planifié permet de partager régulièrement du contenu de qualité                </p>
            </div>
            <div class="rightCM scrolAnim rightAnimation">
                <img src="../images/planification.gif" alt="planificaiton gif" class="imgCM">
            </div>
    </div>

    <div class="textContentCM1">
            <div class="rightCM scrolAnim leftAnimation">
                <img src="../images/entreprise.gif" alt="anime gif" class="imgCM">
            </div>
            <div class="leftCM">
                <h2 class="classTitleSection scrolAnim rightAnimation">
                Promouvoir une image positive de l'entreprise    
                </h2>
                
                <p class="paraCM scrolAnim rightAnimation">
                Encourager les retours positifs
            Partager du contenu qui met en évidence les valeurs, la mission et la vision de l'Entreprise.    
                </p>
            </div>
            
    </div>

    <div class="devisContent">
        
    </div>
    <?php 
                // Navigation
                require_once "navBarForAll.php";
                navBarForAll($page);
    ?>




    
    <?php 
        // button back to top
        require_once "backToTop.php";
        // footer
        require_once "footer.php";
    ?>    
    <script src="../js/scrolAnimation.js"></script>
    <script src="../js/navBarForAll.js"></script>
    <script src="../js/serviceBtn.js"></script>
    <script src="../js/btnNavigationForDown.js"></script>
    <script src="../js/btnNavigation.js"></script>   
    <script src="../js/backToTop.js"></script>
    <script src="../js/dropDownMenuDown.js"></script>
    <script src="../js/linkRS.js"></script>
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
            let topPosition = (btnServiceRect.bottom - 0.08 * window.innerHeight) + 'px';
            let leftPosition = (btnServiceRect.left - 0.05 * window.innerWidth) + 'px';

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
    <script>
        // Sélectionnez l'élément avec la classe .logoCmOrigami
        const logoElement = document.querySelector('.logoCmOrigami');

        // Ajoutez un gestionnaire d'événement au clic sur l'élément
        logoElement.addEventListener('click', () => {
            // Actualisez la page
            location.reload();
        });
    </script>
    
    </body>
</html>