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
      ?>
    <div class="bg-service-visuel">
    <?php 
                callNavContent(true,$page); 
               
                ?> 
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
        <div class="btn"><a href="#">Read More</a></div>
        </div>

          
    </div>
    <div class="textContentGrf tCgrf">
    <div class="rightGrf">
                <img src="../images/design2.gif" alt="reseaux sociaux gif" class="imgGrf">

            </div>
            <div class="leftGrf">
                <h2 class="classTitleSectionGrf cTSGrf ">
                 Création d'affiche
                </h2>
                
                <p class="paraGrf">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos, nisi?
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet ex quidem dignissimos porro sit placeat totam modi quod reiciendis id.
                </p>
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
                <img src="../images/design1.gif" alt="reseaux sociaux gif" class="imgGrf">

            </div>
            
            
    </div>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

<div class="container">
  <section class="customer-logos slider">
    <div class="slide">
      <img src="../images/logo/logo1.jpg" class="imgLogoGrf" alt=""></div>
    <div class="slide">
    <img src="../images/logo/logo2.jpg" class="imgLogoGrf" alt="">
    </div>
    <div class="slide">
    <img src="../images/logo/logo3.png" class="imgLogoGrf" alt="">    </div>
    <div class="slide">
    <img src="../images/logo/logo4.jpg" class="imgLogoGrf" alt="">    </div>
    <div class="slide">
    <img src="../images/logo/logo5.png" class="imgLogoGrf" alt="">    </div>
    <div class="slide">
    <img src="../images/logo/logo6.png" class="imgLogoGrf" alt="">    </div>
    <div class="slide">
      <img src="../images/logo/logo7.png" class="imgLogoGrf" alt="">    
    </div>
    <div class="slide">
      <img src="../images/logo/logo8.jpg" class="imgLogoGrf" alt="">    
    </div>
    <div class="slide">
      <img src="../images/logo/logo9.png" class="imgLogoGrf" alt="">    
    </div>
    <div class="slide">
      <img src="../images/logo/logo10.jpg" class="imgLogoGrf" alt="">    
    </div>
    <div class="slide">
      <img src="../images/logo/logo11.png" class="imgLogoGrf" alt="">    
    </div>

  </section>
  <script>
$(document).ready(function(){
  $('.customer-logos').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1500,
    infinite: true,
    arrows: false,
    dots: false,
    pauseOnHover: false,
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 4
      }
    }, {
      breakpoint: 520,
      settings: {
        slidesToShow: 3
      }
    }]
  });
});
  </script>
</div>  

    <?php 
          require_once "navBarForAll.php";
          navBarForAll($page);
            // button back to top
            require_once "backToTop.php";
            // footer
            require_once "footer.php";
    ?>
    


<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->

        <script src="../js/swiperGraph.js"></script>
        <script src="../js/navBarForAll.js"></script>
        <script src="../js/serviceBtn.js"></script>
        <script src="../js/serviceBtn1.js"></script>
        <script src="../js/btnNavigation.js"></script>
        <script src="../js/btnNavigationForDown.js"></script>
        <script src="../js/backToTop.js"></script>
        <script src="../js/dropDownMenuUp.js"></script>
        <script src="../js/dropDownMenuDown.js"></script>
    <script>
      
    </script>
<!-- css -->
  <style>

  </style>

</body>

</html>