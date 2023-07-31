<?php $page="service"; ?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/dev.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Fira+Code&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
        <title>Développement informatique</title>
    </head>
    <body>
        <?php 
            // Navigation
            require_once "navContent.php";
            require_once "navBarForAll.php";
            navBarForAll($page,true);
        ?>



<div class="containerDev">
  <div class="emptyDivDev">

  </div>
  <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="../images/CSW/01.png" class="normal">
          <img src="../images/CSW/1.png" class="responsive">
        </div>
        <div class="swiper-slide">
          <img src="../images/CSW/10.png" class="normal">
          <img src="../images/CSW/2.png" class="responsive">
        </div>
        <div class="swiper-slide">
          <img src="../images/CSW/20.png" class="normal">
          <img src="../images/CSW/3.png" class="responsive">
        </div>
        <div class="swiper-slide">
          <img src="../images/CSW/30.png" class="normal">
          <img src="../images/CSW/4.png" class="responsive">
        </div>
        <div class="swiper-slide">
          <img src="../images/CSW/40.png" class="normal">
          <img src="../images/CSW/5.png" class="responsive">
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      
    </div>
    <div class="titleDev">
      Développement Informatique
    
  </div>

</div>
<div class="serviceInfoContent">
  <div class="sectionDev">
    <img src="../images/site.png" alt="" class="iconDev">
    <h1 class="titleInfo">Site web</h1>
    <p class="textContentDev">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui distinctio autem vel excepturi quidem delectus quaerat atque, suscipit quibusdam cumque.
  </p>
  </div>


  <div class="sectionDev">
    <img src="../images/logiciel.png" alt="" class="iconDev">
    <h1 class="titleInfo">Application & Logiciel</h1>
    <p class="textContentDev">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui distinctio autem vel excepturi quidem delectus quaerat atque, suscipit quibusdam cumque.
  </p>
  </div>


  <div class="sectionDev">
    <img src="../images/maintenance.png" alt="" class="iconDev">
    <h1 class="titleInfo">Maintenance Logiciel</h1>
    <p class="textContentDev">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui distinctio autem vel excepturi quidem delectus quaerat atque, suscipit quibusdam cumque.
  </p>
  </div>
</div>
<div class="goodDevContent">
    <p class="goodDevText">
      <span class="ori">OrigamiTeh</span>  est une entreprise de transformation digitale capable de bien mener votre projet informatique. 
    </p>
</div>


        <?php 
            // button back to top
            require_once "backToTop.php";
            // footer
            require_once "footer.php";
        ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="../js/swiperDev.js"></script>
    <script src="../js/serviceBtn.js"></script>
    <script src="../js/btnNavigationForDown.js"></script>
    <script src="../js/btnNavigation.js"></script>   
    <script src="../js/backToTop.js"></script>
    <script src="../js/dropDownMenuDown.js"></script>
    <script src="../js/dropDownMenuUp.js"></script>
    </body>
</html>