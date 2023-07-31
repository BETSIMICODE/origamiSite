<?php $page="service"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entreprise</title>
</head>
<style>
    .body {
        display: flex;
        background-color: #f5f8fb;
        background-image: linear-gradient((to right, transparent 50%, #0a110e 50%, #000000a6));
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        justify-content: space-between;
        align-items: center;
        flex-direction: column;
        overflow-x: hidden;
    }
    .section {
        background-color: #000000;
        margin:-8px;
        padding: 80px;
        display: flex;
    }
    .s1 {
        flex-basis: 50%;
        background-color: #000000;
        margin-bottom: 20px;
        color: #ffffff;
        margin-top: 30px;
        margin-left: 30px;
    }
    .s1 h2 {
        color: #ffffff;
        font-size: 30px;
    }
    .s1 p {
        font-size: 18px;
        color: #ffffff;
    }
    .s2 {
        flex-basis: 50%;
        background-color: rgb(0, 0, 0);
        margin-bottom: 40px;
        margin-left: 40vh;
    }
    .s2 img {
        width: 400px;
        height: 350px;
    }

    button {
        background: linear-gradient(135deg, #000000, #ffffff);
        color: #ffffff;
        border: 2px solid #ffffff;
        top: 30px;
        padding: 10px 60px;
        font-size: 16px;
        border-radius: 30px;
        cursor: pointer;
        position: relative;
        overflow: hidden;
        transition: background-color 0.3s ease-in-out;
      }
      
      button::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, #ffffff, #000000);
        z-index: -1;
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
      }
      
      button:hover {
        background: linear-gradient(135deg, #797676, #000000);
        color: #ffffff;
      }
      
      button:hover::before {
        opacity: 1;
      }

      .ligne {
        padding: 5px;
      }

      .section2 {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 98vw;
        height: auto;
        background-color: rgb(255, 255, 255);
    }

      .sectionH2{
        color: #ffffff;
        font-size: 30px;
        font-family: sans-serif;
        background-color: rgb(30, 54, 61);
        width: 30%;
        height: 4%;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 2%;
        border-radius: 999px;
        -webkit-border-radius: 999px;
        -moz-border-radius: 999px;
        -ms-border-radius: 999px;
        -o-border-radius: 999px;
      }

      .sec2 {
        width: 100%;
        height: auto;
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
        align-items: center;
        background-color: rgb(255, 255, 255);
      }
      .leftsection {
        padding-top: 20px;
        width: 40%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        background-color: #ffffff;
      }
      .rightsection {
        width: 40%;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .titreSection {
        font-family: sans-serif;
        color: #010101;
        font-size: 3vw;
        font-weight: bold;
      }
      .section2 li{
        font-family: sans-serif;
        color: #010101;
        font-size: 1.5vw;
      }
      
      .imageSection{
        width: 90%;
        }

        .bg5{
            width: 100vw;
            height: auto;
            background-color: #000000b0;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            
        }
        .titleSecNoservice{
            margin-top: 5%;
            font-family: serif;
            color: rgb(249, 249, 249);
            font-size: 30px;
        }
        /* member card home */
        .memberContact{
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            width: 100%;
            height: 700px;
            flex-wrap: wrap;
            flex-shrink: 0;
            flex-wrap: nowrap;
            background-color: #0c5dde;
        }
        .memberContact .card {
            position: relative;
            width: 300px;
            height: 400px;
            margin: 1em;
            background: rgba(0, 0, 0, 0.396);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            border-radius: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            backdrop-filter: blur(40px);
            border: solid 2px transparent;
            background-clip: padding-box;
            box-shadow: 0px 10px 10px rgba(46, 54, 68, 0.03);
            cursor: pointer;
            /* flex-shrink: 0; */

        }
        .memberContact .card:hover{
            box-shadow: 0px 0px 50px rgb(8, 156, 255);
            transform: translateY(-10px);
            -webkit-transform: translateY(-10px);
            -moz-transform: translateY(-10px);
            -ms-transform: translateY(-10px);
            -o-transform: translateY(-10px);
        }
        .memberContact .card .content {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            opacity: 0.5;
            transition: 0.5s;
        }
        .memberContact .card .content .img {
            position: relative;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            border: 10px solid rgba(0, 0, 0, 0.25);
        }
        .memberContact .card .content .img img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .memberContact .card .content .cardContent h3 {
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 500;
            font-size: 18px;
            text-align: center;
            margin: 20px 0 10px;
            line-height: 1.1em;
        }
        .memberContact .card .content .cardContent h3 span {
            font-size: 12px;
            font-weight: 300;
            text-transform: initial;
        }
        .memberContact .card .sci {
            position: absolute;
            bottom: 50px;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            flex-direction: row;
            width: 70%;
            /* background-color: aqua; */
            align-self: center;
        }
        .memberContact .card .sci li {
            display: flex;
            /* margin: 0 10px; */
            transform: translateY(40px);
            opacity: 0;
            transition: 0.5s;
            transition-delay: calc(0.1s * var(--i));
            list-style-type: none;
            justify-content: center;
            align-items: center;
            align-self: center;
            /* background-color: red; */
            margin: auto;
            
        }

        .memberContact .card .sci li a {
            font-size: 24px;
        }
        .memberContact .card:hover .content {
            opacity: 1;
            transform: translateY(-50px);
            -webkit-transform: translateY(-50px);
            -moz-transform: translateY(-50px);
            -ms-transform: translateY(-50px);
            -o-transform: translateY(-50px);
        }
        .memberContact .card:hover .sci li {
            transform: translateY(0px);
            opacity: 1;
            /* background-color: aliceblue; */
            margin-left: 0;
            
        }
        .iconMember{
            width: 30px;
            height: 30px;
            transition: ease-in-out 0.5s;
            -webkit-transition: ease-in-out 0.5s;
            -moz-transition: ease-in-out 0.5s;
            -ms-transition: ease-in-out 0.5s;
            -o-transition: ease-in-out 0.5s;
        }
        .iconMember:hover{
            background-color: rgb(8, 156, 255);
            box-shadow: 0px 0px 50px rgb(8, 156, 255);
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
            -ms-border-radius: 100%;
            -o-border-radius: 100%;
        }
        .bgCmUp{
        display:flex;
        align-items:center;
        justify-content:space-evenly;
        width:100vw;
        height:80vh;
        background-color: #000913;
        }
        .textContentCm{
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
        width:45%;
        height:100%;
        }
        .titleCm{
            color:#ffff;
            align-self:flex-start;
            font-size: 30px;
        }
        .textCm{
            color:#fff;
            font-family:sans-serif;
            font-size: 17px;
        }
        .btnStart1{
            /* background-color: rgba(255, 255, 255, 0); */
            color: #fff;
           
            background-size:200%;
            transition: all 0.4s ease-in-out;
            /* color: #fff; */
            color: rgb(0, 13, 42);
            width: 35%;
            height: 7%;
            border: solid 1px #fff;
            border-radius: 999px;
            -webkit-border-radius: 999px;
            -moz-border-radius: 999px;
            -ms-border-radius: 999px;
            -o-border-radius: 999px;
            margin-top: 10%;
            box-shadow: 3px 3px 23px 3px rgba(2, 2, 2, 0.847);
            align-self: flex-start;
            font-size: 16px;
            border: rgb(255, 255, 255);
            font-weight: bold;
        }
        .btnStart1:hover{
            background-color: linear-gradient(to right, transparent 50%, rgb(0, 125, 228) 50%, rgb(0, 183, 255));
            background-position:100%;
            border: rgb(0, 125, 228);
            box-shadow: 3px 3px 23px 3px rgb(0, 125, 228);
        }
        .gifCmContent{
            width:45%;
            height:100%;
            display:flex;
            justify-content:center;
            align-items:center;
            /* background-color: green; */
        }
        .gifCm{
            width:58%;
            height:60%;
            height:auto;
            /* background-color: blue; */
            
        }
        

</style>
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
                Notre Entreprise </h1>
            <p class="textCm">Optimisation de l'engagement et de la fidélisation des utilisateurs par
                le biais de l'analyse sémantique, de l'ARN, de la segmentation avancée et de l'analyse des KPI.</p>
            <button class="btnStart1">Voir Plus</button>
        </div>
        <div class="gifCmContent">
            <img class="gifCm" src="../images/contact2.jpg" alt="">
        </div>
    </div>
    <div class="ligne" ></div>
    <div class="section2">
        <div class="sectionH2">Nos Historiques</div>
            <div class="sec2">
                <div class="leftsection">
                    <div class="titreSection">
                        Historiques
                    </div>
                    <ul>
                        <li>Origami Tech est une entreprise de comminucation qu</li>
                        <li>Gestion Relation Client</li>
                        <li>Conception des visuels</li>
                        <li>Developper des Sites Web</li>
                    </ul>
                </div>
                <div class="rightsection">
                    <img src="../images/contact.png" class="imageSection" alt="">
                </div>
            </div>
            
        </div>
    </div>
    <div class="ligne" ></div>
    
    <div class="section2">
    <div class="sectionH2">Notre Equipe</div>
        <div class="bg5">
        
            <div class="memberContact">
                <div class="card">
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
    
                <div class="card">
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
    
    
                <div class="card">
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
                    <div class="card">
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
    <script src="../js/btnNavigation.js"></script>   
    <script src="../js/backToTop.js"></script>
    <script src="../js/dropDownMenuDown.js"></script>
    <script src="../js/dropDownMenuUp.js"></script>
    
</body>
</html>