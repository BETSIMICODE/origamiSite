<?php if ($page=="home"){
    $srcImg="views/images/";
}else{
    $srcImg="../images/";
} 


?>


<footer class="footer-distributed">
        <div class="footerUp">
            <div class="footer-left">
                <img class="logo1" src="<?php echo $srcImg; ?>logo.png" alt="Logo OrigamiTech">
                
            </div>
            <div class="footer-center">
                <div class="ftc ftcFirst">
                    <img class="logoFoot" src="<?php echo $srcImg; ?>address3.png" alt="">
                    <p class="ftcPara ftcParaChild1"><span>BLOC SCA CCO Porte 05</span> FIANARANTSOA ISAHA</p>
                </div>
                <div class="ftc ftcMidl">
                    <img class="logoFoot" src="<?php echo $srcImg; ?>phone3.png" alt="">
                    <p class="ftcPara">034 12 008 46</p>
                </div>
                <div class="ftc ftcMidl">
                    <img class="logoFoot lastLF" src="<?php echo $srcImg; ?>mail3.png" alt="">
                    <p class="ftcPara"><a href="mailto:support@company.com">origamiTech@origami.mg</a></p>
                </div>
            </div>
            <div class="footer-right">
                <p class="footer-company-about">
                    <span>A propos</span>
                    Origami Tech est une entreprise multiservice qui représente votre image.  
                </p>
                <div class="footer-icons">
                    <img class="contactIcone round contactIconeFoot" src="<?php echo $srcImg; ?>fb.png" alt="icone facebook">
                    <img class="contactIcone square contactIconeFoot" src="<?php echo $srcImg; ?>lkdin.png" alt="icone gmail">
                </div>
            </div>
        </div>
        <div class="footerDown">
            <p class="footer-company-name"> ©OrigamiTech 2023</p>

        </div>
    </footer>
    <style>
        /* same for all */
        .contactIcone{
            width: 3%;
            height: auto;
            margin-left: 3%;
            cursor: pointer;
        }
        .contactIcone:hover{
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
        .contactIcone.square:hover{
            border-radius: 20%;
            -webkit-border-radius: 20%;
            -moz-border-radius: 20%;
            -ms-border-radius: 20%;
            -o-border-radius: 20%;
        }
        .contactIcone.square:hover{
            border-radius: 20%;
            -webkit-border-radius: 20%;
            -moz-border-radius: 20%;
            -ms-border-radius: 20%;
            -o-border-radius: 20%;
        }


        @media screen and (max-width:1000px) {
            .contactIcone{
            width: 6%;
            margin-left: 3%;
            }
        }


        
        .footer-distributed{
            background: rgb(19, 19, 32);
            background-image: linear-gradient(#032345, #021021, #000810);
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
            box-sizing: border-box;
            width: 100vw;
            height: auto;
            text-align: left;
            font: bold 16px sans-serif;
            padding: 20px;
            margin-top: 7%;
            margin-bottom: -1%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

        }
        .footerUp{
            width: 100%;
            height: 90%;
            /* background-color: red; */
            display: flex;
            align-items: center;

        }
        .footerDown{
            width: 100%;
            height: 10%;
            /* background-color: rgb(0, 255, 98); */
            display: flex;
            align-items: center;
            justify-content: center;
        }


        /* Footer left */

        .footer-distributed .footer-left{
            width: 36%;
            display: flex;
            flex-direction: column;
            /* background-color: red; */

        }
        .footer-distributed .footer-right{
            width: 32%;

        }
        .footer-distributed .footer-center{
            width: 32%;
        }
        /* The company logo */
        .logo1{
            width: 30vw;
            height: auto;
            /* background-color: blue; */
        }


        /* Footer links */

        .footer-distributed .footer-links{
            color:  #ffffff;
            margin: 20px 0 12px;
            padding: 0;
        }


        .footer-distributed .footer-company-name{
            color:  rgb(196, 196, 196);
            font-size: 14px;
            font-weight: normal;
            align-self: center;
            
        }

        /* Footer Center */



        .ftc{
            display: flex;
            justify-content: flex-start;
            align-items: center;

        }
        .ftcPara{
        margin-left: 50px;
        }
        .ftcMidl{
            margin-top: 1%;
        }
        .footer-distributed .footer-center p{
            
            color: #ffffff;
            font-weight:400;
            vertical-align: middle;
            margin:0;
            margin-left: 5%;
            
        }

        .footer-distributed .footer-center p span{
            display:block;
            font-weight: normal;
            font-size:14px;
            line-height:2;
        }

        .footer-distributed .footer-center p a{
            color:  lightseagreen;
            text-decoration: none;;
        }

        .footer-distributed .footer-links a:before {
        content: "|";
        font-weight:300;
        font-size: 20px;
        left: 0;
        color: #fff;
        display: inline-block;
        padding-right: 5px;
        }

        .footer-distributed .footer-links .link-1:before {
        content: none;
        }

        /* Footer Right */



        .footer-distributed .footer-company-about{
            line-height: 20px;
            color:  #92999f;
            font-size: 13px;
            font-weight: normal;
            margin: 0;
        }

        .footer-distributed .footer-company-about span{
            display: block;
            color:  #ffffff;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .footer-distributed .footer-icons{
            display: flex;
            margin-top: 25px;
            
        }


        .contactIconeFoot.round{
            margin-left: -1%;
            
        }
        .contactIconeFoot{
            width:30px;
        }




        @media (max-width: 880px) {

            .footer-distributed{
                font: bold 14px sans-serif;
            }

            .footerUp{
                flex-direction: column;
                justify-content: center;
                /* background-color: brown; */
                width: 100%;
            }
            .footer-center{
                width: 100%;
                /* background-color: aqua; */
            }
            .footer-left{
                width: 100%;
                /* background-color: aqua; */
            }
            .footer-right{
                width: 100%;
                /* background-color: aqua; */
                margin-top: 3%;
            }
            .footer-company-about{
                display: none;
            }
            .ftc{
                flex-direction: column;
                align-items: center;
                justify-content: center;
                margin-top: 30px;
                /* background-color: red; */
            
            }
            .ftcPara{
                /* background-color: blue; */
                flex-shrink: 0;
                width: auto;
                flex-wrap: nowrap;
                width: 200%;
                text-align: center;
                margin-left: 0px;

            }
            .ftcPara a{
                /* background-color: red; */
                text-align: center;
            }
            .ftcFirst{
                margin-top: 0;
            }
            
            .footer-icons{
                display: flex;
                margin-top: 40px;
                justify-content: space-evenly;
                /* background-color: green; */
                
                
            }
            .ftcParaChild1{
                width: 40vw;
                text-align: center;
            }
            .contactIconeFoot{
                width: 40px !important;
            }
            .logo1{
                width: 50vw;
                height: auto;
                /* background-color: blue; */
                align-self: center;
            }
            .titleService{
            
                font-size: 17px;
            }

        }
    </style>
