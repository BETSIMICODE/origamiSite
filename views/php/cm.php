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
        <title>Community manager</title>
    </head>
    <body>
        <?php 
                // Navigation
                require_once "navContent.php";
                require_once "navBarForAll.php";
                navBarForAll($page,true,true);
        ?>
<div class="bgCmUp">
    <div class="textContentCm">
        <h1 class="titleCm">
            Notre community management
        </h1>
        <p class="textCm">
            Optimisation de l'engagement et de la fidélisation des utilisateurs par le biais de l'analyse sémantique, de l'ARN, de la segmentation avancée et de l'analyse des KPI.
        </p>
        <button class="btnStart1">Plus d'info</button>
    </div>
    <div class="gifCmContent">
        <img class="gifCm" src="../images/cm.png" alt="">
    </div>
</div>

<div class="bgCmFrame">
    
    <div class="frameContent">
            <!-- icon à coté de l'image  -->
           
            <!-- grand image  -->
            <div class="grid1">
                <div class="image-container">
                    <img src="../images/almadie.jpg" class="G-img"  width="260" height="426px">
                    <div class="cardContent">
                        <h1>Image Professionnel</h1>
                            <p>Envoutante symphonie verbale.</p>
                        <div class="sci">
                                <a href="#"><img class="iconMember roundIconMember" src="../images/fb.png" alt="Icone Facebook"></a>
                                <a href="#"><img class="iconMember squareIconMember" src="../images/lkdin.png" alt=""></a>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- description de la personne -->
            <div class="grid2">
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
                                <img src="../images/auth.png" alt="" class="imgCmApr">
                                <h2 class="scTitle">Authenticité et personnalité</h2>
                                <p>Favoriser l'engagement communautaire par la création de contenu original et diversifié, renforçant ainsi les liens avec la communauté.</p>
                
                            </div>
                        </div>
                        <div class="serviceClass">
                            <div class="service">
                            <img src="../images/partage.png" alt="" class="imgCmApr">
                                <h2 class="scTitle">Ecoute et réactivité</h2>
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
                <h2 class="classTitleSection">
                    Gérer les réseaux sociaux
                </h2>
                
                <p class="paraCM">
                    En produisant des visuels attrayants, des vidéos captivantes, des infographies informatives, des articles intéressants et des histoires percutantes,on pourra attirer l'attention de l'audience et stimuler l'interaction.
                </p>
            </div>
            <div class="rightCM">
                <img src="../images/cm.gif" alt="reseaux sociaux gif" class="imgCM">

            </div>
    </div>
    <div class="textContentCM1">
            <div class="rightCM">
                <img src="../images/anime.gif" alt="anime gif" class="imgCM">
            </div>
            <div class="leftCM">
                <h2 class="classTitleSection">
                    Animer les communautés en ligne d'une Entreprise    
                </h2>
                
                <p class="paraCM">
                    Répondre de manière proactive.
                    Encourager la participation en organisant des concours, des jeux ou des événements en ligne.
                    Suivre les tendances et les sujets d'actualité.                 
                </p>
            </div>
            
    </div>

    <div class="textContentCM1">
        
            <div class="leftCM">
                <h2 class="classTitleSection">
                    Partager du contenu pertinent et engageant               
                </h2>
                
                <p class="paraCM">
                Chaque contenu partagé doit inclure un appel à l'action clair et pertinent. Cela peut être une invitation à commenter, à partager, à aimer.
                Planification et calendrier éditorial : Avoir un calendrier éditorial bien planifié permet de partager régulièrement du contenu de qualité                </p>
            </div>
            <div class="rightCM">
                <img src="../images/planification.gif" alt="planificaiton gif" class="imgCM">
            </div>
    </div>

    <div class="textContentCM1">
            <div class="rightCM">
                <img src="../images/entreprise.gif" alt="anime gif" class="imgCM">
            </div>
            <div class="leftCM">
                <h2 class="classTitleSection">
                Promouvoir une image positive de l'entreprise    
                </h2>
                
                <p class="paraCM">
                Encourager les retours positifs
            Partager du contenu qui met en évidence les valeurs, la mission et la vision de l'Entreprise.    
                </p>
            </div>
            
    </div>

    <div class="devisContent">

    </div>





    <?php 
        // button back to top
        require_once "backToTop.php";
        // footer
        require_once "footer.php";
    ?>
    <script src="../js/serviceBtn1.js"></script>
    <script src="../js/btnNavigationForDown.js"></script>
    <script src="../js/btnNavigation.js"></script>   
    <script src="../js/backToTop.js"></script>
    <script src="../js/dropDownMenuDown.js"></script>
    <script src="../js/dropDownMenuUp.js"></script>
    <style>
       
    
    </style>
    
    </body>
</html>