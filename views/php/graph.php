<?php $page="service"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../css/graph.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiperLogo@10/swiperLogo-bundle.min.css" />

  </head>
<body>
    <?php 
        // Navigation
        require_once "navContent.php";
        require_once "navBarForAll.php";
        navBarForAll($page,true);
      ?>
      <div class="graphContentUp">
        <div class="emptyGraph">
        </div>
        <div class="presentationGraphContent">
          <div class="leftGraph">
            <h1 class="titleGraph">
              Design graphique
            </h1>
            <p class="textGraph">
              OrigamiTech fait tout travail en visuel. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur, id.
            </p>
            <button class="btnStart2">Plus d'info</button>
          </div>
          <div class="rightGraph">
            <img src="../images/design2.gif" alt="" class="designImageGraph">
          </div>
        </div>
        <div class="emptyGraph eg1">
        </div>
      </div>

<div class="emptyGraph eg2">
</div>
<div class="textContentGrf">
            <div class="rightGrf">
                <!-- <img src="../images/cm.gif" alt="reseaux sociaux gif" class="imgGrf"> -->

            </div>
            <div class="leftGrf">
                <h2 class="classTitleSectionGrf">
                  Conception affiche
                </h2>
                
                <p class="paraGrf">
                Optez pour nos affiches uniques et percutantes, conçues sur mesure pour vous démarquer de la concurrence et attirer l'attention de votre public cible !                </p>
            </div>
            
</div>
    <div class="bg-service-visuel">
        <div class="textDesign">
          Design graphique
        </div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img class="imgSlideGraph" src="../images/Camera Roll/1.jpg" />
              </div>
              <div class="swiper-slide">
                <img class="imgSlideGraph" src="../images/Camera Roll/2.jpg" />
              </div>
              <div class="swiper-slide">
                <img class="imgSlideGraph" src="../images/Camera Roll/3.jpg" />
              </div>
              <div class="swiper-slide">
                <img class="imgSlideGraph" src="../images/Camera Roll/4.jpg" />
              </div>
              <div class="swiper-slide">
                <img class="imgSlideGraph" src="../images/Camera Roll/5.jpg" />
              </div>
              <div class="swiper-slide">
                <img class="imgSlideGraph" src="../images/Camera Roll/6.jpg" />
              </div>
              <div class="swiper-slide">
                <img class="imgSlideGraph" src="../images/Camera Roll/7.jpg" />
              </div>
              <div class="swiper-slide">
                <img class="imgSlideGraph" src="../images/Camera Roll/8.jpg" />
              </div>
             
            </div>
            <!-- <div class="swiper-pagination"></div> -->
        </div>
        <h1 class="titleDesignDown">
          Design Graphique
        </h1>
        <div class="textDesignDown">
          <p class="textInsideDesign">

            Lorem ipsum dolorg elit. Doloruet consectetur adipisicing elit. Pariatur, cupiditate! Lorem ipsum dolor, sit amet consectetur 
          </p>
        </div>
        <div class="btnContentDesign">
          <div class="btnDesignGraph">
            Devis
          </div>
        </div>

          
    </div>
    <div class="textContentGrf tCgrf">
            <div class="leftGrf">
                <h2 class="classTitleSectionGrf cTSGrf ">
                  Conception logo
                </h2>
                
                <p class="paraGrf">
                Transformez votre identité de marque avec notre service de conception de logo sur mesure, où la créativité s'unit à l'expertise pour donner vie à un logo qui incarne parfaitement votre vision d'entreprise                </p>
            </div>
            <div class="rightGrf">
                <!-- <img src="../images/cm.gif" alt="reseaux sociaux gif" class="imgGrf"> -->

            </div>
            
            
    </div>
    <div class="logoContentGrf">
      <div class="logoBigContent">
        <div class="logoContent">
          <img src="../images/logo/logo1.jpg" class="imgLogoGrf" alt="">
        </div>
        <div class="logoContent">
          <img src="../images/logo/logo2.jpg" class="imgLogoGrf" alt="">
        </div>
        <div class="logoContent">
          <img src="../images/logo/logo3.png" class="imgLogoGrf" alt="">
        </div>
        <div class="logoContent">
          <img src="../images/logo/logo4.jpg" class="imgLogoGrf" alt="">
        </div>
        <div class="logoContent">
          <img src="../images/logo/logo5.png" class="imgLogoGrf" alt="">
        </div>
        <div class="logoContent">
          <img src="../images/logo/logo6.png" class="imgLogoGrf" alt="">
        </div>
        <div class="logoContent">
          <img src="../images/logo/logo7.png" class="imgLogoGrf" alt="">
        </div>
        <div class="logoContent">
          <img src="../images/logo/logo8.jpg" class="imgLogoGrf" alt="">
        </div>
        <div class="logoContent">
          <img src="../images/logo/logo9.png" class="imgLogoGrf" alt="">
        </div>
        <div class="logoContent">
          <img src="../images/logo/logo10.jpg" class="imgLogoGrf" alt="">
        </div>
        <div class="logoContent">
          <img src="../images/logo/logo11.png" class="imgLogoGrf" alt="">
        </div>
      </div>
    </div>    
    <?php 
            // button back to top
            require_once "backToTop.php";
            // footer
            require_once "footer.php";
    ?>
    
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->

      <script src="../js/swiperGraph.js"></script>

        <script src="../js/serviceBtn.js"></script>
        <script src="../js/btnNavigationForDown.js"></script>
        <script src="../js/btnNavigation.js"></script>   
        <script src="../js/backToTop.js"></script>
        <script src="../js/dropDownMenuDown.js"></script>
        <script src="../js/dropDownMenuUp.js"></script>
    <script>
      
    </script>
<!-- css -->
  <style>

  </style>

</body>

</html>