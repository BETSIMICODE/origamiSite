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
        <link rel="stylesheet"href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        
        <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Fira+Code&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="../css/scrolAnimation.css">
        <title>Développement informatique</title>
    </head>
    <body>
        <?php 
            // Navigation
            require_once "navContent.php";
            require_once "navBarForAll.php";
            navBarForAll($page,true);
        ?>



<div class="containerDev" >

  <div class="emptyDivDev">

  </div>
  <div class="ecranLCDIZ">
    
  </div>
  <div class="ecranLCD">

  </div>
  <div class="swiper mySwiper" >
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
    <div class="swiper-button-next btfNT"></div>
    <div class="swiper-button-prev btfNT"></div>
    
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
  <div class="textContentDevC">
    <div class="leftDevC">
      <p class="textDevC scrolAnim leftAnimation">
      OrigamiTech propose des services de développement informatique de qualité à des prix abordables, incluant la création de sites web, d'applications et de logiciels, ainsi que la maintenance de ces derniers.
      </p>
    </div>
    <div class="rightDevC scrolAnim rightAnimation">
      <img src="../images/prog.jpg" alt="Image programmation" class="imgDevC">
    </div>
  </div>

</div>

<div class="bg2">
        <div class="wrapper">
            <div class="box scrolAnim leftAnimation">
            
                <img src="../images/sit1.gif" alt="Photo creation site web" class="iconDev">
                <div class="description">
                    <h2>Création site web</h2>
                    <p class="desciDTXT">
                    Nous concevons des sites web modernes prêts à être déployés, clé en main
                    </p>
                    <div class="btnStart moreService">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Faire un devis
                    </div>
      
                       
                </div>
            </div>
            <div class="box scrolAnim leftAnimation">
                <img src="../images/log.gif" alt="Photo couverture médiatique" class="iconDev">
                <div class="description">
                    <h2>Création d'une application</h2>
                    <p class="desciDTXT">
                    Nous développons également des applications sur mesure en fonction des besoins de nos clients.
                    </p>
                    <div class="btnStart moreService">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Faire un devis
                    </div>
                      
                </div>
            </div>
            <div class="box scrolAnim leftAnimation">
              
                <img src="../images/main.gif" alt="Photo créateur digitale" class="iconDev">
                <div class="description">
                    <h2>Maintenance Logiciel</h2>
                    <p class="desciDTXT">
                    Nous proposons également des services de maintenance informatique.
                    </p>
                    <div class="btnStart moreService">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Faire un devis
                    </div>
                     
                </div>
            </div>
        </div>
    </div>
<div class="goodDevContent scrolAnim leftAnimation">
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
      width: 100vw;
      height: 35vw;
      background: #000000f0;
      box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      border: none;
      display: flex;
      justify-content: center;
      align-items: center;
      box-shadow: none;

      
    }

    .normal
    {
      /* border: 15px solid rgba(0, 0, 0, 0.921); */
      /* border-radius:30px; */
      width: 70vw;
      height: 35vw;
      /* box-shadow:  #ffffffeb 0px 0px 26px 0px; */

        /* object-fit: cover; */
    }
   
    /* ******slide telephone****** */
    .swiper2 {
      width: 15%;
      height: auto;
      border: 5px solid rgba(0, 0, 0, 0.921);
      border-radius:40px;
      background-color: rgb(0, 0, 0);
      box-shadow: rgba(255, 255, 255, 0.927) 0px 0px 20px, rgba(203, 203, 203, 0.858) 0px 0px 12px;      position: absolute;
      left: 80%;
      top: 150px;
      z-index:7;
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
    @media screen and (max-width:1000px) {
      .swiper2 {
      border-radius:20px;
    }
      
    }
    @media screen and (max-width:850px) {
        
        .swiper2{
            left: 72%;
            
            
        }

        
    }
   
    
    
    
  </style>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
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
      allowTouchMove: false,
      loop: true, 
      speed: 1000, 
    });
  </script>
   <script>
    var swiper = new Swiper(".mySwiper", {
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
  
      },
      allowTouchMove: false,
      loop: true,
      speed: 1000,  
    });
      
  </script>


<script src="../js/scrolAnimation.js"></script>
  <script  src="../js/animNoservice.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="../js/swiperDev.js"></script>
    <script src="../js/serviceBtn1.js"></script>
    <script src="../js/btnNavigationForDown.js"></script>
    <script src="../js/backToTop.js"></script>
    <script src="../js/dropDownMenuDown.js"></script>
    <script src="../js/linkRS.js"></script>
    
  </body>
</html>