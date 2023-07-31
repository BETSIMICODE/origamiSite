let btnExitNavMobile1=document.querySelector(".btnExitNavMobilForDown");
let btnNavMobile1=document.querySelector(".btnNavMobileForDown");
let nav1=document.querySelector(".navForDown");
btnNavMobile1.addEventListener('click',()=>{
    btnNavMobile1.classList.add("notPrint");
    nav1.classList.add("activeNav");
})
btnExitNavMobile1.addEventListener('click',()=>{
    nav1.classList.remove("activeNav");
    btnNavMobile1.classList.remove("notPrint");
})