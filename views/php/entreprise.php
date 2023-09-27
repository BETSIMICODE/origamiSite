<?php $page="entreprise"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/entreprise.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
   <link rel="stylesheet" href="../css/client.css"> 
    <link rel="stylesheet" href="../css/scrolAnimation.css">


    <title>Entreprise</title>
</head>

<body>
        <?php 
                // Navigation
                require_once "navContent.php";
        ?>
<ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
</ul>
<div  class="containTopEp">
        <?php 
            callNavContent(true,$page); 
        ?>
         
        <div class="glassContainEp">
            <div class="txtContentEp">
                <h1 class="titleEp">
                    Un peu d'histoire:
                </h1>
                <p class="paraEp" id="typedtext">
                   
                </p>

            </div>
        </div>
        
    </div>
    <div class="contentMemberContact">
        <div class="containerTitleMbr" id='memberLink'>
            <h1 class="titleMbr scrolAnim leftAnimation">
                Notre équipe
            </h1>
            <p class="descriMbr scrolAnim leftAnimation">
                Découvrez les élites qui vont travailler avec vous.
            </p>
        </div>
        <div class="memberContact">
                    <div class="card scrolAnim leftAnimation" >
                        <div class="content">
                            <div class="img"><img src="../images/princy.jpg" alt="Photo de couverture CTO"></div>
                            <div class="cardContent">
                                <h3>Sanders RANDRIA<br><span>Directeur Technique</span></h3>
                            </div>
                        </div>
                        <ul class="sci">
                            <li style="--i:1">
                                <a href="#"><img class="iconMember roundIconMember" src="../images/fb.png" alt="Icone Facebook"></a>
                            </li>
                            <li style="--i:2">
                                <a href="#"><img class="iconMember squareIconMember" src="../images/lkdin.png" alt="Icone Linkedin"></a>
                            </li>
                            <li style="--i:3">
                                <a href="#"><img class="iconMember squareIconMember" src="../images/insta.png" alt="Icon Instagram"></a>
                            </li>
                        </ul>
                    </div>
        
                    <div class="card scrolAnim leftAnimation">
                        <div class="content">
                            <div class="img"><img  src="../images/andry.jpg" alt="Photo de couverture RH"></div>
                            <div class="cardContent">
                                <h3>Ando RABE<br><span>Directrice Ressource Humaine</span></h3>
                            </div>
                        </div>
                        <ul class="sci">
                            <li style="--i:1">
                                <a href="#"><img class="iconMember roundIconMember" src="../images/fb.png" alt="Icone Facebook"></a>
                            </li>
                            <li style="--i:2">
                                <a href="#"><img class="iconMember squareIconMember" src="../images/lkdin.png" alt=""></a>
                            </li>
                            <li style="--i:3">
                                <a href="#"><img class="iconMember squareIconMember" src="../images/insta.png" alt=""></a>
                            </li>
                        </ul>
                    </div>
        
        
                    <div class="card scrolAnim leftAnimation">
                        <div class="content">
                            <div class="img"><img  src="../images/almadie.jpg" alt="Photo de couverture Admin"></div>
                            <div class="cardContent">
                                <h3>Almadie ABDOUl<br><span>Responsable administrative</span></h3>
                            </div>
                        </div>
                        <ul class="sci">
                            <li style="--i:1">
                                <a href="#"><img class="iconMember roundIconMember" src="../images/fb.png" alt="Icone Facebook"></a>
                            </li>
                            <li style="--i:2">
                                <a href="#"><img class="iconMember squareIconMember" src="../images/lkdin.png" alt=""></a>
                            </li>
                            <li style="--i:3">
                                <a href="#"><img class="iconMember squareIconMember" src="../images/insta.png" alt=""></a>
                            </li>
                        </ul>
                    </div>
                <div class="card scrolAnim leftAnimation">
                    <div class="content">
                        <div class="img"><img src="../images/doughlas.jpg" alt="Photo de couverture Developpeur"></div>
                        <div class="cardContent">
                            <h3>Feno DOUGHLAS<br><span>Responsable Informatique</span></h3>
                        </div>
                    </div>
                    <ul class="sci">
                        <li style="--i:1">
                            <a href="#"><img class="iconMember roundIconMember" src="../images/fb.png" alt="Icone Facebook"></a>
                        </li>
                        <li style="--i:2">
                            <a href="#"><img class="iconMember squareIconMember" src="../images/lkdin.png" alt="Icone Linkedin"></a>
                        </li>
                        <li style="--i:3">
                            <a href="#"><img class="iconMember squareIconMember" src="../images/insta.png" alt="Icone Instagram"></a>
                        </li>
                    </ul>
                </div>
                <div class="card scrolAnim leftAnimation">
                        <div class="content">
                            <div class="img"><img  src="../images/andry.jpg" alt="Photo de couverture RH"></div>
                            <div class="cardContent">
                                <h3>Ando RABE<br><span>Directrice Ressource Humaine</span></h3>
                            </div>
                        </div>
                        <ul class="sci">
                            <li style="--i:1">
                                <a href="#"><img class="iconMember roundIconMember" src="../images/fb.png" alt="Icone Facebook"></a>
                            </li>
                            <li style="--i:2">
                                <a href="#"><img class="iconMember squareIconMember" src="../images/lkdin.png" alt=""></a>
                            </li>
                            <li style="--i:3">
                                <a href="#"><img class="iconMember squareIconMember" src="../images/insta.png" alt=""></a>
                            </li>
                        </ul>
                    </div>
                    <div class="card scrolAnim leftAnimation">
                        <div class="content">
                            <div class="img"><img  src="../images/andry.jpg" alt="Photo de couverture RH"></div>
                            <div class="cardContent">
                                <h3>Ando RABE<br><span>Directrice Ressource Humaine</span></h3>
                            </div>
                        </div>
                        <ul class="sci">
                            <li style="--i:1">
                                <a href="#"><img class="iconMember roundIconMember" src="../images/fb.png" alt="Icone Facebook"></a>
                            </li>
                            <li style="--i:2">
                                <a href="#"><img class="iconMember squareIconMember" src="../images/lkdin.png" alt=""></a>
                            </li>
                            <li style="--i:3">
                                <a href="#"><img class="iconMember squareIconMember" src="../images/insta.png" alt=""></a>
                            </li>
                        </ul>
                    </div>
                    
            </div>
    </div>  

    <div class="titleEventContent">
        <div class="containerTitleMbr">
                <h1 class="titleMbr scrolAnim leftAnimation">
                    Evènement
                </h1>
                <p class="descriMbr scrolAnim leftAnimation">
                OrigamiTech se positionne en tant qu'organisateur d'événements exceptionnels.
                On a déjà orchestré avec succès de nombreux événements mémorables.
                </p>
        </div>

    </div>
    <div class="eventContent">
    <div class="swiper mySwiper scrolAnim leftAnimation">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="event-descri">
                        <h1>Inona ary izany?</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut tempore repudiandae molestias sunt.</p>
                    </div>
                    <img src="../images/ina.jpg" alt="" class="imgSwipEv">
                </div>
                <div class="swiper-slide">
                    <div class="event-descri">
                        <h1>Dona Be </h1>
                        <p>Lo esse delectus repudiandae adipisci suscipit doloribus excepturi assumenda doloremque.</p>
                    </div>
                    <img src="../images/karate.jpg" alt="" class="imgSwipEv">
                </div>
                <div class="swiper-slide">
                    <div class="event-descri">
                        <h1>Fianarantsoa Tech Expo</h1>
                        <p>Lorem ipsum doCupiditate in nihil esse delectus repudiandae adipisci suscipit doloribus excepturi assumenda doloremque.</p>
                    </div>
                    <img src="../images/fte.jpg" alt="" class="imgSwipEv">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <div class="titleEventContent">
        <div class="containerTitleMbr">
                <h1 class="titleMbr scrolAnim rightAnimation">
                    Nos partenaires
                </h1>
                <p class="descriMbr scrolAnim rightAnimation">
                    OrigamiTech a établi des partenariats solides qui ont offert des opportunités de collaboration exceptionnelles.
                </p>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script type="text/javascript">
    	$(document).ready(function(){
			$('.customer-logos').slick({
				slidesToShow: 6,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 1500,
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
    <div class="bgPartenaireContent">
        <section class="customer-logos slider scrolAnim leftAnimation">
            <div class="slide"><img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg"></div>
            <div class="slide"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"></div>
            <div class="slide"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg"></div>
            <div class="slide"><img src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg"></div>
            <div class="slide"><img src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></div>
            <div class="slide"><img src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"></div>
            <div class="slide"><img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></div>
        </section>

    </div>





    <?php 
    require_once "navBarForAll.php";
        navBarForAll($page);
        // button back to top
        require_once "backToTop.php";
        // footer
        require_once "footer.php";
    ?>
    <script>
            

        var aText = [
            "Monsieur Sanders Randrianarison a fondé l'origamiTech avec ses partenaires en 2019. Au début origamiTech n'était une boite de gestion relation client (plus précisement callCenter).",
            "Au fur à mesure le grand Sanders avait eu l'idée d'agrandir son empir en offrant plusieurs services à ses clients, comme la création de site web,  community management, gestion relation client ainsi que les conceptions graphique."
            
        ];

        var iSpeed = 70;
        var iIndex = 0;
        var iArrLength = aText[0].length;
        var iScrollAt = 20;
        var iTextPos = 0;
        var sContents = '';
        var iRow;

        function typewriter(destination, textArray) {
            sContents = '';
            iRow = Math.max(0, iIndex - iScrollAt);

            while (iRow < iIndex) {
                sContents += '<span class="typed-line">' + textArray[iRow++] + '</span><br />';
            }

            sContents += '<span class="typed-line">' + textArray[iIndex].substring(0, iTextPos) + "</span><span class='typed-cursor'>🖋️</span>";
            destination.innerHTML = sContents;

            if (iTextPos++ == iArrLength) {
                iTextPos = 0;
                iIndex++;
                if (iIndex == textArray.length) {
                    iIndex = 0; // Réinitialisation pour boucler à travers le tableau à nouveau
                    setTimeout(function() { typewriter(destination, textArray); }, 2000); // Pause de 2000 millisecondes (2 secondes) avant de recommencer la boucle
                    return;
                }
                iArrLength = textArray[iIndex].length; // Mettre à jour la longueur de l'élément actuel
            }

            setTimeout(function() { typewriter(destination, textArray); }, iSpeed);
        }


var destination1 = document.getElementById("typedtext");


typewriter(destination1, aText);


</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
var swiper = new Swiper(".mySwiper", {
    autoplay: {
    delay: 9000,
    disableOnInteraction: false,
    },
    loop: true,
    pagination: {
    el: ".swiper-pagination",
    dynamicBullets: true,
    },

});
</script>
    <script src="../js/navBarForAll.js"></script>
    <script src="../js/serviceBtn.js"></script>
    <script src="../js/serviceBtn1.js"></script>
    <script src="../js/btnNavigationForDown.js"></script>
    <script src="../js/btnNavigation.js"></script>   
    <script src="../js/backToTop.js"></script>
    <script src="../js/dropDownMenuDown.js"></script>
    <script src="../js/dropDownMenuUp.js"></script>
    <script src="../js/scrolAnimation.js"></script>
    <script src="../js/linkRS.js"></script>

</body>
</html>