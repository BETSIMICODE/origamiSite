<?php

function callNavContent($forHomeUp,$page){
    $srcImg="../images/";
    $linkPage="";
    $linkPageToHome="../../index.php";
    if ($forHomeUp==true){
        $classBtnNavMobile="btnNavMobile";
        $classBtnExitNavMobile="btnExitNavMobile";
        $classBtnService="btnService";
        $classMenuDerService="menuDerService";
        $classMenuDerService1="";
        $classNav="nav";

    }else{    
        $classBtnNavMobile="btnNavMobileForDown";
        $classBtnExitNavMobile="btnExitNavMobilForDown";
        $classBtnService="btnServiceForDown";
        $classMenuDerService="menuDerServiceForDown";
        $classNav="navForDown";
        $classMenuDerService1="menuDerServiceForDown1";
    }
    switch ($page) {
        case "home":
            $btnClic="btnHome";
            $linkPage="views/php/";
            $linkPageToHome="#";
            $srcImg="views/images/";
            break;
        case "service":
            $btnClic="btnService, .btnServiceForDown";
            break;
        case "evenement":
            $btnClic="btnEvent";
            break;
        case "contact":
            $btnClic="btnContact";
            break;
        
        default:
            $btnClic="btnHome";
            break;
    }

        $navContent='

<nav class="navContent">
                <img class="logo" src="'.$srcImg.'logo.png" alt="Logo OrigamiTech">
                <div class="'.$classNav.'">
                    <img src="'.$srcImg.'x.png" alt="Bouton quitter liste de navigation" class="'.$classBtnExitNavMobile.'">
                    <a class="btnNav btnHome" href="'.$linkPageToHome.'">
                        Accueil
                    </a>
                    <div class="btnNav '.$classBtnService.'">
                        Services <img class="arrowDownImg" src="'.$srcImg.'arrowDown.png">
                    </div>
                    <ul class="btnMenuDerContent">
                        <li class="btnMenuDC">
                            <a href= "'.$linkPage.'cm.php" class="btnNavDer">Community Manager</a>
                        </li>
                        <li class="btnMenuDC">
                            <a href= "'.$linkPage.'graph.php" class="btnNavDer">Design graphique</a>
                        </li>
                        <li class="btnMenuDC">
                            <a href= "'.$linkPage.'dev.php" class="btnNavDer">Développement informatique</a>
                        </li>
                    </ul>
                    <a class="btnNav btnEvent"  href="">
                        Evènement
                    </a>
                    <a class="btnNav btnContact"  href="">
                        Contact
                    </a>
                </div>
                <div class="menuDerService '.$classMenuDerService.'">
                    <div class="menuDerService1 '.$classMenuDerService1.'">
                        <a class="btnNav mds" href="'.$linkPage.'cm.php">
                            <span class="drawnMds">-</span> Community Manager
                        </a>
                        <a class="btnNav mds" href= "'.$linkPage.'graph.php"">
                            <span class="drawnMds">-</span> Désign Graphique
                        </a>
                        <a class="btnNav mds" href= "'.$linkPage.'dev.php">
                            <span class="drawnMds">-</span> Développement Informatique
                        </a>
                    </div>
                    

                </div>
                <img class="'.$classBtnNavMobile.'" src="'.$srcImg.'menu.png" alt="Bouton menu pour mobile">
            </nav>
            <style>
            /* Navigation */
            .btnMenuDerContent{
                display:none;
                z-index: 5;
            }
            .navContent{
                display: flex;
                width: 100%;
                height: 20%;
                /* background: rgb(255, 0, 0); */
                align-items: center;
                justify-content: left;
            }
            .logo{
                width: 13%;
                height: auto;
            }
            .nav{
                display: flex;
                justify-content: left;
                width: 50%;
                height: auto;
                background: rgba(237, 51, 51, 0);
                align-self: center;
            }
            .navForDown{
                display: flex;
                justify-content: left;
                width: 50%;
                height: auto;
                background: rgba(237, 51, 51, 0);
                align-self: center;
            }
            .btnNav{
                color: rgba(255, 255, 255, 0.898);
                text-decoration: none;
                font-size: 11px;
                font-family: sans-serif;
                margin-left: 5%;
                /* margin-right: auto; */
                cursor:pointer;
            }
            .menuDerService{
                display: none;
                flex-direction: column;
                position: absolute;
                top: 22%;
                left: 25%;
                width: 15%;
                height: 27%;
                z-index: 30;
            }
            .menuDerService1{
                display:flex;
                flex-direction: column;
                position: absolute;
                margin-top: 5%;
                width: 100%;
                height: 70%;
                border-radius: 10px;
                background-color: #1384fe;
                background-color: #00000064;
                justify-content: space-evenly;
                transition: ease-in-out 0.5s;
                -webkit-transition: ease-in-out 0.5s;
                -moz-transition: ease-in-out 0.5s;
                -ms-transition: ease-in-out 0.5s;
                -o-transition: ease-in-out 0.5s;
                z-index: 30;
                -webkit-backdrop-filter: blur(10px); /* Safari */
                backdrop-filter: blur(10px);
            }
            .menuDerServiceForDown{
                display: none;
                flex-direction: column;
                position: absolute;
                top: 59%;
                left: 18%;
                width: 20%;
                height: 300%;
                justify-content: space-evenly;
                transition: ease-in-out 0.5s;
                -webkit-transition: ease-in-out 0.5s;
                -moz-transition: ease-in-out 0.5s;
                -ms-transition: ease-in-out 0.5s;
                -o-transition: ease-in-out 0.5s;
                z-index: 30;

            }
            .menuDerServiceForDown1{
                width: 70%;
                height: 85%;
                margin-top: 0%;
            }
            .drawnMds {
                display:none;
                
            }
            .mds{
                font-size: 13px;
                
            }
            
            /* When hovering over the element with class mds, display the content of drawnMds */
            .mds:hover .drawnMds {
                display: inline;
                font-size: 20px;
            
            }
            
            
            
            
            /*!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!Animation pour le survol des boutton!!!!!!!!!!!!!!!!!!!!!!!!*/
            .nav a::after{
                content: "";
                display: block;
                height: 2px;
                margin: 0 auto;
                background-color: rgb(8, 156, 255);
                width: 0%;
                transition: width 0.2s ease-in-out;
                -webkit-transition: width 0.2s ease-in-out;
                -moz-transition: width 0.2s ease-in-out;
                -ms-transition: width 0.2s ease-in-out;
                -o-transition: width 0.2s ease-in-out;
            }
            .nav a:hover::after{
                width: 100%;
                
            }
            .nav a:hover{
                color: rgb(101, 193, 255);
                text-shadow: 2px 2px 20px rgb(8, 156, 255);
            }

            .navForDown a::after{
                content: "";
                display: block;
                height: 2px;
                margin: 0 auto;
                background-color: rgb(8, 156, 255);
                width: 0%;
                transition: width 0.2s ease-in-out;
                -webkit-transition: width 0.2s ease-in-out;
                -moz-transition: width 0.2s ease-in-out;
                -ms-transition: width 0.2s ease-in-out;
                -o-transition: width 0.2s ease-in-out;
            }
            .navForDown a:hover::after{
                width: 100%;
                
            }
            .navForDown a:hover{
                color: rgb(101, 193, 255);
                text-shadow: 2px 2px 20px rgb(8, 156, 255);
            }
            /*!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!fin de l\'animation pour le survol des bouttons!!!!!!!!!!!!!!!!*/
            
            .btnNavMobile{
                display: none;
                width: 6%;
                height: auto;
            }
            .btnNavMobileForDown{
                display: none;
                width: 6%;
                height: auto;
            }
            .btnExitNavMobile{
                display: none;
            }
            .btnExitNavMobilForDown{
                display:none;
            }
            .arrowDownImg{
                display:none;
                transition: transform 0.5s ease;


            }
            .btnService:hover{
                color: rgb(101, 193, 255);
                text-shadow: 2px 2px 20px rgb(8, 156, 255);
            }
            .btnServiceForDown:hover{
                color: rgb(101, 193, 255);
                text-shadow: 2px 2px 20px rgb(8, 156, 255);
            }
            
            @media screen and (max-width:1000px) {
                
                .navBarForAll .logo{
                    width:30%;
                }
                .navForDown a::after{
                    display: none;
        
                }
                .nav a::after{
                    display: none;
        
                }
                .btnMenuDerContent{
                    display:none;
                    flex-direction:column;
                    color:#fff;
                    justify-content:flex-start;
                    height:auto;
                    /*background-color: blue;*/
                    margin-top:0; 
                    z-index: 22225;
                }
                .btnNavDer{
                    font-size:2.1vw;
                    text-decoration:none;
                    color:#fff;
                    margin-top:3px;
                    width:100%;
                    /*background-color: rgb(25, 143, 7);*/

                }
                .btnMenuDC{
                    /*background-color: rgb(255, 143, 7);*/
                    margin-top:7px;
                }
                .arrowDownImg{
                    display:inline-block;
                    transition: transform 0.5s ease;

                }
                .logo{
                    width:40%;
                    height: auto;
                } 
                .btnNavMobile{
                    display: block;
                    /*background-color: rgb(255, 143, 7);
                    */margin-right: 5%;
                    margin-left: auto;
                    cursor: pointer;
                    transition: ease-in-out 0.5s;
                    -webkit-transition: ease-in-out 0.5s;
                    -moz-transition: ease-in-out 0.5s;
                    -ms-transition: ease-in-out 0.5s;
                    -o-transition: ease-in-out 0.5s;
            }
                .btnNavMobileForDown{
                    display: block;
                    /*background-color: rgb(255, 143, 7);
                    */margin-right: 5%;
                    margin-left: auto;
                    cursor: pointer;
                    transition: ease-in-out 0.5s;
                    -webkit-transition: ease-in-out 0.5s;
                    -moz-transition: ease-in-out 0.5s;
                    -ms-transition: ease-in-out 0.5s;
                    -o-transition: ease-in-out 0.5s;
                    
                }
                .nav{
                    display: none;
                    transition: ease-in-out 0.5s;
                    position: absolute;
                    top:20%;
                    right: 10%;
                    width: 40%;
                    height: 50vw;
                    flex-direction: column;
                    align-items: flex-start;
                    justify-content: space-evenly;
                    background-color: rgba(15, 15, 15, 0.866);
                    margin-left: 30%;
                    margin-right: auto;
                    /* display: none; */
                    z-index: 50;
            
                }
                
                .navForDown{

                    display: none;
                    transition: ease-in-out 0.5s;
                    position: absolute;
                    top:20%;
                    right: 1%;
                    width: 40%;
                    height: 50vw;
                    flex-direction: column;
                    align-items: flex-start;
                    justify-content: space-evenly;
                    background-color: #000f1fd8;
                    margin-left: 30%;
                    margin-right: auto;
                    /* display: none; */
                    z-index: 50;
                }


                .navContent{
                    background-color: rgba(137, 43, 226, 0);
                
                }
                .btnNav{
                    /*background-color: red;*/
                    width: 60%;
                    height: 10%;
                    display:flex;
                    justify-content:flex-start;
                    margin-left:10%;
                    font-size:2.3vw;
                    
                    
                    
                    
                }
                
                .btnExitNavMobile{
                    display: block;
                    width: 20%;
                    align-self: flex-end;
                    position: absolute;
                    top: 0;
                    cursor: pointer;
                    transition: ease-in-out 0.5s;
                }
                .btnExitNavMobilForDown{
                    display: block;
                    width: 20%;
                    align-self: flex-end;
                    position: absolute;
                    top: 0;
                    cursor: pointer;
                    transition: ease-in-out 0.5s;
                }
                .notPrint{
                    display: none;
                }
                .activeNav{
                    display:flex;
                    transition: ease-in-out 0.5s;
                }

                .menuDerServiceForDown{
                    display: none;
                    flex-direction: column;
                    top: 100%;
                    right: 30%;
                    left: auto;
                    width: 50%;
                    height: 100%;
                    justify-content: space-evenly;
                    align-items: flex-start;
                    text-align:left;
                    z-index:70;
            
                }
                .menuDerService{
                    display: none;
                    flex-direction: column;
                    top: 100%;
                    right: 30%;
                    left: auto;
                    width: 50%;
                    height: 100%;
                    justify-content: space-evenly;
                    align-items: flex-start;
                    text-align:left;
                    z-index:70;
            
                }
                .menuDerServiceForDown{
                    display: none;
                    flex-direction: column;
                    top: 100%;
                    right: 30%;
                    left: auto;
                    width: 50%;
                    height: 100%;
                    justify-content: space-evenly;
                    align-items: flex-start;
                    text-align:left;
                    z-index:70;
            
                }
                .mds{
                    text-align:left;
                }
                .menuDerService{
                    display: none !important;
                }
               
                .btnService{
                    display:flex;
                    width:auto;
                    justify-content:flex-start;
                    align-items:center;
                    /*background-color: rgb(255, 143, 7);*/
                }
                .btnServiceForDown{
                    display:flex;
                    flex-direction:center;
                    width:auto;
                    text-align:center;
                    align-items:center;
                  
                    
                    
                }
                .arrowDownImg{
                    width:20px;
                    align-self:center;
                    margin-left:10px;
                    transition: transform 0.5s ease;
                }
                .btnService:hover{
                    color: rgb(101, 193, 255);
                    text-shadow: 2px 2px 20px rgb(8, 156, 255);
                }
                .btnServiceForDown:hover{
                    color: rgb(101, 193, 255);
                    text-shadow: 2px 2px 20px rgb(8, 156, 255);
                }
                .btnNav::after{
                    display: none!important;
                }
            }
            .'.$btnClic.'{
                color: rgb(101, 193, 255);
            }
            .rotation180 {
                transform: rotate(180deg);
            }
            </style>

';

    echo $navContent;
}
?>

