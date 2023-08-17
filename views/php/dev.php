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
        <!-- <img src="../images/CSW/1.png" class="responsive"> -->
      </div>
      <div class="swiper-slide">
        <img src="../images/CSW/10.png" class="normal">
        <!-- <img src="../images/CSW/2.png" class="responsive"> -->
      </div>
      <div class="swiper-slide">
        <img src="../images/CSW/20.png" class="normal">
        <!-- <img src="../images/CSW/3.png" class="responsive"> -->
      </div>
      <div class="swiper-slide">
        <img src="../images/CSW/30.png" class="normal">
        <!-- <img src="../images/CSW/4.png" class="responsive"> -->
      </div>
      <div class="swiper-slide">
        <img src="../images/CSW/40.png" class="normal">
        <!-- <img src="../images/CSW/5.png" class="responsive"> -->
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    
  </div>
  <div class="swiper-responsive">
    <div class="swiper mySwiper swiper2">
      <div class="swiper-wrapper wrapper2">
          <div class="swiper-slide slide2">
              <img src="../images/CSW/1111.png" class="responsive">
            </div>
            <div class="swiper-slide slide2">
              
              <img src="../images/CSW/2011.png" class="responsive">
            </div>
            <div class="swiper-slide slide2">
              
              <img src="../images/CSW/2012.png" class="responsive">
            </div>
            <div class="swiper-slide slide2">
              
              <img src="../images/CSW/3011.png" class="responsive">
            </div>
            <div class="swiper-slide slide2">
              
              <img src="../images/CSW/4011.png" class="responsive">
            </div>
          
      </div>
    </div>
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


<style>
   
    .swiper {
      width: 70vw;
      height: 100%;
    
      box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #000913;
      display: flex;
      justify-content: center;
      align-items: center;
      
    }

    .normal
    {
      
      width: 70vw;
      height: 100%;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
        /* object-fit: cover; */
    }
   
    /* ******slide telephone****** */
    .swiper2 {
      width: 15%;
      height: 70%;
      border: 5px solid rgb(38, 36, 36);
      border-radius:40px;
      background-color: rgb(0, 0, 0);
      box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
      position: absolute;
      left: 80%;
      bottom: 15%;
    }
    .wrapper2{
     margin-top: 10%;
     height: 90%;
    }
    
    .slide2 {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
     
      
      
    }

    .responsive {
      display: block;
      width: 100%;
      height: 100%;
      /* object-fit: cover; */
    }
    .swiper-button-next{
      z-index: 30;
    }
    .swiper-button-next{
      z-index: 30;
    }
    /* ****responsive**** */

    @media screen and (max-width:1300px) {
      .swiper2 {
      width: 15%;
      height: 55%;
     
    }
    .normal
    {
      
        height: 90vh;
        width: 100vw ;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
        /* object-fit: cover; */
    }
      
    }
    @media screen and (max-width:1020px) {
      .swiper {
          height: 40vh;
          width: 99vw ;

    }
    .swiper2 {
      width: 15%;
      height: 25vh;
      left: 40%;
      bottom: 15%;
      border-radius: 20px;
      border: 3px solid rgb(38, 36, 36) ;
      left: 70%;
      bottom: 60%;
      }
    .normal
    {
      
      height: 40vh;
          width: 99vw ;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
        /* object-fit: cover; */
    }
      
    }
    @media screen and (max-width:760px) {
      
        .swiper {
          height: 30vh;
          width: 100vw ;

    }
      .swiper2 {
      width: 15%;
      height: 18vh;
      left: 40%;
      bottom: 15%;
      border-radius: 20px;
      border: 3px solid rgb(38, 36, 36) ;
      left: 70%;
      bottom: 70%;
      }
    
    .normal
    {
      
        height: 30vh;
        width: 100vw ;
       
    }
    
      
    }


    
    
  </style>
  <script>
    var swiper = new Swiper(".mySwiper", {
    
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      },
      loop: true, 
      allowTouchMove: false,
    });
  </script>
   <script>
    var swiper = new Swiper(".mySwiper", {
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      },
      loop: true,
      allowTouchMove: false, });
  </script>
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