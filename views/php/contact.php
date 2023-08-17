<?php $page="service"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<style>
    body{
            display: flex;
        /* background-image: url("../images/bg.jpg"); */
        /* background-color:#010101; */
        background-color: #f5f8fb;
        /* background-color: #ff0000; */

        background-image: linear-gradient((to right, transparent 50%, #0a110e 50%, #000000a6));
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        justify-content: space-between;
        align-items: center;
        flex-direction: column;
        overflow-x: hidden;
        /* width: 100vw; */
    }
    .bg7
    {
        width: 90vw;
        height: 88vh;
        background-color:#ffffffc2;
        color: white;
        display: flex;
        flex-direction: row;
        margin-top:3% ;
        box-shadow: rgba(240, 240, 240, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;

    }
    .bg8
    {
        width: 90%;
        height: 80vh;
        background-color:#ffffffc2;
        color: white;
        display: flex;
        flex-direction: row;
        margin-top:3% ;
        box-shadow: rgba(240, 240, 240, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;

    }
    .content
    {
        display: flex;
    }

    .table
    {
        width: 100%;
    }
    
    .table h1 {
        font-size: 60px;
        padding-top: -5px;
        color: #129fdb;
    }
    .table h2 {
        font-size: 30px;
        color: #40484e;
    }
    
    .table p {
        font-size: 16px;
        color: #3d4445;
    }  

    .table3 {
        flex-basis: 47%;
        background-color: #ffffff; /* Couleur pour la colonne 1 */
        padding: 20px;
        box-sizing: border-box;
    }
    
    .table4 {
        padding-left: 40px;
        flex-basis: 40%;
        background-color: #ffffff;
        align-items: center;
    }

    .basContent
    {
        flex-basis: 15%;
        align-content: center;
        padding-top: 37%;
        background-color: rgba(11, 255, 27, 0);
        height: 10%;
        display:flex;
        justify-content: center;
    }

    button {
        background: linear-gradient(135deg, #ffffff, #2576b8);
        color: #ffffff;
        border: 2px solid #1395e6;
        top: 30px;
        padding: 10px 20px;
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
        background: linear-gradient(135deg, #ffffff, #205bc1);
        z-index: -1;
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
      }
      
      button:hover {
        background: linear-gradient(135deg, #a6b4cb, #ffffff);
        color: #157ed3;
      }
      
      button:hover::before {
        opacity: 1;
      }
      
    .imageContact {
        margin-left: 0%;
        margin-top: 20%;
    }
      
    .form {
        width: 70%;
        margin-left: 15%; 
        text-align: center;
        background-color: transparent;
        padding: 20px;
        border-radius: 5px;
    }
    
    .form h1 {
        font-size: 40px;
        margin-bottom: 10px;
        text-align: center;
    }
    
    .form h2 {
        font-size: 18px;
        margin-bottom: 10px;
        color: #007bff;
    }
    
    .form p {
        font-size: 20px;
        margin-bottom: 20px;
    }
    
    .form input {
        width: 100%;
        padding: 15px;
        margin-bottom: 10px;
        border: none; /* Supprime la bordure */
        border-bottom: 1px solid #ccc; /* Ajoute un soulignement */
      }
      
      .form button {
        background: linear-gradient(135deg, #ffffff, #007bff);
        color: #ffffff;
        border: 1px solid #007bff; /* Ajoute une bordure au bouton */
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 0px;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
        width: 100%; /* Ajuste la longueur du bouton pour qu'il s'adapte à la largeur du formulaire */
      }
      
      .form button:hover {
        background: linear-gradient(135deg, #007bff, #0056b3);
      }

        .sci {
            display: flex;
            justify-content: center;
            margin-top: 500px;
        }

        .iconMember{
            width: 30px;
            height: 30px;
            -o-transition: ease-in-out 0.5s;
            -webkit-transition: ease-in-out 0.5s;
            -moz-transition: ease-in-out 0.5s;
            -ms-transition: ease-in-out 0.5s;
            transition: ease-in-out 0.5s;
        
        }
        .iconMember:hover{
            background-color: rgb(49, 232, 180);
            box-shadow: 0px 0px 50px rgb(49, 232, 180);
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
            -ms-border-radius: 100%;
            -o-border-radius: 100%;
        }

        @media screen and (max-width: 768px) {
            .content {
                flex-direction: column;
                align-items: center;
            }
            
            .form {
                width: 90%;
                margin: 0 auto; 
                padding: 20px 0;
            }
            
            .bg8 {
                margin-top: 10px;
                padding: 20px;
                width: 100%;
                height: auto;
                flex-direction: column;
                align-items: center;
            }

            .table3 {
                flex-direction: column;
                align-items: center;
            }

            .table4 {
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }

            .imageContact {
                padding-top: 5px;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .basContent {
                padding-top: 15px;
                align-items: center;
            }

            .map {
                margin: 1px;
                align-items: center;
                justify-content: center;
            }

            .bgCmUp {
                flex-direction: column;
                align-items: center;
            }
        }

    
        @media screen and (max-width: 480px) {
           
            
            .form {
                width: 100%; /* Adjust the form width for even smaller screens */
            }
    
            .table1 h1 {
                font-size: 30px;
            }
        }

        .bgCmUp{
        display:flex;
        align-items:center;
        justify-content:space-evenly;
        width:100vw;
        height:80vh;
        background-color: #000913;
        flex-direction: column;
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
            width:68%;
            height:60%;
            height:auto;
            /* background-color: blue; */
            
        }
        .map{
            left: 0px;
        }
        .contact{
            text-align: center;
            color:#129fdb;
            font-size: 30px;
        }

        .contactC{
            width: 100%;
            background-color: rgba(11, 255, 27, 0);
            height: 10%;
            display: flex;
            justify-content: flex-start;
            

        }
        .contactI{
            width: 30%;
            height: auto;
            margin-left: 3%;
            cursor: pointer;
        }
        .contactI:hover{
            background-color: rgba(0, 125, 228, 0.475);
            border-radius: 50%;
            box-shadow: 3px 3px 23px 3px rgb(0, 125, 228);
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            -o-border-radius: 50%;
            transform: translateY(-2%);
            -webkit-transform: translateY(-2%);
            -moz-transform: translateY(-2%);
            -ms-transform: translateY(-2%);
            -o-transform: translateY(-2%);
        }
        .contactI.square:hover{
            border-radius: 20%;
            -webkit-border-radius: 20%;
            -moz-border-radius: 20%;
            -ms-border-radius: 20%;
            -o-border-radius: 20%;
        }

        .animate-charcter
        {
        text-transform: uppercase;
        background-image: linear-gradient(-225deg, #0B54CB,#00aacc, #00cc66,#BCF925, #ffffff);
        background-size: auto auto;
        background-size: 200% auto;
        color: #fff;
        background-clip: text;
        text-fill-color: transparent;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: textclip 2s linear infinite;
        display: inline-block;
            font-size: 50px;
            font-family: Arial, sans-serif;
        }

        @keyframes textclip {
        to {
            background-position: 200% center;
        }
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
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d464.1776614757051!2d47.088640509774436!3d-21.451980166477185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21e7bff69bbf8373%3A0xf3631d1eec10c67e!2sBloc%20Scacco%20ISAHA!5e0!3m2!1sfr!2smg!4v1692258682142!5m2!1sfr!2smg" width="1500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                <h3 class="animate-charcter">RETROUVEZ-NOUS ICI</h3>
                </div>
            </div>
        </div>
    </div>
    
    <div class="bg8">
        <div class="content">
            <div class="table table3">
                <div class="form">
                    <h1>Contact Us</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae magna nec tortor elementum aliquet. Curabitur dictum justo vel tellus aliquam, vel suscipit odio vehicula. Donec a metus vel neque ullamcorper commodo non ut libero.</p>
                    <input type="text" placeholder="NAME">
                    <input type="text" placeholder="EMAIL">
                    <input type="text" placeholder="MESSAGE">
                    <button type="button" class="button">SEND</button>
                </div>
                
                
            </div>
            <div class="basContent">
                <img class="contactI round" src="../images/fb2.png" width="40vh" height="40vh" alt="icone facebook">
                <img class="contactI square" src="../images/insta2.png"  width="400px" height="400px" alt="icon instagram">
                <img class="contactI square" src="../images/linkedin2.png" width="400px" height="400px" alt="icone gmail">
                
            </div>
            <div class="table table4">
                <div class="imageContact">
                    <img src="../images/Contact1.png" width="400px" height="400px" alt="">
                </div>          
            </div>
            
        </div>
        
    </div>
           
    
    <script src="../js/serviceBtn1.js"></script>
    <script src="../js/btnNavigationForDown.js"></script>
    <script src="../js/btnNavigation.js"></script>   
    <script src="../js/backToTop.js"></script>
    <script src="../js/dropDownMenuDown.js"></script>
    <script src="../js/dropDownMenuUp.js"></script>

    <?php 
        // button back to top
        require_once "backToTop.php";
        // footer
        require_once "footer.php";
    ?>

</html>
