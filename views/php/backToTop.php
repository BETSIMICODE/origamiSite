<?php if ($page=="home"){
    $srcImg="views/images/";
}else{
    $srcImg="../images/";
} 
?>

<div class="backToTop" id="backToTop">
        <img src="<?php echo $srcImg; ?>up.png" alt="">
</div>
<style>
        
/* button back to top */
.backToTop {
    position: fixed;
    bottom: 5vw;
    right: 1vw;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border:2px solid #007BFF;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    opacity: 0;
    transition: opacity 0.3s ease;
    z-index: 40;
    transition: ease-in-out 0.7s;
    -webkit-transition: ease-in-out 0.5s;
    -moz-transition: ease-in-out 0.7s;
    -ms-transition: ease-in-out 0.7s;
    -o-transition: ease-in-out 0.7s;
}

.backToTop img {
    width: 30px;
    height: 30px;
    fill: #FFFFFF;
}

.backToTop.active {
    opacity: 1;
}
.backToTop:hover{
    box-shadow: 0px 0px 50px rgb(8, 156, 255);
    background-color: rgb(8, 156, 255);
}
</style>
