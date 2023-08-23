<?php $page="home" ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="views/css/client.css">

    <title>OrigamiTech</title>
    
</head>
<body>
    <link rel="preconnect" href="https://fonts.gstatic.com">   
     <link href="https://fonts.googleapis.com/css2?family=Fira+Code&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <div class="bg1">
        <div class="container">
            <div class="navContentC">
            <?php 
                require_once "views/php/navContent.php";
                callNavContent(true,$page); ?> 
                <div class="profilContentMC">
                <a href="views/php/entreprise.php#memberLink"><img class='profilMemberC' src="views/images/fte.jpg" alt=""></a>

                </div>
            </div>
            <div class="middleContent">
                <div class="leftContent">
                    <h1 class="titleOrigami">
                        Transformation digitale
                    </h1>
                    <p class="descriOrigami">
                        Origami tech est une agence numérique à Fianarantsoa Isaha. Notre service sont: 
                        création d'un site web, couverture médiatique et évènementiel...
                    </p>
                    <button class="btnStart">Get started</button>
    
                </div>
                <div class="rightContent">
                    <div class="containerServiceContain">
                        <hr class="lineWhite">
                        <div class="serviceContent">
                            <div class="titleServiceContent">
                                <h2 class="titleService">
                                    Création site web
                                </h2>
                            </div>
                            
                            <div class="imageServiceContent">
                                <img class="imgServ" src="views/images/test1.png" alt="">
                                <img class="imgServ" src="views/images/test2.jpg" alt="">
                                <img class="imgServ" src="views/images/test3.jpg" alt="">
                            </div>
                        </div>
                        <div class="serviceContent">
                            <div class="titleServiceContent">
                                <h2 class="titleService">
                                    Evenement
                                </h2>
                            </div>
                            <div class="imageServiceContent">
                                <img class="imgServ" src="views/images/test1.png" alt="">
                                <img class="imgServ" src="views/images/test2.jpg" alt="">
                                <img class="imgServ" src="views/images/test3.jpg" alt="">
                            </div>
                        </div>
                        <div class="serviceContent">
                            <div class="titleServiceContent">
                                <h2 class="titleService">
                                    Couverture Mediatique
                                </h2>
                            </div>
                            <div class="imageServiceContent">
                                <img class="imgServ" src="views/images/test1.png" alt="">
                                <img class="imgServ" src="views/images/test2.jpg" alt="">
                                <img class="imgServ" src="views/images/test3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="radioContent">
                        <div class="radioSlide radioChecked"> </div>
                        <div class="radioSlide"></div>
                        <div class="radioSlide"></div>
                    </div>
    
                </div>
            </div>
            <div class="contactContent">
                <img class="contactIcone round" src="views/images/fb.png" alt="icone facebook">
                <img class="contactIcone square" src="views/images/lkdin.png" alt="icone gmail">
            </div>
    
        </div>
    </div>

 
    <?php 
        require_once "views/php/navBarForAll.php";
        navBarForAll($page);
    ?>
    
    <div class="bgTextContent">
        <h1 class="titleSecNoservice">
            Qui sommes nous?
        </h1>
        <p class="paraCenter">
            Entreprise de transformation digitale, située à Fianarantsoa Isaha.
            Nous offrons tout service qui représente votre image, que ce soit à travers l'internet ou présentielle ainsi que des outils de représentation graphiques.
            Tout ça avec un prix abordable et raisonnable, et une flexibilité de payement.

        </p>
        <div class="boutonShowContent">
            <div class="btnExt btnLeft">

            </div>
            <div class="btnCenter"></div>
            <div class="btnExt btnLeft">

            </div>
        </div>
    </div>
    <div class="shoesContainer">
        <div class="shoesGlass">
            <div class="bubbles1">
                <div class="bubble1" id="mobileNone" style="--size:5.430262176108059rem; --distance:9.038975202081883rem; --position:-0.6424369192500397%; --time:2.2769257828206264s; --delay:-3.31949269929945s;"></div>
                <div class="bubble1" id="mobileNone" style="--size:3.4616317299124884rem; --distance:8.630846811703535rem; --position:-1.2732924326149297%; --time:2.81475467302595s; --delay:-2.7638764392000894s;"></div>
                <div class="bubble1" id="mobileNone" style="--size:4.145684638067611rem; --distance:8.146670774360546rem; --position:1.530324989659972%; --time:2.5996324518388496s; --delay:-3.703907156290019s;"></div>
                <div class="bubble1" id="mobileNone" style="--size:3.8294565307719317rem; --distance:6.619011776243515rem; --position:1.1791229156356948%; --time:3.9187457229924463s; --delay:-3.2649582271197692s;"></div>
                <div class="bubble1" style="--size:1.734905202551377rem; --distance:6.64325472201864rem; --position:42.970573345720965%; --time:3.305597276969018s; --delay:-2.928129850372444s;"></div>
                <div class="bubble1" style="--size:2.974577396279857rem; --distance:9.361203490860984rem; --position:15.699152163054979%; --time:3.2266045754687966s; --delay:-3.2689232968298243s;"></div>
                <div class="bubble1" style="--size:1.3166771895640945rem; --distance:7.3332588389837525rem; --position:36.8934117480392%; --time:3.564260955968625s; --delay:-2.377013110582156s;"></div>
                <div class="bubble1" style="--size:1.421215735281779rem; --distance:7.077874926712976rem; --position:43.201605358689434%; --time:3.9134556653234993s; --delay:-2.9502418016799363s;"></div>
                <div class="bubble1" id="mobileNone" style="--size:5.415144090885878rem; --distance:9.249313794373288rem; --position:3.8457299277907193%; --time:3.6519789771064164s; --delay:-3.9686174952436155s;"></div>
                <div class="bubble1" style="--size:1.3166771895640945rem; --distance:7.3332588389837525rem; --position:16.8934117480392%; --time:3.564260955968625s; --delay:-2.377013110582156s;"></div>
                <div class="bubble1" style="--size:1.734905202551377rem; --distance:6.64325472201864rem; --position:42.970573345720965%; --time:3.305597276969018s; --delay:-2.928129850372444s;"></div>
            </div>
            <div class="bubbles1 bubbles2">
                <div class="bubble1 bubble2" style="--size:2.974577396279857rem; --distance:20.361203490860984rem; --position:3.699152163054979%; --time:2.2266045754687966s; --delay:-3.2689232968298243s;"></div>
                <div class="bubble1 bubble2" style="--size:1.974577396279857rem; --distance:10.361203490860984rem; --position:20.699152163054979%; --time:3.2266045754687966s; --delay:-3.2689232968298243s;"></div>
                <div class="bubble1 bubble2" style="--size:1.484615505546449rem; --distance:20.67039100738628rem; --position:53.240767844380116%; --time:2.5979127816355243s; --delay:-3.6565599500417685s;"></div>
                <div class="bubble1 bubble2" style="--size:1.3034144009505715rem; --distance:8.242527673597756rem; --position:97.41966622219027%; --time:2.057027099298815s; --delay:-2.0551048415586988s;"></div>
            </div>
            <svg style="position: fixed; top: 100vh">
                <defs>
                    <filter id="blob">
                    <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur"></feGaussianBlur>
                    <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="blob"></feColorMatrix>
                    </filter>
                </defs>
            </svg>
            <div class="leftShoes">
                <img class="shoesNike" src="views/images/nike1.png" alt="Air nike">
            </div>
            <div class="rightShoes">
                <div class="bul bul1">
                    
                </div>
                <div class="bul bul2">
                    
                </div>
                <div class="bul bul3">
                    
                </div>
                
                <h3>
                    Pouvoir du design <br> 
                    <span>
                    Art de la communication
                </span>
                </h3>
                
                <div class="zoneText">
                    <h4 class="revelationTitle">
                        Non, ce n'est pas une vente de chaussure!
                    </h4>
                    <p class="textShoes">
                        Ceci est faite juste pour attirée votre attention.
                        Avec cette même manière, nous attirons votre client potentiel afin d'accroître votre productivité.
                        
                    </p>
                </div>
                <div class="btnShoesContent">
                    <h4 class="shoesPrice">
                        50000 Ar
                    </h4>
                    <div class="btnShoes">
                        Plus
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="bg7">
        <div class="contentBoiteText cbt1">
            <h1 class="numberBoite">
                01
            </h1>
            <div class="techWordContent">
                <p class="titleWordContent">
                    Origami<span id="techWord">Tech</span>
                </p>
                <p class="resumWordContent">
                    Entreprise de communication digitale
                </p>
                
            </div>
        </div>
        <div class="flot">
            <div class="boite1">  
                <div class="boite1-flot">
                    <div class="textContentBoiteUp">
                        <h1>Sortir de la boite?</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos ipsam voluptatem harum! Impedit, deserunt sit et numquam quam animi sapiente, perferendis dolorem exercitationem expedita nostrum suscipit vitae unde praesentium eligendi.</p>
                    </div>
                </div>
            </div>
            <div class="boite2">
                <div class="textContentBoite">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur explicabo unde cupiditate repellat minus obcaecati magnam accusantium impedit recusandae tempore libero, voluptatibus molestias iste, animi voluptatem! Laudantium inventore recusandae natus!
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus tenetur odio reiciendis maxime! Minima quae explicabo saepe, porro laudantium accusantium, soluta necessitatibus placeat aperiam eligendi, accusamus quo dolore nesciunt debitis.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora maxime quo laboriosam necessitatibus voluptas fuga iure atque eveniet, debitis, similique cupiditate dolor vitae nobis itaque. Vel sapiente iusto optio labore!
                </div>
            </div>
        </div>
        <div class="contentBoiteText cbt2">
            <div class="techWordContent twc1">
                <p class="titleWordContent tlwc1">
                    Origami<span id="techWord">Tech</span>
                </p>
                <p class="resumWordContent">
                    Entreprise de communication digitale
                </p>
                
            </div>
            <h1 class="numberBoite nb1">
                01
            </h1>
        </div>
    </div>
    <div class="bg4">
        <div class="titleTrustContent">
            <h1 class="titleTrust">OrigamiTech a établi des partenariats solides qui ont offert des opportunités de collaboration exceptionnelles.</h1>
        </div>
    </div>
    <div class="titlePartenaireContent">
        <h1 class="titlePartenaire">
            Nos partenaires
        </h1>
    </div>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        var $carousel = $('.customer-logos');

        $carousel.slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover: false, // Désactive la pause au survol
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

        // Ajoute un événement de survol pour mettre en pause le carrousel au survol
        $carousel.hover(function() {
            $carousel.slick('slickPause');
        }, function() {
            $carousel.slick('slickPlay'); // Reprendre le carrousel après le survol
        });
    });
</script>
    <div class="bgPartenaireContent">
        <section class="customer-logos slider">
            <div class="slide"><img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg"></div>
            <div class="slide"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"></div>
            <div class="slide"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg"></div>
            <div class="slide"><img src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg"></div>
            <div class="slide"><img src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></div>
            <div class="slide"><img src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"></div>
            <div class="slide"><img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></div>
        </section>

    </div>

   
    <!-- *******back to top button****** -->
    

    <?php 
    require_once "views/php/backToTop.php";
    require_once "views/php/footer.php"; ?>
 

    
    <script src="views/js/dropDownMenuUp.js"></script>
    <script src="views/js/dropDownMenuDown.js"></script>
    <script src="views/js/sizeImgSlide.js"></script>
    
    <script src="views/js/serviceBtn.js"></script>
    <script src="views/js/btnNavigation.js"></script>   

    <script src="views/js/btnNavigationForDown.js"></script>
    <script src="views/js/slideHome.js"></script>
    <script src="views/js/navBarForAll.js"></script>
    <!-- <script src="noServiceCard"></script> -->
    <!-- partial -->
    <script src="views/js/positionLine.js"></script>
    <script src="views/js/positionNumberBox.js"></script>
    <!-- <script src="https://kit.fontawesome.com/bad7f7f5d4.js" crossorigin="anonymous"></script> -->
    
  
    <script src="views/js/backToTop.js"></script>
    
    
</body>
</html>