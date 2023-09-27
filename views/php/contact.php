<?php $page="contact"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/contact.css">

    <title>Contact Us</title>
</head>
<body>
        <?php 
                        // Navigation
                        require_once "navContent.php";
                        require_once "navBarForAll.php";
                        navBarForAll($page,true,true);
                ?>
    
    <div class="bgCmUp">
        <div class="emptyDiv">

        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                <h3 class="animate-charcter">RETROUVEZ-NOUS ICI 📌</h3>
                </div>
            </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d464.1776614757051!2d47.088640509774436!3d-21.451980166477185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21e7bff69bbf8373%3A0xf3631d1eec10c67e!2sBloc%20Scacco%20ISAHA!5e0!3m2!1sfr!2smg!4v1692258682142!5m2!1sfr!2smg" width="100" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        
    </div>
    <div class="contentTarification">
      
    <div class="leftTarif">
      <h1 class="titleLeftTarif">
        Explorez nos offres !
      </h1>
      <p class="paraLeftTarif">
      Rejoignez-nous dans un voyage où la créativité rencontre la technologie. Explorez nos services et découvrez comment nous pouvons vous aider à réaliser des projets qui vous démarqueront. Obtenez un devis dès aujourd'hui, nos solutions commencent à partir de 0Ar      </p>

    </div>
    <div class="rightTarif">
      <div class="planTarif">
        <div class="logoPlanTarifContent">
          <img src="../images/cm.gif" alt="" class="logoPlanTarif">
        </div>
        <div class="descriPlanTarifContent">
            <h1 class="descriTitlePlanTarif">
              Community Management
            
            </h1>
          <p class="descriPlanTarif">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. At, ad.
          </p>
        </div>
        <div class="pricePlanTarifContent">
          <p class="pricePlanTarif">
             0 AR
          </p>
        </div>
      </div>
      <div class="planTarif">
        <div class="logoPlanTarifContent">
          <img src="../images/design2.gif" alt="" class="logoPlanTarif">
        </div>
        <div class="descriPlanTarifContent">
            <h1 class="descriTitlePlanTarif">
              Conception Graphique
            </h1>
          <p class="descriPlanTarif">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. At, ad.
          </p>
        </div>
        <div class="pricePlanTarifContent">
          <p class="pricePlanTarif">
             0 AR
          </p>
        </div>
      </div>
      <div class="planTarif">
        <div class="logoPlanTarifContent">
          <img src="../images/sit1.gif" alt="" class="logoPlanTarif">
        </div>
        <div class="descriPlanTarifContent">
        <h1 class="descriTitlePlanTarif">
              Développement Informatique
            </h1>
          <p class="descriPlanTarif">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. At, ad.
          </p>
        </div>
        <div class="pricePlanTarifContent">
          <p class="pricePlanTarif">
             0 AR
          </p>
        </div>
      </div>
      <div class="planTarif">
        <div class="logoPlanTarifContent">
          <img src="../images/anime.gif" alt="" class="logoPlanTarif">
        </div>
        <div class="descriPlanTarifContent">
          <h1 class="descriTitlePlanTarif">
              Gestion Relation Client
          </h1>
          <p class="descriPlanTarif">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. At, ad.
          </p>
        </div>
        <div class="pricePlanTarifContent">
          <p class="pricePlanTarif">
             0 AR
          </p>
        </div>
      </div>
      
    </div>
    </div>




    <div class="bg8">
        <div class="content">
            <div class="table table3">
                <div class="form">
                    <h1>Contactez-nous</h1>
                    <p>Nous sommes là pour répondre à toutes vos questions et transformer vos idées en réalité. N'hésitez pas à nous contacter pour discuter de vos projets passionnants.</p>
                    <input type="text" placeholder="NAME">
                    <input type="text" placeholder="EMAIL">
                    <input type="text" placeholder="MESSAGE">
                    <button type="button" class="button">Envoyer</button>
                </div>
                
                
            </div>
            <div class="basContent">
                <img class="contactI round" src="../images/fb2.png" width="40vh" height="40vh" alt="icone facebook">                
                <img class="contactI round" src="../images/linkedin2.png" width="400px" height="400px" alt="icone gmail">
                
            </div>
            <div class="table table4">
                <div class="imageContact">
                    <img src="../images/Contact1.png" class="imgContactGood" alt="">
                </div>          
            </div>
            
        </div>
        
    </div>
    
    <?php 
        // button back to top
        require_once "backToTop.php";
        // footer
        require_once "footer.php";
    ?>
    <script src="../js/serviceBtn1.js"></script>
    <script src="../js/btnNavigationForDown.js"></script>
    <script src="../js/backToTop.js"></script>
    <script src="../js/dropDownMenuDown.js"></script>
    <script src="../js/linkRS.js"></script>

</html>
