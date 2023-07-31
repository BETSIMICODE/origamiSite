let btnExitNavMobile33=document.querySelector(".btnExitNavMobile");
let btnNavMobile33=document.querySelector(".btnNavMobile");
let nav33=document.querySelector(".nav");
btnNavMobile33.addEventListener('click',()=>{
    // alert("cliquer");
    btnNavMobile33.classList.add("notPrint");
    nav33.classList.add("activeNav");
})
btnExitNavMobile33.addEventListener('click',()=>{
    nav33.classList.remove("activeNav");
    btnNavMobile33.classList.remove("notPrint");
})